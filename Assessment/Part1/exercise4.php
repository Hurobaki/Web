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
	<title>PHP Assessment Exercise 1-4</title>
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
	<h2>Message of the Day</h2>

	<?php
	$personInCharge = array('Nobody',
				'Russell Campion',
				'Fiona Knight', 
				'Philip Windridge', 
				'Fiona Knight',
				'Russell Campion',
				'Nobody');

	$day = date('w');
		switch ($day)
 	{
	   case 1 : echo "Today is Monday and the person in charge is $personInCharge[1]";
	            break;
	   case 2 : echo "Today is Tuesday and the person in charge is $personInCharge[2]";
	            break;
	   case 3 : echo "Today is Wednesday and the person in charge is $personInCharge[3]";
	            break;
	   case 4 : echo "Today is Thursday and the person in charge is $personInCharge[4]";
	            break;
	   case 5 : echo "Today is Friday and the person in charge is $personInCharge[5]";
	            break;
	   case 6 : echo "Today is Saturday and the person in charge is $personInCharge[6]";
	            break;
	   case 7 : echo "Today is Sunday and the person in charge is $personInCharge[0]";
	            break;
	  default : echo "Not an allowable day number";
	            break;
  	}
  ?>

  <h2>The following modules are available at Level 4</h2>
  <ul>
  <?php
  	$moduleNames = array('Web Design and Development',
			'Introduction to Web Programming',
			'Introduction to Web Development',
			'Introduction to Software Development',
			'Object Oriented and Event Driven Programming',
			'Hardware, Networks and Servers',
			'Maths For Interactive Computing',
			'System Modelling',
			'Introduction to Design Concepts for Computing',
			'Introduction to Digital Media');
  	sort($moduleNames);
  	foreach ($moduleNames as $key) {   	
  		echo "<li> $key</li>";
  	}



	?>
	</ul>
</body>
</html>