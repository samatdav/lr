<?php
include 'core/init.php';

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



<link rel="stylesheet" type="text/css" href="css/order.css"> 

<div class="header navbar-fixed-top"> <nav class="navbar fluid-container"> 

<div class="navbar-header"> <img class="logo" id="logo_icon" src="img/icon_trans.png" alt="expfood"> <img class="logo" id="logo_text" src="img/logo_main.png" alt="expfood"> 
					  		
					  		<?php





					  		echo $user_data['username'];
					  		echo output_errors($errors);
					  		?>

					  		<?php
					  		if (empty($_POST['first_name']) === false && empty($_POST['phone']) === false && empty($_POST['city']) === false && empty($_POST['street']) === false && empty($_POST['house']) === false) {
							  take_order_data($user_data['user_id'], $_POST['first_name'], $_POST['phone'], $_POST['city'], $_POST['street'], $_POST['house'], $_POST['extra']);
							  header('Location: payment.php');
							} 
							else {
								take_order_data($user_data['user_id'], $_POST['first_name'], $_POST['phone'], $_POST['city'], $_POST['street'], $_POST['house'], $_POST['extra']);
							}
						  	?>
</div> 

<div class="navbar-collapse collapse navbar-right"> 
</div> </nav> 
</div> 

<div class="container"> 

<div class="jumbotron content"> 




<form class="form-horizontal" name="sentMessage" id="contactForm" novalidate action="" method="post"> 

	<div class="form-group"> 
	<label for="inputAddress" class="col-sm-2 control-label">Ваше имя
	</label> 
	<div class="col-sm-10"> 
	<input type="text" required value="<?php fill_input('first_name'); ?>" class="form-control" name="first_name" placeholder="Например Маша" id="name">
    <p class="help-block text-danger"></p> 
	</div> 
	</div> 

	<div class="form-group"> 
	<label for="inputMobile" required class="col-sm-2 control-label">Номер мобильного
	</label> 
	<div class="col-sm-10"> 
	<input type="tel" required class="form-control" value="<?php fill_input('phone'); ?>" name="phone" placeholder="В формате 8 *** *** ** **" id="phone">
    <p class="help-block text-danger"></p>
	</div> 
	</div> 


	<div class="form-group"> 
	<label for="inputName"  class="col-sm-2 control-label">Город
	</label> 
	<div class="col-sm-10"> 
	<input type="text" value="<?php fill_input('city'); ?>" name="city" class="form-control" placeholder="Одинцово" id="email">
    <p class="help-block text-danger"></p>
	</div> 
	</div> 

	<div class="form-group"> 
	<label for="inputName"  class="col-sm-2 control-label">Улица
	</label> 
	<div class="col-sm-10"> 
	<input type="text"  value="<?php fill_input('street'); ?>" required class="form-control" name="street" placeholder="Маковского" id="email">
    <p class="help-block text-danger"></p>
	</div> 
	</div> 

	<div class="form-group"> 
	<label for="inputName"  class="col-sm-2 control-label">Дом
	</label> 
	<div class="col-sm-10">
	<input type="text"  value="<?php fill_input('house'); ?>" required class="form-control" name="house" placeholder="2" id="email">
    <p class="help-block text-danger"></p>
	</div> 
	</div> 


	<div class="form-group"> 
	<label for="inputName"  class="col-sm-2 control-label">Дополнительные инструкции
	</label> 
	<div class="col-sm-10">
	<input class="form-control" type="text"  value="<?php fill_input('extra'); ?>" placeholder="Позвонить когда доставят" name="extra" id="message">
    <p class="help-block text-danger"></p>
	</div> 
	</div> 

	<div class="clearfix"></div>
    <div class="col-lg-12 text-center" id="submitOrder">
        <div id="success"></div>
        <input class="hidden" type="submit" value="Register" id="submit_order_data">
    </div>
</form> 



<nav> 
<ul class="pager"> 

<li class="previous"><a id="backToMain" href="#" class="backForth">
<span aria-hidden="true">&larr;
</span> Назад</a>
</li> 

<li id="tt" class="next" data-toggle="tooltip" data-placement="right" title="Tooltip on top">
<a href="#payment" id="toPay" class="backForth">Оплатить 
<span aria-hidden="true">&rarr;</span></a>
</li>

</ul> </nav>
</div> 
</div> 

<script type="text/javascript">


</script>


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