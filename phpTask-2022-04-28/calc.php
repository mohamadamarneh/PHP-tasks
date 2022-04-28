<?php 
$a = $_POST["n1"];
$ar = $_POST["me"];
$arg = $_POST["n2"];
echo "result = <br>" ;
if( $ar == "+"){
    echo $a + $arg ; 
}
elseif( $ar == "-"){
    echo $a - $arg ; 
}
elseif( $ar == "*"){
    echo $a * $arg ; 
}
elseif( $ar == "/"){
    echo $a / $arg ; 
}else{
   echo  "faild prosess";
}