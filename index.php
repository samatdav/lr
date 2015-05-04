<?php
include 'core/init.php';

?>

<!doctype <!DOCTYPE html>
<html>
<head>
	<title>adsfads</title>
</head>
<body>


<?php 
// if (isset($_SESSION['user_id'])) {
// 	echo 'Logged in';
// } else {
// 	echo 'Not logged in';
// }

if (logged_in() === true) {
	// echo "Logged in";
	include 'include/loggedin.php';
} else {
	// echo "Not logged";
	include 'include/login_form.php';
}
include 'include/user_count.php'
?>



</body>
</html>