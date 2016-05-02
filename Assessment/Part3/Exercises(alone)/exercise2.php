<?php
    $double = array();
    $rand;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>Exercice 1</title>
        
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
	
		<h1>Exercice 1</h1>
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

                        for($i=1; $i <= 5; $i++)
                        {
                            echo "<tr>";
                                
                                for($j=1; $j <= 5; $j++)
                                {
                                    if($j == 3 && $i == 3)
                                        echo "<td> FREE </td>";
                                    else
                                    {
                                        switch($j)
                                        {
                                            case 1:
                                            {
                                                do
                                                {
                                                    $rand = rand(1,15);
                                                }
                                                while(in_array($rand,$double));
                                                $double[] = $rand;
                                                echo "<td>".$rand."</td>";
                                            break;
                                            }
                                            
                                            case 2:
                                            {
                                                do
                                                {
                                                    $rand = rand(16,30);
                                                }
                                                while(in_array($rand,$double));
                                                $double[] = $rand;
                                                echo "<td>".$rand."</td>";
                                            break;
                                            }         
                                            case 3:
                                            {
                                                do
                                                {
                                                    $rand = rand(31,45);
                                                }
                                                while(in_array($rand,$double));
                                                $double[] = $rand;
                                                echo "<td>".$rand."</td>";
                                            break;
                                            }         
                                            case 4:
                                            {
                                                do
                                                {
                                                    $rand = rand(46,60);
                                                }
                                                while(in_array($rand,$double));
                                                $double[] = $rand;
                                                echo "<td>".$rand."</td>";
                                            break;
                                            }          
                                            case 5:
                                            {
                                                do
                                                {
                                                    $rand = rand(61,75);
                                                }
                                                while(in_array($rand,$double));
                                                $double[] = $rand;
                                                echo "<td>".$rand."</td>";
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
