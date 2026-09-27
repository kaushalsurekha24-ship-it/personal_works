<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indexed Array</title>
</head>
<body>
    <form method="post">

      enter Fruit 1:-
     <input type="text" name="fruit[]">
     <br><br>

     enter Fruit 2:-
     <input type="text" name="fruit[]">
     <br><br>

     enter Fruit 2:-
     <input type="text" name="fruit[]">
     <br><br>

     
     <input type="submit" value=" submit">
     <br><br>


    </form>
    <?php

    if($_POST){

     $fruits = $_POST["fruit"];

     echo"Indexed array <br><br>";

     for($i=0;$i<3;$i++){

      echo" fruits[" . $i ."]= " . $fruits[$i] . "<br>";
     }
     
 }
 ?>
    
</body>
</html>