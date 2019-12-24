<!DOCTYPE html>

<html lang="ru">
  <head>
	<?php
	require_once('php/header.php');
	?>
	<style>
	.invalid { border-color: red; }
	#error { color: red }
	</style>
	
  </head>
  

  
 <body> 
 <section class="jumbotron text-center" >
        <div class="container" >
          <h1 class="jumbotron-heading">Добавить заказ</h1>
        </div>
		<form class="needs-validation" action ="php/sendorder.php" method = "POST">
	
		<div class="col-md-4 mb-3"  style="display: block; margin: 0 auto;" >
			<label id="labName" for="name">Имя</label>
			<input type="text" class="form-control" id="name" name = "name" onBlur = "checkname()" onfocus = "namefocus()" placeholder="Самый лучший заказчик" required>
			
		</div>
		
		<div class="col-md-4 mb-3" style="display: block; margin: 0 auto;">
			<label id="labNumber" for="number">Номер дисконт карты</label>
			<input type="text" class="form-control" id="number" name ="number" onBlur = "checknumber()" onfocus = "numberfocus()" placeholder="000006" maxlength="6" minlength="6" required>
      
		</div>
   
		<div class="col-md-4 mb-3 col-md-offset-10" style="display: block; margin: 0 auto;">
			<label id ="labNum" for="num">Номер телефона</label>
			<div class="input-group">
			<div class="input-group-prepend">
			<span class="input-group-text" id="inputGroupPrepend">+7</span>
			</div>
			<input type="text" class="form-control" id="num" name="num" onBlur = "checknum()" onfocus = "numfocus()" maxlength="10" minlength="10" placeholder="9876543210" aria-describedby="inputGroupPrepend" required>
			</div>
		</div>
  
	<button class="btn btn-primary" type="submit" name="send">Отправить</button>
</form>
</section>

<script>
 function checkname() {
	var name = document.getElementById("name");
	var labName = document.getElementById("labName");
	var name_regV = /[А-Яа-я]/;
	var test = name_regV.test(name.value);
	
	if (test == false || name.value.length === 0) { 
		name.classList.add('invalid');
		labName.innerHTML = 'Мы не знаем кому отправлять заказ!';
  }
};

function namefocus() {
	var name = document.getElementById("name");
	var labName = document.getElementById("labName");
		if (name.classList.contains('invalid')) {
			name.classList.remove('invalid');
			labName.innerHTML = "Имя";
		}
};

function checknumber() {
	var number = document.getElementById("number");
	var labNumber = document.getElementById("labNumber");
	var nam_regV = /[0-9]/;
	var test = nam_regV.test(number.value) ;
	
	if (test == false) { 
		number.classList.add('invalid');
		labNumber.innerHTML = 'Онлайн заказами могут пользоваться только люди по программе дисконта';
  }
};

function numberfocus() {
	var number = document.getElementById("number");
	var labNumber = document.getElementById("labNumber");
		if (number.classList.contains('invalid')) {
			number.classList.remove('invalid');
			labNumber.innerHTML = "Номер дисконта";
	}
};
function checknum() {
	var num = document.getElementById("num");
	var labNum = document.getElementById("labNum");
	var nam_regV = /[0-9]/;
	var test = nam_regV.test(num.value) ;
	
	if (test == false) { 
		num.classList.add('invalid');
		labNum.innerHTML = 'Введите номер телефона';
  }
};
function numfocus() {
	var num = document.getElementById("num");
	var labNum = document.getElementById("labNum");
		if (num.classList.contains('invalid')) {
			num.classList.remove('invalid');
			labNum.innerHTML = "Номер телефона";
	}
};





</script>
</body>