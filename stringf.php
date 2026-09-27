
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Function</title>
</head>
<body>
    <form method="post">

      <input type="text" name="str1">
      <br><br>
       <input type="text" name="str2">
      <br><br>

      <input type="submit" value="submit">

    </form>

    <?php

if($_POST){

    $str1=$_POST["str1"];
     $str2=$_POST["str2"];
    echo"<h4>Original String 1:-" .$str1."<br>";
    echo"<h4>Original String 2:-" .$str2."<br>";
    echo"<br>==============================================================<br>";

    echo"<h4>UpperCase Strings:-".strtoupper($str1)."<br>".strtoupper($str2);
     echo"<br>==============================================================<br>";

     echo"<h4>LowerCase Strings:-".strtolower($str1)."<br>".strtolower($str2);
     echo"<br>==============================================================<br>";

     echo"<h4>Length Of Strings:-".strlen($str1)."<br>".strlen($str2);
     echo"<br>==============================================================<br>";

     echo"<h4>Reverse Strings:-".strrev($str1)."<br>".strrev($str2);
     echo"<br>==============================================================<br>";

     echo"<h4>First Letter Capital Strings:-".ucfirst($str1)."<br>".ucfirst($str2);
     echo"<br>==============================================================<br>";

     echo"<h4>First Letter Small Strings:-".lcfirst($str1)."<br>".lcfirst($str2);
     echo"<br>==============================================================<br>";


}
    ?>
    
</body>
</html>