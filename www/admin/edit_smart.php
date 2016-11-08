<?php include ("blocks/bd.php");
if (isset($_GET['id'])) {$id = $_GET['id'];}
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
	     <div class="center-body-title-new-products">Страница редактирование новостей</div>
		<div class="about-block">
		 <div class="center-body-new-products">
			 <?php 
if (!isset($id))

{
$result = mysql_query("SELECT id,title FROM data");      
$myrow = mysql_fetch_array($result);

do 
{
printf ("
    <table border='0' id='del-table'>
		<tr>
			<td>ID:%s</td>
      <td class='del-zakaz-td-3-4'><a href='edit_smart.php?id=%s' class='del-zakaz-td-a'>%s</a></td>
		</tr>
	</table>",$myrow["id"],$myrow["id"],$myrow["title"]);
}

while ($myrow = mysql_fetch_array($result));

}
else
{
$result = mysql_query("SELECT * FROM data WHERE id=$id");     
$myrow = mysql_fetch_array($result);


$result2 = mysql_query("SELECT id,title FROM categories");     
$myrow2 = mysql_fetch_array($result2);

echo "<form name='form1'' method='post'' action='update_smart.php'>
<label>Выберите категорию</label>
<p><SELECT name='cat'>";

                     do
                       {
	                       printf ("<option value='%s'>%s</option>",$myrow2["id"],$myrow2["title"]);
	
                       }
                     while($myrow2=mysql_fetch_array($result2));
echo "</SELECT></p>"; 

print <<<HERE
        <p>
           <label>Введите называние продукта<br>
             <input value='$myrow[title]' type="text" name="title" id="input-admin">
             </label>
         </p>
         
         <p>
           <label>Введите краткое описание урока<br>
           <textarea name="description" id="description-admin">$myrow[description]</textarea>
           </label>
         </p>
          <p>
           <label>Введите где лежит миниатура(mini_img) <br>
           <input value='$myrow[mini_img]' type="text" name="mini_img" id="input-admin">
           </label>
         </p>
          <p>
           <label>Введите где лежит миниатура(img) <br>
           <input value='$myrow[img]' type="text" name="img" id="input-admin">
           </label>
          </p>
           <p>
           <label>Введите где лежит миниатура(mini_img1) <br>
           <input value='$myrow[mini_img1]' type="text" name="mini_img1" id="input-admin">
           </label>
          </p>
          <p>
           <label>Введите где лежит миниатура(mini_img2) <br>
           <input value='$myrow[mini_img2]' type="text" name="mini_img2" id="input-admin">
           </label>
          </p>
          <p>
           <label>Введите где лежит миниатура(mini_img3) <br>
           <input value='$myrow[mini_img3]' type="text" name="mini_img3" id="input-admin">
           </label>
          </p>
          <p>
           <label>Введите где лежит миниатура(mini_img4) <br>
           <input value='$myrow[mini_img4]' type="text" name="mini_img4" id="input-admin">
           </label>
          </p>
          <p>
           <label>Введите цена продукта<br>
           <input value='$myrow[sena]' type="text" name="sena" id="input-admin">
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
           <input value='$myrow[oc]' type="text" name="oc"  id="input-admin">
           </label>
          </p>
          <p>
          <label>Симкарта<br>
           <input value='$myrow[sim]' type="text" name="sim" id="input-admin">
           </label>
          </p>
          <p>
          <label>Связь<br>
           <input value='$myrow[svyaz]' type="text" name="svyaz" id="input-admin">
           </label>
          </p>
          <p>
          <label>Экран<br>
           <input value='$myrow[ekran]' type="text" name="ekran" id="input-admin">
           </label>
          </p>
          <p>
          <label>Процессор<br>
           <input value='$myrow[prosessor]' type="text" name="prosessor" id="input-admin">
           </label>
          </p>
          <p>
         <label>Граффический процессор<br>
           <input value='$myrow[g_prosessor]' type="text" name="g_prosessor" id="input-admin">
           </label>
          </p>
          <p>
          <label>ОЗУ<br>
           <input value='$myrow[ram]' type="text" name="ram" id="input-admin">
           </label>
          </p>
          <p>
          <label>Память<br>
           <input value='$myrow[pamyat]' type="text" name="pamyat" id="input-admin">
           </label>
          </p>
          <p>
          <label>Камера<br>
           <input value='$myrow[kamera]' type="text" name="kamera" id="input-admin">
           </label>
          </p>
          <p>
          <label>Фронтальная камера<br>
           <input value='$myrow[front_kamera]' type="text" name="front_kamera" id="input-admin">
           </label>
          </p>
          <p>
          <label>Интерфейсы<br>
           <input value='$myrow[interfeysi]' type="text" name="interfeysi" id="input-admin">
           </label>
          </p>
          <p>
          <label>Навигация<br>
           <input value='$myrow[navigasiya]' type="text" name="navigasiya" id="input-admin">
           </label>
          </p>
          <p>
          <label>Датчики<br>
           <input value='$myrow[datchiki]' type="text" name="datchiki" id="input-admin">
           </label>
          </p>
          <p>
          <label>Аккумулятор<br>
           <input value='$myrow[akkumulyator]' type="text" name="akkumulyator" id="input-admin">
           </label>
          </p>
          <p>
          <label>Габариты<br>
           <input value='$myrow[gabarity]' type="text" name="gabarity" id="input-admin">
           </label>
          </p>
          <p>
          <label>Вес<br>
           <input value='$myrow[ves]' type="text" name="ves" id="input-admin">
           </label>
          </p>
		       <input  name="id" type="hidden" value="$myrow[id]">
           
          <p>
           <label>
           <input type="submit" name="submit" id="btn-admin" value="Занести новости в базу" class="button">
           </label>
         </p>
</form>
HERE;
}
?>
  		 
		 </div>
		 </div>
	     
		 <?php include ("blocks/footer.php");?> 
		 
	 </div>
	</div>
</body>
</html>