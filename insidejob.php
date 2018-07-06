<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php ?>
	<?php 
	
	 
	
	?><br>
	<?php echo " <br>"; ?>
	
	<hr>
	
	<?php $numbers=array(45,23,2,3,5,100, 11,1000,74); ?><br>
	<?php print_r($numbers); ?><br><br>
	
	<hr>
	
	<?php 
	echo current($numbers) ."<br>";
	next ($numbers);
	echo current($numbers). "<br>";
	next ($numbers);
	echo current($numbers). "<br>";
	next ($numbers);
	next ($numbers);
	echo current($numbers). "<br>";
	next ($numbers);
	echo current($numbers). "<br><br>";
	
	reset ($numbers);
	echo current($numbers). "<br>";
	end ($numbers);
	echo current($numbers). "<br>";
	next ($numbers);
	echo current($numbers). "___ (No number after end) <br>";
	?>

</body>
</html>