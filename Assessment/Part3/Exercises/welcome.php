<?php
    session_start();

    if(isset($_SESSION['login']))
    {
        echo "<h1>Welcome to this page ".$_SESSION['login']."</h1>";
        echo "<h2>You will be redirect soon, be patient ...</h2>";
        header( "refresh:3;url=".$_SESSION['exo'] );
    }
    else
    {
        echo "<h1>You're not login ".$_SESSION['guest']." !</h1>";
        echo "<h2>So you'll not have a welcome message </h2>";
        echo "<h3>I'll redirect you because Im cool !</h3>";
        header("refresh:3;url=".$_SESSION['exo']);
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>Exercice 3</title> 
        <style>
            h1, h2, h3
            {
                text-align:center;
            }
        </style>
	</head>
<body>
    
</body>
</html>