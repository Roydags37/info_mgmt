<?php

require 'database.php';

$statement = $pdo->prepare('SELECT * FROM employees');

$statement->execute();

$employees = $statement->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<!-- <table>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Age</th>
            <th>Position</th>
            <th>Address</th>
		</tr>
		<?php 
		/*
				foreach ($employees as $employee) {
					echo '<tr>';
					echo "<td>{$employee['first_name']}</td>";
					echo "<td>{$employee['last_name']}</td>";
                    echo "<td>{$employee['age']}</td>";
                    echo "<td>{$employee['position']}</td>";
					echo "<td>{$employee['address']}</td>";
					echo '</tr>';
				}
				*/
			?>
	</table> -->
		<?php
			foreach ($employees as $employee) {
				echo "<a href='user.php?id={$employee['id']}'>";
				echo "<p>{$employee['first_name']}, {$employee['last_name']}, {$employee['age']}, {$employee['position']}, {$employee['address']}";
				echo "</a>";
			}
		?>
		<br>
		<br>
		<a href="create.php">Create New User</a>
</body>
</html>