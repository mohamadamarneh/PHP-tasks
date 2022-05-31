<?php
include 'connect.php';
$result = mysqli_query($conn,"SELECT * FROM employee WHERE id='" . $_GET['id'] . "'");
$row = mysqli_fetch_array($result , MYSQLI_NUM);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
     <label for="">First Name</label>
     <input type="text" name="fname"><br>

     <label for="">Last Name</label>
     <input type="text" name="lname"><br>

     <label for="">Age</label>
     <input type="number" name="age"><br>

     <label for="">position</label>
     <input type="text" name="position"><br>

     <label for="">Salary</label>
     <input type="number" name="salary"><br>

     <button>Submit</button>

    </form>
    <?php
    if(isset($_POST['update'])){
        $fname= $_POST['fname'];
        $lname= $_POST['lname'];
        $age= $_POST['age'];
        $position= $_POST['position'];
        $salary= $_POST['salary'];

        $sqlUpdate = "UPDATE employee SET name ='$fname' , lname ='$lname' , age='$age' , position='$position' , salary ='$salary' WHERE id ='$_GET[id]'";

        if(mysqli_query($conn , $sqlUpdate)){
            echo "Update done successuflly";
            header('location:update.php?id='.$_GET['id']);
        }
    }
?>
</body>
</html>