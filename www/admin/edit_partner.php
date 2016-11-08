<?php include ("blocks/bd.php");
if (isset($_GET['id'])) {$id = $_GET['id'];}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Добро пожаловать в админскую часть SMARTPHONE.TJ!</title>
	<link rel="stylesheet" href="/style/main.css" type="text/css">
</head>
<body>
	<div id="content">
	 <?php include ("blocks/nav.php");?>
	 
	 <div class="center">
		 <div class="center-header">
		        
		 </div>	   
	     <div class="center-body-title-new-products">Страница редактирование партнеров</div>
		<div class="about-block">
		 <div class="center-body-new-products">
			 <?php 
if (!isset($id))

{
$result = mysql_query("SELECT * FROM partners");      
$myrow = mysql_fetch_array($result);

do 
{
 printf ("
    <table border='0' id='del-table'>
		<tr>
			<td>ID:%s</td>
      <td class='del-zakaz-td-3-4'><a href='edit_partner.php?id=%s' class='del-zakaz-td-a'>%s</a></td>
		</tr>
	</table>",$myrow["id"],$myrow["id"],$myrow["name_brand"]);
}

while ($myrow = mysql_fetch_array($result));

}
else
{
$result = mysql_query("SELECT * FROM partners WHERE id=$id");     
$myrow = mysql_fetch_array($result);
echo "<form name='form1' method='post' action='update_partner.php'>";
print <<<HERE
        <p>
           <label>Введите называние бренда<br>
             <input value='$myrow[name_brand]' type="text" name="name_brand" id="input-admin">
           </label>
         </p>
         <p>
           <label>Введите торговую марку партнера(логотип)<br>
              <textarea name="logo" id="description-admin">$myrow[logo]</textarea>
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