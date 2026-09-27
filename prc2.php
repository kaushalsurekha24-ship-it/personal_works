<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Post </title>
</head>
<body>

<form method="get">
    Enter the Sentence:-
<input Type ="text" name = "getname">

<input type="submit" value="submit">
</form>

<form method="post">
    Enter the Sentence:-
<input Type ="text" name = "postname">
<input type="submit" value="submit">
</form>

<?php 
  
  if ($_GET) {

    echo "Get Name:-" .$_GET["getname"] ;
  }

  if ($_POST){

     echo "Post Name:-" .$_POST["postname"] ;
  }
  ?>
</body>
</html>