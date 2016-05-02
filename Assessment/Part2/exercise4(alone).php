<?php
	if(isset($_POST['submit']))
	{
		if($_POST['number'] == 0)
		{
			$number = 3;
		}
		else
		{
			$number = $_POST['number'];
		}
		
	}
	elseif (isset($_POST['send'])) 
	{
		if($_POST['hide'] == 0)
		{
			$number = 3;
		}
		else
		{
			$number = $_POST['hide'];
		}
		
	}
	else
	{
		$number = 3;
	}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>Exercise 4</title>
</head>
<body>
    
    <h1>Exercise 4</h1>
    
	<div>
		<fieldset>
			<legend>How many input ?</legend>
			<form method="post">
			<p><label>Number of inputs : </label><input type="text" name="number"></input>
			<input type="submit" name="submit"></input></p>
			</form>
			
                <?php

                    echo "<form method = 'post'>";
                    for ($i=1; $i < $number+1; $i++)
                    { 
                        echo "<p><label>Input number $i : </label><input type='text' name = 'names[]' id = 'txt$i'></input></p>";
                    }

                    echo "<input type = 'hidden' name = 'hide' value = '$number'></input>";
                    echo "<input type = 'submit' name = 'send' value = 'Send'></input>";
                    echo "</form>";

                    if(isset($_POST['send']))
                    {
                        $names = $_POST['names'];
                        sort($names);

                        echo "<p>Message : ";

                        foreach ($names as $key ) {
                            echo $key.' ';
                        }
                        
                        echo "</p>";
                    }
                ?>
    
		</fieldset>
	</div>
</body>
</html>