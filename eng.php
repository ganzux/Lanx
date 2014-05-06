<?php session_start();
if ( $_SESSION['ceimexlang']== 'es' )
	$_SESSION['ceimexlang'] = 'en';
else
	$_SESSION['ceimexlang'] = 'es';
include 'index.php';
?>