<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call By Value</title>
</head>
<body>
    <form method="post">
   <input type="number" name="n1" placeholder="Enter First Number">
   <br><br>
    <input type="number" name="n2" placeholder="Enter Secound Number">
   <br><br>

   <input type="submit" value="submit">
</form>
<?php
if($_POST){

 function swap(&$a,&$b){

  $temp=$a;
  $a=$b;
  $b=$temp;

}
$a=$_POST["n1"];
$b=$_POST["n2"];

echo"<h3>Before Swapping</h3>";
echo"First Number is:-" . $a . "<br>";
echo"Secound Number is:-" . $b . "<br><br>";

 swap($a,$b);
 echo"<h3>After Swapping</h3>";
echo"First Number is:-" . $a . "<br>";
echo"Secound Number is:-" . $b . "<br><br>";


}
?>
</body>
</html>