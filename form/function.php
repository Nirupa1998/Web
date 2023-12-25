<?php

	function getTable($connection,$query){
		$result = mysqli_query($connection,$query);
		$arr = array();

		if($result){
			while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
				array_push($arr, $row);
			}
		}else{
			echo("ERROR!!!");
		}
		return $arr;
	}

	function printTable($array){
		if($array){
			echo "
			<table border='1'>
				<tr>
					<td>Id</td>
					<td>Name</td>
					<td>Price</td>
					<td>Type</td>
					<td>Color</td>
					<td>Size</td>
					<td>Quantity</td>
				</tr>";
				
				foreach ($array as $key => $row){
					echo "<tr>";
					foreach($row as $key => $val){
						echo "<td>$val</td>";
					}
					echo "</tr>";
				}
			echo "</table>";	
		}else{
			echo "Error!!!!!";
		}	
	}

?>