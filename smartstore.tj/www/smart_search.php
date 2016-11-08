<?php include ("blocks/bd.php");
if (isset($_POST['submit_s']))
{
	$submit_s=$_POST['submit_s'];
}


if (isset($_POST['input_search']))
{
	$input_search=$_POST['input_search'];
}


if (isset($submit_s))
{
	if(empty($input_search) or strlen($input_search)<4 )
	{
		exit("<p align='center'>Поисковый запрос не введен, либо он менее 4-х символов</p>");
	}
	
	$input_search=trim($input_search); /*чтобы убрать лишные пробелы*/
	$input_search=stripcslashes($sinput_search); /*чтобы убрать лишные слешы*/
	$input_search=htmlspecialchars($input_search);/*чтобы защитится от взлома*/
}
else
{
	exit("<p align='center'>Вы обратились к файлу без необходимых параметров</p>");
}
?>
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
	     <div class="center-body-title-new-products">Новые продукты</div>
		 <div class="about-block">
		 <div class="center-body-new-products">
			 
			 <?php
		$result=mysql_query("SELECT id,mini_img,title,description,sena FROM data WHERE MATCH(description) AGAINST('$input_search') ",$db);
        if (!$result)
        {
	      echo "<p align='center'>Запрос на выборку данных из базы не прошел. Напишите об этом администратору admin@ss.tj.<br><b>Код ошибки</b></p>";
          exit (mysql_error());
        }

        if (mysql_num_rows($result)>0)
        {
          $myrow=mysql_fetch_array($result);
		    do
               {
	             printf ("
				 <div class='new-product'>
				   <div class='new-product-img'><img src='%s' width='200' height='300'></div>
				   <div class='new-product-title'>%s</div>
				   <div class='new-product-price'>%s сомон</div>
				  <a href='smart_search.php?id=%s' class='new-product-buy'>Купить</a>
			   </div>",$myrow["mini_img"],$myrow["title"],$myrow["sena"],$myrow["id"]);
	
               }
 while($myrow=mysql_fetch_array($result));
		   
		  	
		  
		  
        }
        else
        {
	      echo "<p align='center'>Информация по вашему запросу на сайте не найдено</p>";
	      exit();
        }
?>		
		
		 	 
		 </div>
		 </div>
	     <?php include ("blocks/subscribe.php");?>
		 <?php include ("blocks/footer.php");?> 
	 </div>
	</div>
</body>
</html>