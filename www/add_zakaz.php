<?php 
include ("blocks/bd.php");

/*Если сущестывует в глобальном массиве $_POST['title'] опр. ячейка, то мы создаем простую переменную из неё. Если переменная пустая, то уничтожаем переменную.*/

if (isset($_POST['title'])) {$title = $_POST['title']; if ($title == '') {unset($title);}}
if (isset($_POST['fio'])) {$fio = $_POST['fio']; if ($fio == '') {unset($fio);}}
if (isset($_POST['mail'])) {$mail = $_POST['mail']; if ($mail == '') {unset($mail);}}
if (isset($_POST['phone'])) {$phone = $_POST['phone']; if ($phone == '') {unset($phone);}}
if (isset($_POST['indeks'])) {$indeks = $_POST['indeks']; if ($indeks == '') {unset($indeks);}}
if (isset($_POST['gorod'])) {$gorod = $_POST['gorod']; if ($gorod == '') {unset($gorod);}}
if (isset($_POST['adress'])) {$adress = $_POST['adress']; if ($adress == '') {unset($adress);}}
if (isset($_POST['dostavka'])) {$dostavka = $_POST['dostavka']; if ($dostavka == '') {unset($dostavka);}}
if (isset($_POST['komment'])) {$komment = $_POST['komment']; if ($komment == '') {unset($komment);}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Добро пожаловать в админскую часть SMARTPHONE.TJ!</title>
	<link rel="stylesheet" href="/style/main.css" type="text/css">
</head>
<body>
	<div id="content">
	 <?php include ("blocks/nav.php");?>
	    
	 <div class="center">
		 <div class="center-header">
		     <?php include ("blocks/categories.php");?> 
		     <?php include ("blocks/slider.php");?>   
	   
		 </div>	 
		 
	     <div class="center-body-title-new-products">Страница оформление заказа</div>
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
$result = mysql_query ("INSERT INTO zakaz (
  title,fio,mail, phone, indeks, gorod, adress, dostavka, komment) 
VALUES (
  '$title','$fio','$mail','$phone','$indeks','$gorod','$adress','$dostavka','$komment')");

if ($result == 'true') {echo "<p id='info'>Ваш заказ успешно оформлен!<br>Ждите, скоро с вами свяжется наша служба поддержки чтобы уточнить заказ! </p>";}
else {echo "<p id='info'>Ваш заказ не оформлен!</p>";}


}		 
else 

{
echo "<p id='info'>Вы заполняли не все поля пожалуйста заполните!</p>";
}		 
?> 
  		 
		 </div>
		 </div>
	     
		 <?php include ("blocks/footer.php");?> 
		 
	 </div>
	</div>
</body>
</html>