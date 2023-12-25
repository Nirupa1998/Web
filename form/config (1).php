<?php

define('HOST', 'localhost');
define('USERNAME', 'root');
define('PWD', '');
define('DB', 'warehouse');

$connection = mysqli_connect(HOST,USERNAME,PWD,DB);

if($connection){
	echo "Database Connected";
}else{
	die("Error connecting database!".mysqli_connect_error());
}

?>