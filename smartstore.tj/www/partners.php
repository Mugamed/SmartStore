<?php include ("blocks/bd.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Добро пожаловать в онлайн магазин SMARTSTORE.TJ!</title>
	<link rel="stylesheet" href="style/main.css" type="text/css">
</head>
<body>
	<div id="content">
	 <?php include ("blocks/nav.php");?>
	 <div class="center">
		 <div class="center-header">
		       <?php include ("blocks/categories.php");?>
               <?php include ("blocks/slider.php");?>
		 </div>	   
	     <div class="center-body-title-new-products">Партнеры</div>
		  <div class="about-block">
      <div class='partners-blog'>
		  <?php
		$result=mysql_query("SELECT * FROM partners",$db);
        if (!$result)
        {
	      echo "<p>Запрос на выборку данных из базы не прошел. Напишите об этом администратору admin@ss.tj.<br><b>Код ошибки</b></p>";
          exit (mysql_error());
        }

        if (mysql_num_rows($result)>0)
        {
          $myrow=mysql_fetch_array($result);
		     do
               {
	             printf ("<div id='logo-partner'><img src='%s' width='300' height='200'><p>%s</p></div>",$myrow["logo"],$myrow["name_brand"],$myrow["id"]);
	
               }while($myrow=mysql_fetch_array($result));
        }
        else
        {
	      echo "<p>Информация по запросу не может быть извлечена в таблице нет записей</p>";
	      exit();
        }
?>		
         </div>
         </div>
		 </div>
		 <?php include ("blocks/subscribe.php");?>
		 <?php include ("blocks/footer.php");?>	 
	 </div>
	</div>
</body>
</html>