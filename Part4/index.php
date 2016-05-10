<?php 
	
	session_start();

	if(isset($_SESSION['nonce']))
		session_destroy();
	if(!$_SESSION)
		$_SESSION['user'] = "guest";


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Welcome</title>
</head>
<body id="welcome-body">
<!-- START DIV BANNER -->
<div id="banner">
	<!-- START BANNER-CONTENT -->
    <div id="banner-content">
    	<h1>Welcome <?php echo $_SESSION['user'];?></h1>
    	<i>Vi Veri Veniversum Vivus Vici</i>
    	<span class='span-banner'>
    		<?php 
                if($_SESSION['user'] == 'guest')
                    echo "You're not connected";
                else
    				echo "You're connected as ".$_SESSION['user']; 
            ?>
    	</span>
    </div>
    <!-- END BANNER-CONTENT -->
</div>
<!-- END DIV BANNER -->

<?php
	include "include/tabs.html";
?>

<!-- If wanna add content to index page
<div id="main-content">
 	<div id="register">	
 	</div>
</div>
-->
</body>
</html>