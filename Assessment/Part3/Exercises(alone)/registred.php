<?php
	session_start();
	echo"<div id='message'>";
	echo "Welcome".$_SESSION['login'];
	echo "<br/>Your password is ".$_SESSION['mdp'];
	echo "<br/>You're the only one who can access to this page, be happy !";
	echo "<br/>Anyway you will be redirected";
	echo "<br/>Bye admin !";
	echo "</div>";
	header( "refresh:6;url=exercise3(alone).php" );
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registred Page</title>
	<style type="text/css">
	#message
	{
		text-align: center;
		font-size: 20px;
	}
	</style>
</head>
<body>

</body>
</html>