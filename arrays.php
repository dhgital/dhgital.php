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
	$name=array('Danny', 'Tuyen', 'Calvin');
	echo $name[1];
	?><br>
	
	<?php
	echo $name[2];
	?><br>
	
	<?php
	echo $name[0];
	?><br>
	
	<hr>
	
	<?php
	$food=array('Pizza', 'Chicken', '10', '15',array('Asian', 'French', 'German'), "Pasta"); ?><br>
	
	<?php
	echo $food[3];
	?><br>
	
	<?php
	echo $food[4][2];
	?><br><br>
	
	<?php
	echo $food[50]="Mango";
	?><br>
	
	<?php
	echo $food[100]="Apple";
	?><br><br>
	
	<pre>
	<?php
	echo print_r($food);
	?>
	</pre>
	
</body>
</html>