<?php session_start();

if ( isset( $_SESSION['ceimexlang'] ) ) 
	$lengua = $_SESSION['ceimexlang'];
else
	$lengua = "es";

if ( isset( $_GET['error'] ) ) 
	$error = $_GET['error'];
else
	$error = false;

if ( isset( $_GET['l'] ) ) 
	$lengua = $_GET['l'];

if ( $lengua != 'es' && $lengua != 'en' )
		$lengua = "es";

$_SESSION['ceimexlang'] = $lengua;

include '../lang.php';
$_SESSION['ceimexpage']=0;
$_SESSION['ceimextitle']= $TXT_INDEX_TITLE;
?>

<!doctype html>

<head>

	<!-- Basics -->
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Panel de Administración</title>

	<!-- CSS -->
	
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/styles.css">
	
</head>
	
<body>
	
	<div id="container">
		
		<form method="POST" action="login.php">
		
			<label for="name">Usuario:</label>
			<input type="name" name="name">

			<label for="username">Contraseña:</label>
			<!--p><a href="#">Forgot your password?</a-->
			<input type="password" name="password">
			
			<?php
				if ( $error ) {
					echo "<p>Ha ocurrido un error. Vuélvalo a Intentar</p>";
				}
			?>
			
			<div id="lower">
				<!--input type="checkbox" name="checkbox"><label class="check" for="checkbox">Mantener sesión</label-->
				<input type="submit" value="Entrar">
			</div>
		
		</form>
		
	</div>
	
	<!-- End Page Content -->
	
</body>

</html>
	
	
	
	
	
		
	