<?
 $result2 = mysql_query("SELECT * FROM categories",$db);
   if (!$result2)
      {
        echo "<p>Запрос на выборку данных из базы не прошел. Напишите об этом администратору admin@smartstore.tj. <br> <strong>Код ошибки:</strong></p>";
        exit(mysql_error());
      }
   if (mysql_num_rows($result2) > 0)
      {
        $myrow2 = mysql_fetch_array($result2);
           do 
               {
                    printf ("

                        <div class='categories'>
		      	           <ul class='categories-ul'>
		                   <li class='categories-li'><a href='smart.php?cat=%s'>%s</a></li>
		      	           </ul>	
                        </div>",$myrow2["id"],$myrow2["title"]);
               }while ($myrow2 = mysql_fetch_array($result2));
        }
    else
        {
          echo "<p>Информация по запросу не может быть извлечена в таблице нет записей.</p>";
          exit();
        }
?>