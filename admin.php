<?php 
include 'core/init.php';
mysql_set_charset("utf8");
// if ($user_data['username'] !== 'admin@expfood.ru')  {
// 	header('Location: index.php');
// } 
// echo $user_data['order'];
// echo $all_data;

// $user_id = $user_data['user_id'];
// $sql = "SELECT `html` FROM `orders`";
// $result = mysql_query($sql) or die(mysql_error());
// $order_ids = mysql_query("SELECT `order_id` FROM `orders`") or die(mysql_error());
// while($row = mysql_fetch_assoc($result)) {
//     $order_all[] = $row['html'];
// }
// while($row = mysql_fetch_assoc($order_ids)) {
//     $order_ids_all[] = $row['order_id'];
// }



$result = mysql_query("SELECT * FROM orders WHERE paid = 1");




function order_user_info($user_id) {
	$user_data2 = user_data($user_id, 'username', 'city', 'street', 'house', 'flat', 'entrance', 'first_name', 'phone', 'extra');
	$user_info = $user_data2['username'] . '<br>' . $user_data2['city'] . '<br>' . $user_data2['street'] . '<br>' . $user_data2['house'] . '<br>' . $user_data2['flat'] . '<br>' . $user_data2['entrance'] . '<br>' . $user_data2['first_name'] . '<br>' .$user_data2['phone'] . '<br>' .$user_data2['extra'] . '<br>';

	return $user_info;
}

while($row = mysql_fetch_row($result))
	{
		$user_id = $row[3];
		$user_info = order_user_info($user_id);
		mysql_query("UPDATE `orders` SET `user_info` = '$user_info' WHERE user_id = $user_id");
		mysql_query("UPDATE `orders_archive` SET `user_info` = '$user_info' WHERE user_id = $user_id");

		echo "<a href='?" . $row[0] . "'>Удалить нижний заказ</a><br><br>";
	    echo "$row[0]";
	    echo "$row[4]";
	    echo "$row[1]";
	}



?>



<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.css">
	<link href="css/css" rel="stylesheet" type="text/css">
	<link href="css/css(1)" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
	<title>Express Food</title>
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/tile.js"></script>
	

</head>
<body onhashchange="hasher();">
<div class="page-container">



		
</div>

<style type="text/css">
.page-container {
	background-color: #faa;
}
img {
	height: 100px;
}
.admin-table {
	border-color: #f00;
	border-width: 10px;
	margin-bottom: 50px;
	/*background-color: #faa;*/
}
</style>

<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/cart.js"></script>
<script type="text/javascript" src="js/categories.js"></script>
<script type="text/javascript" src="js/order.js"></script>

</body>
</html>