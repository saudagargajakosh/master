<?php require_once('assets/includes/route.php');
$title="Ask a question!"; 
require_once('assets/includes/header.php');

$edit_mode = false;
$title = ''; $title_slug = ''; $content = ''; $anonymous = '';
if(isset($_POST['title']) && isset($_POST['hash']) ) {
	if($_POST['hash'] == $_SESSION[$elhash] ) {
		$title = $_POST['title'];
		//if(!strpos($title,'?')) { //This is search!
			//redirect_to($url_mapper['search/'].$title);
		//}
		$title_slug = slugify($title);
	}
}

if (isset($_GET['data']) && $_GET['data'] != '' && isset($_GET['type']) && $_GET['type'] != '' && isset($_GET['hash']) && $_GET['hash'] != '' ) {
	
	if($_GET['hash'] != $_SESSION[$elhash] ) {
		redirect_to($url_mapper['index/']);
	}
	
	switch($_GET['type']) {
		case 'update' :
			$edit_mode = true;
			$data = $_GET['data'];
			if(URLTYPE == 'id') {
				$q = Question::get_specific_id($data);
			} else {
				$q = Question::get_slug($data);
			}
			
			if(!$current_user->can_see_this("questions.update",$group) ) {
				$msg = $lang['alert-restricted'];
				if(URLTYPE == 'slug') {$url_type = $q->slug;} else {$url_type = $q->id;}
				redirect_to($url_mapper['questions/view'].$url_type."&edit=fail&msg={$msg}");
			}
			
			if($q) {
				
				if($current_user->prvlg_group != '1' && $q->user_id != $current_user->id ) {
					$msg = $lang['alert-restricted'];
					if(URLTYPE == 'slug') {$url_type = $q->slug;} else {$url_type = $q->id;}
					redirect_to($url_mapper['questions/view'].$url_type."&edit=fail&msg={$msg}");
				}
				
				$title = strip_tags($q->title);
				$title_slug = $q->slug;
				$content = str_replace('\\','',$q->content);
				$content = str_replace('<script','',$content);
				$content = str_replace('</script>','',$content);
				if($q->anonymous) {
					$anonymous = " checked";
				}
			}
		break;
		
		case 'delete' :
			
			$data = $_GET['data'];
			if(URLTYPE == 'id') {
				$q = Question::get_specific_id($data);
			} else {
				$q = Question::get_slug($data);
			}
			
			if(!$current_user->can_see_this("questions.delete",$group)) {
				$msg = $lang['alert-restricted'];
				if(URLTYPE == 'slug') {$url_type = $q->slug;} else {$url_type = $q->id;}
				redirect_to($url_mapper['questions/view'].$url_type."&edit=fail&msg={$msg}");
			}
			
			if($q) {
				
				if($current_user->prvlg_group != '1' && $q->user_id != $current_user->id ) {
					$msg = $lang['alert-restricted'];
					if(URLTYPE == 'slug') {$url_type = $q->slug;} else {$url_type = $q->id;}
					redirect_to($url_mapper['questions/view'].$url_type."&edit=fail&msg={$msg}");
				}
				
				if($q->delete()) {
					$answers = Answer::get_answers_for($q->id,"");
					if($answers) {
						foreach($answers as $a) {
							$a->delete();
						}
					}
					$msg = $lang['alert-delete_success'];
					redirect_to($url_mapper['questions/create']."&edit=success&msg={$msg}");
				} else {
					$msg = $lang['alert-delete_failed'];
					redirect_to($url_mapper['questions/create']."&edit=fail&msg={$msg}");
				}
			}
		break;
	}
}

if(isset($_POST['add_q'])) {
	if($_POST['hash'] == $_SESSION[$elhash]){
		unset($_SESSION[$elhash]);
		
		if(!$current_user->can_see_this("questions.create",$group) ) {
			$msg = $lang['alert-restricted'];
			redirect_to($url_mapper['questions/create']."&edit=fail&msg={$msg}");
		}
		
		/*if(isset($_POST['g-recaptcha-response'])) {
          $captcha=$_POST['g-recaptcha-response'];

        if(!$captcha) {
			$msg = "Captcha Error! please try again";
			redirect_to($url_mapper['questions/create']."&edit=fail&msg={$msg}");
          exit;
        }
        $response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$captcha_info['secret']}&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
        if($response['success'] == false) {
			$msg = "Captcha Error! please try again";
			redirect_to($url_mapper['questions/create']."&edit=fail&msg={$msg}");
        } else {*/
			$title = profanity_filter($_POST['title']);
			// $category_id = $_POST['industry_id'];
			$cat_id = implode(',', $_POST['industry_id']);
			// echo "<pre>"; print_r($cat_id); exit;
			$partnr_id = implode(',',$_POST['partner_id']);
			$funding = profanity_filter($_POST['funding']);
			$pincode = profanity_filter($_POST['pincode']);
			$skills_id = $_POST['skill_id'];
			// $mat_id = $_POST['material_id'];
			// $tool_id = $_POST['tool_id'];
			// $microf_id = $_POST['microf_id'];
			$slug = profanity_filter($_POST['slug']);
			$slug = slugify($slug);
			
			$pincode_id = Pincodes::get_specific_pincode($pincode);
			$pincodid = $pincode_id['PINCODE'];
			$slug_checker = Question::check_slug($slug);
			if($slug_checker) {
				$slug .= "-". (count($slug_checker) +1);
			}
			
			
			$tags = explode(',',$_POST['tags']);
			$tagsid = array();
			foreach($tags as $k => $v) {
				$v = profanity_filter($v);
				$v = str_replace('?' , '' , $v);
				$actualtag = Tag::find_exact($v , 'name' , 'LIMIT 1');
				if($actualtag) {
					$actualtag = $actualtag[0];
					$actualtag->used += 1;
					$actualtag->update();
					$tagsid[] = $actualtag->id;
					//unset($tags[$k]);
				} else {
					if($v !='') {
						$t = new Tag();
						$t->name = $v;
						$t->used = 1;
						if(empty($t->follows))
						{
							$t->follows = 0;
						}
						if(empty($t->description))
						{
							$t->description = 0;
						}
						if(empty($t->avatar))
						{
							$t->avatar = 0;
						}
						if(!empty($t->deleted))
						{
							$t->deleted = 0;
						}
						$t->create();
						$t_id= $t->id;
						$tagsid[] = $t_id;
						//$tags[] = $v;
					}
				}
			}
			
			$content = profanity_filter($_POST['content']);
			$published = false;
			
			$q = New Question();
			$q->user_id = $current_user->id;
			$q->title = $title;
			$q->slug = $slug;
			$q->created_at = strftime("%Y-%m-%d %H:%M:%S" , time());
			$q->feed = implode(',' , $tags);
			$q->content = $content;
			$q->cat_id = $cat_id;
			$q->partnr_id = $partnr_id;
			$q->funding = $funding;
			$q->pincode = $pincodid;
			$q->skill_ids = $skills_id;
			
			unset($q->id);
			if(empty($q->likes))
			{
				$q->likes = 0;
			}
			if(empty($q->dislikes))
			{
				$q->dislikes = 0;
			}
			if(empty($q->answers))
			{
				$q->answers = 0;
			}
			if(empty($q->follows))
			{
				$q->follows = 0;
			}
			if(empty($q->views))
			{
				$q->views = 1;
			}
			if(empty($q->anonymous))
			{
				$q->anonymous = 0;
			}
			// $q->tool_id = $tool_id;
			// $q->microf_id = $microf_id;
			
			if(isset($_POST['anonymous']) && $_POST['anonymous'] == '1' ) {
				$q->anonymous = "1";
			}
			
			if($settings['q_approval'] == '0' || $settings['q_approval'] == '1' && $current_user->prvlg_group == '1' || $settings['q_approval'] == '1' && $current_user->can_see_this("questions.power",$group) ) {
				$q->published = 1;
				$published = true;
			}
			
			if($q->create()) {
				###############
				## FOLLOW NOTIF ##
				###############
				if(URLTYPE == 'slug') {$url_type = $q->slug;} else {$url_type = $q->id;}
				$notif_link = $url_mapper['questions/view'].$url_type;
				
				//User followers
				$notif_msg = "({$current_user->f_name}) Posted a new Question ({$title})";
				$user_followers = FollowRule::get_subscriptions('user',$current_user->id , 'obj_id' , "" );
				// echo "<pre>"; print_r($user_followers); exit;
				if($user_followers) {
					foreach($user_followers as $uf) {
						$notif_user = $uf->user_id;
						$notif = Notif::send_notification($notif_user,$notif_msg,$notif_link);
						// echo "<pre>"; print_r($notif); exit;
						##########
						## MAILER ##
						##########
						$msg = $notif_msg . "<br>Check it out at " . $notif_link;
						$title = 'New Post';
						$receiver = User::get_specific_id($notif_user);
						if($receiver && is_object($receiver) && $notif_user != $current_user->id ) {
							Mailer::send_mail_to($receiver->email , $receiver->f_name , $msg , $title);
						}
					}
				}
				
				//Feed followers
				if(!empty($tagsid)) {
					foreach($tagsid as $k => $v) {
						$tag = Tag::get_specific_id($v);
						if($tag) {
							$notif_msg = "New Question posted Regarding ({$tag->name})";
							$tag_followers = FollowRule::get_subscriptions('tag', $tag->id , 'obj_id' , "" );
							if($tag_followers) {
								foreach($tag_followers as $tf) {
									$notif_user = $tf->user_id;
									$notif = Notif::send_notification($notif_user,$notif_msg,$notif_link);
									##########
									## MAILER ##
									##########
									$msg = $notif_msg . "<br>Check it out at " . $notif_link;
									$title = 'New Post';
									$receiver = User::get_specific_id($notif_user);
									if($receiver && is_object($receiver) && $notif_user != $current_user->id ) {
										Mailer::send_mail_to($receiver->email , $receiver->f_name , $msg , $title);
									}
								}
							}
						}
					}
				}
				
				
				###############
				
				$msg = $lang['alert-create_success'];
				if($published == false) {
					$msg .= $lang['questions-pending'];
				}
				if(URLTYPE == 'slug') {$url_type = $q->slug;} else {$url_type = $q->id;}
				redirect_to($url_mapper['questions/view']."{$url_type}&edit=success&msg={$msg}");
			} else {
				$msg = $lang['alert-create_failed'];
				redirect_to($url_mapper['questions/create']."&edit=fail&msg={$msg}");
			}
			
        /*}

		} else {
			redirect_to($url_mapper['questions/create']);
		}*/
	} else {
		redirect_to($url_mapper['questions/create']);
	}
}


if(isset($_POST['update_q'])) {
	
	if($_POST['hash'] == $_SESSION[$elhash]){
		
		if(!$current_user->can_see_this("questions.update",$group) ) {
			$msg = $lang['alert-restricted'];
			redirect_to($url_mapper['questions/create']."&edit=fail&msg={$msg}");
		}
		
		$q_id = $_POST['q_id'];
		
		if(!Question::check_id_existance($q_id)) {
			redirect_to($url_mapper['index/']);
		}
		
		$q = Question::get_specific_id($q_id);
		
		if($current_user->prvlg_group != '1' && $q->user_id != $current_user->id ) {
			$msg = $lang['alert-restricted'];
			if(URLTYPE == 'slug') {$url_type = $q->slug;} else {$url_type = $q->id;}
			redirect_to($url_mapper['questions/view'].$url_type."&edit=fail&msg={$msg}");
		}
		
		/*if(isset($_POST['g-recaptcha-response'])) {
          $captcha=$_POST['g-recaptcha-response'];

        if(!$captcha) {
			$msg = "Captcha Error! please try again";
			if(URLTYPE == 'slug') {$url_type = $q->slug;} else {$url_type = $q->id;}
			redirect_to($url_mapper['questions/update']."{$url_type}&edit=fail&msg={$msg}");
          exit;
        }
        $response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Ley3goUAAAAAF0-AvQ2Tjm9qIgB26Ngs050mXfd&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
        if($response['success'] == false) {
			$msg = "Captcha Error! please try again";
			if(URLTYPE == 'slug') {$url_type = $q->slug;} else {$url_type = $q->id;}
			redirect_to($url_mapper['questions/update']."{$url_type}&edit=fail&msg={$msg}");
        } else {*/
			// $title = profanity_filter($_POST['title']);
			// $slug = profanity_filter($_POST['slug']);
			// $slug = slugify($slug);
			
			$title = profanity_filter($_POST['title']);
			// $category_id = $_POST['industry_id'];
			$cat_id = implode(',', $_POST['industry_id']);
			// echo "<pre>"; print_r($cat_id); exit;
			$partnr_id = implode(',',$_POST['partner_id']);
			$funding = profanity_filter($_POST['funding']);
			$pincode = profanity_filter($_POST['pincode']);
			// $mat_id = $_POST['material_id'];
			// $tool_id = $_POST['tool_id'];
			// $microf_id = $_POST['microf_id'];
			$slug = profanity_filter($_POST['slug']);
			$slug = slugify($slug);
			
			$slug_checker = Question::check_slug_except($slug , $q_id);
			if($slug_checker) {
				$slug .= "-". (count($slug_checker) +1);
			}
			
			
			$tags = explode(',',$_POST['tags']);
			$newtags = array();
			foreach($tags as $k => $v) {
				$v = str_replace('?' , '' , $v);
				$tag = Tag::get_tag($v);
				if($tag) {
					$tag->used += 1;
					$tag->update();
				} else {
					if($v !='') {
						$t = new Tag();
						$t->name = profanity_filter($v);
						$t->used = 1;
						// if(empty($t->follows))
						// {
							// $t->follows = 0;
						// }
						// if(empty($t->description))
						// {
							// $t->description = 0;
						// }
						// if(empty($t->avatar))
						// {
							// $t->avatar = 0;
						// }
						// if(!empty($t->deleted))
						// {
							// $t->deleted = 0;
						// }
						$t->create();
						$t_id= $t->id;
						//$tags[] = profanity_filter($v);
					}
				}
				$newtags[] = $v;
			}
			
			$content = profanity_filter($_POST['content']);
			$published = false;
			
			//$q->user_id = $current_user->id;
			$q->title = $title;
			$q->slug = $slug;
			$q->updated_at = strftime("%Y-%m-%d %H:%M:%S" , time());
			$q->feed = implode(',' , $newtags);
			$q->content = $content;
			
			// unset($q->id);
			// if(empty($q->likes))
			// {
				// $q->likes = 0;
			// }
			// if(empty($q->dislikes))
			// {
				// $q->dislikes = 0;
			// }
			// if(empty($q->answers))
			// {
				// $q->answers = 0;
			// }
			// if(empty($q->follows))
			// {
				// $q->follows = 0;
			// }
			// if(empty($q->views))
			// {
				// $q->views = 1;
			// }
			// if(empty($q->anonymous))
			// {
				// $q->anonymous = 0;
			// }
			
			if(isset($_POST['anonymous']) && $_POST['anonymous'] == '1' ) {
				$q->anonymous = "1";
			}
			
			if($settings['q_approval'] == '0' || $settings['q_approval'] == '1' && $current_user->prvlg_group == '1' || $settings['q_approval'] == '1' && $current_user->can_see_this("questions.power",$group) ) {
				$q->published = 1;
				$published = true;
			} else {
				$q->published = 0;
			}
			//echo "<pre>"; print_r($q); exit;
			if($q->update()) {
				$msg = $lang['alert-update_success'];
				if($published == false) {
					$msg .= $lang['questions-pending'];
				}
				if(URLTYPE == 'slug') {$url_type = $q->slug;} else {$url_type = $q->id;}
				redirect_to($url_mapper['questions/view']."{$url_type}&edit=success&msg={$msg}");
			} else {
				$msg = $lang['alert-update_failed'];
				if(URLTYPE == 'slug') {$url_type = $q->slug;} else {$url_type = $q->id;}
				redirect_to($url_mapper['questions/update']."{$url_type}&edit=fail&msg={$msg}");
			}
			
        /*}

		} else {
			redirect_to($url_mapper['questions/create']);
		}*/
	} else {
		redirect_to($url_mapper['questions/create']);
	}
}



require_once('assets/includes/navbar.php');
?>
<div class="container">		

<div class="row">
	<?php require_once('assets/includes/lt_sidebar.php'); ?>
	<div class="col-md-7">
		
		<?php
			if (isset($_GET['edit']) && isset($_GET['msg']) && $_GET['edit'] == "success") :
			$status_msg = $db->escape_value($_GET['msg']);
		?>
			<div class="alert alert-success">
				<i class="glyphicon glyphicon-check"></i> <strong><?php echo $lang['alert-type-success']; ?>!</strong>&nbsp;&nbsp;<?php echo $status_msg; ?>
			</div>
		<?php
			endif; 	
			if (isset($_GET['edit']) && isset($_GET['msg']) && $_GET['edit'] == "fail") :
			$status_msg = $db->escape_value($_GET['msg']);		
		?>
			<div class="alert alert-danger">
				<i class="glyphicon glyphicon-times"></i> <strong><?php echo $lang['alert-type-error']; ?>!</strong>&nbsp;&nbsp;<?php echo $status_msg; ?>
			</div>
			
		<?php 
			endif;
		?>
		
		<h2 class="page-header"><?php echo $lang['questions-title']; ?></h2>
		<form method="post" action="<?php if($edit_mode == true) { echo $url_mapper['questions/update']; } else { echo $url_mapper['questions/create']; } ?>">
			<div class="row" id="first_step">
				<div class="form-group">
					<ul class="steps">
						<li><b>Step-1</b> of 2</li>
					</ul>
				</div>
				<div class="form-group">
					<span class="first_step_error error_hide">Please fill all mandatory data to procceed</sapn>
				</div>
				<div class="form-group">
					<label for="title"><?php echo $lang['questions-q_title']; ?></label>
					<input type="text" class="form-control" name="title" id="title" value="<?php echo $title; ?>" required>
						<br><label style="font-weight:normal"><input type="checkbox" name="anonymous" value="1" <?php echo $anonymous; ?>> <?php echo $lang['questions-anonymous']; ?></label>
				</div>
				
				<input type="hidden" class="form-control" name="slug" id="slug" value="<?php echo $title_slug; ?>" required readonly>
				<div class="form-group">
					<label for="feed"><?php echo $lang['questions-tags']; ?></label><br>
					<input class="form-control" name="tags" id="tagsinput" data-role="tagsinput" required value="<?php if($edit_mode == true) { echo $q->feed; } else { echo 'General'; } ?>" >
				</div>
				<!-- Industry id post -->
				<?php $cats = Industries::get_industries();?>
				<div class="form-group">
					<label for="industry_id"><?php echo $lang['industry-label']; ?></label><br>
					<!-- <select class="form-control" name="industry_id"> -->
					<select class="form-control js-example-basic-single" name="industry_id[]" multiple="multiple" id="industry_id">
						<?php 
						foreach ($cats as $key => $cat) {
							?>
							<option value="<?php echo $cat->id ?>">
								<?php echo ucwords($cat->cat_name); ?>
							</option>
							<?php
						}
						?>
					</select>
				</div>

				<!-- Material id post -->
				<?php $materials = Materials::get_materials(); 
				// echo "<pre>"; print_r($materials); exit;
				?>
				<div class="form-group">
					<label for="material_id"><?php echo $lang['partner-label']; ?></label><br>
					<!-- <select class="form-control" name="material_id"> -->
					<select class="form-control js-example-basic-single" name="partner_id[]" multiple="multiple" id="partner_id">
						<?php  
						foreach ($materials as $mat) {
							?>
							<option value="<?php echo $mat->id ?>">
								<?php echo ucwords($mat->mat_name); ?>
							</option>
							<?php
						}
						?>
					</select>
				</div>

				<div class="form-group">
					<label for="sdf"><?php echo $lang['funding-label']; ?></label><br>
					<label class="radio-inline"><input type="radio" name="funding" value="1">Yes</label>
					<label class="radio-inline"><input type="radio" name="funding" value="0">No</label>
				</div>

				<?php 
				$pincodes = Pincodes::get_location_pincode();
				?>
				<div class="form-group">
					<label for="pincode"><?php echo $lang['pincode-label']; ?></label><br>
					<select class="form-control js-example-basic-single" name="pincode" id="pincode">
						<option value="">-- Select pincode --</option>
						<?php  
						foreach ($pincodes as $pincod) {
							?>
							<option value="<?php echo $pincod['id'] ?>">
								<?php echo "<b>".$pincod['PINCODE']."</b> - ".$pincod['OFFICENAME']; ?>
							</option>
							<?php
						}
						?>
					</select>
				</div>

				<!-- tool id post -->
				<?php //$tools = Tools::get_tools(); ?>
				<!-- <div class="form-group">
					<label for="tool_id"><?php echo $lang['tool-label']; ?></label><br>
					<select class="form-control" name="tool_id"> -->
						<?php  
						//foreach ($tools as $tool) {
							?>
							<!-- <option value="<?php echo $tool->id ?>">
								<?php echo ucwords($tool->tool_name); ?>
							</option> -->
							<?php
						//}
						?>
					<!-- </select>
				</div> -->

				<!-- Microfinance id post -->
				<?php //$microfinances = Microfinance::get_microfinances(); ?>
				<!-- <div class="form-group">
					<label for="microf_id"><?php echo $lang['microfinance-label']; ?></label><br>
					<select class="form-control" name="microf_id"> -->
						<?php  
						//foreach ($microfinances as $micro) {
							?>
							<!-- <option value="<?php echo $micro->id ?>">
								<?php echo ucwords($micro->microf_name); ?>
							</option> -->
							<?php
						//}
						?>
					<!-- </select>
				</div> -->

				<!-- <div class="form-group">
					<label>
						select Industry
					</label>
					<select class="form-control js-example-basic-single" name="state[]" multiple="multiple">
					  <option value="AL">Alabama</option>
					  <option value="WY">Wyoming</option>
					</select>
				</div> -->

				<div class="form-group">
					<label for="summernote"><?php echo $lang['questions-details']; ?></label><br>
					<textarea id="summernote" name="content"><?php echo $content; ?></textarea>
				</div>
			</div>
			<div class="row">
				<button id="next_step">Next</button>
			</div>
			<div class="row" id="second_step">
				<ul class="steps">
					<li><b>Step-2</b> of 2</li>
				</ul>
				<div class="form-group">
					<label for="summernote"><?php echo $lang['add-skill-label']; ?></label><br>
				</div>
				<div class="col-md-6 col-sm-6">
					<p class="skill_list"><b>Skill should be Add here...</b></p>
					<input type="hidden" name="skill_id" id="skill_id" value="">
					<ul class="list-inline skills_ul" id="add_skill_clone">
					</ul>
				</div>
				<div class="col-md-6 col-sm-6">
				<?php $allSkills = Addskills::get_jobseeker_skills();
				?>
				<p class="skill_list"><b>Click on skill to add</b></p>
				<ul class="list-inline skills_ul">
					<?php foreach ($allSkills as $skill) {
						?>
						<li data-id="<?php echo $skill['ID']; ?>" class="addskill"><?php echo $skill['skill_name']; ?></li> 
						<?php
					} ?>
				</ul>
				</div>
			</div>
			
			
			<div class="modal-footer" id="submit_btn">
				<br/>
				<center>
				
					<?php if($edit_mode == true) { ?>
						<input class="btn btn-success" type="submit" name="update_q" value="<?php echo $lang['btn-update']; ?>">
					<?php 
						echo "<input type=\"hidden\" name=\"q_id\" value=\"".$q->id."\" readonly/>";
					} else { ?>
						<input class="btn btn-success" type="submit" name="add_q" value="<?php echo $lang['btn-submit']; ?>">
					<?php } ?>
					
					<a href="<?php echo $url_mapper['index/']; ?>" class="btn btn-default"><?php echo $lang['btn-cancel']; ?></a>
					
				</center>
				<?php 
					$_SESSION[$elhash] = $random_hash;
					echo "<input type=\"hidden\" name=\"hash\" value=\"".$random_hash."\" readonly/>";
				?>
			</div>
		</form>
	</div>
	
	<?php require_once('assets/includes/rt_sidebar.php') ?>
	
</div>
	<?php require_once('assets/includes/footer.php'); ?>
    </div> <!-- /container -->
    <?php require_once('assets/includes/preloader.php'); ?>
	<script src="<?php echo WEB_LINK; ?>assets/plugins/summernote/summernote.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
	<script src="<?php echo WEB_LINK; ?>assets/plugins/tagsinput/bootstrap-tagsinput.js"></script>
	<script>
    $(document).ready(function() {
        $('#summernote').summernote({
			callbacks : {
	            onImageUpload: function(image) {
					sendFile(image[0]);
				}
			}
        });
		$('<div id="loading_wrap"><div class="com_loading"><center><img src="<?php echo WEB_LINK; ?>assets/img/loading.gif" /> Loading ...</center></div></div>').appendTo('body');

        function sendFile(image) {
            $("#loading_wrap").fadeIn("fast");

			data = new FormData();
            data.append("data", 'summernote-inline-uploader');
            data.append("id", <?php echo $current_user->id; ?>);
            data.append("hash", '<?php echo $random_hash; ?>');
            data.append("img", image);
            $.ajax({
                data: data,
                type: "POST",
                url: "<?php echo WEB_LINK ?>assets/includes/one_ajax.php?type=upl_img",
                cache: false,
                contentType: false,
                processData: false,
                success: function(url) {
                    $('#summernote').summernote("insertImage", url);
					$("#loading_wrap").fadeOut("fast");
				},
				error: function(data) {
					console.log(data);
				}
            });
        }
		$('select').select2();
		
		/*$("#title").keyup(function(){
			var Text = $(this).val();
			Text = Text.toLowerCase();
			Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
			$("#slug").val(Text);
		});*/
		
		$("#title").slugIt();
    });
	
$('input#tagsinput').tagsinput({
maxTags: 8,
maxChars: 30,
trimValue: true,

typeaheadjs: {
	
	name: 'tags',
	displayKey: 'tag',
    valueKey: 'tag',
    afterSelect: function(val) { this.$element.val(""); },
	
	source: function (query, process) {
		$.ajax({
			url: '<?php echo WEB_LINK; ?>assets/includes/one_ajax.php?type=tags_suggestions',
			type: 'POST',
			dataType: 'JSON',
			data: 'id=<?php echo $current_user->id; ?>&data=' + query + '&hash="<?php echo $random_hash; ?>"',
			success: function(data) {
				process(data);
			},
			error: function(data) {
				//console.log(data);
				console.log('No data available!');
			}
		});
	}
}
});

$('.bootstrap-tagsinput input').blur(function() {
$('input#tagsinput').tagsinput('add', $(this).val());
$(this).val('');
});
</script>

<script type="text/javascript">
	var ids = [];
	var param = '';
	var _this;
	$(function(){
		$(".addskill").on('click', function(e){
			_this = e.target;
			$(this).addClass('clone_li');
			var id = $(this).data("id");
			$(this).addClass('c_'+id);
			$(this).removeClass('addskill');
			get_skillids(id, _this);
			return false;
		});

		$(document).on('click', ".clone_li", function(){
			var id = $(this).data("id");
			remove_skillids(id, param = "remove");
			$(this).remove();
		});
	});

	function get_skillids(id, param)
	{
		var _ids = $("#skill_id").val();
		if(_ids.length == 0)
		{
			ids = [];
		}
		var trix = checkValue(id, ids);
		if(trix != true)
		{
			ids.push(id);
			$(_this).clone().appendTo("#add_skill_clone");
		}
		else
		{
			$(".c_"+id).remove();
			$(_this).clone().appendTo("#add_skill_clone");
			alert('This skill already added.');
		}
		console.log(ids);
		var ids_str = ids.join(",");
		$("#skill_id").val(ids_str);
	}

	function remove_skillids(id, param)
	{
		var _ids = $("#skill_id").val();
		var _idsarr = _ids.split(',');
		_idsarr = $.grep(_idsarr, function (value) {
			return value != id;
		});
		var _ids_str = _idsarr.join(",");
		$("#skill_id").val(_ids_str);
	}

	function checkValue(value,arr){
	  for(var i=0; i<arr.length; i++){
	   var name = arr[i];
	   if(name == value){
	    var status = true;
	   }
	   else
	   {
	   	var status = false;
	   }
	  }

	  return status;
	 }
</script>
<script type="text/javascript">
	$(function(){
		$("#second_step").hide('fast');
		$("#submit_btn").hide('fast');
		$("#next_step").on('click', function(e){
			e.preventDefault();
			var title = $("#title").val();
			var tags = $("#tags").val();
			var industry_id = $("#industry_id").val();
			var partner_id = $("#partner_id").val();
			var funding = $("input[name='funding']:checked").val();
			var pincode = $("#pincode").val();
			var content = $("#summernote").val();
			if(title != "" && tags != "" && industry_id != "" && partner_id != "" && funding != "" && pincode != "" && content != "")
			{
				$(this).hide();
				$("#submit_btn").show('fast');
				$("#first_step").hide('fast');
				$("#second_step").show('slow');
				$("html, body").animate({ scrollTop: 0 }, 600);
			}
			else
			{
				$(".first_step_error").removeClass('error_hide');
				$("html, body").animate({ scrollTop: 0 }, 600);
			}
		});
	});
</script>

<?php require_once('assets/includes/bottom.php'); ?>