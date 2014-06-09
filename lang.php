<?php

if ( $_SESSION['ceimexlang'] == '' )
	$_SESSION['ceimexlang'] = 'es';

include 'txt_' . $_SESSION['ceimexlang'] . '.php';

function numberize( $chain ){
	
	if ( false )
		return $chain;
	
	$ascii = NULL;
 
	for ($i = 0; $i < strlen($chain); $i++)  {
		$ascii = $ascii . "&#".ord( $chain[$i] ).";"; 
	}

	return( $ascii );
	
}
?>
