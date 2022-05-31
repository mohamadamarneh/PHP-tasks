<?php
include "connect.php";

$fname= $_POST['fname'];
$lname= $_POST['lname'];
$age= $_POST['age'];
$position= $_POST['position'];
$salary= $_POST['salary'];
echo "Welcome ". $fname . ' '. $lname. '<br>';

$query= "INSERT INTO employee(firstname, lastname, age, position, salary)
         VALUES ('$fname','$lname','$age','$position','$salary')";

if(mysqli_query($conn,$query))
{
    echo "New record in employee";
}
else{
    echo "error:". mysqli_error($conn);
}
$sqlUpdate = "UPDATE employee SET fname = 'Momen' , lname='Alshouha' , age = '29' ,position='IT' , salary = '700' WHERE id = 3 ";

mysqli_query($conn , $sqlUpdate);

$sqlDelete = "DELETE FROM employee WHERE id = 5";

mysqli_query($conn , $sqlDelete);
echo "<br><br><br>";

?>