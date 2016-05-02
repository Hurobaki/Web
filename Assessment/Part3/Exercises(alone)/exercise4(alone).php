<?php
	if (isset($_POST['end']) || isset($_POST['close']))
	{
		foreach($_POST as $key => $value)
        {
            unset($_POST[$key]);
        }
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="exercise4.css">
	<title>Exercise4</title>
</head>
<body>
<h1>Exercise 4</h1>

<fieldset>
	<legend align="center">Stage</legend>
		<form method="post" action='page1.php'>
			<?php
			
				if(empty($_POST))
				{
					echo "<p align='center'>Click on the button below to begin stages.</p>";
					echo "<p align='center' ><input type='submit' name='start' value='Start'></input></p>";
				}
            ?>
		</form>
</fieldset>
</body>
</html>