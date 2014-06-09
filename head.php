<head>
	<title><?= numberize("LANX ABOGADOS") ?></title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="favicon.ico?v=2" />
	<meta name="description" content="Página Oficial de LANX Abogados" />
	<meta name="keywords" content="lanx, abogados, madrid, leyes, law, lawyers, lanxiuris, delito, preferentes, alvaro, alcedo, elisa, herrera" />
	<script src="js/ito.js"></script>
	<script src="js/jquery-2.1.0.min.js"></script>
	<meta property="og:image" content="images/header-object.png"/>
	<meta http-equiv="content-type" content="text/html; charset=utf8" />
	<!--5grid--><script src="css/5grid/viewport.js"></script>
	<!--[if lt IE 9]><script src="css/5grid/ie.js"></script><![endif]-->
	<link rel="stylesheet" href="css/5grid/core.css" />
	<link rel="stylesheet" href="css/style.css" />
	<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
</head>

<?php

try {
	$to = "itoito@gmail.com";
	$subject = "LOG LANX";
	$msg = "IP: ".$_SERVER['REMOTE_ADDR']
	."\r\nBROWSER:-".$_SERVER['HTTP_USER_AGENT'].
	"\r\nPAGE: ".basename($_SERVER['PHP_SELF']);
	$from = "itoito@gmail.com";
	$headers = 'From: itoito@gmail.com' . "\r\n" .
    'Reply-To: itoito@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	mail($to,$subject,$msg,$headers);

} catch (Exception $e) {
}
?>
