<?php 
$user="root";
$password="";
$pdo=new PDO('mysql:host=localhost;dbname=products',$user,$password);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


$ana= " SELECT * FROM storeme ";
$products=$pdo->query($ana);

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
      <?php include '../header.php' ?>

      <div class="container" style="min-height: 700px;">
      <h1> PRODUCTS PAGE </h1>
      <a href="creatproduct.php" class="btn btn btn-success">creat</a>
      <br>

      <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">title</th>
      <th scope="col">image</th>
      <th scope="col">price</th>
      <th scope="col">description</th>
      <th scope="col">add date</th>
      <th scope="col">delete / edit </th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php  foreach( $products as $product ): ?>

      <th scope="row"><?php echo $product["id"] ?></th>

      <td><?php echo $product["title"] ?></td>

      <td><img src="<?php echo $product["image"] ?>" alt="image" style="width:70px;"></td>

      <td><?php echo $product["price"] ?></td>

      <td><?php echo $product["description"] ?></td>
      
      <td><?php echo $product["date"] ?></td>
      <td>

      <form action="updateproduct.php" method="get" style="display:inline-block;">
      <input type="hidden" value=<?php echo $product["id"] ?> name="id">
      <button type="submit" class="btn btn-sm btn-outline-secondary">edit</button>
      </form>

      <form action="deleteproduct.php" method="post" style="display:inline-block;">
      <input type="hidden" value=<?php echo $product["id"] ?> name="id">
      <button type="submit" class="btn btn-sm btn-outline-danger">delete</button>
      </form>

      </td>
      

    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
<div><?php include '../footer.php' ?></div>






   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>