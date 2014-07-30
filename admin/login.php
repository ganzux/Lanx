<?php session_start();
if ( isset( $_SESSION["conn"]) )	$conn = $_SESSION['conn'];if ( isset( $_SESSION["user"]) )	$u = $_SESSION['user'];
if ( isset( $_SESSION["password"]) )	$p = $_SESSION['password'];
$lengua = $_SESSION['ceimexlang'];
if ( isset( $_GET['l'] ) ) 	$lengua = $_GET['l'];
if ( $lengua != 'es' && $lengua != 'en' )		$lengua = "es";$_SESSION['ceimexlang'] = $lengua;

include '../lang.php';
$_SESSION['ceimexpage']=0;$_SESSION['ceimextitle']= $TXT_INDEX_TITLE;
$ok = false;$ko = false;
if ( isset( $_GET['ok'] ) ){	if ( $_GET['ok'] == "true" )		$ok = true;
	else		$ko = true;}

if ( isset( $_POST["name"]) && isset( $_POST["password"]) ){	$u = htmlspecialchars($_POST["name"]);	$p = htmlspecialchars($_POST["password"]);	if ( isset( $_POST["checkbox"]) )		$c = htmlspecialchars($_POST["checkbox"]);
} else if ( $u == null ){	header( "Location: ../index.php" );}
	$dbname = new PDO('sqlite:../sqlite/lanx.sqlite');	$result = $dbname->prepare("SELECT COUNT(*) as count FROM users WHERE name = '" . $u . "' AND password = '" . $p . "'"); 	$result->execute(); 	$numRows = $result->fetchColumn(); 
	if ( $numRows > 0 ){		$_SESSION['conn'] = true;		$_SESSION['user'] = $u;		$_SESSION['password'] = $p;
?>		<!doctype html>
		<head>			<meta charset="utf-8">			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">			<title>Panel de Administracion</title>			<link rel="stylesheet" href="css/reset.css">			<link rel="stylesheet" href="css/animate.css">			<link rel="stylesheet" href="css/styles.css">			<script src="../js/ito.js" type="text/javascript"></script>			<script src="../js/jquery-2.1.0.min.js" type="text/javascript"></script>		</head>
		<body>		<H1>			Panel de Administraci&oacute;n			<a href="bye.php"><img src="img/logout.png" /></a>		</H1>
		
		<H2>
		<?php			if ( $ok )				echo "Operacion realizada Correctamente";			if ( $ko )				echo "Operacion no v&aacute;lida";		?>		</H2>
		
		<form method="POST" action="new.php">			<label for="name">Orden:</label>			<input type="name" name="order" style="width: 50px;" id="inpt1">		
			<label for="name">Titulo:</label>			<input type="name" name="titulo" id="inpt2">
			<label for="name">Texto:</label>			<input type="name" name="texto" id="inpt3">
			<input type="submit" value="Enviar" style="float: inherit;margin-left: 52px;">
		</form>
	
	<?php
		echo '<h1>DESTACADOS</h1>';		echo '<table border="0">';
		foreach ($dbname->query('SELECT * FROM messages order by ord') as $row) {
			echo "<tr>";
			echo "<td style='padding:10px;vertical-align:middle; margin: 0 auto;'>" . $row["ord"] . "</td>";
			echo "<td style='padding:10px;vertical-align:middle; margin: 0 auto;' >" . $row["title"] . "</td>";						echo "<td style='padding:10px;vertical-align:middle; margin: 0 auto;' >" . $row["message"] . "</td>";
			echo "<td style='padding:10px;vertical-align:middle; margin: 0 auto;' ><a href='new.php?del=".$row["idMessage"]."'><img alt='Borrar' src='img/del.png' width='24' height='24'></a></td>";			echo "<td style='padding:10px;vertical-align:middle; margin: 0 auto;' ><a href='#'><img alt='Copiar' src='img/cpy.png' class='cpy' width='24' height='24'></a></td>";
			echo "</tr>";
		}
		echo "</table>";	?>		<script>		$(document).ready(function() {			$('.cpy').click(function() {				    var $row = $(this).closest("tr");					var $tds = $row.find("td");					i = 0;					$.each($tds, function() {						$("#inpt" + (++i)).val( $(this).text() );					});			});		});	</script>

	<?} else {		header( "Location: index.php?error=true" );	}
		
?>