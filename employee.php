<?php

require 'database.php';

$id = $_GET['id'];

$query = 'SELECT * FROM employees WHERE id = ' . $id;

$statement = $pdo->prepare($query);

$statement->execute();

$employee = $statement->fetch();

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
		<p>First Name: <?= $employee['first_name'] ?></p>
		<p>Last Name: <?= $employee['last_name'] ?></p>
		<p>Age: <?= $employee['age'] ?></p>
        <p>Position: <?= $employee['position'] ?></p>
		<p>Address: <?= $employee['address'] ?></p>
</body>
</html>