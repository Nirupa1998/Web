<?php


require_once 'conf/conf.php';
require_once 'func/studentFunc.php';


PrintStudetsTable(getAllStudents($connection));
PrintStudetsTable(getFullStudents($connection));



?>
