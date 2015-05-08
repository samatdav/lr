<?php
function fill_input($name) {
	global $user_data;
	if ($user_data[$name] !== 0 && $user_data[$name] !== '0' && $user_data[$name] !== 'undefined') {
		echo $user_data[$name];

	}
}


function take_order($user_id, $order, $total_cost) {
	$user_id = (int)$user_id;
	// mysql_query("UPDATE `users` SET `order` = '$order' WHERE user_id = $user_id");
	mysql_query("INSERT INTO orders (html, user_id, total_cost) VALUES ('$order', '$user_id', '$total_cost')");
	$orderList[] = $order; // НУЖНО ХРАНИТЬ В БАЗЕ ДАННЫХ А НЕ ПХП - СОЗДАТЬ ТАБЛИЦУ ORDERS

	// mysql_query("UPDATE users SET order = '$order' WHERE user_id = $user_id");
}

function take_order_data($user_id, $first_name, $phone, $city, $street, $house, $extra) {
	$user_id = (int)$user_id;
	mysql_query("UPDATE `users` SET `first_name` = '$first_name', `phone` = '$phone', `city` = '$city', `street` = '$street', `house` = '$house', `extra` = '$extra' WHERE user_id = $user_id");
}

function register_user($register_data) {
	array_walk($register_data, 'array_sanitize');
	$register_data['password'] = md5($register_data['password']);
	// print_r($register_data);


	$fields = implode(', ', array_keys($register_data));
	$data = '\'' . implode('\', \'', $register_data) . '\'';
	// echo $fields;
	// echo "INSERT INTO users ($fields) VALUES ($data)";
	// die();

	mysql_query("INSERT INTO users ($fields) VALUES ($data)");

}


// function user_count() {
// 	return mysql_result(mysql_query("SELECT COUNT(user_id) FROM users WHERE active = 1"), 0);
// }



function user_data($user_id) {
	$data = array();
	$user_id = (int)$user_id;
	$func_num_args = func_num_args();
	$func_get_args = func_get_args();	
	if ($func_num_args > 1) {
		unset($func_get_args[0]);
		$fields = '' . implode(', ', $func_get_args) . '';
		$data = mysql_fetch_assoc(mysql_query("SELECT $fields FROM users WHERE user_id = $user_id"));
		return $data;
	}

}

function all_data() {
	$all_data = array();

	$func_num_args = func_num_args();
	// echo $func_num_args;

	$func_get_args = func_get_args();

	if ($func_num_args > 1) {
		unset($func_get_args[0]);


		// $fields = '' . implode('`, `', $func_get_args) . '`';
		$fields = '' . implode(', ', $func_get_args) . '';
		// echo $fields;
		// echo "SELECT $fields FROM users WHERE user_id = '$user_id'";

		// die();
		// $data = mysql_fetch_assoc(mysql_query("SELECT $fields FROM `users` WHERE `user_id` = $user_id"));
		$data = mysql_fetch_assoc(mysql_query("SELECT $fields FROM users"));

		// print_r($data);
		// die();

		return $all_data;
	}
	// print_r($func_get_args);

}



function logged_in() {
	return (isset($_SESSION['user_id'])) ? true : false;
}

function user_exists($username) {
	$username = sanitize($username);
	return (mysql_result(mysql_query("SELECT COUNT(user_id) FROM users WHERE username = '$username'"),0) == 1)? true : false;
}

function email_exists($email) {
	$email = sanitize($email);
	return (mysql_result(mysql_query("SELECT COUNT(user_id) FROM users WHERE email = '$email'"),0) == 1)? true : false;
}

function user_active($username) {
	$username = sanitize($username);
	return (mysql_result(mysql_query("SELECT COUNT(user_id) FROM users WHERE username = '$username' AND active = 1"),0) == 1)? true : false;
}

function user_id_from_username($username) {
	$username = sanitize($username);
	return mysql_result(mysql_query("SELECT user_id FROM users WHERE username = '$username'"), 0, 'user_id');

}

function login($username, $password) {
	$user_id = user_id_from_username($username);

	$username = sanitize($username);
	$password = md5($password);

	return (mysql_result(mysql_query("SELECT COUNT(user_id) FROM users WHERE username = '$username' AND password = '$password'"), 0) == 1) ? $user_id : false;

}
?>