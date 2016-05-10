<?php 
	ob_start();
	include "countries.php";
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Welcome</title>
	<style type="text/css">
		#registration_table, td, th
		{
			border-collapse: collapse;
			border-style: double;
			border-width: medium;
		}
		#registration_table
		{
			width: 45%;
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
    	<h1>Update Details Page</h1>
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
	<!-- START DIV REGISTER -->
	<div id="register">

	<?php
	
	include "connection.php";

	// When user will valid his changes
	if (isset($_POST['valid_update'])) 
		{
			$flag = true;

			echo "<div class='contain_error'>";

	 		foreach ($_POST as $key => $value) 
	 		{

	 		$value = str_replace(' ','',$value); 

		 		if (empty($value)) 
		 		{
		 			echo "<p class='error' align='center'><strong>The field '".$key."' is not filled</strong></p>";
		 			$flag = false;
		 		}
	 		}

		 	if ($_POST['pass1'] != $_POST['pass2']) 
		 		{
		 			echo "<p align='center'>Passwords don't match</p>";
		 			$flag = false;
		 		}

	 	if ($flag) 
	 		{
	 			$req = $bdd->prepare('UPDATE users SET forename = :forename, surename = :surename, login = :login, password = :password, birth_date = :birth, address = :address, city = :city, postal = :postal, country = :country WHERE user_id = '.$_SESSION['id']);
	 			$req -> execute(array('forename' => mysql_real_escape_string($_POST['forename']),
			 				'surename' => $_POST['surename'],
			 				'login' => $_POST['login'],
			 				'password' => ($_POST['pass1']),
			 				'birth' => $_POST['date'],
			 				'address' => $_POST['address'],
			 				'city' => $_POST['city'],
			 				'postal' => $_POST['postal'],
			 				'country' => $_POST['country']));

	 			echo "<p align='center'>Update done.</p>";
				// echo "<p align='center'>You will be redirected ...</p>";


	 		}
	 	else
	 	{
	 		echo "<p class='error' align='center'>";
	 	}

	 	echo "</div>";
		}

			// Query to fill input to display user's informations
			$req = $bdd->prepare('SELECT * FROM users WHERE user_id = :id');
			$req -> execute(array(
			'id' => $_SESSION['id']));
			// Stock result as an array by fetch() method
			$resultats = $req -> fetch();

		
	?>

 		<form method="post">
	 		<table id="registration_table" border="1">
	 			<tr>
	 				<th colspan="2"><h1><i>Change your informations</i></h1></th>
	 			</tr>
	 			<tr>
	 				<th>Forename :</th>
	 				<td align="center"><input type="text" name="forename" value="<?php echo htmlentities($resultats['forename']);?>"/></td>
	 			</tr>
	 			<tr>
	 				<th>Surename :</th>
	 				<td align="center"><input type="text" name="surename" value="<?php echo htmlentities($resultats['surename']);?>" /></td>
	 			</tr>
	 			<tr>
	 				<th>Login : </th>
	 				<td align="center"><input type="text" name="login" value="<?php echo htmlentities($resultats['login']);?>"/></td>
	 			</tr>
	 			<tr>
	 				<th>Password :</th>
	 				<td align="center"><input type="password" name="pass1" value="<?php echo htmlentities($resultats['password']);?>"/></td>
	 			</tr>

	 			<tr>
	 				<th>Re-Type Password :</th>
	 				<td align="center"><input type="password" name="pass2" value="<?php echo htmlentities($resultats['password']);?>"/></td>
	 			</tr>
	 			<tr>
	 				<th>Date of birth :</th>
	 				<td align="center"><input type="date" name="date" value="<?php echo htmlentities($resultats['birth_date']);?>" />
	 			</tr>
	 			<tr>
	 				<th>Address :</th>
	 				<td align="center"><input type="text" name="address" value="<?php echo htmlentities($resultats['address']);?>"/></td>
	 			</tr>
	 			<tr>
	 				<th>City :</th>
	 				<td align="center"><input type="text" name="city" value="<?php echo htmlentities($resultats['city']);?>"></td>
	 			</tr>
	 			<tr>
	 				<th>Postal Code :</th>
	 				<td align="center"><input type="text" name="postal" value="<?php echo htmlentities($resultats['postal']);?>"></td>
	 			</tr>
	 			<tr>
	 				<th>Country :</th>
	 				<td align="center">
	 					<select name = "country">
	 						<?php
	 							foreach ($countries as $key => $value) {
	 								if ($value == $resultats['country']) {
	 									echo "<option selected>".htmlentities($value)."</option>";
	 								}
	 								echo "<option>".htmlentities($value)."</option>";
	 							}


	 						?>
	 					</select>
	 				</td>
	 			</tr>
	 			<tr>
	 				<td colspan="2" align="center"><input type="submit" class="button_design" name="valid_update" value="Update"/></td>
	 			</tr>
	 		</table>	
 		</form>
 	</div>
	<!-- END DIV REGISTER -->
<!-- END DIV MAIN-CONTENT -->
</div>


<footer><p align='center'>cars.sales@copyright</p></footer>
</body>
</html>