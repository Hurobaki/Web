<?php
	session_start();

	if ($_SESSION) {
		session_unset();
		header( "refresh:0;url=index.php" );
	}
?>