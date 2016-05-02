<?php 

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
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>Exercise 3</title>
	<style type="text/css">
		fieldset
		{
			width: 20%;
		}
	</style>
</head>
<body>
    
<h1>Exercise 3</h1>
    <div id="guessing">
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
            
        <form method = "post"> 
           <p>
               <input type = "number" name="num"/>
               <input type = "submit" name = "guess"/>
               <input type = "hidden" name = "x" value="<?php echo $x ?>"/>
           </p> 
        </form> 
        
        <p>Just a tip to see that the number to find isn't changing : <?php echo $x; ?></p>
    
        </fieldset>
    </div>

</body>
</html>