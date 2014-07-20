<?php
 	$to = "elisa.herreraf@gmail.com";
 	$subject = "Correo enviado desde LANX.ES";
	$from = "elisa.herreraf@gmail.com";
	$headers = 'From: elisa.herreraf@gmail.com' . "\r\n" .
    'Reply-To: elisa.herreraf@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

 	$name = htmlspecialchars($_GET["name"]);
 	$phone = htmlspecialchars($_GET["phone"]);
 	$mail = htmlspecialchars($_GET["mail"]);
 	$comments = htmlspecialchars($_GET["comments"]);
	$company = htmlspecialchars($_GET["company"]);
 	$date = htmlspecialchars($_GET["date"]);

 	$body = "Formulario:"
 	."\n\nNombre: " . $name
 	."\n\nTeléfono: " . $phone
 	."\n\nMail: " . $mail
 	."\n\nComentarios: " . $comments
	."\n\nEmpresa: " . $company
 	."\n\nFecha: " . $date
 	."\n\n\n\nFIN.\n\n\n\n";

	try {
		mail($to,$subject,$body,$headers);
		/* Redirect browser */
		header("Location: contacto.php?v=1");
		/* Make sure that code below does not get executed when we redirect. */
		exit;
  	} catch( Exception  $e ) {
   		mail($to,$subject,$body,$headers);
		/* Redirect browser */
		header("Location: contacto.php?v=0");
		/* Make sure that code below does not get executed when we redirect. */
		exit;
  	}
 ?>