<?php
include 'core/init.php';

if (empty($_POST) === false) {
	// echo 'Form submitted!';
	$required_fields = array('username', 'password', 'password_again', 'first_name', 'email');
	// echo '<pre>', print_r($_POST, true), '</pre>';
	foreach ($_POST as $key => $value) {
		if (empty($value) && in_array($key, $required_fields) === true) {
			$errors[] = "fill required";
			break 1;
		}
	}

	if (empty($errors) === true) {
		if (user_exists($_POST['username']) === true) {
			$errors[] = 'Sorry, the username ' . $_POST['username'] . ' is alerady taken';
		}
		if (preg_match("/\\s/", $_POST['username'] == true)) {
				$errors[] = 'username must not  have spaces';
		}
		if (strlen($_POST['password']) < 6) {
			$errors[] = 'password too short';
		}
		if ($_POST['password'] !== $_POST['password_again']) {
			$errors[] = 'passwords not match';
		}
	}
}

// print_r($errors);
?>

<!doctype <!DOCTYPE html>
<html>

	<head>
		<title>adsfads</title>
	</head>

	<body>
		<h1>register</h1>
	


	<?php

	if (isset($_GET['success']) && empty($_GET['success'])) {
		echo "You have registered!";
	} else {
		if (empty($_POST) === false && empty($errors) === true) {
			$register_data = array (
				'username' => $_POST['username'],
				'password' => $_POST['password'],
				'first_name' => $_POST['first_name'],
				'last_name' => $_POST['last_name'],
				'email' => $_POST['email'],
			);

			register_user($register_data);
			// print_r($register_data);
			header('Location: register.php?success');
			exit();


		} else if (empty($errors) === false) {
			echo output_errors($errors);
		}
	

	?>

	<form action="" method="post">
		<ul>
			<li>
				Username*:<br>
				<input type="text" name="username">
			</li>
			<li>
				Password*:<br>
				<input type="password" name="password">
			</li>
			<li>
				Password again*:<br>
				<input type="password" name="password_again">
			</li>
			<li>
				First name*:<br>
				<input type="text" name="first_name">
			</li>
			<li>
				Last name:<br>
				<input type="text" name="last_name">
			</li>
			<li>
				Email*:<br>
				<input type="email" name="email">
			</li>
			<li>
				<input type="submit" value="Register">
			</li>
		</ul>
	</form>

	<?php
	}
	?>
</body>
</html>