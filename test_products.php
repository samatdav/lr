<?php
include 'core/init.php';
header('Content-type: text/html; charset=utf-8');
$result = mysql_query("SELECT * FROM products");
while($row = mysql_fetch_row($result))
{
    echo "<tr>";

    // echo "<td>$row[0]</td>";
    // echo "<td>$row[1]</td>";
    // echo "<td>$row[1]</td>";

    for ($x = 0; $x < 7; $x++) {
	    echo "<td>$row[$x]</td>";		    
	}

    echo "</tr><br>";
}
?>

<!DOCTYPE html>
<html>

	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
	    <meta charset="utf-8">
	    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.css">
	    <link href="css/css" rel="stylesheet" type="text/css">
	    <link href="css/css(1)" rel="stylesheet" type="text/css">
	    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	    <link rel="stylesheet" type="text/css" href="css/style.css">
	    <link rel="stylesheet" type="text/css" href="css/signin.css">
	    <link rel="stylesheet" type="text/css" href="css/index.css">

	    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
	    <script type="text/javascript" src="js/gmaps.js"></script>
		<title>Express Food</title>

		<style type="text/css">
			.product-wrap {
				width: 200px;
			}
		</style>
	</head>

	<body>
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

</body>

</html>