<?php
function sendsms($number, $message_body, $return = '0') {

$sender = 'kherwadi'; // Need to change

$smsGatewayUrl = 'http://mobicomm.dove-sms.com/';

$apikey = 'http://103.233.79.246//submitsms.jsp?key=114847991aXX&mobile=+919890036143'; // Need to change

$textmessage = urlencode($textmessage);

$api_element = '/api/web/send/';

$api_params = $api_element.'?apikey='.$apikey.'&sender='.$sender.'&to='.$mobileno.'&message='.$textmessage;
$smsgatewaydata = $smsGatewayUrl.$api_params;

$url = $smsgatewaydata;

$ch = curl_init();

curl_setopt($ch, CURLOPT_POST, false);

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); $output = curl_exec($ch);

curl_close($ch);

if(!$output){ $output = file_get_contents($smsgatewaydata); }

if($return == '1'){ return $output; }else{ echo "Sent"; }

}

function generateRandomString()  
{
    $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $digits = '1234567890';
    $randomString = '';
    for ($i = 0; $i < 3; $i++) {
        $randomString .= $letters[rand(0, strlen($letters) - 1)];
    }
    for ($i = 0; $i < 3; $i++) {
        $randomString .= $digits[rand(0, strlen($digits) - 1)];
    }
    return $randomString;
}

function send_sms($from,$to,$message){ 
       
        $xml_data ='<?xml version="1.0"?>
			<parent>
			<child>
			<user>KHERWADI</user>
			<key>114847991aXX</key>
			<mobile>+91'.$to.'</mobile>
			<message>'.$message.'</message>
			<accusage>2</accusage>
			<senderid>INFOSM</senderid>
			</child>
			</parent>';

			$URL = "http://103.233.79.246/submitsms.jsp?"; 

			$ch = curl_init($URL);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xml'));
			curl_setopt($ch, CURLOPT_POSTFIELDS, "$xml_data");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$output = curl_exec($ch);
			curl_close($ch);

			print_r($output); 
	    }


?>