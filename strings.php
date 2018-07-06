<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php ?>
	<?php echo " <br>"; ?>
	
	<hr>
	
	<?php 
	
	echo "My name is Danny. <br>";
	echo "My age is 32. <br>";
	
	$color="Red";
	$shirt="Dress Shirt";
	$combination=$color. " ".$shirt;
	
	echo $combination; echo " <br>";
	
	?>
	
	<?php 
	
	echo"$color is my favorite <br>";
	echo"{$color}is my favorite <br>";
	//echo'$shirt <br>';
	
	?>
	
	<hr>
	
	<?php 
	
	$phrase1="student who come late ";
	$phrase2="in class sit in last with Rock";
	$combine=$phrase1;
	$combine.=$phrase2;
	
	echo "Original full string: $combine";
	echo " <br>";
	
	?>
	
	<hr>
	
	Upppercase first: <?php echo ucfirst ($combine); ?><br>
	Upppercase words: <?php echo ucwords ($combine); ?><br>
	Uppercase: <?php echo strtoupper ($combine); ?><br>
	Lowercase: <?php echo strtolower ($combine); ?><br>

	<hr>
	
	
	Repeat: <?php echo str_repeat ($combine, 3); ?><br>
	Make substring from point to another: <?php echo substr ($combine, 5, 10); ?><br>
	Find position of any specific word: : <?php echo strpos ($combine, "come"); ?><br>
	Find character: <?php echo strchr ($combine, "R"); ?><br>
	
	<hr>
	
	Total length of string: <?php echo strlen ($combine); ?><br>
	Trim: <?php echo "A" . trim(" B C D") . "E"; ?><br>
	Find Specfic and show after: <?php echo strstr ($combine, "come"); ?><br>
	Replace word with new: <?php echo str_replace("sit", "stand", $combine); ?><br>


</body>
</html>