<?php
require_once 'conf/conf.php';
require_once 'func/studentFunc.php';

if (isset($_GET['studentName'])) {
	$name = $_GET['studentName'];
	PrintTable(searchStudentsByName($connection,$firstname));
}
else{
	die("404 Nothing Found");
}


?>