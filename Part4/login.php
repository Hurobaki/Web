<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Login</title>
	<style type="text/css">
 	
		#login_table, td, th
		{
			border-collapse: collapse;
			border-style: double;
			border-width: medium;
		}
		#login_table
		{
			width: 40%;
			margin-right: auto;
			margin-left: auto;
		}
		td,th
		{
			height: 50px;
			padding: 5px;
		}
		* 
		{
      	 	margin: 0; 
       		padding: 0;
    	}

     	div#banner 
     	{ 

      	 	position: absolute; 
     		right: 1px;
     		left: 1px; 
     		top: 0;
       		background-color: #5D5D58; 
       		width: auto; 
       		border-style: outset;
       		border-width: thick;
     	}
     	
    	div#space
    	{
    		height: 10px;
    		margin: 110px 0 50px 0;
    		background: transparent;
    		text-align: center;
    	}

    	div#banner-content 
     	{ 
			margin: 10px;
       		padding: 10px; 
       		text-align: center;
     	}
		
		/*div#main-content 
     	{ 
     	       	
    	}*/

    	input[type="submit"] 
    	{
   			width:100px;
		}

		#register
		{
			margin-bottom: 20px;
		}

		.error
		{
			color: red;
		}

		.contain_error
		{
			border: 1px solid black;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 10px;
			width: 40%;
			padding: 5px;

		}
 	</style>


</head>
<body>
<!-- START DIV BANNER -->
<div id="banner">
	<!-- START BANNER-CONTENT -->
    <div id="banner-content">
    	<h1>Login Page</h1>
    	<i>Vi Veri Veniversum Vivus Vici</i>
    	<span class='span-banner'>
    		<?php if($_SESSION['user'] == 'guest')
    				echo "You're not connected";
    				else
    				echo "You're connected as ".$_SESSION['user']; ?>
    	</span>
    </div>
    <!-- END BANNER-CONTENT -->
</div>
<!-- END DIV BANNER -->

<?php include "include/tabs.html"; ?>



<!-- START DIV MAIN-CONTENT -->
<div id="main-content">


  <?php 

	if (isset($_POST['valid_login'])) 
	{
		$flag = true;

		echo "<div class='contain_error'>";
	 	foreach ($_POST as $key => $value) {

	 		$value = str_replace(' ','',$value); 

	 		if (empty($value)) {
	 			echo "<p class='error' align='center'><strong>The field '".$key."' was not filled</strong></p>";
	 			$flag = false;
	 		}
	 	}



	 	if ($flag) {

	 		include "connection.php";

	 		$req = $bdd->prepare('SELECT user_id FROM users WHERE login = :login AND password = :pass');
			$req -> execute(array(
				'login' => $_POST['login'],
				'pass' => sha1($_POST['password'])));

			$resultats = $req -> fetch();

			if(!$resultats)
			{
				echo "<p align='center'><strong>Mauvais identifiants</strong></p>";
				if($_SESSION['user'] != 'guest')
					$_SESSION['user'] = 'guest';
				
			}
			else
			{
				
				$_SESSION['user'] = $_POST['login'];
				$_SESSION['id'] = $resultats['user_id'];

				echo "<p align='center'>Connection success.</p>";
				echo "<p align='center'>You will be redirected ...</p>";
				header( "refresh:4;url=index.php" );

			}
	 			echo "</div>";
			}
	}

?>
<!-- START DIV REGISTER -->
<div id="register">
 		<form method="post">
	 		<table id="login_table" border="1">
	 			<tr>
	 				<th colspan="2"><h1><i>Login Form</i></h1></th>
	 			</tr>
	 			<tr>
	 				<th>Login :</th>
	 				<td align="center"><input type="text" name="login" required /></td>
	 			</tr>
	 			<tr>
	 				<th>Password :</th>
	 				<td align="center"><input type="password" name="password" /></td>
	 			</tr>
	 			<tr>
	 				<td colspan="2" align="center"><input type="submit" class="button_design" name="valid_login" value="Login"/></td>
	 			</tr>
	 		</table>	
 		</form>
 	<!-- END DIV REGISTER -->
 	</div>
<!-- END DIV MAIN-CONTENT -->
</div>

</body>
</html>