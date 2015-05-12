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
    <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<title>Express Food</title>
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/tile.js"></script>
	


</head>
<body onhashchange="hasher();">
<div class="page-container">
    <div class="header  navbar-fixed-top">
			<nav class="navbar container-fluid">
		
			  <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
					<img id="logo" src="img/logo_400.png" alt="expfood"><!-- Express Food -->
				
			  </div>
  
                 
                 <div class="navbar-collapse collapse navbar-right">
					<ul class="nav navbar-nav">
					  <!-- <li id="tracking"><a href="ymaps.html">
					  	Отследить Заказ
					  	</a>
					  </li> -->

					  <li class="shop">
					  		<img src="img/ver2.png">
					  		Верный
					  		<?php
					  		echo $user_data['username'];
					  		?>
					  </li>
                      </ul>



                    <ul class="nav navbar-right cart">
                      <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span id="cart-number">0</span> 
					<div id="total_main">
			      
			      </div></a>

<?php
  if (empty($_POST) === false) {

	$arr = array($user_data['user_id'],  $user_data['first_name'], $user_data['phone'], $user_data['username'], $user_data['city'], $user_data['street'], $user_data['house'], $user_data['entrance'], $user_data['extra']);
		$user_order_info = implode(" <br> ",$arr)."<br>";
  	// $html = $user_order_info . $_POST['order'];
    take_order($user_data['user_id'], $_POST['order'], $_POST['total_cost'], $_POST['main']);

  	header('Location: order.php');
  }
?>
					<div class="cart-info dropdown-menu" id="cart-items">

						<table class="table">
							<thead>
							</thead>
							<tbody id="ordered-items">
							</tbody>									
						</table>
						<div class="cart-total">
						  <table>
							 <tbody>
							 <tr id="">
							  <td>Продуктов на </td>
							  <td class="cart-second-col"><b> <span id="grocery-price"> 0</span></b> руб</td>
							 </tr>
							 <tr id="">
							  <td>Стоимость доставки </td>
							  <td class="cart-second-col"><b> <span id="delivery_cost"> 50</span></b> руб</td>
							 </tr>
							 <tr id="totalCost">
							  <td>Итого </td>
							  <td class="cart-second-col"><b> <span id="cart-price"> 50</span></b> руб</td>
							 </tr>
							 <tr>
							  <td id="delivery_day">Доставим сегодня до </td>
							  <td class="cart-second-col"><b id="cart_time_b"></b></td>
							 </tr>
							</tbody>
						  </table>										  

						  <form class="form-group" method="post"> 
							<div class="hidden"> <input type="text" name="order" id="inputOrder"> </div>
							<div class="hidden"> <input type="text" name="total_cost" id="inputCost"> </div>
							<div class="hidden"> <input type="text" name="main" id="inputMain"> </div>
							<input type="submit" class="checkout_button btn btn-primary" value="Заказать"> 
						  </form> 
						</div>
					</div> 
			      </li>
			      
			     </ul>

			     
					 
                    
					 
                  </div><!-- /.navbar-collapse -->
			</nav>		
		</div>
		
	<div class="container-fluid content">
		<div class="row">
		    <div class="col-xs-2 left-menu">
				<a href="#fresh" class="cats" id="FruitAndVegetables"><img src="img/types/type1.png"></a>
				<a href="#Drink" class="cats" id="Drinks"><img src="img/types/type8.png"></a>
				<a href="#Snack" class="cats" id="Snacks"><img src="img/types/type10.png"></a>
				<a href="#milk" class="cats" id="dairy"><img src="img/types/type6.png"></a>
				<a href="#" class="cats" id=""><img src="img/types/type2.png"></a>
				<a href="#" class="cats" id=""><img src="img/types/type5.png"></a>
				<a href="#" id=""><img src="img/types/type7.png"></a>
				<a href="#" class="cats" id=""><img src="img/types/type4.png"></a>
				<a href="#"><img src="img/types/type11.png"></a>
				<a href="#Grocery"><img src="img/types/type12.png"></a>
			</div>
		
		<div id="item-wrap-inner" class="col-xs-10 products-wrap">


<?php
// if (isset($_GET['success']) && empty($_GET['success'])) {
// 		echo "You have registered!";
// 	}
if (isset($_GET['fresh'])) {
	$category = 'FruitAndVegetables';
} elseif (isset($_GET['dairy'])) {
	$category = 'dairy';
} elseif (isset($_GET['Snacks'])) {
	$category = 'Snacks';
} elseif (isset($_GET['drinks'])) {
	$category = 'Drinks';
// } elseif (isset($_GET['meat'])) {
// 	$category = 'dairy';
// } elseif (isset($_GET['meat'])) {
// 	$category = 'dairy';
// } elseif (isset($_GET['meat'])) {
// 	$category = 'dairy';
// } elseif (isset($_GET['meat'])) {
// 	$category = 'dairy';
} else {
	$category = 'FruitAndVegetables';
}

// $result = mysql_query("SELECT * FROM products WHERE category = '$category'");
// while($row = mysql_fetch_row($result))
// {
 //    echo "<tr>";
 //    // echo "<td>$row[0]</td>";
 //    for ($x = 0; $x < 7; $x++) {
	//     echo "<td>$row[$x]</td>";		    
	// }
 //    echo "</tr><br>";

// echo '<div class="product-wrap"> <div class="product" id="' . $row[0] . '">  <div class="product_img"> <span class="helper"></span> <img class="" src="' . $row[3] . '">  </div> <button class="item_count btn count btn-dark-blue btn-small-med btn-trans">0</button> <div class="action"> <div> <button href="javascript:void(0)" class="reduce_count btn minus btn-dark-blue btn-small-med btn-trans">-</button> <button href="javascript:void(0)" class="increase_count btn add btn-dark-blue btn-small-med btn-trans">Добавить</button> </div> </div> <div class="desc"> <div class="name"> <p class="product-name">' . $row[2] . '</p> </div>  <div class="price"> <p class="product-price">' . $row[4] . ' руб</p> </div> </div> </div> </div>';

// }
?>

	  	 </div>
	 </div>	
	</div>		
	
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