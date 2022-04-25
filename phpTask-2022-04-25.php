<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>tasks</h1> <hr>
<?PHP 

$leap = 2012;
if( $leap %4 == 0){
    echo "its leap year" ."<br>";
} else{
    echo "its not"  ."<br>";
}


$heat = 30;
if( $heat <= 20 ){
    echo "its weinter"."<br>";
} else{
    echo "its summer"."<br>";
}

$x = 30;
$y = 30;
if( $x == $y ){
    echo ($x + $y)*3 ."<br>";
} else{
    echo $x + $y ."<br>";
}

if( $x + $y == 30 ){
    echo $x . $y ."<br>";
} else{
    echo "false" ."<br>";
}

$mul = 30;
if( $mul % 3 == 0){
    echo "its multibly by 3" ."<br>";
} else{
    echo "false"  ."<br>";
}

$fiftyrange = 30;
if ( $fiftyrange <= 50 && $fiftyrange >= 25  ){
    echo "true" ."<br>";
} else{
    echo "false" ."<br>";
}

$n = 3;
$m = 5;
$l = 9;
if ( $n > $m ){
    if($n > $l ){
        echo $n  ."<br>";
    }

}else{
    if ( $m > $l ){
        echo $m ."<br>";
    }else{
        echo $l ."<br>";
    }
}

$bill = 300;


if($bill < 50 ){
    echo "<br>" . $bill * 2.5;
}
if($bill >= 50 && $bill <= 150 ){
    echo "<br>" .  50 * 2.5 +(( $bill - 50)*5 ) ,"<br>";
}
if($bill >= 150 && $bill <= 250 ){
    echo   50 * 2.5 + 100 * 5 +(( $bill - 150)*6.2 ) , "<br>";
}
if($bill > 250 ){
    echo (50 * 2.5) + (100 * 5) + (100* 6.2) +(( $bill - 250) *7.5 ) , "<br>";
}


$age = 19;
if ( $age >= 18 ){
    echo "you can vote" ."<br>";
} else{
    echo "you cant vote" ."<br>";
}

$num=90;
if ( $age >= 0 ){
    echo "postive" ."<br>";
} else{
    echo "niggative" ."<br>";
}


$gra = 70;
if($gra < 60){
    echo " your degree is F";
}
if($gra >= 60 && $gra < 70 ){
    echo " your degree is D";
}
if($gra >= 70  && $gra < 80 ){
    echo " your degree is C";
}
if($gra >= 80  && $gra < 90 ){
    echo " your degree is B";
}
if($gra >= 90){
    echo " your degree is A";
}







?>
    

</body>
</html>