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
	$color=array("A"=>"40","B"=>"Pizza");
	echo $color["A"];
	?><br>
	
	<?php
	echo $color["B"];
	?><br>
	
	<hr>
	
	<?php
	$food=array("Asian"=>"Pizza","American"=>"Udon");
	?><br>
	<?php
	echo $food["Asian"]. " is for " . $food["American"];
	?>
	
	<pre>
	<?php 

	echo print_r($food);

	?>
	</pre>
</body>
</html>