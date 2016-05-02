<?php
	session_start();
	if (isset($_SESSION['login']) && isset($_SESSION['mdp']))
	{
		if($_SESSION['login'] == 'Fred' && $_SESSION['mdp'] == 'Bloggs')
		{
			echo"<div id='message'>";
			echo "Welcome ".$_SESSION['login'];
			echo "<br/>Your password is ".$_SESSION['mdp'];
			echo "<br/>You're the only one who can access to this page, be happy !";
			echo "<br/>You can choose whenever you want to go back";
			echo "<p><form method='post'><input type='submit' name='return' value='Return'/></form></p>";
			echo "</div>";
		}
		else
		{
			echo "<div id='message'>";
			echo "You're not the admin ".$_SESSION['login'];
			echo "<br/>So you'll be redirected";
			echo "<br/>Bye!";
			echo "</div>";

			header("refresh:5;url=".$_SESSION['exo']);
		}
	}

	if (isset($_POST['return'])) 
	{
		header( "refresh:0;url=".$_SESSION['exo']);
	}
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