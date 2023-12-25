<?php
require_once 'conf/conf.php';
require_once 'func/studentFunc.php';

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	if (empty(getaStudent($connection,$id))) {
		die("404 no student found");
	}
	else{
		print_r(getaStudent($connection,$id));
	}
}
else{
	die("404 nothing found");
}


?>