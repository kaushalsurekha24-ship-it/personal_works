<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet</title>
</head>
<body>
    <form method="post">
        <h2>Enter The number:-</h2>
        <input type="number" name="no" required>
        <input type="submit" value="submit">
    </form>
    <?php
     if($_POST){

      $marks = $_POST["no"];
      if($marks >=70  && $marks <=100)
        echo"Pass With Distinction" . $marks ."<br>";
      elseif($marks >=60 && $marks <=69)
        echo"Pass With First Class" . $marks ."<br>";
    elseif($marks >=40 && $marks <=59)
        echo"Pass s" . $marks ."<br>";
    else
        echo"Pass With First Class" . $marks ."<br>";

     }
    ?>
    
</body>
</html>