<?php
session_start();

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


if(isset($_POST['logon']))
{
    session_unset();
    $_SESSION['login'] = $_POST['login'];
    $_SESSION["mdp"] = $_POST['password'];
}

if(!isset($_SESSION['login']))
{
    $_SESSION["guest"] = "guest";
    $_SESSION["mdp"] = "mdp";
}

if(isset($_POST['logout']))
{
    session_unset();
    $_SESSION["guest"] = "guest";
    $_SESSION["mdp"] = "mdp";
}

if(!isset($_SESSION['exo']))
{
    $_SESSION['exo'] = "exercise4.php";
}

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
  <meta charset='utf-8'>
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Assessment Part 3</title>
  

</head>
<body>
	
	<h1>Exercise 1</h1>
  <fieldset id="bingo">
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

<h1>Exercise 3</h1>
<fieldset>
    <?php 
    if (isset($_SESSION['login'])) 
    {
        echo "<p>You are connected as <b>".$_SESSION['login']."</b>.</p>";
    }
    else
    {
        echo "<p><b>Guest</b> you are not connected.</p>";
    }

    ?>
    <ul id="onglets">
        <li class="active"><a href="welcome.php"> Page 2 </a></li>
        <?php 
        if(isset($_SESSION['login']))
        {
            echo "<li><a href='registred.php'> Page 3 </a></li>";
        }
        ?>
    </ul>


    <form method="post">
        <table id="login">
         <tr>
             <th>Login</th>
             <td height="50"><input type="text" name="login"/></td>
         </tr>
         <tr>
             <th>Password</th>
             <td height="50"><input type="password" name="password"/></td>
         </tr>
         <tr>
             <td height="50" colspan="2"><input type="submit" name="logon"/></td>
         </tr>
         <tr>
             <td height="50" colspan="2">Here's the way to logout : <input type="submit" name="logout" value ="Logout"/></td>
         </tr>
     </table>
 </form>

</fieldset>

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
