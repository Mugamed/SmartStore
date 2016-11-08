<?php include ("blocks/bd.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Добро пожаловать в онлайн магазин SMARTPHONE.TJ!</title>
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
	     <div class="center-body-title-new-products">Оформление заказа</div>
		 <div class="about-block">
		 <div class="oformlenie-body">
			 <?php 
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
       <form name="form1" method="post" action="add_zakaz.php">
			 <H2 class="H2-feedback-and-oformlenie">Информация для оплаты и доставки</H2>
			  <h2 class="h2-name-device-oformlenie">Названия продукта</h2>	
			    <br><input type="text" class="input-oformlenie" name="title" value='<?php echo  ($myrow["title"]); ?>' maxlength="250" readonly><br>
          
			  <h2 class="H2-feedback-and-oformlenie">Личные данные</h2>
			   <label class="label-oformleni">Ф.И.О<span class="red-zvezda"> *</span>	
			    <br><input type="text" class="input-oformlenie" maxlength="250" name="fio"><br>
			   </label>
         
			   <label class="label-oformleni">Email<span class="red-zvezda"> *</span>	
			    <br><input type="text" class="input-oformlenie" maxlength="250" name="mail"><br>
			   </label>
         
			   <label class="label-oformleni">Телефон<span class="red-zvezda"> *</span>	
			    <br><input type="text" class="input-oformlenie" maxlength="250" name="phone"><br>
			   </label>
         
			   <h2 class="H2-feedback-and-oformlenie">АДРЕС</h2>
			   <label class="label-oformleni">Индекс<span class="red-zvezda"> *</span>	
			    <br><input type="text" class="input-oformlenie" maxlength="250" name="indeks"><br>
			   </label>
         
			   <label class="label-oformleni">Город<span class="red-zvezda"> *</span>	
			    <br><input type="text" class="input-oformlenie" maxlength="250" name="gorod"><br>
			   </label>
         
			   <label class="label-oformleni">Адрес<span class="red-zvezda"> *</span>	
			    <br><input type="text" class="input-oformlenie" maxlength="250" name="adress"><br>
			   </label>
         
			   <h2 class="H2-feedback-and-oformlenie">СЛУЖБА ДОСТАВКИ</h2>
				   <span class="span-oformlenie">НАШ АДРЕС</span><br>
				   <span class="span-oformlenie">
                      <b>Справочная:</b> (3)04-05</br>
                      <b>Телефон:</b> (+992)98-567-0405</br>
                      <b>Адрес магазина:</b></br> 
                         777777, г. канибадам, ул.Навои, д. 87.</br>
                      <b>Время работы: пн-пт.</b> </br>
                         08.00-20.00; сб,вс. 10.00-15.00</br>
				   </span><br>
				   <span class="span-oformlenie">Курьерская доставка DPD (до двери)</span><br>
				   
				   <span class="span-oformlenie">&nbsp&nbsp&nbspСтоимость: <span class="sena-dostavki">120 сомони.</span></span><br>
				   <span class="span-oformlenie">Самовывоз</span><br>
				   <span class="span-oformlenie">&nbsp&nbsp&nbspСтоимость: <span class="sena-dostavki">Бесплатно.</span></span>
				   <br><select id="select-dostavki" name="dostavka">
					   <option>Курьерская доставка DPD (до двери)</option>
					   <option>Самовывоз</option>
				   </select>
				   	   
			   <h2 class="H2-feedback-and-oformlenie">ПЛАТЕЖНАЯ СИСТЕМА</h2>	  
			       <span class="span-oformlenie"><s>Банковской картой Visa/MasterCard на сайте</s></span><br>
				     <span class="span-oformlenie">Наличными при получении</span> 
           
			   <h2 class="H2-feedback-and-oformlenie">КОММЕНТАРИЙ К ЗАКАЗУ</h2>
			    <label class="label-oformleni">Вы можете указать дополнительные сведения к своему заказу	
			      <br><textarea type="text" class="textarea-oformlenie" maxlength="250" name="komment"></textarea><br>
			   </label>	   
			   <input type="submit" name="submit" class="oformit-zakaz-btn" value="✓ Оформить заказ" >
       </form>   
		 </div>
		</div>	 
		 <?php include ("blocks/subscribe.php");?>
		 <?php include ("blocks/footer.php");?>
	 </div>
	</div>
</body>
</html>