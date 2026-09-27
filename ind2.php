<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits</title>
</head>
<body>
    <form method="post">

   How Many Fruits Do You Want:-
   <input type="number" name="number">

   <input type="submit" name="show" value="show">

    </form>

    <?php

    if($_POST){

    $number =$_POST["number"];

    for($i=0;$i<$number; $i++){

     echo"Fruits" .$i .":-";
     echo "<input type='number' name='Fruits[]'>";
     echo"<br><br>";

    }

   echo"<input type='submit' name='show' value='show'>";
    }  
    
    ?>
</body>
</html>