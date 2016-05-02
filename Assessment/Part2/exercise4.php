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

    if(isset($_POST['guess']))
	{
		$x = $_POST['x'];
		$num = $_POST['num'];
	}
	else
	{
		$x = null;
		$num = null;
	}

    if(isset($_POST['submit3']))
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
            width: 50%;
        }
        
	</style>
</head>

<body>
<form method="post">   
<h1>Exercise 1</h1>
<h2>Multiplication Table</h2>
    <fieldset id = "field1">
        <legend>Changements</legend>
            
                    <p><label>Enter number of rows : </label><input type="number" min="1" name="row"></input></p>
                    <p><label>Enter number of cols : </label><input type="number" min="1" name="cols"></input></p>
                    <p><input type="submit" name="submit1"></input></p>
         
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

 <h1>Exercise 2</h1>

    <fieldset id="field2">
        <legend>Grade</legend>
      
                <p>
                    <label>Grade: </label><input type = "number" name = "grade" />
                    <label>Level: 
                        <select name = "scale">
                                <option value="1">Undergraduate Modular Framework Awards</option>
                                <option value="2">HND - Current Scheme</option>
                                <option value="3">Masters</option>
                        </select>
                     <input type = "submit" name = "submit2"/>                       
                </p>  
    

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

<h1>Exercise 3</h1>

        <fieldset>
           <legend>Guessing Number</legend>
            
                <?php
                    if (!$x) 
                    { 
                        echo "Please Choose a Number 1-100 <p>"; 
                        $x = rand (1,100) ; 
                    }
                    else {
                        if($num > 100)
                        {
                            echo "Please choose a number between 1 and 100";
                        }
                        else
                        {
                            if ($num > $x) 
                            {
                                echo "Your number, $num, is too high. Please try again<p>";
                            } 
                            elseif ($num == $x) 
                            {
                                echo "Congratulations you have won!<p>";
                                echo "To play again, please Choose a Number 1-100 <p>"; 
                                $x = rand (1,100) ; 
                            }
                            else  
                            {
                                echo "Your number, $num, is too low. Please try again<p>";
                            }
                        }
                     } 
                ?>
            

           <p>
               <input type = "number" name="num"/>
               <input type = "submit" name = "guess"/>
               <input type = "hidden" name = "x" value="<?php echo $x ?>"/>
           </p> 
  
        
        <p>Just a tip to see that the number to find isn't changing : <?php echo $x; ?></p>
    
        </fieldset>

<h1>Exercise 4</h1>
    
		<fieldset>
			<legend>How many input ?</legend>
            
     
                <p>
                    <label>Number of inputs : </label><input type="text" name="number"/>
                    <input type="submit" name="submit3"></input></p>

                    <?php

                
                        for ($i=1; $i < $number+1; $i++)
                        { 
                            echo "<p><label>Input number $i : </label><input type='text' name = 'names[]' id = 'txt$i'></input></p>";
                        }

                        echo "<input type = 'hidden' name = 'hide' value = '$number'></input>";
                        echo "<input type = 'submit' name = 'send' value = 'Send'></input>";
            

                        if(isset($_POST['send']))
                        {
                            $names = $_POST['names'];
                            sort($names);
                            
                            echo "<p class = 'display'>Message sort ascending : ";

                            foreach ($names as $key ) {
                                echo $key.' ';
                            }

                            echo "</p>";
                            
                            rsort($names);
                            echo "<p class = 'display'>Message sort descending : ";

                            foreach ($names as $key ) {
                                echo $key.' ';
                            }

                            echo "</p>";
                        }
                    ?>
    
		</fieldset>
</form>
</body>
</html>