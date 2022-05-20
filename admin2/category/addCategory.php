<?php 
include_once "../../inc/header.php" ;
require "../../connect.php";
require "category_backend.php";
include_once "../index.php";


?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div></div>
      
  <div class="container" style="min-height: 700px;">
      <h1>Add New Category</h1>
      <h2><a href="products.php">back to products</a></h2>
      <br>
      <form method="post"  enctype='multipart/form-data'>
            <div class="form-group">
              <label for="exampleFormControlInput1">Category Name</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="category_name">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Category Image</label>
              <input type="file" class="form-control" id="exampleFormControlInput1" name="category_image" >
            </div>
            
            <div class="form-group">
            <input type="submit" class="btn btn lg btn-outline-primary" value = "Add" name="submit">
            </div>
</form>

<?php 

if(isset($_POST['submit'])){
  if(!empty($_POST["category_name"])&& !empty($_FILES["category_image"]["name"])){
  move_uploaded_file($_FILES["category_image"]["tmp_name"],"image/" . $_FILES["category_image"]["name"]);
  $category_image = $_FILES["category_image"]["name"];
  $category_name = $_POST["category_name"];

  echo $category_image;
  echo $category_name;

  add_category($connect ,$category_name ,$category_image);
}
}



?> 
      </div>
          <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php include_once "../../inc/footer.php" ?>