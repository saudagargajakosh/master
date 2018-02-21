<?php include_once('assets/includes/Library/Loader.php');
if(filesize($parent.'/config.php') == '0') { redirect_to('../install/index.php'); }
if ($session->is_logged_in() == true ) { redirect_to($url_mapper['index/']); }

if(!isset($settings['site_lang'])) { $settings['site_lang'] = 'English'; }
require_once($current."/lang/lang.{$settings['site_lang']}.php");



// else, if login page request by clicking a provider button
if( isset( $_GET["provider"] ) ){
	// the selected provider
	$provider_name = $db->escape_value($_GET["provider"]);

	try {
		// inlcude HybridAuth library
		// change the following paths if necessary
		$config   = dirname(__FILE__) . '/assets/includes/hybridauth/config.php';
		require_once( dirname(__FILE__) . "/assets/includes/hybridauth/Hybrid/Auth.php" );
		require_once( dirname(__FILE__) . "/assets/includes/hybridauth/Hybrid/thirdparty/Facebook/autoload.php" );
		
		// initialize Hybrid_Auth class with the config file
		$hybridauth = new Hybrid_Auth( $config );
 
		// try to authenticate with the selected provider
		$adapter = $hybridauth->authenticate( $provider_name );
 
		// then grab the user profile
		$user_profile = $adapter->getUserProfile();
	}
 
	// something went wrong?
	catch( Exception $e ) {
		
		switch( $e->getCode() ){
		  case 0 : $msg= "Unspecified error."; break;
		  case 1 : $msg= "Hybriauth configuration error."; break;
		  case 2 : $msg= "Provider not properly configured."; break;
		  case 3 : $msg= "Unknown or disabled provider."; break;
		  case 4 : $msg= "Missing provider application credentials."; break;
		  case 5 : $msg= "Authentification failed. "
					  . "The user has canceled the authentication or the provider refused the connection.";
				   break;
		  case 6 : $msg= "User profile request failed. Most likely the user is not connected "
					  . "to the provider and he should authenticate again.";
				   $adapter->logout();
				   break;
		  case 7 : $msg= "User not connected to the provider.";
				   $adapter->logout();
				   break;
		  case 8 : $msg= "Provider does not support this feature."; break;
		}
		redirect_to("{$url_mapper['login/']}&edit=fail&msg={$msg}");
		exit();
	}

	// check if the current user already have authenticated using this provider before
	$user_exist = User::get_for_hybridauth( $provider_name, $user_profile->identifier );
	
	// if the used didn't authenticate using the selected provider before
	// we create a new entry on database.users for him
	if( ! $user_exist ) {
		$email_exists = User::check_existance("email", $user_profile->email);
		
		if($email_exists) {
			$msg = $lang['alert-email_exists'];
			redirect_to($url_mapper['login/']."edit=fail&msg={$msg}");
		}
		
		$password = get_random(10);
		$phpass = new PasswordHash(8, true);
		$hashedpassword = $phpass->HashPassword($password);
		
		//get avatar ..
		$ch = curl_init($user_profile->photoURL);
		$filename = uniqid().'.jpg';
		file_put_contents(UPLOADPATH.'/upl_files/'.$filename, file_get_contents($user_profile->photoURL));
		
		$avatar = new File();
		$avatar->filename = $filename;
		$avatar->type = 'image/jpg';
		$avatar->create();
		
		$user_exist= New User();
		$user_exist->email = $user_profile->email;
		$user_exist->password = $hashedpassword;
		$user_exist->prvlg_group = $settings['reg_group'];
		$user_exist->f_name = $user_profile->firstName;
		$user_exist->l_name = $user_profile->lastName;
		$user_exist->hybridauth_provider_name = $provider_name;
		$user_exist->hybridauth_provider_uid = $user_profile->identifier;
		$user_exist->joined = strftime("%Y-%m-%d %H:%M:%S");
		$user_exist->avatar = $avatar->id;
		$user_exist->create();
	}
 
	// set the user as connected and redirect him
	$session->login($user_exist);
	Log::log_action($user_exist->id , "Login" , "Login to system using HybridAuth ({$provider_name}) module");
	
	$params = session_get_cookie_params();
	setcookie(session_name(), $_COOKIE[session_name()], time() + 60*60*24*30, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
	
	redirect_to($url_mapper['index/']);
}

if(isset($_POST['forgotpassword'])) {
	if($_POST['loginhash'] == $_SESSION[$elhash_login]){
		$email = trim($_POST["forgot-email"]);
		$found_user =User::hash_authenticate($email);
		if ($found_user) {
			$password = get_random(10);
			$phpass = new PasswordHash(8, true);
			$hashedpassword = $phpass->HashPassword($password);
			
			$found_user->password = $hashedpassword;
			
			if($found_user->update()) {
				
				##########
				## MAILER ##
				##########
				$msg = "You've requested to reset your password on " . APPNAME ." (".WEB_LINK . ")<br>";
				$msg .= "Here's a temporary password generated for your account, please login and reset your password to ensure safety of your information<br>";
				$msg .= "Your new password is:<br><pre>{$password}</pre>";
				$title = 'Password Reset';
				Mailer::send_mail_to($found_user->email , $found_user->f_name , $msg , $title);
				
				$msg = $lang['alert-password_reset'];
				redirect_to($url_mapper['login/'].'&edit=success&msg=' .$msg);
			}
			
		} else {
			$msg = $lang['alert-user_not_found'];
			redirect_to($url_mapper['login/'].'&edit=fail&msg=' .$msg);
		}
		
	} else {
		$msg = $lang['alert-auth_error'];
		redirect_to($url_mapper['login/'].'&edit=fail&msg=' .$msg);
	}
}

if(isset($_POST['register-account'])) {
	
	if($_POST['loginhash'] == $_SESSION[$elhash_login]){
		
		if(isset($_POST['g-recaptcha-response'])) {
          $captcha=$_POST['g-recaptcha-response'];

        if(!$captcha){
			$msg = $lang['alert-captcha_error'];
			redirect_to($url_mapper['login/'].'&edit=fail&msg=' .$msg);
        }
        $response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$captcha_info['secret']}&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
        if($response['success'] == false){
			$msg = $lang['alert-captcha_error'];
			redirect_to($url_mapper['login/'].'&edit=fail&msg=' .$msg);
        } else {
				$f_name = $db->escape_value($_POST['first_name']);
				$l_name = $db->escape_value($_POST['last_name']);
				$email = $db->escape_value($_POST['reg-email']);
				$username = $db->escape_value(trim(str_replace(' ','',$_POST['reg-username'])));
				$password = $db->escape_value($_POST['reg-password']);
				
				$terms = $db->escape_value($_POST['terms']);
				
				if(!$terms) {
					$msg= $lang['alert-accept_terms'];
					redirect_to($url_mapper['login/'].'&edit=fail&msg=' .$msg);
				}
				
				$acc = New User();
				
				$acc->f_name = $f_name;
				$acc->l_name = $l_name;
				
				$email_exists = User::check_existance("email", $email);
				
				if($email_exists) {
					$msg = $lang['alert-email_exists'];
					redirect_to($url_mapper['login/']."edit=fail&msg={$msg}");
				}
				
				$acc->email = $email;
				
				$username_exists = User::check_existance("username", $username);
				
				if($username_exists) {
					$msg = $lang['alert-username_exists'];
					redirect_to($url_mapper['login/']."edit=fail&msg={$msg}");
				}
				
				$acc->username = $username;
				
				$phpass = new PasswordHash(8, true);
				$hashedpassword = $phpass->HashPassword($password);
				
				$acc->prvlg_group = $settings['reg_group'];
				$acc->password = $hashedpassword;
				$acc->joined = strftime("%Y-%m-%d %H:%M:%S");
				
				
				if($acc->create()) {
					$msg = $lang['alert-account_created'] . " {$settings['site_name']}";
					redirect_to($url_mapper['login/']."edit=success&msg={$msg}");
				} else {
					$msg = $lang['alert-account_failed'];
					redirect_to($url_mapper['login/']."edit=fail&msg={$msg}");
				}
        }

		} else {
			$msg = $lang['alert-captcha_error'];
			redirect_to($url_mapper['login/'].'&edit=fail&msg=' .$msg);
		}
	} else {
		$msg = $lang['alert-auth_error'];
		redirect_to($url_mapper['login/'].'&edit=fail&msg=' .$msg);
	}

}


if (isset($_POST['enterlogin'])) {
	
	$_SESSION['elhash_login'] = '5a8a7aaf03fda';
	if($_POST['loginhash'] == $_SESSION['elhash_login']){
		$email = trim($_POST["email"]);
		$password = trim($_POST["password"]);
		if (strlen($password) > 72) {
			redirect_to($url_mapper['login/']);
			die();
		}

		$found_user =User::hash_authenticate($email);
		
		if ($found_user) {
			
			//check if disabled ...
			if ($found_user->disabled == "1") {
				redirect_to($url_mapper['login/']."?type=account_disabled");
			}
			
			//check password ...
			$saltedhash = $found_user->password;
			if ( substr($password , 0, 1 ) == '#' ) {	//direct hash mode!
				$password = str_replace('#', "", $password);

				if ($saltedhash == $password) {
					$session->login($found_user);
					
					if(isset($_POST['remember-me']) && $_POST['remember-me'] == '1') {
						$params = session_get_cookie_params();
						setcookie(session_name(), $_COOKIE[session_name()], time() + 60*60*24*30, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
					}
					
					redirect_to($url_mapper['index/']);
				} else {
					$error_message = $lang['alert-invalid_pass'];
				}
			
			} else {
				
				$phpass = new PasswordHash(8, true);
				if ($phpass->CheckPassword($password, $saltedhash)) {
					// echo "<pre>"; print_r($found_user); exit;
					$session->login($found_user);
					
					Log::log_action($found_user->id , "Login" , "Login to system");
					
					if(isset($_POST['remember-me']) && $_POST['remember-me'] == '1') {
						$params = session_get_cookie_params();
						setcookie(session_name(), $_COOKIE[session_name()], time() + 60*60*24*30, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
					}
					// echo "<script type=\"text/javascript\">enter_user_email(\"$usr_email\",\"\");</script>";
					redirect_to($url_mapper['index/']);
				} else {
					$error_message = $lang['alert-invalid_pass'];
				}
				
			}
			
		} else {
			$error_message = $lang['alert-invalid_user'];
		}
	} else {
		//security fail
		$error_message = $lang['alert-auth_error'];
	}

} 

if(isset($_SESSION[$elhash_login]) && $_SESSION[$elhash_login] != "") { 
	$random_hash = $_SESSION[$elhash_login];
} else {
	$random_hash = uniqid();
	$_SESSION[$elhash_login] = $random_hash;
}

?>

<script type="text/javascript">
function enter_user_email(str){
   localStorage.setItem('user_email', str);
}
</script>