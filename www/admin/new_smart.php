<?php include ("blocks/bd.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Добро пожаловать в админскую часть SMARTSTORE.TJ!</title>
	<link rel="stylesheet" href="/style/main.css" type="text/css">
  <script src="js/jquery-3.1.1.min"></script>
  <script src="js/ckeditor/ckeditor.js"></script>
 </head>
<body>
	<div id="content">
	 <?php include ("blocks/nav.php");?>
	 
	 <div class="center">
		 <div class="center-header">
		        
		 </div>	   
	     <div class="center-body-title-new-products">Страница добавление продуктов</div>
		<div class="about-block">
		 <div class="center-body-new-products">
			 <form name="form1" method="post" action="add_smart.php">
         <p>
           <label>Введите называние продукта<br>
             <input type="text" name="title" id="input-admin">
             </label>
         </p>
         
         <p class="textarea-visual">
           <label>Введите краткое описание урока<br>
           <textarea name="description" class="description-admin" id="editor" cols="40" rows="5"></textarea>
           <script type="text/javascript">
           CKEDITOR.replace('editor');
           </script>
           </label>
         </p>
          <p>
           <label>Введите где лежит миниатура(mini_img) <br>
           <input type="text" name="mini_img" id="input-admin">
           </label>
         </p>
          <p>
           <label>Введите где лежит миниатура(img) <br>
           <input type="text" name="img" id="input-admin">
           </label>
          </p>
           <p>
           <label>Введите где лежит миниатура(mini_img1) <br>
           <input type="text" name="mini_img1" id="input-admin">
           </label>
          </p>
          <p>
           <label>Введите где лежит миниатура(mini_img2) <br>
           <input type="text" name="mini_img2" id="input-admin">
           </label>
          </p>
          <p>
           <label>Введите где лежит миниатура(mini_img3) <br>
           <input type="text" name="mini_img3" id="input-admin">
           </label>
          </p>
          <p>
           <label>Введите где лежит миниатура(mini_img4) <br>
           <input type="text" name="mini_img4" id="input-admin">
           </label>
          </p>
          <p>
           <label>Введите цена продукта<br>
           <input type="text" name="sena" id="input-admin">
           </label>
          </p>
           <p>
           <label>Есть ли в наличии<br>
           <select name="v_nalichi" id="v_nalichi">
             <option id="green">✔ Eсть в наличии!</option>
             <option id="red"> Нет в наличии!</option>
           </select>  
           </label>
          </p>
          <p>
          <label>Операционная система<br>
           <input type="text" name="oc"  id="input-admin">
           </label>
          </p>
          <p>
          <label>Симкарта<br>
           <input type="text" name="sim" id="input-admin">
           </label>
          </p>
          <p>
          <label>Связь<br>
           <input type="text" name="svyaz" id="input-admin">
           </label>
          </p>
          <p>
          <label>Экран<br>
           <input type="text" name="ekran" id="input-admin">
           </label>
          </p>
          <p>
          <label>Процессор<br>
           <input type="text" name="prosessor" id="input-admin">
           </label>
          </p>
          <p>
         <label>Граффический процессор<br>
           <input type="text" name="g_prosessor" id="input-admin">
           </label>
          </p>
          <p>
          <label>ОЗУ<br>
           <input type="text" name="ram" id="input-admin">
           </label>
          </p>
          <p>
          <label>Память<br>
           <input type="text" name="pamyat" id="input-admin">
           </label>
          </p>
          <p>
          <label>Камера<br>
           <input type="text" name="kamera" id="input-admin">
           </label>
          </p>
          <p>
          <label>Фронтальная камера<br>
           <input type="text" name="front_kamera" id="input-admin">
           </label>
          </p>
          <p>
          <label>Интерфейсы<br>
           <input type="text" name="interfeysi" id="input-admin">
           </label>
          </p>
          <p>
          <label>Навигация<br>
           <input type="text" name="navigasiya" id="input-admin">
           </label>
          </p>
          <p>
          <label>Датчики<br>
           <input type="text" name="datchiki" id="input-admin">
           </label>
          </p>
          <p>
          <label>Аккумулятор<br>
           <input type="text" name="akkumulyator" id="input-admin">
           </label>
          </p>
          <p>
          <label>Габариты<br>
           <input type="text" name="gabarity" id="input-admin">
           </label>
          </p>
          <p>
          <label>Вес<br>
           <input type="text" name="ves" id="input-admin">
           </label>
          </p>
           <label>Выберите категории<br>
           <select name="cat" id="cat-admin">
           <?php
           $result=mysql_query("SELECT id,title FROM categories",$db);
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
	                       printf ("<option value='%s'>%s</option>",$myrow["id"],$myrow["title"]);
	
                       }
                     while($myrow=mysql_fetch_array($result));
                  
               
               }
               else
               {
               	echo "<p>Информация по запросу не может быть извлечена в таблице нет записеёю</p>";
               exit();
               }               
           ?>           
           </select>  
          
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