<?php 
include 'core/init.php';

if ($user_data['username'] !== 'admin@expfood.ru')  {
	header('Location: index.php');
} 
// echo $user_data['order'];
// echo $all_data;
$user_id = $user_data['user_id'];
$sql = "SELECT `html` FROM `orders`";
$result = mysql_query($sql) or die(mysql_error());
$order_ids = mysql_query("SELECT `order_id` FROM `orders`") or die(mysql_error());
while($row = mysql_fetch_assoc($result)) {
    $order_all[] = $row['html'];
}
while($row = mysql_fetch_assoc($order_ids)) {
    $order_ids_all[] = $row['order_id'];
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
<a href="?$order_all[$x]">$order_all[$x]</a>
<div class="page-container">


	<?php
	// output_orderList($orderList);
	// echo output_orderList($orderList);
	// echo count($orderList);

	for ($x = 0; $x < count($order_all); $x++) {
		if (isset($_GET[$x]) && empty($_GET[$x])) {
			$current_order_id = $order_ids_all[$x];
			mysql_query("DELETE FROM orders WHERE order_id = $current_order_id");
		}
	    echo "<a href='?" . $x . "'>Удалить нижний заказ</a><br><br>";
	    echo $order_all[$x];		    
	}

	



	// if (empty($_POST) === false) {
	// $order_id = $_GET['username'];
	// }




	?>

		
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