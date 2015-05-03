<?php
include 'core/init.php';

// if (user_exists('alex') === true) {
// 	echo 'exists';
// }
// die();


if (empty($_POST) === false) {
	$username = $_POST['username'];
	$password = $_POST['password'];


	// echo $username, '  ', $password;


	if (empty($username) === true || empty($password) === true) {
		$errors[] = 'please enter u and p';
	} else if (user_exists($username) === false) {
		$errors[] = 'no such username';

	} else if (user_active($username) === false) {
		$errors[] = 'you havent activated';
	} else {
		$login = login($username, $password);
		if ($login === false) {
			$errors[] = 'wrong u and p pair';

		} else {
			// echo 'ok';

		}
	}


	print_r($errors);

}
?>
