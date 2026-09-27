<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POst And Get</title>
</head>
<body>

<h2>Get Method</h2>
    <form method="GET">
    <input type="text" name="Name" >
    <input type="submit" value="Get Submit">
</form>
<h2>Post Method</h2>
 <form method="POST">
        <input type="text" name="Name">
        <input type="submit" value="Post Submit">
</form>
<?php
 
 if($_GET){
    echo"GET Name:-" . $_GET["Name"] . "<br>";
    

 }
 if($_POST){
    echo"POST Name:-" . $_POST["Name"] . "<br>";
    
 }

 ?>

</body>
</html>