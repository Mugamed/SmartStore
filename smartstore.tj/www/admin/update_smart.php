<?php 
include ("blocks/bd.php");
if (isset($_POST['id']))      {$id = $_POST['id'];}
if (isset($_POST['description'])) {$description = $_POST['description']; if ($description == '') {unset($description);}}
if (isset($_POST['title']))        {$title = $_POST['title']; if ($title == '') {unset($title);}}
if (isset($_POST['mini_img']))      {$mini_img = $_POST['mini_img']; if ($mini_img == '') {unset($mini_img);}}
if (isset($_POST['img']))      {$img = $_POST['img']; if ($img == '') {unset($img);}}
if (isset($_POST['mini_img1']))      {$mini_img1 = $_POST['mini_img1']; if ($mini_img1 == '') {unset($mini_img1);}}
if (isset($_POST['mini_img2']))      {$mini_img2 = $_POST['mini_img2']; if ($mini_img2 == '') {unset($mini_img2);}}
if (isset($_POST['mini_img3']))      {$mini_img3 = $_POST['mini_img3']; if ($mini_img3 == '') {unset($mini_img3);}}
if (isset($_POST['mini_img4']))      {$mini_img4 = $_POST['mini_img4']; if ($mini_img4 == '') {unset($mini_img4);}}
if (isset($_POST['sena']))      {$sena = $_POST['sena']; if ($sena == '') {unset($sena);}}
if (isset($_POST['v_nalichi']))      {$v_nalichi = $_POST['v_nalichi']; if ($v_nalichi == '') {unset($v_nalichi);}}
if (isset($_POST['oc']))      {$oc = $_POST['oc']; if ($oc == '') {unset($oc);}}
if (isset($_POST['sim']))      {$sim = $_POST['sim']; if ($sim == '') {unset($sim);}}
if (isset($_POST['svyaz']))      {$svyaz = $_POST['svyaz']; if ($svyaz == '') {unset($svyaz);}}
if (isset($_POST['ekran']))      {$ekran = $_POST['ekran']; if ($ekran == '') {unset($ekran);}}
if (isset($_POST['prosessor']))      {$prosessor= $_POST['prosessor']; if ($prosessor == '') {unset($prosessor);}}
if (isset($_POST['g_prosessor']))      {$g_prosessor = $_POST['g_prosessor']; if ($g_prosessor == '') {unset($g_prosessor);}}
if (isset($_POST['ram']))      {$ram = $_POST['ram']; if ($ram == '') {unset($ram);}}
if (isset($_POST['pamyat']))      {$pamyat = $_POST['pamyat']; if ($pamyat == '') {unset($pamyat);}}
if (isset($_POST['kamera']))      {$kamera = $_POST['kamera']; if ($kamera == '') {unset($kamera);}}
if (isset($_POST['front_kamera']))      {$front_kamera = $_POST['front_kamera']; if ($front_kamera == '') {unset($front_kamera);}}
if (isset($_POST['interfeysi']))      {$interfeysi = $_POST['interfeysi']; if ($interfeysi == '') {unset($interfeysi);}}
if (isset($_POST['navigasiya']))      {$navigasiya = $_POST['navigasiya']; if ($navigasiya == '') {unset($navigasiya);}}
if (isset($_POST['datchiki']))      {$datchiki = $_POST['datchiki']; if ($datchiki == '') {unset($datchiki);}}
if (isset($_POST['akkumulyator']))      {$akkumulyator = $_POST['akkumulyator']; if ($akkumulyator == '') {unset($akkumulyator);}}
if (isset($_POST['gabarity']))      {$gabarity = $_POST['gabarity']; if ($gabarity == '') {unset($gabarity);}}
if (isset($_POST['ves']))      {$ves = $_POST['ves']; if ($ves == '') {unset($ves);}}
if (isset($_POST['cat']))      {$cat = $_POST['cat']; if ($cat == '') {unset($cat);}}

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
	     <div class="center-body-title-new-products">Страница редактирование продуктов</div>
		<div class="about-block">
		 <div class="center-body-new-products">
			<?php
if (isset($title) 
   && isset($description) 
   && isset($mini_img) 
   && isset($img) 
   && isset($mini_img1)
   && isset($mini_img2)
   && isset($mini_img3)
   && isset($mini_img4)
   && isset($sena)
   && isset($v_nalichi)
   && isset($oc)
   && isset($sim)
   && isset($svyaz)
   && isset($ekran)
   && isset($prosessor)
   && isset($g_prosessor)
   && isset($ram)
   && isset($pamyat)
   && isset($kamera)
   && isset($front_kamera)
   && isset($interfeysi)
   && isset($navigasiya)
   && isset($datchiki)
   && isset($akkumulyator)
   && isset($gabarity)
   && isset($ves) 
   && isset($cat))
{
/*Здесь пишем что можно занести информацию в базу*/
$result = mysql_query ("UPDATE data SET 
  title='$title',
  description='$description',
  mini_img='$mini_img',
  img='$img',
  mini_img1='$mini_img1',
  mini_img2='$mini_img2',
  mini_img3='$mini_img3',
  mini_img4='$mini_img4',
  sena='$sena',
  oc='$oc',
  sim='$sim',
  svyaz='$svyaz',
  ekran='$ekran',
  prosessor='$prosessor',
  g_prosessor='$g_prosessor',
  ram='$ram',
  pamyat='$pamyat',
  kamera='$kamera',
  front_kamera='$front_kamera',
  interfeysi='$interfeysi',
  navigasiya='$navigasiya',
  datchiki='$datchiki',
  akkumulyator='$akkumulyator',
  gabarity='$gabarity',
  v_nalichi='$v_nalichi',
  ves='$ves',
  cat='$cat' WHERE id='$id'");

if ($result == 'true') {echo "<p id='info'>Ваша новости успешно обновлена!</p>";}
else {echo "<p id='info'>Ваша новости не обновлена!</p>";}


}		 
else 

{
echo "<p id='info'>Вы ввели не всю информацию,по этому новости в базу не может быть добавлен.</p>";
}		 
?> 
  		 
		 </div>
		 </div>
	     
		 <?php include ("blocks/footer.php");?> 
		 
	 </div>
	</div>
</body>
</html>