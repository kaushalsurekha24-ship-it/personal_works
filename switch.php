<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <form method="post">

 <h2>Enter The Day number</h2>
 <input type="number" name="day" min="1" max="7">

    </form>

  <?php
   

   if($_POST){

   $day=$_POST["day"];

   echo"Month Number is=" .$day . "<br>";

   switch($day){

   case 1:
    echo "Monday";
    break;

    case 2:
    echo "Tueday";
    break;

    case 3:
    echo "Wednusday";
    break;

    case 4:
    echo "Thursday";
    break;

    case 5:
    echo "Friday";
    break;

    case 6:
    echo "Saturday";
    break;

    case 7:
    echo "Sunday";
    break;

    default:
    echo"Invalid day";



   }

   }




  ?>
    
</body>
</html>