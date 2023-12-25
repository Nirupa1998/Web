<!DOCTYPE html>
<html>
<head>
	<title>Search Student</title>
	<?php
	require_once 'conf/conf.php';
	require_once 'func/studentFunc.php';
	?>
	
</head>
<body>
	<form method="PUT" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label>Search Student by Name</label>
		<input type="text" name="studentName">
		<input type="submit" name="" value="search">
	</form>
	<br>
<?php
	if (isset($_GET['studentName'])) {
		$name = $_GET['studentName'];
		$name= trim($name);
		if (empty($name)) {
			echo "<p style='color:red'>Please provide a name</p>";
		}
		elseif (empty(searchStudentsByName($connection,$name))) {
			die("404 Nothing Found");
		}
		else{
			PrintTable(searchStudentsByName($connection,$name));
		}
	}
?>

</body>
</html>