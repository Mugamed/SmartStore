<?php 
include ("blocks/bd.php");
if (isset($_POST['id'])){$id = $_POST['id'];}
if (isset($_POST['img_add'])) {$img_add = $_POST['img_add']; if ($img_add == '') {unset($img_add);}}
if (isset($_POST['title'])){$title = $_POST['title']; if ($title == '') {unset($title);}}
if (isset($_POST['link'])){$link = $_POST['link']; if ($link == '') {unset($link);}}
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
	     <div class="center-body-title-new-products">Страница редактирование рекламы</div>
		<div class="about-block">
		 <div class="center-body-new-products">
			<?php
if (isset($img_add)&& isset($title)&& isset($link))
{
/*Здесь пишем что можно занести информацию в базу*/
$result = mysql_query ("UPDATE addver SET img_add='$img_add',title='$title',link='$link' WHERE id='$id'");

if ($result == 'true') {echo "<p id='info'>Ваша реклама успешно обновлена!</p>";}
else {echo "<p id='info'>Ваша реклама не обновлена!</p>";}


}		 
else 

{
echo "<p id='info'>Вы ввели не всю информацию,по этому реклама в базу не может быть добавлен.</p>";
}		 
?> 
  		 
		 </div>
		 </div>
	     
		 <?php include ("../blocks/footer.php");?> 
		 
	 </div>
	</div>
</body>
</html>