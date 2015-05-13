<?php
include 'core/init.php';

if (logged_in() === false)  {
	header('Location: index.php');
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
	<title>Express Food</title>
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/tile.js"></script>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">

	

</head>
<body>
<div class="page-container">



<link rel="stylesheet" type="text/css" href="css/order.css">
<link rel="stylesheet" type="text/css" href="css/payment.css">
<div class="header navbar-fixed-top"> 
<nav class="navbar fluid-container"> <div class="navbar-header"> <img class="logo" id="logo_icon" src="img/icon_trans.png" alt="expfood"> <img class="logo" id="logo_text" src="img/logo_main.png" alt="expfood"> </div> <div class="navbar-collapse collapse navbar-right"> </div> </nav> </div> 

<div class="container"> 
<div class="jumbotron content paybox"> 

<?php
$user_id = $user_data['user_id'];
$sql = "SELECT `total_cost` FROM `orders` WHERE user_id = $user_id";
$result = mysql_query($sql) or die(mysql_error());
while($row = mysql_fetch_assoc($result)) {
    $cost_all[] = $row['total_cost'];
}

$echo_grocery_cost = $cost_all[count($cost_all)-1];

// if ($echo_grocery_cost < 1000) {
// 	$deliveryCost = 50;
// } else {
// 	$deliveryCost = 0;
// }

$echo_total_cost = $echo_grocery_cost + $deliveryCost;

?>

<form class="form-horizontal">

	<div class="form-group"> 
		<label for="inputPassword3" class="col-sm-4 control-label">Продуктов на </label> 
		<div type="text" class="col-sm-8 order-price"> <?php echo $echo_grocery_cost;?> рублей </div> 
	</div> 

	<div class="form-group"> 
		<label for="inputPassword3" class="col-sm-4 control-label">Стоимость доставки</label> 
		<div type="text" class="col-sm-8 order-price"> <?php echo $deliveryCost; ?> рублей </div> 
	</div> 

	<div class="form-group"> 
		<label for="inputPassword3" class="col-sm-4 control-label">Итого к оплате </label> 
		<div type="text" class="col-sm-8 order-price"> <?php echo $echo_total_cost; ?> рублей</div> 
	</div>

</form>

	<nav> 
		<ul class="pager"> 
			<li class="previous">
				<a href="order.php" id="backToOrder" class="backForth"><span aria-hidden="true">&larr;</span> Назад</a>
			</li>
			<li id="tt" class="next" data-toggle="tooltip" data-placement="right" title="Tooltip on top">
				<iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/embed/small.xml?account=410013085842859&quickpay=small&any-card-payment-type=on&button-text=02&button-size=l&button-color=white&targets=Express+Food&default-sum=<?php echo $echo_total_cost; ?>&successURL=expfood.ru/success.php?id=<?php echo $user_data['user_id']; ?>" width="195" height="54"></iframe>
			</li>
		</ul> 
	</nav>
  </div> 
  </div> 	
	
 


</div>


<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/cart.js"></script>
<script type="text/javascript" src="js/categories.js"></script>
<script type="text/javascript" src="js/order.js"></script>

</body>
</html>

<?php

$result = mysql_query("SELECT * FROM orders");




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
	}



?>