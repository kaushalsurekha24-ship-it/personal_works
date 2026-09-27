```php
<!DOCTYPE html>
<html>
<head>
    <title>Post And Get</title>
</head>

<body>

<h2>GET Method</h2>

<form method="GET">
    <input type="text" name="GetName">
    <input type="submit" value="Get Submit">
</form>

<h2>POST Method</h2>

<form method="POST">
    <input type="text" name="PostName">
    <input type="submit" value="Post Submit">
</form>

<?php

if ($_GET) {
    echo "GET Name:- " . $_GET["GetName"];
}

if ($_POST) {
    echo "POST Name:- " . $_POST["PostName"];
}

?>

</body>
</html>


