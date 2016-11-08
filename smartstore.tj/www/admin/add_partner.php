<?php 
include ("blocks/bd.php");

/*Если сущестывует в глобальном массиве $_POST['descreption'] опр. ячейка, то мы создаем простую переменную из неё. Если переменная пустая, то уничтожаем переменную.*/

if (isset($_POST['logo'])) {$logo = $_POST['logo']; if ($logo == '') {unset($logo);}}
if (isset($_POST['name_brand'])) {$name_brand = $_POST['name_brand']; if ($name_brand == '') {unset($name_brand);}}

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
	     <div class="center-body-title-new-products">Страница добавление нового партнера</div>
		<div class="about-block">
		 <div class="center-body-new-products">
			<?php
if (isset($logo))
{
/*Здесь пишем что можно занести информацию в базу*/
$result = mysql_query ("INSERT INTO partners (logo,name_brand) VALUES ('$logo', '$name_brand')");

if ($result == 'true') {echo "<p id='info'>Ваши данные  успешно добавлен!</p>";}
else {echo "<p id='info'>Ваши данные не добавлена!</p>";}


}		 
else 

{
echo "<p id='info'>Вы ввели не всю информацию,по этому данные в базу не может быть добавлен.</p>";
}		 
?> 
  		 
		 </div>
		 </div>
	     
		 <?php include ("blocks/footer.php");?> 
		 
	 </div>
	</div>
</body>
</html>