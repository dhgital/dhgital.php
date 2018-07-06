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

	<?php
	
	echo "1 <br>";
	echo "2 <br>";
	echo "3 <br>";
	echo "4 <br>";
	echo "5 <br>";
	echo "6 <br><br>";
	
	?>
	
	<hr>

	<?php
	
	for($i=1; $i<10; $i++) {
		echo "{$i} is printing on screen. <br>";
	}
	
	?>
	
	<hr>

	<?php
	
	for($i=1; $i<=10; $i++) {
		echo "{$i} is printing on screen. <br>";
	}
	
	?>
	
	<hr>

	<?php
	
	$n=2;
	
	for($i=1; $i<=10; $i++) {
		$result=$n*$i;
		echo $n . " * " . $i . " = " . $result . "<br>";
	}
	
	?>
	
	<hr>

	<?php
	
	$n=2;
	
	for($i=1; $i<=20; $i++) {
		$result=$n*$i;
		echo $n . " * " . $i . " = " . $result . "<br>";
	}
	
	?>
	
</body>
</html>