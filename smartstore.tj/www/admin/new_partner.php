<?php include ("blocks/bd.php");?>
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
	     <div class="center-body-title-new-products">Страница добавление партнеров</div>
		<div class="about-block">
		 <div class="center-body-new-products">
	  <form name="form1" method="post" action="add_partner.php">
         <p>
           <label>Введите называние бренда<br>
             <input type="text" name="name_brand" id="input-admin">
           </label>
         </p>
		 <p>
           <label>Введите торговую марку партнера(логотип)<br>
             <input type="text" name="logo" id="input-admin">
           </label>
         </p>
          <p>
           <label>
           <input type="submit" name="submit" id="btn-admin" value="Занести новости в базу" class="button">
           </label>
         </p>
       </form>
  		 
		 </div>
		 </div>
	     
		 <?php include ("blocks/footer.php");?> 
		 
	 </div>
	</div>
</body>
</html>