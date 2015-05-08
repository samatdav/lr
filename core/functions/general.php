<?php

function array_sanitize(&$item) {
	$item = mysql_real_escape_string($item);
}

function sanitize($data) {
	return mysql_real_escape_string($data);
}

function output_errors($errors) {
	return '<ul><li>' . implode('</li><li>', $errors) . '</li></ul>';
}

function output_orderList($orderList) {
	return '<ul><li>' . implode('</li><li>', $orderList) . '</li></ul>';
	// for ($x = 0; $x < count($orderList); $x++) {
	//     echo "<table class='table admin-table'> <thead> </thead> <tbody id='ordered-items'> $orderList[$x] </tbody> </table>";
	// }
}

?>