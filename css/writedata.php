<?php
   $json = $_POST['json'];

   if (json_decode($json) != null)
   {
     $file = fopen('data.json','w+');
     fwrite($file, $json);
     fclose($file);
   }
?>

$.post("json.php", {json : JSON.stringify(grid)});