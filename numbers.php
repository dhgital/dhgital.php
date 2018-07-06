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
	
	$FirstNumber=3;
	$SecondNumber=4;
	$ThirdNumber=3.65478;
	
	?>
	
	<?php echo $ThirdNumber+9-6; ?><br>
	<?php echo 3/1.6; ?><br>
	<?php echo 7/0; ?><br><br>
	<?php echo 6/2; ?><br>
	
	<hr>
	
	Ceil: <?php echo ceil($ThirdNumber); ?><br>
	Floor: <?php echo floor($ThirdNumber); ?><br>
	
	<?php echo "is {$FirstNumber} an integer? ". is_int($FirstNumber); ?><br>
	<?php echo "is {$ThirdNumber} an integer? ". is_int($ThirdNumber); ?><br><br>

	<?php echo "is {$FirstNumber} an float? ". is_float($FirstNumber); ?><br>
	<?php echo "is {$ThirdNumber} an float? ". is_float($ThirdNumber); ?><br><br>
	
	<?php echo "is {$FirstNumber} numberic? ". is_numeric($FirstNumber); ?><br>
	<?php echo "is {$ThirdNumber} numeric ? ". is_numeric($ThirdNumber); ?><br><br>
	
	<hr>
	
	Binary: <?php echo decbin(3); ?><br>
	Decimal: <?php echo bindec(11); ?><br>
	Square Root: <?php echo sqrt(8); ?><br>
	Absolute Value: <?php echo abs(-50+100); ?><br>
	Power: <?php echo pow(10, 5); ?><br>	
	Modulas: <?php echo fmod(15,7); ?><br>
	Random: <?php echo rand(); ?><br>
	Random within 500 and 1600: <?php echo rand(500,1600); ?><br><br>
	
	<?php echo $SecondNumber+=2; ?><br>
	Increment: <?php echo $SecondNumber++; ?><br>
	Decrement: <?php echo $SecondNumber--; ?><br><br>
	
	<?php echo $SecondNumber+2; ?><br>
	<?php echo $SecondNumber+=2; ?><br>
	<?php echo $SecondNumber++; ?><br>
	<?php echo $SecondNumber=$SecondNumber+2; ?><br>
</body>
</html>