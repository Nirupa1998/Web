<?php
function getStudents($conn){
	$query="select id,name from customers ";
	return getTable($query,$conn);
}

function getastudent($conn,$id){
	$query="select * from customers where id=$id";
	return getTable($query,$conn);
}


function printstudentsTable($arr){
	echo "<table border='1'>";
	echo "<tr>";
	echo "<td>Stuent Id </td>";
	echo "<td>Name</td>";
	echo "<td>Profile</td>";
	echo "</tr>";

	foreach($arr as $key =>$row){
		echo "<tr>";
		foreach($row as $key => $value){
			echo "<td>$value</td>";

		}
		$Stu_is=$row['id'];
		echo "<td><a heaaf='profile.php'></a></td>";
		echo "</tr>";


	}
	echo "</table>";
}