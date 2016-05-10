<?php 
	session_start();
    if($_SESSION['user'] == 'guest')
        header("refresh:0;url=index.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Cars List</title>
	<style type="text/css">
		.content_div
		{
			border-style: solid;
			border-color: grey;
			width: 40%;
			height: 210px;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 50px;
		}

		.id_div
		{
			display:block;
			float:left;
			border-style: solid;
			border-color: grey;
			width:40%;
			height:90%;
			margin: 10px 0 10px 10px;
		}
 
		img 
		{
			width:100%;
		  	height:100%;
		  	display:block;
		}

		.info
		{
			text-align: center;
			margin: 20px 0 0 0;
		}

        

	</style>

</head>
<body>
<!-- START DIV BANNER -->
<div id="banner">
	<!-- START BANNER-CONTENT -->
    <div id="banner-content">
    	<h1>All our cars</h1>
    	<i>Vi Veri Veniversum Vivus Vici</i>
    	<span class='span-banner'>
    		<?php if($_SESSION['user'] == 'guest')
    				echo "You're not connected";
    				else
    				echo "You're connected as ".$_SESSION['user']; ?>
    	</span>
    </div>
    <!-- END BANNER-CONTENT -->
</div>
<!-- END DIV BANNER -->


<?php include "include/tabs.html";?>

        <!-- START DIV TFHEADER -->
<div id="tfheader">
		<form id="tfnewsearch" method="post">
		    <input type="text" class="tftextinput" name="search-text" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton" name="search"/>
		</form>
	<div class="tfclear"></div>
</div>
<!-- END DIV TFHEADER -->


<?php
	include "connection.php";
        if(isset($_POST['search']))
        {
            $req = $bdd->prepare('SELECT * FROM cars WHERE make LIKE :search OR model LIKE :search ');
           $req -> execute(array(
           'search' => '%'.$_POST['search-text'].'%'));
        // Stock result as an array by fetch() method
        while ($resultats = $req -> fetch()) 
        {
            echo "<div class='content_div'>";
                echo "<div class='id_div'>";
                    echo '<img src="images/'.htmlentities($resultats['picture']).'" alt="'.htmlentities($resultats['picture']).'">';
                echo '</div>';
                echo '<p class="info"><strong>Car\'s informations</strong></p>';
                echo '<p class="info">Car\'s make <strong>'.htmlentities($resultats['make']).'</strong></p>';
                echo '<p class="info">Car\'s model <strong>'.htmlentities($resultats['model']).'</strong></p>';
                echo '<p class="info">Car\'s year <strong>'.htmlentities($resultats['year']).'</strong></p>';
                echo '<p class="info">Car\'s color <strong>'.htmlentities($resultats['colour']).'</strong></p>';
            echo '</div>';	
        }
        }
        else
        {
            $req = $bdd->prepare('SELECT * FROM cars');
           $req -> execute();
        // Stock result as an array by fetch() method
        while ($resultats = $req -> fetch()) 
        {
            echo "<div class='content_div'>";
                echo "<div class='id_div'>";
                    echo '<img src="images/'.htmlentities($resultats['picture']).'" alt="'.htmlentities($resultats['picture']).'">';
                echo '</div>';
                echo '<p class="info"><strong>Car\'s informations</strong></p>';
                echo '<p class="info">Car\'s mark <strong>'.htmlentities($resultats['make']).'</strong></p>';
                echo '<p class="info">Car\'s model <strong>'.htmlentities($resultats['model']).'</strong></p>';
                echo '<p class="info">Car\'s year <strong>'.htmlentities($resultats['year']).'</strong></p>';
                echo '<p class="info">Car\'s color <strong>'.htmlentities($resultats['colour']).'</strong></p>';
            echo '</div>';	
        }
    }
	
?>

<footer><p align='center'>cars.sales@copyright</p></footer>

</body>
</html>