<!DOCTYPE html>
<html>
<head>
    <title>Multidimensional Array</title>
</head>
<body>

<form method="post">

    Fruit 1 Name:
    <input type="text" name="name1">
    <br><br>

    Fruit 1 Color:
    <input type="text" name="color1">
    <br><br>

    Fruit 2 Name:
    <input type="text" name="name2">
    <br><br>

    Fruit 2 Color:
    <input type="text" name="color2">
    <br><br>

    <input type="submit" value="Submit">

</form>

<?php

if($_POST)
{
    $fruits = [
        [$_POST['name1'], $_POST['color1']],
        [$_POST['name2'], $_POST['color2']]
    ];

    echo "<h3>Fruits Entered</h3>";

    foreach($fruits as $fruit)
    {
        echo "Name: " . $fruit[0] . "<br>";
        echo "Color: " . $fruit[1] . "<br><br>";
    }
}

?>

</body>
</html>