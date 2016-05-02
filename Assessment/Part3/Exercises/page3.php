<?php
session_start();
if(isset($_POST['close']))
{
	header( "refresh:0;url=".$_SESSION['exo'] );
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Page3</title>
</head>
<body>
	<h1>Page 3</h1>
	<fieldset>
		<legend align="center">Stage</legend>
		<form method="post" action='page4.php'>
			<?php
			if (isset($_POST['next2']))
			{
				$savename = $_POST['save_name'];
				$saveaddress = $_POST['save_address'];
				$savebirth = $_POST['birth'];
				$saveuser = $_POST['username'];
				$savepass = $_POST['password'];
				$savemother = $_POST['mother'];

				echo "<p>
				<table>
					<tr>
						<td height='60' colspan='2'>By continuing you agree to the non-disclosure policy, under penalty of prosecution.                                          
						Furthermore, you acknowledge the existence of a higher being who is none other than me.</td>
					</tr>
					<tr>

						<td height='50' colspan='2'>I have read and accept the conditons <input type='checkbox' required/></td>
					</tr>
					<tr>
						<td height='50' colspan='2'>Enter your email : <input type='email' name='email'/></td>
					</tr>
					<tr>
						<input type='hidden' name = 'save_name' value='$savename'/>
						<input type='hidden' name = 'save_address' value='$saveaddress'/>
						<input type='hidden' name = 'save_birth' value='$savebirth'/>
						<input type='hidden' name = 'save_user' value='$saveuser'/>
						<input type='hidden' name = 'save_pass' value='$savepass'/>
						<input type='hidden' name = 'save_mother' value='$savemother'/>
						<td height='30' colspan='2'>
							<input type='submit' name='next3' value='Last stage'/>
							<input type='submit' name='close' value='Cancel'/>
						</td>
					</tr>
				</table>
			</p>";
		}
		?>
	</form>
</fieldset>

</body>
</html>