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

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>Exercise 1</title>
        
        <style>
            table, th
            {
                border-collapse: collapse;
                text-align:center;
                
            }
            td, th
            {
                text-align: center;
                border: 1px solid black;
                min-width: 30px;
            }
            
            #bingo
            {
                width:30%;
            }
            
        </style>
	</head>
	<body>
	
		<h1>Exercise 1</h1>
		<fieldset id="bingo">
            <legend>Bingo Card</legend>
			<table>
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
	</body>
</html>
