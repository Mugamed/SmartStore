<?php include ("blocks/bd.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Добро пожаловать в онлайн магазин SMARTSTORE.TJ</title>
	<link rel="stylesheet" href="style/main.css" type="text/css">
	<meta name="description" content="<?php echo $myrow ["meta_d"];?>">
	<meta name="keywords" content="<?php echo $myrow ["meta_k"];?>">
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
		$result=mysql_query("SELECT * FROM data ORDER BY id DESC LIMIT 6",$db);
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
	             printf ("
				 <div class='new-product'>
				   <div class='new-product-img'><img src='%s' width='200' height='300'></div>
				   <div class='new-product-title'>%s</div>
				   <div class='new-product-price'>%s сомон</div>
				  <a href='smart-view.php?id=%s' class='new-product-buy'>Купить</a>
			   </div>",$myrow["mini_img"],$myrow["title"],$myrow["sena"],$myrow["id"]);
	
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
	     <?php include ("blocks/subscribe.php");?>
		 <?php include ("blocks/footer.php");?> 
		 
	 </div>
	</div>
</body>
</html>