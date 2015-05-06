<?php 
include 'core/init.php';
// echo $user_data['order'];
// echo $all_data;

$sql = "SELECT `order` FROM `users`";
$result = mysql_query($sql) or die(mysql_error());

$names = $ages = $blahs = array();

while($row = mysql_fetch_assoc($result)) {
    $order_all[] = $row['order'];

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


	<?php
	for ($x = 0; $x < count($order_all); $x++) {
	    echo "<table class='table'> <thead> </thead> <tbody id='ordered-items'> $order_all[$x] </tbody> </table>";
	}

	?>

		
</div>


<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/cart.js"></script>
<script type="text/javascript" src="js/categories.js"></script>
<script type="text/javascript" src="js/order.js"></script>

</body>
</html>