<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <form method="post">
 <input type="number" name="num">
 <br><br>

 <input type="submit" value="submit">

    </form>
    <?php

    if($_POST){

    $num=$_POST["num"];
    echo"Number is:-".$num."<br>";
    $fact=1;
    while($num>0)
        {

         $fact=$fact*$num;
         $num--;

        }
        echo"Factorial is:-".$fact."<br>";

    }

    ?>
    
</body>
</html>