<div class="slimbox"> <h1>Мы работаем для тебя!</h1> <h2>Зарегистрируйся и получи бесплатную доставку на первый заказ!</h2> 

<?php
// echo '<ul><li>' . implode('</li><li>', $errors) . '</li></ul>';
// echo output_errors($errors);
?>
<h3 style="color:red;">Что-то пошло не так, проверьте правильность введенных данных</h3>
<form class="form-group" method="post"> 

<div class="form-group"> <input required type="email" name="email" class="form-control" placeholder="Email"> </div> 
<div class="form-group"> <input required type="password" name="password" class="form-control" placeholder="Password"> </div> 

<!-- hidden inputs -->
<div class="hidden"> <input type="text" name="city" id="inputCity"> </div>
<div class="hidden"> <input type="text" name="street" id="inputStreet"> </div> 
<div class="hidden"> <input type="text" name="house" id="inputHouse"> </div>

<input type="submit" class="btn-signin btn btn-primary btn-block" value="Register"> 
</form>  

<script type="text/javascript">
	inputAddress();
</script>
<p> Уже есть аккаунт? <a class="signup" href="signin.html">Войти</a> </p> </div> </div>

<style>#map-canvas { opacity: 0.2; } #map-words {height: 100%;}</style>