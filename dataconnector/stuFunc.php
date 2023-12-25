<?php
function getTable($query,$connection){
	$result=mysqli_query($connection,$query);
	$arr=array();
	if($result){
		while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
			array_push($arr,$row);
		}
	}
	else
	{
		die("ERROR".mysqli_error($connection));
	}
	return $arr;
}


function printTable($arr){
	echo "<table border='1'>";
	foreach($arr as $key =>$row){
		echo "<tr>";
		foreach($row as $key =>$val){
			echo "<td>$val</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}
?>