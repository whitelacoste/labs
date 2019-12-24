<html lang="ru">
  <head>
	<?php
	require_once('php/header.php');
	?>
  </head>
  
  <body> 
	<section class="jumbotron text-center" >
        <div class="container" >
          <h1 class="jumbotron-heading">Все заказы</h1>
        </div>
      

	<table class="table table-striped">
	<thead>
    <tr>
      <th scope="col">Имя заказчика</th>
      <th scope="col">Номер заказа</th>
      <th scope="col">Дисконт карта</th>
      <th scope="col">Телефон +7</th>
      <th scope="col">Примерная готовность</th>
    </tr>
  </thead>
	<tbody>
	<tr>
		<?php
	  
	$mysql = mysqli_connect('127.0.0.1', 'root','', 'baza1');
		if ($mysql == false){
		echo 'Не удалось подключиться к бд<br>' ;
		echo mysqli_connect_error();
		exit();
		}	
	mysqli_set_charset($mysql, 'utf8');
	
	$orders = mysqli_query($mysql, "SELECT * FROM orders ORDER BY 'Заказ'");
	$row = mysqli_fetch_row($orders);
	
	while($row !=NULL){
	?><tr><?php
	for($i=0;$i<5;$i++){
	?>	<td><?php print($row[$i]); ?></td><?php
	}
	?></tr><?php
	$row = mysqli_fetch_row($orders);
	}
	?>
</table>

</section>
</body>
