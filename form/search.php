<?php
	require_once "function.php";
	require_once "config.php";

	$color = $_GET['clr'];
	$size = $_GET['size'];
	$type = $_GET['type'];

	if(isset($size) && isset($type) && empty($color)){
		$query = "select product_id, name, unit_price, type_name, colour, size, in_stock from product, product_line, product_type, stock where size='$size' && type_name='$type' && product_type.id=product_type_id && product_id=product_product_id && product_line.id=line_id";
		printTable(getTable($connection,$query));
	}

	else if(isset($color) && isset($type) && empty($size)){
		$query = "select product_id, name, unit_price, type_name, colour, size, in_stock from product, product_line, product_type, stock where colour='$color' && type_name='$type' && product_type.id=product_type_id && product_id=product_product_id && product_line.id=line_id";
		printTable(getTable($connection,$query));
	}

	else if(isset($color) && isset($size) && empty($type)){
		$query = "select product_id, name, unit_price, type_name, colour, size, in_stock from product, product_line, product_type, stock where colour='$color' && size='$size' && product_type.id=product_type_id && product_id=product_product_id && product_line.id=line_id";
		printTable(getTable($connection,$query));
	}

	else if(isset($color) && isset($size) && isset($type)){
		$query = "select product_id, name, unit_price, type_name, colour, size, in_stock from product, product_line, product_type, stock where colour='$color' && size='$size' && type_name='$type' && product_type.id=product_type_id && product_id=product_product_id && product_line.id=line_id";
		printTable(getTable($connection,$query));
	}
?>