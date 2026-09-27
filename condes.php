<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructor and Destructor</title>
</head>
<body>
    <?php

    class user{

      public function __construct()
      {

           echo"<h4>Constuctor Is Called"."<br>";
           echo"User Object is Created"."<br><br>";

      }
      public function name()
      {

              echo "Name is:-Kaushal";
      }
      public function __destruct()
      {
        echo"<h4>Destuctor Is Called"."<br>";
           echo"User Object is Destoyed"."<br><br>";
      }


    }

    $ob =new user();

    $ob->name();
    ?>
</body>
</html>