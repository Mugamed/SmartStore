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
	     <div class="center-body-title-new-products">Страница редактирование заказов</div>
		<div class="about-block">
		 <div class="center-body-new-products">
			 <?php 
if (!isset($id))

{
$result = mysql_query("SELECT id,fio,title FROM zakaz");      
$myrow = mysql_fetch_array($result);

do 
{
printf ("
    <table border='0' id='del-table'>
		<tr>
			<td>ID:%s</td>
			<td class='del-zakaz-td-3-4'><a href='edit_zakaz.php?id=%s' class='del-zakaz-td-a'>%s</a></td>
		</tr>
	</table>	
",$myrow["id"],$myrow["id"],$myrow["fio"],$myrow["title"]);
}

while ($myrow = mysql_fetch_array($result));

}
else
{
$result = mysql_query("SELECT *  FROM zakaz WHERE id=$id");     
$myrow = mysql_fetch_array($result);

echo "<form name='form1' method='post' action='update_zakaz.php'>"; 

print <<<HERE
        <h2 class="h2-name-device-oformlenie">Названия продукта</h2>	
			    <br><input type="text" class="input-oformlenie" name="title" value='$myrow[title]' maxlength="250" readonly><br>
          
			  <h2 class="H2-feedback-and-oformlenie">Личные данные</h2>
			   <label class="label-oformleni">Ф.И.О<span class="red-zvezda"> *</span>	
			    <br><input type="text" class="input-oformlenie" maxlength="250" name="fio" value='$myrow[fio]'><br>
			   </label>
         
			   <label class="label-oformleni">Email<span class="red-zvezda"> *</span>	
			    <br><input type="text" class="input-oformlenie" maxlength="250" name="mail" value='$myrow[mail]'><br>
			   </label>
         
			   <label class="label-oformleni">Телефон<span class="red-zvezda"> *</span>	
			    <br><input type="text" class="input-oformlenie" maxlength="250" name="phone" value='$myrow[phone]'><br>
			   </label>
         
			   <h2 class="H2-feedback-and-oformlenie">АДРЕС</h2>
			   <label class="label-oformleni">Индекс<span class="red-zvezda"> *</span>	
			    <br><input type="text" class="input-oformlenie" maxlength="250" name="indeks" value='$myrow[indeks]'><br>
			   </label>
         
			   <label class="label-oformleni">Город<span class="red-zvezda"> *</span>	
			    <br><input type="text" class="input-oformlenie" maxlength="250" name="gorod" value='$myrow[gorod]'><br>
			   </label>
         
			   <label class="label-oformleni">Адрес<span class="red-zvezda"> *</span>	
			    <br><input type="text" class="input-oformlenie" maxlength="250" name="adress" value='$myrow[adress]'><br>
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
				   <br><input type="text" class="input-oformlenie" maxlength="250" name="dostavka" value='$myrow[dostavka]'>
			   <h2 class="H2-feedback-and-oformlenie">ПЛАТЕЖНАЯ СИСТЕМА</h2>	  
			       <span class="span-oformlenie"><s>Банковской картой Visa/MasterCard на сайте</s></span><br>
				     <span class="span-oformlenie">Наличными при получении</span> 
           
			   <h2 class="H2-feedback-and-oformlenie">КОММЕНТАРИЙ К ЗАКАЗУ</h2>
			    <label class="label-oformleni">Вы можете указать дополнительные сведения к своему заказу	
			      <br><textarea type="text" class="textarea-oformlenie" maxlength="250" name="komment">$myrow[komment]</textarea><br>
			    </label>	
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