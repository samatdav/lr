<?php
include 'core/init.php';

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
			    	<span class="helper"></span>
				    <img class="" src="img/apple.jpg">
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


<div class="frame">
    <span class="helper"></span>
    <img src="http://jsfiddle.net/img/logo.png" height=3 />
</div>

<style type="text/css">
.product {

    white-space: nowrap;
    text-align: center; 
}

.helper {
    display: inline-block;
    height: 100%;
    vertical-align: middle;
}

.product img {
    vertical-align: middle;
    max-height: 280px;
    max-width: 195px;
    position: relative;
    left: -4px;
}

</style>

			<?php 

		// }
		?>

	  	 </div>

</body>

</html>