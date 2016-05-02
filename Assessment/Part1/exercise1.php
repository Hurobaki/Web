<?php
$title = "Mr";
$name = "Philip Windridge";
$email = "p.c.windridge@staffs.ac.uk";
$address[0] = "The Ocatagon";
$address[1] = "Beaconside";
$address[2] = "Stafford";
$postcode = "ST18 0DG";
$telephone = "01785 353419";
?>


<!DOCTYPE html>
<html>
<head>
	<title>PHP Assessment Exercise 1-1</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>PHP Assessment Exercises: Set 1</h1>
	<h2>Contact Details</h2>
	<address><?php echo "$title   $name  $email  $address[0] $address[1] $address[2] $postcode $telephone<br/>";?></address>
</body>
</html>
