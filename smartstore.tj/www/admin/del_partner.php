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
	     <div class="center-body-title-new-products">Cтраница  удаление партнера</div>
		<div class="about-block">
		 <div class="center-body-new-products">
			 <form action="drop_partner.php" method="post">
<?php 

$result = mysql_query("SELECT * FROM partners");      
$myrow = mysql_fetch_array($result);

do 
{
printf ("
    <table border='0' id='del-table'>
		<tr>
			<td><input name='id' type='radio' value='%s'></td>
			<td>ID:%s</td>
			<td class='del-zakaz-td-3-4'>%s</td>
		</tr>
	</table>	
",$myrow["id"],$myrow["id"],$myrow["name_brand"]);
}

while ($myrow = mysql_fetch_array($result));
?>

<p> <input name="submit" type="submit" value="Удалит партнера" id="btn-admin"></p>

</form>
  		 
		 </div>
		 </div>
	     
		 <?php include ("blocks/footer.php");?> 
		 
	 </div>
	</div>
</body>
</html>