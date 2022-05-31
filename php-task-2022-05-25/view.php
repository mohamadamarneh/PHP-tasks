<?php
include "connect.php";
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
    <table>
        <thead>
            <tr>
        <th>Id</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Age</th>
          <th>Position</th>
          <th>Salary</th>
          <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        <?php
        
        $query = "SELECT * FROM employee ORDER BY ID ASC";
        $add= mysqli_query($conn,$query);
        $row= mysqli_fetch_all($add, MYSQLI_NUM);

          

        //   $ID= $row['ID'];
        //   $fname= $row['fname'];
        //   $lname= $row['lname'];
        //   $age= $row['age'];
        //   $position= $row['position'];
        //   $salary= $row['salary'];
          
          for($i=0 ; $i<count($row) ; $i++){
            ?>

        
         <tbody>

         <tr>
         <th scope='row'><?php echo ($i+1)?></th>
    <td><?php echo $row[$i][1]?></td>
    <td><?php echo $row[$i][2]?></td>
    <td><?php echo $row[$i][3]?></td>
    <td><?php echo $row[$i][4]?></td>
    <td><?php echo $row[$i][5]?></td>
    <td>
        <a href="update.php?id=<?php echo $row[$i][0]?>">update</a>
        <a href="index.php?delete=<?php echo $row[$i][0]?>">delete</a>
            </td>
        </tr>
    </tbody>
    <?php
    if(isset($_GET['delete'])){
        $sql = "DELETE FROM employee WHERE id ='". $_GET['delete']."'";
        mysqli_query($conn , $sql);
        header("location:index.php");
    }
}
?>

</table>
</body>
</html>