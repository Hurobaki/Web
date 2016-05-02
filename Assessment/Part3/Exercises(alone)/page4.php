<?php
    if(isset($_POST['close']))
    {
        header( "refresh:0;url=exercise4(alone).php" );
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="exercise4.css">
	<title>Page3</title>
</head>
<body>
   <h1>Page 4</h1> 
	<fieldset>
	    <legend align="center">Stage</legend>
			<form method="post" action='exercise4(alone).php'>
	            <?php
	           if (isset($_POST['next3']))
					{
						$savename = $_POST['save_name'];
						$saveaddress = $_POST['save_address'];
						$savebirth = $_POST['save_birth'];
						$saveuser = $_POST['save_user'];
						$savepass = $_POST['save_pass'];
						$savemail = $_POST['email'];

		
						echo "<p>
								<h2 align='center'>Confirmation Page</h2>
								<table>
					               <tr>
					                   <th>Your name</th>
					                   <td height='50'><input type='text' name='name' value='$savename'/></td>
					               </tr>
					               <tr>
					                   <th>Your address</th>
					                   <td height='50'><input type='text' name='address' value='$saveaddress'/></td>
					               </tr>
					               <tr>
					                   <th>Your date of birth</th>
					                   <td height='50'><input type='date' name='birth' value='$savebirth'/></td>
					               </tr>
					               <tr>
					                   <th>Your username</th>
					                   <td height='50'><input type='text' name='user' value='$saveuser'/></td>
					               </tr>
					               <tr>
					                   <th>Your password</th>
					                   <td height='50'><input type='text' name='password' value='$savepass'/></td>
					               </tr>
					               <tr>
					                   <th>Your email</th>
					                   <td height='50'><input type='email' name='email' value='$savemail'/></td>
					               </tr>
					                <tr>
					                	<input type='hidden' name = 'save_name' value='$savename'/>
					                	<input type='hidden' name = 'save_address' value='$saveaddress'/>
					                   <td height='30' colspan='2'><input type='submit' name='end' value='Done'/>
	                                   <input type='submit' name='close' value='Cancel'/></td>
					               </tr>
			            		</table>
			            		</p>";
					}
				
	            ?>
	        </form>
	</fieldset>
	    
</body>
</html>