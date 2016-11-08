<?php include ("blocks/bd.php");
if(isset($_GET['id'])) {$id=$_GET['id'];}
if(!isset($id)) {$id=1;}

$result=mysql_query("SELECT * FROM data WHERE id='$id'",$db);
if (!$result)
{
	echo "<p>Запрос на выборку данных из базы не прошел. Напишите об этом администратору admin@inno.tj.<br><b>Код ошибки</b></p>";
exit (mysql_error());
}

if (mysql_num_rows($result)>0)
{
$myrow=mysql_fetch_array($result);
}
else
{
	echo "<p>Информация по запросу не может быть извлечена в таблице нет записей</p>";
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<script language = "JavaScript">
var bigsize = "300"; //Размер большой картинки
var smallsize = "80"; //Размер маленькой картинки
function changeSizeImage(im) {
  var win = "width=500,height=500,menubar=no,location=no,resizable=yes,scrollbars=yes"; newWin = window.open(im.src,"newWin",win); newWin.focus();
}
</script>
	<meta charset="UTF-8">
	<title><?php echo $myrow["title"];?></title>
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
		 <div class="center-body-title-new-products">Смартфоны</div>  
	     <div class="about-block">
		 <div class="center-device">
			 <?php
		          printf("
				         <table id ='table'>
				 <tr>
					 <td rowspan='2'><div class='center-device-img'><img src='%s' width='280' height='400'></div></td>
					 <td valign='top'><div class='device-name'>%s</div></td>
				 </tr>
					 <td valign='top'>
						 <div  class='kratkoe-opisanie'>%s</div>
					 </td>
				 </tr>
				  <tr>
					 <tr>
					   <td>
					    <div class='smart-td-mini-img'><img src='%s' width='60'height='80'  onclick='changeSizeImage(this)'></div>
				        <div class='smart-td-mini-img'><img src='%s' width='60'height='80'  onclick='changeSizeImage(this)'></div>
						<div class='smart-td-mini-img'><img src='%s' width='60'height='80'  onclick='changeSizeImage(this)'></div>
						<div class='smart-td-mini-img'><img src='%s' width='60'height='80'  onclick='changeSizeImage(this)'></div>
					   </td> 
 					 </tr>
					 <td><div class='sena'>%s сомон</div></td>
					 <td colspan='2' class='oformit-zakaz-td'><a href='smart-oformlenie.php?id=%s' class='oformit-zakaz'>Оформить заказ</a></td>
				     <td class='yest'><marquee>%s</marquee></td>
				 </tr>	 
				 <tr>
					 <td colspan='2'><div class='harak-title'>Характеристика</div></td>
				 </tr>
				 <tr >
					 <td class='td'>Операционная система</td>
					 <td class='td'>%s</td>
				 </tr>
				  <tr>
					 <td class='td'>Поддержка SIM-карт</td>
					 <td class='td'>%s</td>
				 </tr>
				 <tr>
					 <td class='td'>Связь</td>
					 <td class='td'>%s</td>
				 </tr>
				 <tr>
					 <td class='td'>Экран</td>
					 <td class='td'>%s</td>
				 </tr>
				 <tr>
					 <td class='td'>Процессор</td>
					 <td class='td'>%s</td>
				 </tr>
				 <tr>
					 <td class='td'>Графический процессор</td>
					 <td class='td'>%s</td>
				 </tr>
				 <tr>
					 <td class='td'>Оперативная память</td>
					 <td class='td'>%s</td>
				 </tr>
				 <tr>
					 <td class='td'>Память для хранения данных</td>
					 <td class='td'>%s</td>
				 </tr>
				 <tr>
					 <td class='td'>Камера</td>
					 <td class='td'>%s</td>
				 </tr>
				  <tr>
					 <td class='td'>Фронтальная камера</td>
					 <td class='td'>%s</td>
				 </tr>  
				 <tr>
					 <td class='td'>Интерфейсы</td>
					 <td class='td'>%s</td>
				 </tr>
				 <tr>
					 <td class='td'>Навигация</td>
					 <td class='td'>%s</td>
				 </tr>
				 <tr>
					 <td class='td'>Датчики</td>
					 <td class='td'>%s</td>
				 </tr>
				 <tr>
					 <td class='td'>Аккумулятор</td>
					 <td class='td'>%s</td>
				 </tr>	
				 <tr>
					 <td class='td'>Габариты</td>
					 <td class='td'>%s</td>
				 </tr> 
				 <tr>
					 <td class='td'>Вес</td>
					 <td class='td'>%s</td>
				 </tr>			 
			 </table>
",$myrow["img"],$myrow["title"],$myrow["description"],$myrow["mini_img1"],$myrow["mini_img2"],$myrow["mini_img3"],$myrow["mini_img4"],$myrow["sena"],$myrow["id"],
$myrow["v_nalichi"],$myrow["oc"],$myrow["sim"],$myrow["svyaz"],$myrow["ekran"],$myrow["prosessor"],$myrow["g_prosessor"],$myrow["ram"],
$myrow["pamyat"],$myrow["kamera"],$myrow["front_kamera"],$myrow["interfeysi"],$myrow["navigasiya"],$myrow["datchiki"],$myrow["akkumulyator"],$myrow["gabarity"],$myrow["ves"]);
		      ?>
		 </div>
		 </div>
		 <?php include ("blocks/subscribe.php");?>
		 <?php include ("blocks/footer.php");?>	 
	 </div>
	</div>
</body>
</html>