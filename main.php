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
					  		
					  		

					  		
							  


					  		// echo $session_user_id;
					  		// echo $user_data['user_id'];
					  		// echo output_errors($errors);
					  		?>
					  </li>

<!--                       <li class="dropdown">
                      <img id="ver" src="img/ver.png">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Верный</a>
                        <ul class="dropdown-menu shops">
                          <li><img src="img/per.png"><a href="#" class="ajax_right">Перекресток</a></li>
                          <li><img src="img/5.png"><a href="#" class="ajax_right">Пятерочка</a></li>
                          <li><img src="img/az.png"><a href="#" class="ajax_right">Азбука Вкуса</a></li>
                        </ul>
                      </li> -->
                      </ul>



                    <ul class="nav navbar-right cart">
                      <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span id="cart-number">0</span> 
					<div id="total_main">
			      
			      </div></a>
					<div class="cart-info dropdown-menu" id="cart-items">

						<table class="table">
							<thead>
							</thead>
							<tbody id="ordered-items">
	<!-- 							<tr class="ordered-item">
									<td class="image"><img style="background: url(http://cnet1.cbsistatic.com/hub/i/r/2014/09/15/98b70517-3a22-4e39-b48b-9bb396a23407/thumbnail/770x433/b75c788b1c8f96233658bac84d2d10d9/plutus91503.jpg;canvasHeight=500;canvasWidth=500) no-repeat center center; background-size: cover;"></td>
									<td class="name">Black Dress</td>
									<td class="quantity">x 3</td>
									<td class="total">$130.00</td>
								</tr>
								<tr class="ordered-item">
									<td class="image"><img class="img-responsive" src="img/apple.jpg"></td>
									<td class="name">Blue Dress</a></td>
									<td class="quantity">x&nbsp;3</td>
									<td class="total">$230.00</td>
								</tr> -->
							</tbody>									
						</table>
						<div class="cart-total">
						  <table>
							 <tbody>
							 <tr id="totalCost">
							  <td>Итого </td>
							  <td class="cart-second-col"><b> <span  id="cart-price"> 0.00</span></b> руб</td>
							 </tr>
							 <tr>
							  <td id="delivery_day">Доставим сегодня до </td>
							  <td class="cart-second-col"><b id="cart_time_b"></b></td>
							 </tr>
							</tbody>
						  </table>

						  <?php
							  if (empty($_POST) === false) {

								$arr = array($user_data['user_id'],  $user_data['first_name'], $user_data['phone'], $user_data['username'], $user_data['city'], $user_data['street'], $user_data['house'], $user_data['entrance'], $user_data['extra']);
					  			$user_order_info = implode(" <br> ",$arr)."<br>";
							  	$html = $user_order_info . $_POST['order'];
							    take_order($user_data['user_id'], $html, $_POST['total_cost'], $_POST['main']);

							  	header('Location: order.php');
							  }
						  ?>

						  

						  <form class="form-group" method="post"> 
							<div class="hidden"> <input type="text" name="order" id="inputOrder"> </div>
							<div class="hidden"> <input type="text" name="total_cost" id="inputCost"> </div>
							<div class="hidden"> <input type="text" name="main" id="inputMain"> </div>
							<input type="submit" class="checkout_button btn btn-primary" value="Заказать"> 
						  </form> 
						  <!-- <div class="checkout">
						  	<a href="?order"><button class="checkout_button btn btn-primary">Заказать</button></a>
						  </div> -->
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
		    	<a href="#popular_" class="cats" id="popular"><img src="img/types/type0.png"></a>
				<a href="#fresh_" class="cats" id="fresh"><img src="img/types/type1.png"></a>
				<a href="#meat_" class="cats" id="meat"><img src="img/types/type2.png"></a>
				<!-- <a href="#" id="meat"><img src="img/types/type3.png"></a> -->
				<a href="#bakery_" class="cats" id="bakery"><img src="img/types/type4.png"></a>
				<!-- <a href="#" id="meat"><img src="img/types/type5.png"></a> -->
				<a href="#dairy_" class="cats" id="dairy"><img src="img/types/type6.png"></a>
				<!-- <a href="#" id="meat"><img src="img/types/type7.png"></a> -->
				<a href="#drinks_" class="cats" id="drinks"><img src="img/types/type8.png"></a>
<!-- 				<a href="#"><img src="img/types/type9.png"></a>
				<a href="#"><img src="img/types/type10.png"></a>
				<a href="#"><img src="img/types/type11.png"></a>
				<a href="#"><img src="img/types/type12.png"></a>
				<a href="#"><img src="img/types/type13.png"></a> -->
			</div>
		
		<div id="item-wrap-inner" class="col-xs-10 products-wrap">


<?php
// if (fill_main()) {
// fill_main();
// } else {
?>

			<div class="product-wrap">
			    <div class="product" id="11">
				    <img class="img-responsive" src="img/apple.jpg">
				    <button class="item_count btn count btn-dark-blue btn-small-med btn-trans">0</button>

				    <div class="action">
						<div>
							<button href="javascript:void(0)" class="reduce_count btn minus btn-dark-blue btn-small-med btn-trans">-</button>
							<button href="javascript:void(0)" class="increase_count btn add btn-dark-blue btn-small-med btn-trans">Добавить</button>
						</div>
					</div>
					
					<div class="desc">
					    <div class="name">
					    	<p class="product-name">Яблочки jpg много</p>
					    </div>
					    <div class="product-howmuch">
					    	1 кг
					    </div>
					    <div class="price">
					    	<p  class="product-price">45.00 руб</p>
					    </div>	
				    </div>
				</div>
			</div>
		    <div class="product-wrap">
			    <div class="product" id="10">
				    <img style="background: url(http://www.pajurio-odontologija.lt/wp-content/uploads/2013/11/Apple13.jpg); background-position: center center; background-size: 100%; background-repeat: no-repeat;">
				    <div class="item_count btn count">0</div>

				    <div class="action">
						<div>
							<button href="javascript:;" class="reduce_count btn minus btn-dark-blue btn-small-med btn-trans">-</button>
							<button href="javascript:;" class="increase_count btn add btn-dark-blue btn-small-med btn-trans">Добавить</button>
						</div>
					</div>
					<div class="desc">
					    <div class="name" id="onet">
					    	<p class="product-name">Красное яблочко вкусное</p>
					    </div>
					    <div class="product-howmuch">
					    	1 штука
					    </div>
					    <div class="price">
					    	<p class="product-price">10.00 руб</p>
					    </div>	
				    </div>
				</div>	
			</div>



			<div class="product-wrap">
			    <div class="product" id="12">
				    <img style="background: url(http://globe-views.com/dcim/dreams/bananas/bananas-03.jpg); background-position: center center; background-size: 100%; background-repeat: no-repeat;">
				    <div class="item_count btn count">0</div>

				    <div class="action">
						<div>
							<button href="javascript:;" class="reduce_count btn minus btn-dark-blue btn-small-med btn-trans">-</button>
							<button href="javascript:;" class="increase_count btn add btn-dark-blue btn-small-med btn-trans">Добавить</button>
						</div>
					</div>
					<div class="desc">
					    <div class="name" id="onet">
					    	<p class="product-name">Бананчик желтый</p>
					    </div>
					    <div class="price">
					    	<p class="product-price">23.00 руб</p>
					    </div>	
				    </div>
				</div>	
			</div>

			<div class="product-wrap">
			    <div class="product" id="13">
				    <img style="background: url(http://www.healthbenefitstimes.com/9/uploads/2013/05/Orange-Carrot.jpg); background-position: center center; background-size: 100%; background-repeat: no-repeat;">
				    <div class="item_count btn count">0</div>

				    <div class="action">
						<div>
							<button href="javascript:;" class="reduce_count btn minus btn-dark-blue btn-small-med btn-trans">-</button>
							<button href="javascript:;" class="increase_count btn add btn-dark-blue btn-small-med btn-trans">Добавить</button>
						</div>
					</div>
					<div class="desc">
					    <div class="name" id="onet">
					    	<p class="product-name">Морковка оранжевая</p>
					    </div>
					    <div class="price">
					    	<p class="product-price">18.00 руб</p>
					    </div>	
				    </div>
				</div>	
			</div>

			<div class="product-wrap">
			    <div class="product" id="13">
				    <img style="background: url(http://www.healthbenefitstimes.com/9/uploads/2013/05/Orange-Carrot.jpg); background-position: center center; background-size: 100%; background-repeat: no-repeat;">
				    <div class="item_count btn count">0</div>

				    <div class="action">
						<div>
							<button href="javascript:;" class="reduce_count btn minus btn-dark-blue btn-small-med btn-trans">-</button>
							<button href="javascript:;" class="increase_count btn add btn-dark-blue btn-small-med btn-trans">Добавить</button>
						</div>
					</div>
					<div class="desc">
					    <div class="name" id="onet">
					    	<p class="product-name">Морковка</p>
					    </div>
					    <div class="price">
					    	<p class="product-price">18.00 руб</p>
					    </div>	
				    </div>
				</div>	
			</div>

			<div class="col-lg-1 col-md-2 col-sm-4 product-wrap">
			    <div class="product" id="14">
				    <img style="background: url(http://globe-views.com/dcim/dreams/bananas/bananas-03.jpg); background-position: center center; background-size: 100%; background-repeat: no-repeat;">
				    <div class="item_count btn count">0</div>

				    <div class="action">
						<div>
							<button href="javascript:;" class="reduce_count btn minus btn-dark-blue btn-small-med btn-trans">-</button>
							<button href="javascript:;" class="increase_count btn add btn-dark-blue btn-small-med btn-trans">Добавить</button>
						</div>
					</div>
					<div class="desc">
					    <div class="name" id="onet">
					    	<p class="product-name">Бананчик </p>
					    </div>
					    <div class="price">
					    	<p class="product-price">23.00 руб</p>
					    </div>	
				    </div>
				</div>	
			</div>

			<div class="col-lg-1 col-md-2 col-sm-4 product-wrap">
			    <div class="product" id="15">
				    <img style="background: url(http://globe-views.com/dcim/dreams/bananas/bananas-03.jpg); background-position: center center; background-size: 100%; background-repeat: no-repeat;">
				    <div class="item_count btn count">0</div>

				    <div class="action">
						<div>
							<button href="javascript:;" class="reduce_count btn minus btn-dark-blue btn-small-med btn-trans">-</button>
							<button href="javascript:;" class="increase_count btn add btn-dark-blue btn-small-med btn-trans">Добавить</button>
						</div>
					</div>
					<div class="desc">
					    <div class="name" id="onet">
					    	<p class="product-name">Бананчик не  желтый</p>
					    </div>
					    <div class="price">
					    	<p class="product-price">23.00 руб</p>
					    </div>	
				    </div>
				</div>	
			</div>

			<div class="product-wrap">
			    <div class="product" id="12">
				    <img style="background: url(http://globe-views.com/dcim/dreams/bananas/bananas-03.jpg); background-position: center center; background-size: 100%; background-repeat: no-repeat;">
				    <div class="item_count btn count">0</div>

				    <div class="action">
						<div>
							<button href="javascript:;" class="reduce_count btn minus btn-dark-blue btn-small-med btn-trans">-</button>
							<button href="javascript:;" class="increase_count btn add btn-dark-blue btn-small-med btn-trans">Добавить</button>
						</div>
					</div>
					<div class="desc">
					    <div class="name" id="onet">
					    	<p class="product-name">Бананчик желтый</p>
					    </div>
					    <div class="price">
					    	<p class="product-price">23.00 руб</p>
					    </div>	
				    </div>
				</div>	
			</div>

			<div class="product-wrap">
			    <div class="product" id="12">
				    <img style="background: url(http://globe-views.com/dcim/dreams/bananas/bananas-03.jpg); background-position: center center; background-size: 100%; background-repeat: no-repeat;">
				    <div class="item_count btn count">0</div>

				    <div class="action">
						<div>
							<button href="javascript:;" class="reduce_count btn minus btn-dark-blue btn-small-med btn-trans">-</button>
							<button href="javascript:;" class="increase_count btn add btn-dark-blue btn-small-med btn-trans">Добавить</button>
						</div>
					</div>
					<div class="desc">
					    <div class="name" id="onet">
					    	<p class="product-name">Бананчик желтый</p>
					    </div>
					    <div class="price">
					    	<p class="product-price">23.00 руб</p>
					    </div>	
				    </div>
				</div>	
			</div>

			<div class="product-wrap">
			    <div class="product" id="12">
				    <img style="background: url(http://globe-views.com/dcim/dreams/bananas/bananas-03.jpg); background-position: center center; background-size: 100%; background-repeat: no-repeat;">
				    <div class="item_count btn count">0</div>

				    <div class="action">
						<div>
							<button href="javascript:;" class="reduce_count btn minus btn-dark-blue btn-small-med btn-trans">-</button>
							<button href="javascript:;" class="increase_count btn add btn-dark-blue btn-small-med btn-trans">Добавить</button>
						</div>
					</div>
					<div class="desc">
					    <div class="name" id="onet">
					    	<p class="product-name">Бананчик желтый</p>
					    </div>
					    <div class="price">
					    	<p class="product-price">23.00 руб</p>
					    </div>	
				    </div>
				</div>	
			</div>

			<div class="product-wrap">
			    <div class="product" id="12">
				    <img style="background: url(http://globe-views.com/dcim/dreams/bananas/bananas-03.jpg); background-position: center center; background-size: 100%; background-repeat: no-repeat;">
				    <div class="item_count btn count">0</div>

				    <div class="action">
						<div>
							<button href="javascript:;" class="reduce_count btn minus btn-dark-blue btn-small-med btn-trans">-</button>
							<button href="javascript:;" class="increase_count btn add btn-dark-blue btn-small-med btn-trans">Добавить</button>
						</div>
					</div>
					<div class="desc">
					    <div class="name" id="onet">
					    	<p class="product-name">Бананчик желтый</p>
					    </div>
					    <div class="price">
					    	<p class="product-price">23.00 руб</p>
					    </div>	
				    </div>
				</div>	
			</div>

			<div class="product-wrap">
			    <div class="product" id="12">
				    <img style="background: url(http://globe-views.com/dcim/dreams/bananas/bananas-03.jpg); background-position: center center; background-size: 100%; background-repeat: no-repeat;">
				    <div class="item_count btn count">0</div>

				    <div class="action">
						<div>
							<button href="javascript:;" class="reduce_count btn minus btn-dark-blue btn-small-med btn-trans">-</button>
							<button href="javascript:;" class="increase_count btn add btn-dark-blue btn-small-med btn-trans">Добавить</button>
						</div>
					</div>
					<div class="desc">
					    <div class="name" id="onet">
					    	<p class="product-name">Бананчик желтый</p>
					    </div>
					    <div class="price">
					    	<p class="product-price">23.00 руб</p>
					    </div>	
				    </div>
				</div>	
			</div>

			<div class="product-wrap">
			    <div class="product" id="12">
				    <img style="background: url(http://globe-views.com/dcim/dreams/bananas/bananas-03.jpg); background-position: center center; background-size: 100%; background-repeat: no-repeat;">
				    <div class="item_count btn count">0</div>

				    <div class="action">
						<div>
							<button href="javascript:;" class="reduce_count btn minus btn-dark-blue btn-small-med btn-trans">-</button>
							<button href="javascript:;" class="increase_count btn add btn-dark-blue btn-small-med btn-trans">Добавить</button>
						</div>
					</div>
					<div class="desc">
					    <div class="name" id="onet">
					    	<p class="product-name">Бананчик желтый</p>
					    </div>
					    <div class="price">
					    	<p class="product-price">23.00 руб</p>
					    </div>	
				    </div>
				</div>	
			</div>

			<div class="product-wrap">
			    <div class="product" id="12">
				    <img style="background: url(http://globe-views.com/dcim/dreams/bananas/bananas-03.jpg); background-position: center center; background-size: 100%; background-repeat: no-repeat;">
				    <div class="item_count btn count">0</div>

				    <div class="action">
						<div>
							<button href="javascript:;" class="reduce_count btn minus btn-dark-blue btn-small-med btn-trans">-</button>
							<button href="javascript:;" class="increase_count btn add btn-dark-blue btn-small-med btn-trans">Добавить</button>
						</div>
					</div>
					<div class="desc">
					    <div class="name" id="onet">
					    	<p class="product-name">Бананчик желтый</p>
					    </div>
					    <div class="price">
					    	<p class="product-price">23.00 руб</p>
					    </div>	
				    </div>
				</div>	
			</div>

			<div class="product-wrap">
			    <div class="product" id="12">
				    <img style="background: url(http://globe-views.com/dcim/dreams/bananas/bananas-03.jpg); background-position: center center; background-size: 100%; background-repeat: no-repeat;">
				    <div class="item_count btn count">0</div>

				    <div class="action">
						<div>
							<button href="javascript:;" class="reduce_count btn minus btn-dark-blue btn-small-med btn-trans">-</button>
							<button href="javascript:;" class="increase_count btn add btn-dark-blue btn-small-med btn-trans">Добавить</button>
						</div>
					</div>
					<div class="desc">
					    <div class="name" id="onet">
					    	<p class="product-name">Бананчик желтый</p>
					    </div>
					    <div class="price">
					    	<p class="product-price">23.00 руб</p>
					    </div>	
				    </div>
				</div>	
			</div>

			<div class="product-wrap">
			    <div class="product" id="12">
				    <img style="background: url(http://globe-views.com/dcim/dreams/bananas/bananas-03.jpg); background-position: center center; background-size: 100%; background-repeat: no-repeat;">
				    <div class="item_count btn count">0</div>

				    <div class="action">
						<div>
							<button href="javascript:;" class="reduce_count btn minus btn-dark-blue btn-small-med btn-trans">-</button>
							<button href="javascript:;" class="increase_count btn add btn-dark-blue btn-small-med btn-trans">Добавить</button>
						</div>
					</div>
					<div class="desc">
					    <div class="name" id="onet">
					    	<p class="product-name">Бананчик желтый</p>
					    </div>
					    <div class="price">
					    	<p class="product-price">23.00 руб</p>
					    </div>	
				    </div>
				</div>	
			</div>

			<div class="product-wrap">
			    <div class="product" id="12">
				    <img style="background: url(http://globe-views.com/dcim/dreams/bananas/bananas-03.jpg); background-position: center center; background-size: 100%; background-repeat: no-repeat;">
				    <div class="item_count btn count">0</div>

				    <div class="action">
						<div>
							<button href="javascript:;" class="reduce_count btn minus btn-dark-blue btn-small-med btn-trans">-</button>
							<button href="javascript:;" class="increase_count btn add btn-dark-blue btn-small-med btn-trans">Добавить</button>
						</div>
					</div>
					<div class="desc">
					    <div class="name" id="onet">
					    	<p class="product-name">Бананчик желтый</p>
					    </div>
					    <div class="price">
					    	<p class="product-price">23.00 руб</p>
					    </div>	
				    </div>
				</div>	
			</div>

			<?php 

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