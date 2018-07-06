<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php
	$number=array(8,60,168,995,35,25,5,100);
		foreach($number as $num) {
			echo "Numbers: {$num} <br>";
		}
	?>	
	
	<hr>
	
	<?php
	$food=array(
		"item_number"=>1050,
		"name"=>"Pizza",
		"region"=>"Italy",
		"side_order"=>"Pasta",
		"drink"=>"Coke",
		"product_price"=>12.00
	);
	
	foreach($food as $key=>$value) {
		echo "{$key}: {$value} <br>";
		}
	?>	
	
	<hr>
	
	<?php
	$food=array(
		"item_number"=>1050,
		"name"=>"Pizza",
		"region"=>"Italy",
		"side_order"=>"Pasta",
		"drink"=>"Coke",
		"product_price"=>120
	);
	
	foreach($food as $key=>$value) {
		$data=str_replace("_"," ",$key);
			echo "{$data}: {$value} <br>";
		}
	?>	
	
	<hr>
	
	<?php
	$food=array(
		"item_number"=>1050,
		"name"=>"Pizza",
		"region"=>"Italy",
		"side_order"=>"Pasta",
		"drink"=>"Coke",
		"product_price"=>120
	);
	
	foreach($food as $key=>$value) {
		$data=ucwords(str_replace("_"," ",$key));
			echo "{$data}: {$value} <br>";
		}
	?>	

	<hr>
	
	<?php
	$food2=array(
		"item_number"=>1050,
		"name"=>"Pizza",
		"region"=>"Italy",
		"side_order"=>"Pasta",
		"drink"=>"Coke",
		"product_price"=>" OOPS"
	);
	
	foreach($food2 as $key2=>$value2) {
		$data2=ucwords(str_replace("_"," ",$key2));
			if($key2=="product_price") {
				if(is_numeric($value2)) {
				}else {
					$value2="Can't be determined.";
				}				
			}
				echo "{$data2}: {$value2} <br>";
		}
	?>	

	<hr>
	
	<?php
	$food2=array(
		"item_number"=>1050,
		"name"=>"Pizza",
		"region"=>"Italy",
		"side_order"=>"Pasta",
		"drink"=>"Coke",
		"product_price"=>null
	);
	
	foreach($food2 as $key2=>$value2) {
		$data2=ucwords(str_replace("_"," ",$key2));
			if($key2=="product_price") {
				if(is_numeric($value2)) {
				}else {
					$value2="Can't be determined.";
				}				
			}
				echo "{$data2}: {$value2} <br>";
		}
	?>	
	
	<hr>
	
	<?php
	$food2=array(
		"item_number"=>1050,
		"name"=>"Pizza",
		"region"=>"Italy",
		"side_order"=>"Pasta",
		"drink"=>"Coke",
		"product_price"=>12
	);
	
	foreach($food2 as $key2=>$value2) {
		$data2=ucwords(str_replace("_"," ",$key2));
			if($key2=="product_price") {
				if(is_numeric($value2)) {
				}else {
					$value2="Can't be determined.";
				}				
			}
				echo "{$data2}: {$value2} <br>";
		}
	?>
	
	<hr>
	
	<?php
	$food2=array(
		"item_number"=>1050,
		"name"=>"Pizza",
		"region"=>"Italy",
		"side_order"=>"Pasta",
		"drink"=>"Coke",
		"product_price"=>'Danny'
	);
	
	foreach($food2 as $key2=>$value2) {
		$data2=ucwords(str_replace("_"," ",$key2));
			if($key2=="product_price") {
				if(is_numeric($value2)) {
				}else {
					$value2="Danny - Can't be determined.";
				}				
			}
				echo "{$data2}: {$value2} <br>";
		}
	?>
	
	<hr>
	
	<?php
	$food2=array(
		"item_number"=>1050,
		"name"=>"Pizza",
		"region"=>"Italy",
		"side_order"=>"Pasta",
		"drink"=>"Coke",
		"product_price"=>false
	);
	
	foreach($food2 as $key2=>$value2) {
		$data2=ucwords(str_replace("_"," ",$key2));
			if($key2=="product_price") {
				if(is_numeric($value2)) {
				}else {
					$value2="Boolean - Can't be determined.";
				}				
			}
				echo "{$data2}: {$value2} <br>";
		}
	?>
	
	<hr>
	
	<?php
	$food2=array(
		"item_number"=>1050,
		"name"=>"Pizza",
		"region"=>"Italy",
		"side_order"=>"Pasta",
		"drink"=>"Coke",
		"product_price"=>true
	);
	
	foreach($food2 as $key2=>$value2) {
		$data2=ucwords(str_replace("_"," ",$key2));
			if($key2=="product_price") {
				if(is_bool($value2)) {
				}else {
					$value2="Can't be determined.";
				}				
			}
				echo "{$data2}: {$value2} <br>";
		}
	?>
	
	<hr>
	
	<?php
	$food2=array(
		"item_number"=>1050,
		"name"=>"Pizza",
		"region"=>"Italy",
		"side_order"=>"Pasta",
		"drink"=>"Coke",
		"product_price"=>0
	);
	
	foreach($food2 as $key2=>$value2) {
		$data2=ucwords(str_replace("_"," ",$key2));
			if($key2=="product_price") {
				if(isset($value2)) {
				}else {
					$value2="Can't be determined.";
				}				
			}
				echo "{$data2}: {$value2} <br>";
		}
	?>
	
	<hr>
	
	<?php
	$food2=array(
		"item_number"=>1050,
		"name"=>"Pizza",
		"region"=>"Italy",
		"side_order"=>"Pasta",
		"drink"=>"Coke",
		"product_price"=>null
	);
	
	foreach($food2 as $key2=>$value2) {
		$data2=ucwords(str_replace("_"," ",$key2));
			if($key2=="product_price") {
				if(empty($value2)) {
				}else {
					$value2="Can't be determined.";
				}				
			}
				echo "{$data2}: {$value2} <br>";
		}
	?>
	
	<hr>
	
	<?php
	$food2=array(
		"item_number"=>1050,
		"name"=>"Pizza",
		"region"=>"Italy",
		"side_order"=>"Pasta",
		"drink"=>"Coke",
		"product_price"=>null
	);
	
	foreach($food2 as $key2=>$value2) {
		$data2=ucwords(str_replace("_"," ",$key2));
			if($key2=="product_price") {
				if(is_null($value2)) {
				}else {
					$value2="Can't be determined.";
				}				
			}
				echo "{$data2}: {$value2} <br>";
		}
	?>
	
</body>
</html>