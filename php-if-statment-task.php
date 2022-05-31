<!-- Q1 -->
<?php
$year=2022;

if ($year%4==0){

    echo "leap year <br>";
    
}
else {

    echo "not a leap year <br>";
    
}

?>
<!-- Q2 -->
<?php
$temp=22;

if ($temp>=20){

    echo "It's summer time <br>";
    
}
else {

    echo "It's winter time <br>";
    
}
?>
<!-- Q3 -->
<?php 
$num1=4;
$num2=4;
if($num1 === $num2){
    echo ($num1 + $num2)*3 ."<br>";
}
    else{
       echo "It's summer time";
    }

?>
<!-- Q4 -->
<?php 
$num1=15;
$num2=15;
$sum=$num1+$num2;
if($sum === 30){
    echo $sum ."<br>";
}
    else{
       echo "false <br>";
    }

?>
<!-- Q5 -->
<?php 
$multi=27;

if($multi%3==0){
    echo "true .<br>";
}
    else{
       echo "false <br>";
    }

?>
<!-- Q6 -->

<?php 
$num=27;

if($num>=20 && $num<=50){
    echo "true .<br>";
}
    else{
       echo "false <br>";
    }

?>
<!-- Q7 -->

<?php 
$num1=1;
$num2=7;
$num3=9;
if($num1 > $num2 && $num1 > $num3){
    echo $num1 ."<br>";
}
elseif ($num2 > $num3){
    echo $num2 ."<br>";
}
else{
    echo $num3 ."<br>";

}

?>
<!-- Q8 -->
<?php 
$unit=55;
if($unit<=50){
    echo $unit*2.5 ."<br>";
}
elseif ($unit>50 && $unit<=150){
    echo $unit*5 ."<br>";
}
elseif ($unit>50 && $unit<=250){
    echo $unit*6.2 ."<br>";
}
else{
    echo $unit*7.5 ."<br>";

}

?>
<!-- Q9 -->
<?php 
$age=15;
if($age<=18){
    echo "is eligible to vote .<br>";
}
else{
    echo "is no eligible to vote .<br>";
}
?>
<!-- Q10 -->
<?php

$num=-7;

if ($num<0){

    echo "Negative"."<br>";
    
}
else if  ($num == 0){

    echo "zero" ."<br>";
 
} else{
    echo "positive" ."<br>";
}
?> 

<!-- Q11 -->


<?php

 $grade=55;
switch (true) {
   
    case ( $grade >= 90) :
        echo "A";
        break;

     case ( $grade >= 80 &&  $grade <=89) :
        echo "B";
        break;

    case ($grade >= 70 && $grade <=79) :
        echo "C";
        break;

    case ($grade >= 60 && $grade <=69) :
        echo "D";

        break;

    case ( $grade>= 50 && $grade <=59) :
        echo "E";

        break;

    default :
    echo "Fail";

      
}

?>
