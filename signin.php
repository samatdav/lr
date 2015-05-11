<?php
include 'core/init.php';


if (logged_in())  {
	header('Location: main.php');
}
?>

<!doctype <!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Express Food</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.css">
    <link href="css/css" rel="stylesheet" type="text/css">
    <link href="css/css(1)" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/order.css">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>

<div class="page-container">

<div class="header navbar-fixed-top"> <nav class="navbar fluid-container"> 

<div class="navbar-header"> 
  <a href="index.php">
    <img class="logo" id="logo_icon" src="img/icon_trans.png" alt="expfood"> 
    <img class="logo" id="logo_text" src="img/logo_main.png" alt="expfood"> 
  </a>
</div> 


<div class="navbar-collapse collapse navbar-right"> 
</div> </nav> 
</div> 

<?php
if (empty($_POST) === false) {
	$username = $_POST['email'];
	$password = $_POST['password'];


	// echo $username, '  ', $password;


	if (empty($username) === true || empty($username) === true) {
		$errors[] = 'Please enter email and password';
	}   else {
		$login = login($username, $password);
		if ($login === false) {
			$errors[] = 'wrong email and password combination';

		} else {
			$_SESSION['user_id'] = $login;
			header('Location: main.php');
			exit();
			// echo 'ok';

		}
	}


}
?>


<div class="content"> 
  <div class="slimbox">
    <h1>С возвращением!</h1>
    <?php
	echo output_errors($errors);
    ?>
    <form  action="" method="post">
	  <div class="form-group">
	    <input autocomplete="on" name="email" required type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
	  </div>
	  <div class="form-group">
	    <input autocomplete="on" name="password" required type="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
	  </div>
	  <input type="submit" class="btn-signin btn btn-primary btn-block" value="ВОЙТИ">
	</form>
	<p>
	  Нет аккаунта?
	  <a class="signup" href="index.php">Зарегистрировать</a>
	</p>
  </div>
</div>


</div>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/cart.js"></script>
<script type="text/javascript" src="js/categories.js"></script>
<script type="text/javascript" src="js/order.js"></script>
<script type="text/javascript">
</script>


</body>
</html>