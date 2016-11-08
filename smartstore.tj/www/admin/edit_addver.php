<?php include ("blocks/bd.php");
if (isset($_GET['id'])) {$id = $_GET['id'];}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Добро пожаловать в админскую часть SMARSTORE.TJ!</title>
	<link rel="stylesheet" href="/style/main.css" type="text/css">
</head>
<body>
	<div id="content">
	 <?php include ("blocks/nav.php");?>
	 
	 <div class="center">
		 <div class="center-header">
		        
		 </div>	   
	     <div class="center-body-title-new-products">Страница редактирование рекламы</div>
		<div class="about-block">
		 <div class="center-body-new-products">
			 <?php 
if (!isset($id))

{
$result = mysql_query("SELECT * FROM addver");      
$myrow = mysql_fetch_array($result);

do 
{
   printf ("
    <table border='0' id='del-table'>
		<tr>
			<td>ID:%s</td>
      <td class='del-zakaz-td-3-4'><a href='edit_addver.php?id=%s' class='del-zakaz-td-a'>%s</a></td>
		</tr>
	</table>",$myrow["id"],$myrow["id"],$myrow["title"]);
}

while ($myrow = mysql_fetch_array($result));

}
else
{
$result = mysql_query("SELECT * FROM addver WHERE id=$id");     
$myrow = mysql_fetch_array($result);




echo "<form name='form1' method='post' action='update_addver.php'>";
print <<<HERE
        <p>
           <label>Введите имя рекламодателя<br>
             <input value='$myrow[title]' type="text" name="title" id="input-admin">
           </label>
         </p>
		 <p>
           <label>Введите сайт рекламодателя<br>
             <input value='$myrow[link]' type="text" name="link" id="input-admin">
           </label>
         </p>
         <p>
           <label>Введите мини-афишу рекламодателя<br>
              <textarea name="img_add" id="description-admin">$myrow[img_add]</textarea>
           </label>
         </p>
		       <input  name="id" type="hidden" value="$myrow[id]">
          <p>
           <label>
              <input type="submit" name="submit" id="btn-admin" value="Занести рекламодателя в базу" class="button">
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