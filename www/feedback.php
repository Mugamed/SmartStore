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
	     <div class="center-body-title-new-products">Обратная связь</div>
		 <div class="about-block">
			 <div class="feedback-block">
			  <img src="img/feedback/feedback.jpg"><br>
			  <H2 class="H2-feedback-and-oformlenie">Форма обратной связи</H2>
			   <label class="label-feedback">Ф.И.О<span class="red-zvezda"> *</span>	
			    <br><input type="text" class="input-feedback" maxlength="250"><br>
			   </label>
			   <label class="label-feedback">Email<span class="red-zvezda"> *</span>	
			    <br><input type="text" class="input-feedback" maxlength="250"><br>
			   </label>
			   <label class="label-feedback">Телефон<span class="red-zvezda"> *</span>	
			    <br><input type="text" class="input-feedback" maxlength="250"><br>
			   </label>
			   <label class="label-feedback">Ваш вопрос или предложение	
			      <br><textarea type="text" class="textarea-feedback" maxlength="1000"></textarea><br>
			   </label>	   
			   <a href="#" class="send-feedback-btn">✓ Отпавить</a>
			 </div>
		 </div>
		 <?php include ("blocks/subscribe.php");?>
		 <?php include ("blocks/footer.php");?>	 
	 </div>
	</div>
</body>
</html>