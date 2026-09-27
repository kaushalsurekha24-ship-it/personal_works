<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exception Handling</title>
</head>
<body>
    <?php

function div($a,$b){

if ($b==0){
    throw new exception("Divide By Zero Not Possible");
}
else {
        $c=$a/$b;
        echo"$c";

}

}
try{
div(2,0);

}
catch(Exception $e){

echo"<br>message.".$e->getMessage();
}
  
  
    ?>

    
</body>
</html>