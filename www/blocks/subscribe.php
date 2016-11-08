<?php include ("blocks/bd.php");?>
		 <div class="subscribe">
			   <div class="subscribe-body">
			       <marquee>
				     <div class="subscribe-text">
<?php
		$result=mysql_query("SELECT img_add, link FROM addver",$db);
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
	             printf ("<a href='%s'><img src='%s'></a>",$myrow["link"],$myrow["img_add"]);
               }
 while($myrow=mysql_fetch_array($result));
        }
        else
        {
	      echo "<p>Информация по запросу не может быть извлечена в таблице нет записей</p>";
	      exit();
        }
?>		
				     </div>
				   </marquee>
			   </div>
		 </div>	 