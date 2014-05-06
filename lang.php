<?php
if ( $_SESSION['ceimexlang'] == '' )
	$_SESSION['ceimexlang'] = 'es';

include 'txt_' . $_SESSION['ceimexlang'] . '.php';
?>