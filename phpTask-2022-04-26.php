<?php 
$tot=0;
for ($i=0;$i<30;$i++){
    $tot+=$i;

}
echo $tot . "<br>" ;


echo "<br>"."<br>"."<br>";
$w=0;
$cube=9;
for($n=0;$n<$cube;$n++){
    for($i=0;$i<$cube;$i++){
        if($i==$w){
            echo $i+1;
        }
        echo 0;
    }
    $w++;
    echo"<br>";
}


// $ar= array(0,0,0,0,0);
// for ($i=0;$i<4;$i++){
//     $ar[$i] = $i+1;
    
//     $ar=[0,0,0,0,0];

// }
// print $ar;

$f=5;
$tot=1;
for($i=1;$i<=$f;$i++){
    $tot*=$i;

}
$tot=0;
$my=1;
$r=0;
echo "<br>" ;
echo $tot ," ," ;
echo 0 ," ,";
for($i=1;$i<=20;$i++){

    echo $r=$tot+$my ," ,";
    
    $my=$tot;
    $tot=$r;

}

echo "<br>"."<br>"."<br>";
function asuse($n){
    $value = 1;
    for($i = 1; $i <= $n; $i++) {
      for($j = 1; $j <= $i; $j++) {
        echo "$value "; 
        $value++;
      }
      echo "<br>"; 
    }
  }
  
  asuse(8);

  echo " <br> <b> array tasks</b><br>";
  $colors = array('white', 'green', 'red');

  echo "<h3>" . "colors". "</h3>";
  echo "<ul>";
  foreach($colors as $color){
      echo "<li>" . $color . "</li>";

  }
  echo "</ul>" . "<br>";
  $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris" ); 
 foreach($cities as $su => $impo){
     echo "The capital of " . $su ." is ". $impo . "<br>";
 }
 $colore = array (4 => 'white', 6 => 'green', 11=> 'red');
echo "<br>" . $colore[4] . "<br>";

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

$wawa = krsort($fruits);

foreach($fruits as $ky => $valll){
    echo $ky . " = " . $valll . "<br>";
}

$data =  array("abcd","abc","de","hjqdqwdjj","g","wer");
$lengths = array_map('strlen', $data);


  // Show min and max string length
echo "The shortest is " . min($lengths) .
     ". The longest is " . max($lengths);



















