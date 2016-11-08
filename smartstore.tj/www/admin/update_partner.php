<?php 
include ("blocks/bd.php");
if (isset($_POST['id'])){$id = $_POST['id'];}
if (isset($_POST['logo'])) {$logo = $_POST['logo']; if ($logo == '') {unset($logo);}}
if (isset($_POST['name_brand'])){$name_brand = $_POST['name_brand']; if ($name_brand == '') {unset($name_brand);}}
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
	     <div class="center-body-title-new-products">Страница редактирование партнеров</div>
		<div class="about-block">
		 <div class="center-body-new-products">
			<?php
if (isset($logo)&& isset($name_brand))
{
/*Здесь пишем что можно занести информацию в базу*/
$result = mysql_query ("UPDATE partners SET logo='$logo',name_brand='$name_brand' WHERE id='$id'");

if ($result == 'true') {echo "<p id='info'>Ваш партнер успешно обновлен!</p>";}
else {echo "<p id='info'>Ваш партнер не обновлен!</p>";}


}		 
else 

{
echo "<p id='info'>Вы ввели не всю информацию,по этому партнер в базу не может быть добавлен.</p>";
}		 
?> 
  		 
		 </div>
		 </div>
	     
		 <?php include ("../blocks/footer.php");?> 
		 
	 </div>
	</div>
</body>
</html>