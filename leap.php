<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year</title>
</head>
<body>
    <form method="post">
    <input type="number" name="year">
    <br><br>
<input type="submit" value="Submit">
 </form>
 <?php
   
if($_POST){

   $year = $_POST["year"];

   echo "Year:-" .$year. "<br>";

   if($year %4==0){
    echo"Leap Year";
   }
   else{
    echo "Not Leap Year";
   }

}


 ?>
</body>
</html>