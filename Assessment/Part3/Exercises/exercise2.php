<?php
    $array1 = array();
    $array2 = array();
    $array3 = array();
    $array4 = array();
    $array5 = array();

    $rand;

    while (count($array1) < 5) {
        $rand = rand(1,15);
        if(!(in_array($rand, $array1)))
        {
            $array1[] = $rand;
        }
    }
    sort($array1);

    while (count($array2) < 5) {
        $rand = rand(16,30);
        if(!(in_array($rand, $array2)))
        {
            $array2[] = $rand;
        }
    }
    sort($array2);

    while (count($array3) < 5) {
        $rand = rand(31,45);
        if(!(in_array($rand, $array3)))
        {
            $array3[] = $rand;
        }
    }
    sort($array3);

    while (count($array4) < 5) {
        $rand = rand(46,60);
        if(!(in_array($rand, $array4)))
        {
            $array4[] = $rand;
        }
    }
    sort($array4);

    while (count($array5) < 5) {
        $rand = rand(61,75);
        if(!(in_array($rand, $array5)))
        {
            $array5[] = $rand;
        }
    }
    sort($array5);

    if(isset($_POST['submit']))
    {
        $save = $_POST['save'];
        $nb = $_POST['nb'];
        
        $temp = $save;
        $flag = true;
        
        switch($_POST['submit'])
        {
            case "Add":
            {
                $save += $nb;
                break;
            }
            
            case "Substract":
            {
                $save -= $nb;
                break;
            }
            
            case "Divide":
            {
                if($nb > 0)
                    $save /= $nb;
                else
                    $flag = false;
                break;
            }
            
            case "Multiply":
            {
                $save *= $nb;
                break;
            }
            
        }
    }
    else
    {
        $save = null; 
        $flag = true;
    }

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
        <link rel="stylesheet" type="text/css" href="style.css">
		<title>Assessment Part 3</title>
        

	</head>
<body>
	
	<h1>Exercise 1</h1>
		<fieldset>
            <legend>Bingo Card</legend>
    			<table id="bingotable">
    				<thead>
    					<tr>
    						<th>B</th>
    						<th>I</th>
    						<th>N</th>
    						<th>G</th>
    						<th>O</th>
    					</tr>
    				</thead>
    				<tbody>
    					<?php

                            for($i=0; $i < 5; $i++)
                            {
                                echo "<tr>";
                                    
                                    for($j=1; $j <= 5; $j++)
                                    {
                                        if($j == 3 && $i == 2)
                                            echo "<td> FREE </td>";
                                        else
                                        {
                                            switch($j)
                                            {
                                                case 1:
                                                {
                                                    echo "<td>".$array1[$i]."</td>";
                                                break;
                                                }
                                                
                                                case 2:
                                                {
                                                    echo "<td>".$array2[$i]."</td>";
                                                break;
                                                }         
                                                case 3:
                                                {
                                                    echo "<td>".$array3[$i]."</td>";
                                                break;
                                                }         
                                                case 4:
                                                {
                                                    echo "<td>".$array4[$i]."</td>";
                                                break;
                                                }          
                                                case 5:
                                                {
                                                    echo "<td>".$array5[$i]."</td>";
                                                break;
                                                }
                                            }
                                        }
                                        
                                    }
                                echo "</tr>";
                            }
    					?>
    				</tbody>
    			</table>
                
    			<p>
                <form method=post>
    		         <input type="submit" value="Change"/>
    			</form>
                </p>
    	</fieldset>

    <h1>Exercise 2</h1>
        <fieldset>
            <legend>Calculator</legend>
                <form method="post">
                    <p><label>Your number : </label><input type="number" name="nb"/>
                        <input type="hidden" name="save" value="<?php echo $save; ?>"/>
                        <input type="submit" name="submit" value="Add"/>
                        <input type="submit" name="submit" value="Substract"/>
                        <input type="submit" name="submit" value="Divide"/>
                        <input type="submit" name="submit" value="Multiply"/>
                        <input type="submit" name="reset" value="Reset"/>
                    </p>
                </form>
            <?php
                if($flag)
                {
                    if(!empty($save))
                    {
                         switch($_POST['submit'])
                            {
                                case "Add":
                                {
                                    if(!empty($temp))
                                        echo "Display answer : ".$temp." + ".$nb." = ".$save;
                                    else
                                        echo "Display answer : 0 + ".$nb." = ".$save; 
                                    break;
                                }

                                case "Substract":
                                {
                                    if(!empty($temp))
                                        echo "Display answer : ".$temp." - ".$nb." = ".$save;
                                    else
                                        echo "Display answer : 0 - ".$nb." = ".$save;
                                    break;
                                }

                                case "Divide":
                                {
                                    if(!empty($temp))
                                        echo "Display answer : ".$temp." / ".$nb." = ".$save;
                                    else
                                        echo "Display answer : 0 / ".$nb." = ".$save;
                                    break;
                                }

                                case "Multiply":
                                {
                                    echo "Display answer : ".$temp." * ".$nb." = ".$save;
                                    break;
                                }

                            }
                    }
                }
                else
                {
                    echo "You're trying to divide by 0 !<br/>";
                    echo "Here's your last result : ".$save;
                }
            ?>
        </fieldset>
	</body>
</html>
