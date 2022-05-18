<?php 

$user="root";
$password="";
$pdo=new PDO('mysql:host=localhost;dbname=products',$user,$password);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$id = $_POST["id"] ?? null;
if(!$id){
    header('location: products.php');
    exit;

}
if($_SERVER["REQUEST_METHOD"] == "POST" && $title){

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

  $adding =$pdo->prepare(" UPDATE  storeme SET title = :title ,
       description = :description, price = :price, image = :image WHERE id = :id");

  $adding->bindValue(':title',$title);
  $adding->bindValue(':desc',$desc);
  $adding->bindValue(':price',$price);
  $adding->bindValue(':image',$imagepath);
  $adding->bindValue(':date',$date);

  $adding->execute();

  // $Ad=$pdo->prepare($adding);


}
$statement=$pdo->prepare('SELECT * FROM storeme WHERE id = :id');
$statement->bindValue(':id',$id);
$statement->execute();
$product = $statement->fetch(PDO::FETCH_ASSOC);




// echo ' <pre>' ;
// var_dump($product);
// echo ' </pre>' ;
// exit;







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
  <body>
      <h1> edit page </h1>
      <h2><a href="products.php">back to products</a></h2>
      <div class="container">
      <form method="post" action="updateproduct.php" enctype='multipart/form-data'>
  <div class="form-group">
    <label for="exampleFormControlInput1">title</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value='<?php echo $product["title"] ?>'>
  </div>
  <div class="form-group">
  <img src="<?php echo $product["image"] ?>" alt="" style="width: 120px;">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">price</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" name="price" value='<?php echo $product["price"] ?>'>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" ><?php echo $product["description"] ?></textarea>
  </div>

  <div class="form-group">
    <input type="hidden" value='<?php echo $id ?>'>
  <button type="submit" class="btn btn lg btn-outline-primary">edit</button>
  </div>
</form>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
