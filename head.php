<head>
	<title><?= numberize("LANX ABOGADOS") ?></title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"></meta>
	<link rel="shortcut icon" href="favicon.ico"></link>
	<meta name="description" content="LANX Abogados, Despacho multidisciplinar para toda España"></meta>
	
	<meta id="meta-keywords name="keywords" content="LANX, Lanxiuris, Abogados Madrid, despachos de abogados Madrid, abogado Madrid, buscar abogado Madrid, bufete Madrid "></meta>
	
	<meta name="geo.placename" content="Madrid"></meta>
	<meta name="geo.region" content="ES-M"></meta>
	<meta charset="utf-8"></meta>
	<meta http-equiv="Content-Language" content="es-ES"></meta>
	<meta name="identifier-url" content="http://www.lanx.es"></meta>
	<meta name="author" content="Álvaro Alcedo Moreno"></meta>
	<meta name="robots" content="all"></meta>
	<meta name="viewport" content="width="device-width"></meta>
	<meta name="dcterms.audience" content="GLOBAL"></meta>
	<meta name="dcterms.rightsHolder" content="Copyright &copy; 2014 LANX S.L."></meta>
	
	
	<script src="js0/ito.js" type="text/javascript"></script>
	<script src="js0/jquery-2.1.0.min.js" type="text/javascript"></script>
	<meta property="og:image" content="images/header-object.png"></meta>
	<meta http-equiv="content-type" content="text/html; charset=utf8" ></meta>
	<!--5grid--><script src="css/5grid/viewport.js" type="text/javascript"></script>
	<!--[if lt IE 9]><script src="css/5grid/ie.js" type="text/javascript"></script><![endif]-->
	<link rel="stylesheet" href="css/5grid/core.css"></link>
	<link rel="stylesheet" href="css/style.css"></link>
	<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
</head>

<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51954316-1', 'lanx.es');
  ga('send', 'pageview');

</script>

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
	//mail($to,$subject,$msg,$headers);

} catch (Exception $e) {
}
?>
