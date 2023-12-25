<?php
	require_once "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>ICA 02</title>
</head>
<body>
	<form method="GET" action="search.php">
		<table>
			<tr>
				<td>
					<label for="clr">Filter the product by color: </label>
				</td>
				<td>
					<input type="text" name="clr" id="clr">
				</td>
			</tr>
			<tr>
				<td>
					<label for="size">Filter the product by size: </label>
				</td>
				<td>
					<select name="size" id="size">
						<option>S</option>
						<option>M</option>
						<option>L</option>
						<option>XL</option>
						<option>XXL</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<label for="type">Filter the product by type: </label>
				</td>
				<td>
					<select name="type" id="type">
						<option>Shirts</option>
						<option>Pants</option>
						<option>Jeans</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="filter" value="Filter">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>