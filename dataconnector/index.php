<?php

require_once 'conf.php';
require_once 'stuFunc.php';

$query='select * from customer';

printTable(getTable($query,$connection));

?>