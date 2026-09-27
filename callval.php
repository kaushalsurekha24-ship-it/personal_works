<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call By Value</title>
</head>
<body>
    <form method="post">
     <input type="number" name="no1">
     <br><br>
     <input type="number" name="no2">
     <br><br>
     <input type="submit" value="submit">
      </form>
      <?php
      if($_POST){

    $a=$_POST["no1"];
    $b=$_POST["no2"];

    function multi($x,$y){

       return $x*$y;

    }
    $c=multi($a,$b);

    echo"Multiplication:-" .$c ."<br>";

      }



      ?>
    
</body>
</html>