<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $serverName='localhost';
    $userName='root';
    $password='';
    $db='employee';
   $conn= mysqli_connect($serverName,$userName,$password,$db);
   if($conn){
       echo"Connection with server is done proparly";
   }
   else{
       die('Ther is connection problem..' .mysqli_connect_error());
   }
    ?>
</body>
</html>