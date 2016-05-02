<?php 
	if(isset($_POST['submit']))
	{
		$cols = $_POST['cols'];
		$rows = $_POST['row'];
	}
	else
	{
		$cols = 10;
		$rows = 10;
	}

	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Exercise 1</title>
	<style type="text/css">
		table
		{
			border-collapse: collapse;
			width: 50%;
			text-align: center;
			margin-top: 10px;	
		}

		fieldset
		{
			width: 20%;
		}
	</style>
</head>

<body>
<div>
<h1>Multiplication Table</h1>

<form method="post">
<fieldset>
	<legend>Changements</legend>
		<p><label>Enter number of rows : </label><input type="text" name="row" required></input></p>
		<p><label>Enter number of cols : </label><input type="text" name="cols" required></input></p>
		<p><input type="submit" name="submit"></input></p>
</fieldset>
</form>
	<?php
		

	echo "<table border = 1>";

        for ($r = 1; $r <= $rows; $r++){

        	echo'<tr>';

            for ($c = 1; $c <= $cols; $c++)
                echo '<td>' .$c*$r.'</td>';

 			echo '</tr>'; 

        }

    echo"</table>";

    ?>
</div>
</body>
</html>