<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Q1</h3>
    <?php
    // $isprime=true;
    // $num=13
    // for ($i=2; $i<$num; $i++) {
    //     if ($num % $i == 0) {
    //         $isprime = false;
    //         break;
    //     }
    // }

    // if ($isprime) {
    //     echo $num "is a prime number";
    // } else {
    //     echo $num "is not a prime number";
    // }
    function Prime($n)
{
    if($n ==1)
        {
            return "$n is not a prime number ";
        }
 for($i=2; $i<$n; $i++)
   {
        if($n %$i ==0)
        {
            return "$n is not a prime number ";
        }
    }
        return "$n is a prime number ";
   }
echo Prime(31);
   
    ?>
    <br>
    <h3>Q2</h3>
    <?php
    echo strrev("remove");
    ?>
    <br>
    <h3>Q3</h3>
    <?php
    $str="remove";
       if(ctype_lower($str)){
           echo"Your String is Ok <br>";
       } 
       else{
        echo"Your String is not Ok <br>";
       }

    ?>
        <br>
    <h3>Q4</h3>
<?php
function swapvar($x,$y){
    $z=$x;
    $x=$y;
    $y=$z;
    echo "x= $x"."<br>";
    echo "y= $y"."<br>";
}
$x= 12;
$y=10;
swapvar($x,$y);
?>
    <br>
    <h3>Q5</h3>
    <?php

    ?>
        <br>
 <h3>Q6</h3>
    <?php
     $str1='evacaniseebeesinacave';
     if($str1==strrev($str1)) {
         echo $str1 . " is palindrome!";
     }
     else {
         echo $str1 . " is not palindrome!";
     }
 
    ?>
        <br>
 <h3>Q7</h3>
    <?php
    
$arr = array(2, 4, 7, 4, 8, 4);
print_r(array_unique($arr));
    ?>

</body>
</html>