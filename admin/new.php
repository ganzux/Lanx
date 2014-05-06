<?php session_start();

if ( isset( $_SESSION["conn"]) )
	$conn = $_SESSION['conn'];
if ( isset( $_SESSION["user"]) )
	$u = $_SESSION['user'];
if ( isset( $_SESSION["password"]) )
	$p = $_SESSION['password'];

if ( $conn == null ){
	header( "Location: index.php" );
}
	
if ( isset( $_POST["titulo"]) && isset( $_POST["texto"]) ){
	$ti = htmlspecialchars($_POST["titulo"]);
	$te = htmlspecialchars($_POST["texto"]);
	$us = $_SESSION['user'];
	
	$dbname = new PDO('sqlite:../sqlite/lanx.sqlite');
	
	$statement = $dbname->prepare( 'INSERT INTO messages (title, message, user) VALUES ("'.$ti.'", "'.$te.'", "'.$us.'")' );
	$statement->execute();

	header( "Location: login.php?ok=true" );
	
} else if ( isset( $_GET["del"]) ){

	$dbname = new PDO('sqlite:../sqlite/lanx.sqlite');
	
	$statement = $dbname->prepare("DELETE FROM messages WHERE idMessage = :some_id");
	$statement->execute( array(':some_id' => $_GET["del"]) );
	header( "Location: login.php?ok=true" );
} else {
	header( "Location: login.php?ok=false" );
}
	
?>