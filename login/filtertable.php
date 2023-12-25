<!DOCTYPE html>
<html>
<head>
	<title>Students details</title>
	<?php
	require_once 'conf/conf.php';
	require_once 'func/studentFunc.php';
	?>
</head>
<body>
	<?php
	$checkedAll='';
	$checkedMale='';
	$checkedFemale='';
	if (isset($_GET['Sex'])) {
		$Sex = $_GET['Sex'];
		if ($Sex == 'all') {
			$checkedAll='checked';
			$checkedMale='';
			$checkedFemale='';
		}
		elseif($Sex== 'male'){
				$checkedAll='';
				$checkedMale='checked';
				$checkedFemale='';
		}
		else{
				$checkedAll='';
				$checkedMale='';
				$checkedFemale='checked';
		}

	}
	
?>
	<form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label>Filter Students by Gender</label>
		<br>
		<input type="radio" <?php if(isset($checkedMale)){echo $checkedMale;} ?> name="Sex" value="male" >Male
		<input type="radio" <?php if(isset($checkedFemale)){echo $checkedFemale;} ?>  name="Sex" value="female" >Female
		<input type="radio" <?php if(isset($checkedAll)){echo $checkedAll;} ?>  name="Sex" value="all" >All
		<input type="submit" name="" value="filter">
	</form>
	<br>
	<hr>
	<label>Filter Students by Subject</label>
	<br>
	<hr>

<?php
	if (isset($_GET['Sex'])) {
		$Sex = $_GET['Sex'];
		if ($Sex== 'all') {
			PrintTable(getFullStudents($connection));
		}
		else{
			PrintTable(FilterStudentsByGender($connection,$Sex));
		}
	}
	else{
		PrintTable(getFullStudents($connection));
	}
	
?>
</body>
</html>
