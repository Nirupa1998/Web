<?php

define('HOST','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DATABASE','student');

$connection=mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);

if($connection){
	echo 'database connected'.'<br>';

}
else
{
	die ('Connection error!'.mysqli_connect_error());
}

?>