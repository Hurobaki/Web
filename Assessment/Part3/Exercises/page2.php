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
	<title>Page2</title>
</head>
<body>
	<h1>Page 2</h1>
	<fieldset>
		<legend align="center">Stage</legend>
		<form method="post" action='page3.php'>
			<?php
			if(isset($_POST['next1']))
			{
				$savename = $_POST['save_name'];
				$saveaddress = $_POST['save_address'];
				echo "<p>
				<table>
					<tr>
						<th>Date of Birth</th>
						<td height='50'><input type='date' name='birth'/></td>
					</tr>
					<tr>
						<th>Username</th>
						<td height='50'><input type='text' name='username'/></td>
					</tr>
					<tr>
						<th>Password</th>
						<td height='50'><input type='password' name='password'/></td>
					</tr>
					<tr>
						<th>Mother's maiden name</th>
						<td height='50'><input type='text' name='mother'/></td>
					</tr>
					<tr>
						<input type='hidden' name = 'save_name' value='$savename'/>
						<input type='hidden' name = 'save_address' value='$saveaddress'/>
						<td height='30' colspan='2'>
							<input type='submit' name='next2' value='Next stage'/>
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