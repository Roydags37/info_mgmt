<?php



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	
	require 'database.php';

	$firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
	$age = $_POST['age'];
    $position = $_POST['position'];
	$address = $_POST['address'];

	$query = 'INSERT INTO employees (first_name, last_name, age, position, address) VALUES (:first_name, :last_name, :age, :position, :address)';
	$params = [
		'id' => 6,
		'first_name' => $first_name,
        'last_name' => $last_name,
        'age' => $age,
		'position' => $position,
		'address' => $address
	];

	$statement = $pdo->prepare($query);

	$statement->execute($params);

	header('Location: index.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form method="POST">
		<div>
			<label>First Name</label>
			<input type="text" name="first_name" id="">
		</div>
        <div>
			<label>Last Name</label>
			<input type="text" name="last_name" id="">
		</div>
        <div>
			<label>Age</label>
			<input type="text" name="age" id="">
		</div>
		<div>
			<label>Position</label>
			<input type="number" name="position" id="">
		</div>
		<div>
			<label>Address</label>
			<input type="text" name="address" id="">
		</div>
		<input type="submit" value="Submit">
	</form>
</body>
</html>