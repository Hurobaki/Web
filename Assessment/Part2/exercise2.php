<?php 
	if(isset($_POST['submit1']))
	{
		$cols = $_POST['cols'];
		$rows = $_POST['row'];
	}
	else
	{
		$cols = 10;
		$rows = 10;
	}

$array1 = array("Grade Points 13 - 15 First Class Honours","Grade Points 10 - 12 Upper Second Class Honours","Grade Points 7 - 9 Lower Second Class Honours","Grade Points 4 - 6 Third Class Honours","Grade Points 0 - 3 Fail");
$array2 = array("Distinction - grade points 13 - 15 ","Merit - grade points 8 - 12 ","Pass - grade points 4 - 7 ","Fail - grade points 1 - 3");
$array3 = array("Distinction - grade points 13 - 15","Pass with Merit - grade points 10 - 12","Pass - grade points 7 - 9 ","Failure - grade points 1 – 6");
	
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>Assessment Part 2</title>
	<style type="text/css">
		table
		{
			border-collapse: collapse;
			width: 50%;
			text-align: center;
			margin-top: 10px;	
		}

		#field1
		{
			width: 20%;
		}
        
        #field2
        {
            width: 35%;
        }
	</style>
</head>

<body>
    
<div>
    
<h1>Exercise 1</h1>
<h2>Multiplication Table</h2>
    <fieldset id = "field1">
        <legend>Changements</legend>
            <form method="post">
                    <p><label>Enter number of rows : </label><input type="number" name="row" required></input></p>
                    <p><label>Enter number of cols : </label><input type="number" name="cols" required></input></p>
                    <p><input type="submit" name="submit1"></input></p>
            </form>
    </fieldset>

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

 <h1>Exercise 2</h1>

    <fieldset id="field2">
        <legend>Grade</legend>
            <form method = "post">
                <p>
                    <label>Grade: </label><input type = "number" name = "grade" required/>
                    <label>Level: 
                        <select name = "scale">
                                <option value="1">Undergraduate Modular Framework Awards</option>
                                <option value="2">HND - Current Scheme</option>
                                <option value="3">Masters</option>
                        </select>
                     <input type = "submit" name = "submit2"/>                       
                </p>  
            </form>

            <?php
                if(isset($_POST['submit2']))
                {
                    $temp = $_POST['grade'];

                    switch($_POST['scale'])
                    {
                        case 1:
                            if($temp >= 70)
                                echo $array1[0];
                            elseif($temp >= 60 &&  $temp <= 69)
                                echo $array1[1];
                            elseif($temp >= 50 && $temp <= 59)
                                echo $array1[2];
                            elseif($temp >= 40 && $temp <= 49)
                                echo $array1[3];
                            else
                                echo $array1[4];
                            break;
                        case 2:
                            if($temp >= 70)
                                echo $array2[0];
                            elseif($temp >= 53 &&  $temp <= 69)
                                echo $array2[1];
                            elseif($temp >= 40 && $temp <= 52)
                                echo $array2[2];
                            else
                                echo $array2[3];
                            break;
                        case 3:
                            if($temp >= 70)
                                echo $array3[0];
                            elseif($temp >= 60 &&  $temp <= 69)
                                echo $array3[1];
                            elseif($temp >= 50 && $temp <= 59)
                                echo $array3[2];
                            else
                                echo $array3[3];
                            break;
                        default:
                            echo "How did you not choose a valide scale ?!";

                    }
                }
            ?>
    </fieldset>
</body>
</html>