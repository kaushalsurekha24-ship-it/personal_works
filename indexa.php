<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indexed Array</title>
</head>
<body>
    <form method="POST">

    Enter the Number Of Fruits:-
    <input type="number" name="fnumber">
    <br><br>
    <input type="submit" value="submit both">
</form>
<?php

     if($_POST){
 
      $fnumber = $_POST["fnumber"];

      for($i= 0;$i <$fnumber ; $i++)
        {
            echo"Fruits" . $i . ":-";
            echo"<input type='text' name='fruit[]'>";
            echo "<br><br>";

        }

     }
     ?>
    
</body>
</html>