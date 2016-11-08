<?php 
include ("blocks/bd.php");
if (isset($_POST['id']))      {$id = $_POST['id'];}
if (isset($_POST['title']))        {$title = $_POST['title']; if ($title == '') {unset($title);}}
if (isset($_POST['fio']))        {$fio = $_POST['fio']; if ($fio == '') {unset($fio);}}
if (isset($_POST['mail']))        {$mail = $_POST['mail']; if ($mail == '') {unset($mail);}}
if (isset($_POST['phone']))        {$phone = $_POST['phone']; if ($phone == '') {unset($phone);}}
if (isset($_POST['indeks']))        {$indeks = $_POST['indeks']; if ($indeks == '') {unset($indeks);}}
if (isset($_POST['gorod']))        {$gorod = $_POST['gorod']; if ($gorod == '') {unset($gorod);}}
if (isset($_POST['adress']))        {$adress = $_POST['adress']; if ($adress == '') {unset($adress);}}
if (isset($_POST['dostavka']))        {$dostavka = $_POST['dostavka']; if ($dostavka == '') {unset($dostavka);}}
if (isset($_POST['komment']))        {$komment = $_POST['komment']; if ($komment == '') {unset($komment);}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Добро пожаловать в админскую часть SMARTSTORE.TJ!</title>
	<link rel="stylesheet" href="/style/main.css" type="text/css">
</head>
<body>
	<div id="content">
	 <?php include ("blocks/nav.php");?>
	 
	 <div class="center">
		 <div class="center-header">
		        
		 </div>	   
	     <div class="center-body-title-new-products">Страница редактирование заказов</div>
		<div class="about-block">
		 <div class="center-body-new-products">
			<?php
if (isset($title) 
   && isset($fio) 
   && isset($mail) 
   && isset($phone) 
   && isset($indeks)
   && isset($gorod)
   && isset($adress)
   && isset($dostavka)
   && isset($komment))
{
/*Здесь пишем что можно занести информацию в базу*/
$result = mysql_query ("UPDATE zakaz SET 
  title='$title',
  fio='$fio',
  mail='$mail',
  phone='$phone',
  indeks='$indeks',
  gorod='$gorod',
  adress='$adress',
  dostavka='$dostavka',
  komment='$komment' WHERE id='$id'");

if ($result == 'true') {echo "<p id='info'>Заказ успешно редактирован!</p>";}
else {echo "<p id='info'>Заказ не редактирован!</p>";}


}		 
else 

{
echo "<p id='info'>Вы ввели не всю информацию,по этому заказ в базу не может быть добавлен.</p>";
}		 
?> 
  		 
		 </div>
		 </div>
	     
		 <?php include ("blocks/footer.php");?> 
		 
	 </div>
	</div>
</body>
</html>