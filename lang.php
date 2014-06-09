<?php

if ( $_SESSION['ceimexlang'] == '' )
	$_SESSION['ceimexlang'] = 'es';

include 'txt_' . $_SESSION['ceimexlang'] . '.php';

function getImage( $path ) {

	//return $path.$V;

	$type = pathinfo($path, PATHINFO_EXTENSION);
	$data = file_get_contents( $path );
	$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
	return $base64;
  
}

function numberize( $chain ){
	
	//return $chain;
	
	mb_internal_encoding("UTF-8");
	$ascii = NULL;

	for ($i = 0; $i < mb_strlen($chain); $i++) {
		$ordi = ord( mb_substr( $chain,$i,1 ) );
		if( ($ordi>64 && $ordi<91) || ($ordi>96 && $ordi<123) )
			$ascii = $ascii . "&#". ( $ordi ).";"; 
		else
			$ascii = $ascii .  mb_substr( $chain,$i,1 );
	}

	return( $ascii );
	
}
?>
