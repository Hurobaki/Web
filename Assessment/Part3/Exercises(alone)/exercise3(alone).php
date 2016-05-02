<?php 

    session_start();
    

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
    print_r($_SESSION);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>Exercice 3</title> 
        <style>
            #onglets
                {
                    font : bold 11px Batang, arial, serif;
                    list-style-type : none;
                    padding-bottom : 24px; /* à modifier suivant la taille de la police ET de la hauteur de l'onglet dans #onglets li */
                    border-bottom : 1px solid #9EA0A1;
                    margin-left : 0;
                    width:30%;
                }
            #onglets li
                {
                    float : left;
                    width: 100px;
                    height : 21px; /* à modifier suivant la taille de la police pour centrer le texte dans l'onglet */
                    background-color: #F4F9FD;
                    margin : 2px 2px 0 2px !important;  /* Pour les navigateurs autre que IE */
                    margin : 1px 2px 0 2px;  /* Pour IE  */
                    border : 1px solid #9EA0A1;
                }
            #onglets li.active
            {
                border-bottom: 1px solid #fff;
                background-color: #fff;
            }
            #onglets a
            {
                display : block;
                color : #666;
                text-decoration : none;
                padding : 4px;
            }
            #onglets a:hover
            {
                background : #fff;
            }

        </style>
	</head>
<body>
    
    <h1>Exercise 3</h1>
    <?php 
        if (isset($_SESSION['login'])) 
        {
            echo "<p>You are connected as ".$_SESSION['login'].".</p>";
        }
        else
        {
            echo "<p>Guest you are not connected.</p>";
        }

    ?>
        <div id="menu">
            <ul id="onglets">
                <li class="active"><a href="login.php"> Login </a></li>
                <li><a href="welcome.php"> Page 2 </a></li>
                <?php 
                    if(isset($_SESSION['login']))
                    {
                        if($_SESSION['login'] == "Fred" && $_SESSION['mdp'] == "Bloggs")
                            echo "<li><a href='registred.php'> Page 3 </a></li>";
                    }
                ?>
            </ul>
        </div>
</body>
</html>