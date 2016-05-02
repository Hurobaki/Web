<?php
if(!isset($_POST['submit']))
{
	$title = "Mr";
	$name = "Philip Windridge";
	$email = "p.c.windridge@staffs.ac.uk";
	$address[0] = "The Ocatagon";
	$address[1] = "Beaconside";
	$address[2] = "Stafford";
	$postcode = "ST18 0DG";
	$telephone = "01785 353419";
}
else
{
	$title = $_POST['title'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$address[0] = $_POST['adr0'];
	$address[1] = $_POST['adr1'];
	$address[2] = $_POST['adr2'];
	$postcode = $_POST['postcode'];
	$telephone = $_POST['tel'];
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>PHP Assessment Exercise 1-2</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>PHP Assessment Exercises: Set 1</h1>
	<h2>Contact Details</h2>
	<address><?php echo "$title   $name  $email  $address[0] $address[1] $address[2] $postcode $telephone<br/>";?></address>
	<h2>Details Amendment</h2>
	<form method="post" id="formulaire" name="form">
		<fieldset>
			<legend>Update Details</legend>
			<p><input type="text" name="title" value="<?php echo $title;?>"></input>  <input type="text" name="name" value="<?php echo $name;?>"></input>  <input type="text" name="email" value="<?php echo $email;?>"></input> <input type="text" name="adr0" value="<?php echo $address[0];?>"></input></p>
			<p><input type="text" name="adr1" value="<?php echo $address[1];?>"></input>  <input type="text" name="adr2" value="<?php echo $address[2];?>"></input>  <input type="text" name="postcode" value="<?php echo $postcode;?>"></input>  <input type="text" name="tel" value="<?php echo $telephone;?>"></input></p>
			<input type="submit" name="submit" value="Update" ></input>
		</fieldset>
	</form>
</body>
</html>