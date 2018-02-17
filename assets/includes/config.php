<?php //Database connection settings
defined('DBH') ? null : define ('DBH' , 'localhost');
// defined('DBU') ? null : define ('DBU' , 'yple');
// defined('DBPW') ? null : define ('DBPW' , 'db$yple147');
// defined('DBN') ? null : define ('DBN' , 'yple');

defined('DBU') ? null : define ('DBU' , 'root');
defined('DBPW') ? null : define ('DBPW' , 'root');
defined('DBN') ? null : define ('DBN' , 'livelihood');
defined('DBTP') ? null : define ('DBTP' , 'p_');

defined('DBU1') ? null : define ('DBU1' , 'root', true);
defined('DBPW1') ? null : define ('DBPW1' , 'root', true);
defined('DBN1') ? null : define ('DBN1' , 'finaljob', true);
defined('DBTP1') ? null : define ('DBTP1' , 'pp_', true);

//Define your web accessible link to this script, including http:// or https:// with TRAILING SLASH / in the end !IMPORTANT
// defined('WEB_LINK') ? null : define('WEB_LINK' , 'http://yple.skill-mart.com/livelihood/');
defined('WEB_LINK') ? null : define('WEB_LINK' , 'http://localhost/livelihood/');
defined('ERROR_LINK') ? null : define('ERROR_LINK' , WEB_LINK );
defined('UPL_FILES') ? null : define('UPL_FILES' , WEB_LINK.'assets');

//Facebook API Credentials, get them from https://developers.facebook.com/apps
$facebook_api = array("secret"=>"", "id" => "");

//Google API Credentials, get them from https://console.developers.google.com
$google_api = array("secret"=>"", "id" => "");

//Google Captcha Info, get them from https://www.google.com/recaptcha/admin
$captcha_info = array("secret"=>"6LfsXUQUAAAAAL-5RFIGKkzQb4vusl8a0RHQh8aV", "sitekey" => "6LfsXUQUAAAAAIgSDdGqiBynkbzCUjImmzjiUhNB");

//Google Analytics Info, get them from https://analytics.google.com/analytics/web/
$analytics_info = false;

//AddThis Info, get them from https://www.addthis.com/dashboard/
$addthis_info = false;

require_once("url_mapper.php");

?>