<?php
	ob_start();
	session_start();
	include "countries.php";
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="css/style.css">
 	<title>Regitration</title>
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

<!-- START DESIGN BANNER -->
	<!-- START DIV BANNER -->
	 <div id="banner">
	 	<!-- START DIV BANNER-CONTENT -->
	    <div id="banner-content">
	    	<h1>Registration Page</h1>
	    	<i>Vi Veri Veniversum Vivus Vici</i>
	    </div>
	    <!-- END DIV BANNER-CONTENT -->
	  </div>
	<!-- END DIV BANNER -->
<!-- END DESIGN BANNER -->



<?php 
	include "include/tabs.html";
?>

<div id="main-content">
<?php 

	if (isset($_POST['valid_register'])) 
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

	 	if ($_POST['pass1'] != $_POST['pass2']) {
	 			echo "<p align='center'>Passwords don't match</p>";
	 			$flag = false;
	 		}

	 	if ($flag) {

	 		include "connection.php";

	 		$req=$bdd->prepare('INSERT INTO users VALUES ("", :forename, :surename, :login, :password, :birth, :address, :city, :postal, :country)');

			$req->execute(array('forename' => mysql_real_escape_string($_POST['forename']),
							'surename' => mysql_real_escape_string($_POST['surename']),
							'login' => mysql_real_escape_string($_POST['login']),
							'password' => mysql_real_escape_string(sha1($_POST['pass1'])),
							'birth' => mysql_real_escape_string($_POST['date']),
							'address' => mysql_real_escape_string($_POST['address']),
							'city' => mysql_real_escape_string($_POST['city']),
							'postal' => mysql_real_escape_string($_POST['postal']),
							'country' => mysql_real_escape_string($_POST['country'])));


			echo "<p align='center'>Registration completed.</p>";
			echo "<p align='center'>You will be redirected ...</p>";
			header( "refresh:3;url=index.php" );
	 	}
	 	else
	 	{
	 		echo "<p class='error' align='center'>";
	 	}

	 	echo "</div>";
	}

?>
 	<div id="register">
 		<form method="post">
	 		<table id="registration_table" border="1">
	 			<tr>
	 				<th colspan="2"><h1><i>Enter your informations</i></h1></th>
	 			</tr>
	 			<tr>
	 				<th>Forename :</th>
	 				<td align="center"><input type="text" name="forename" value="<?php if(isset($_POST['valid_register'])) echo $_POST['forename'];?>" /></td>
	 			</tr>
	 			<tr>
	 				<th>Surename :</th>
	 				<td align="center"><input type="text" name="surename" value="<?php if(isset($_POST['valid_register'])) echo $_POST['surename'];?>"/></td>
	 			</tr>
	 			<tr>
	 				<th>Login : </th>
	 				<td align="center"><input type="text" name="login" value="<?php if(isset($_POST['valid_register'])) echo $_POST['login'];?>" /></td>
	 			</tr>
	 			<tr>
	 				<th>Password :</th>
	 				<td align="center"><input type="password" name="pass1" value="<?php if(isset($_POST['valid_register'])) echo $_POST['pass1'];?>"/></td>
	 			</tr>

	 			<tr>
	 				<th>Re-Type Password :</th>
	 				<td align="center"><input type="password" name="pass2" value="<?php if(isset($_POST['valid_register'])) echo $_POST['pass2'];?>"/></td>
	 			</tr>
	 			<tr>
	 				<th>Date of birth :</th>
	 				<td align="center"><input type="date" name="date" value="<?php if(isset($_POST['valid_register'])) echo $_POST['date'];?>"/>
	 			</tr>
	 			<tr>
	 				<th>Address :</th>
	 				<td align="center"><input type="text" name="address" value="<?php if(isset($_POST['valid_register'])) echo $_POST['address'];?>"/></td>
	 			</tr>
	 			<tr>
	 				<th>City :</th>
	 				<td align="center"><input type="text" name="city" value="<?php if(isset($_POST['valid_register'])) echo $_POST['city'];?>"></td>
	 			</tr>
	 			<tr>
	 				<th>Postal Code :</th>
	 				<td align="center"><input type="text" name="postal" value="<?php if(isset($_POST['valid_register'])) echo $_POST['postal'];?>"></td>
	 			</tr>
	 			<tr>
	 				<th>Country :</th>
	 				<td align="center">
	 					<select name = "country">
	 						<?php
	 							foreach ($countries as $key => $value) {
	 								if ($_POST['valid_register']) {
	 									if ($value == $_POST['country']) {
		 									echo "<option selected>".$value."</option>";
		 								}	
	 								}
	 								else
	 								{
		 								if ($value == 'United Kingdom') {
		 									echo "<option selected>".$value."</option>";
		 								}	
		 							}
		 							echo "<option>".$value."</option>";
	 							}


	 						?>
	 					</select>
	 				</td>
	 			</tr>
	 			<tr>
	 				<td colspan="2" align="center"><input type="submit" class="button_design" name="valid_register" value="Register"/	></td>
	 			</tr>
	 		</table>	
 		</form>
 	</div>
</div>
 </body>
 </html>