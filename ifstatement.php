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

	Using IF/ELSE<br>
	How is the weather? (sunny).<br>
	<?php
	$weather="Sunny";
	
	if($weather=="Sunny") {
		echo "Weather is pleasant. <br>";
	}
		else {
			echo "It's not pleasant. <br>";
		}
		
	?>
	
	<hr>
	
	Using IF/ELSE<br>
	How is the weather? (not sunny):<br>
	<?php
	$weather1="Sunny1";
	
	if($weather1=="Sunny") {
		echo "Weather is pleasant. <br>";
	}
		else {
			echo "It's not pleasant. <br>";
		}
		
	?>
	
	<hr>
	
	Using IF/IF<br>
	How is the weather? (not sunny):<br>
	<?php
	$weather2="Sunnyp";
	
	if($weather2=="Sunny") {
		echo "Weather is pleasant. <br>";
	}
		if($weather2!="Sunny") {
			echo "It's not pleasant. <br>";
		}
		
	?>
	
	<hr>
	
	Using ELSE/IF<br>
	How is the weather? (not sunny):<br>
	<?php
	$weather3="Icey";
	
	if($weather3=="Sunny") {
		echo "Weather is pleasant. <br>";
	}
		elseif($weather3=="Rainy") {
			echo "It's not pleasant. <br>";
		}
		elseif($weather3=="Windy") {
			echo "It's very terrible. <br>";
		}
	else{
		echo "It's hard to forecast the weather. <br>";
	}		
	?>
	
	<hr>
	
	Product Purchased? Yes<br>
	<?php 
	
	$purchasedProduct=true;
	if($purchasedProduct) {
		echo "<h1>Thank You...</h1>";
		echo "<p>Your product will be delivered soon.</p>";
	}
	else{
		echo "<h1>Please Wait...</h1>";
			echo "<p>Your payment is processing.</p>";
	}
	
	?>
	
	<hr>
	
	Product Purchased? No<br>
	<?php 
	
	$purchasedProduct=false;
	if($purchasedProduct) {
		echo "<h1>Thank You...</h1>";
		echo "<p>Your product will be delivered soon.</p>";
	}
	else{
		echo "<h1>Please Wait...</h1>";
			echo "<p>Your payment is processing.</p>";
	}
	
	?>
	
	<hr>
	
	Shipped? (b=2)<br>
	<?php 
	
	$a=4;
	$b=2;
	$c="Result can not be out.";
	if($b>0) {
		$c=$a/$b;
	}
		echo $c;	
	?>
	
	<hr>
	
	Shipped? (b2=0)<br>
	<?php 
	
	$a2=4;
	$b2=0;
	$c2="Product can not be shipped out.";
	if($b2>0) {
		$c2=$a2/$b2;
	}
		echo $c2;	
	?>
	
	<hr>
	
	Shipped? (b2=0)<br>
	<?php 
	
	$a3=4;
	$b3=3;
	$c3="Product can not be shipped out.";
	if($b3<5 && $a>0) {
		$c3=$a3/$b3;
	}
		echo $c3;	
	?>
	
</body>
</html>