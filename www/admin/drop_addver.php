<?php 
include ("blocks/bd.php");
if (isset($_POST['id'])) {$id = $_POST['id'];}
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
	     <div class="center-body-title-new-products">Страница удаление рекламы</div>
		<div class="about-block">
		 <div class="center-body-new-products">
			 <?php 
if (isset($id))
{
$result = mysql_query ("DELETE FROM addver WHERE id='$id'");

if ($result == 'true') {echo "<p id='info'>Ваша реклама успешно удален!</p>";}
else {echo "<p id='info'>Ваша реклама не удален!</p>";}


}		 
else 

{
echo "<p id='info'>Вы запустили данный файл без параметров id и поэтому, удалить рекламу невозможно (скорее всего Вы не выбрали радиокнопку на предыдущем шаге).</p>";
}
?>
  		 
		 </div>
		 </div>
	     
		 <?php include ("blocks/footer.php");?> 
		 
	 </div>
	</div>
</body>
</html>