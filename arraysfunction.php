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
	$color=array("red", "blue", "green");
	array_pop($color);
	array_push($color,"black","white,pink","gray","orange");
	print_r($color);
	?><br>
	
	<hr>
	
	<?php $numbers=array(45,23,2,3,5,100, 11,1000,74); ?><br>
	<?php echo count($numbers); ?><br>
	Max: <?php echo max($numbers); ?><br>
	Min: <?php echo min($numbers); ?><br>
	Is the number 100 in the array? Yes or No: <?php echo in_array(100,$numbers); ?><br>
	<?php print_r($numbers); ?><br><br>

	<hr>
	
	<?php echo sort($numbers); ?><br>
	<?php print_r($numbers); ?><br><br>
	
	<hr>
	
	<?php echo rsort($numbers); ?><br>
	<?php print_r($numbers); ?><br><br>
	
	<hr>
	
	Implode: <?php $quote=array("Never","Give","UP","in","life"); ?>
	<?php echo implode(" ",$quote); ?><br><br>
	
	Explode (DNF): <?php $phrase="Never Give UP in life"; ?>
	<?php explode($phrase); ?><br>
	Explode: <?php print_r(explode(" ",$phrase)); ?><br><br>

</body>
</html>