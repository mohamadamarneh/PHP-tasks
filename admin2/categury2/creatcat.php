<?php 

$user="root";
$password="";
$pdo=new PDO('mysql:host=localhost;dbname=products',$user,$password);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $title= $_POST["title"];
    $desc= $_POST["description"];
    $price= $_POST["price"];
    $image= $_FILES["image"];
    $date=date('Y-m-d H:i:s');
    $dateim=date('Yamadahaias');
    $imagepath="";
    if($image && $image['tmp_name'] ){

        $imagepath='img/'.$dateim.'/'.$image["name"];

        mkdir(dirname($imagepath));
        
        move_uploaded_file($image["tmp_name"],$imagepath);
    }

    

    // echo "<pre>";
    // var_dump($_FILES);
    // echo "<pre>";

    $adding =$pdo->prepare(" INSERT INTO storeme (title, description, price, image,date) VALUES (:title ,:desc ,:price,:image,:date)");

    $adding->bindValue(':title',$title);
    $adding->bindValue(':desc',$desc);
    $adding->bindValue(':price',$price);
    $adding->bindValue(':image',$imagepath);
    $adding->bindValue(':date',$date);

    $adding->execute();

    // $Ad=$pdo->prepare($adding);


}
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
  <div><?php include '../header.php' ?></div>
      
  <div class="container" style="min-height: 700px;">
      <h1>CREAT PRODUCT</h1>
      <h2><a href="products.php">back to products</a></h2>
      <br>
      <form method="post"  enctype='multipart/form-data'>
  <div class="form-group">
    <label for="exampleFormControlInput1">title</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="title">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">price</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" name="price" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">image</label>
    <input type="file" class="form-control" id="exampleFormControlInput1" name="image" >
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn lg btn-outline-primary">add</button>
  </div>
</form>

      </div>
      <div><?php include '../footer.php' ?></div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>