<?php
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
		<title>Exercice 2</title>  
	</head>
	<body>
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