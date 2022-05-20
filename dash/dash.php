<?php 

// connection

$user="root";
$password="";
$pdo=new PDO('mysql:host=localhost;dbname=sport_goods',$user,$password);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
// end connect



// take data
$statement = $pdo->prepare('SELECT COUNT(product_id) FROM products');
$statement->execute();
$products = $statement->fetch(PDO::FETCH_ASSOC);

$statement = $pdo->prepare('SELECT COUNT(user_id) FROM userstable');
$statement->execute();
$users = $statement->fetch(PDO::FETCH_ASSOC);


$statement = $pdo->prepare('SELECT COUNT(order_id) FROM orders');
$statement->execute();
$orders = $statement->fetch(PDO::FETCH_ASSOC);


$statement = $pdo->prepare('SELECT COUNT(discount_id) FROM discount');
$statement->execute();
$coupon = $statement->fetch(PDO::FETCH_ASSOC);

$statement = $pdo->prepare('SELECT COUNT(discount_id) FROM discount WHERE discount_active = 1');
$statement->execute();
$actcoupon = $statement->fetch(PDO::FETCH_ASSOC);


$statement = $pdo->prepare('SELECT COUNT(discount_id) FROM discount WHERE discount_active = 0');
$statement->execute();
$noncoupon = $statement->fetch(PDO::FETCH_ASSOC);

//end take data



// echo "<pre>" ;
// echo var_dump($products);
// echo "</pre>" ;
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <style>
.card{
    
    color: #fff;
    text-decoration: none;
    
}
.card-title{
    font-weight: 500;
}
.card-link{
    color: #ebebeb;

}

#a{
    background-color: #321fdc;
}
#b{
    background-color: #e45253;
}
#c{
    background-color: #2f99fe;
}
#d{
    background-color: #f9b113;
}
#e{
    background-color:#52b771;
}
        </style>

</head>


<body>
    <main>
        <h2 class="container">dashboard</h2>

        <div class="container">
            
            <div class="row">

                <div class="card-deck m-3">
                    <div class="card" style="width: 18rem;" id="a">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo " ". $users["COUNT(user_id)"] ?></h4>
                            <h4 class="card-title"><b>Users</b></h4>
                            <p class="card-text">The number of users using the site
                                <br><br><br>
                            </p>
                            <div class="d-flex align-items-center">
                            <a href="#" class="card-link">view users</a>
                            <a href="#" class="card-link">add users</a>
                            </div>
                        </div>
                    </div>
                </div> 


                <div class="card-deck m-3">
                    <div class="card" style="width: 18rem;" id="b">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $products["COUNT(product_id)"] ?></h4>
                            <h4 class="card-title"><b>Products</b></h4>
                            <p class="card-text">The number of products displayed on the site that customers can order</p>
                            <div class="d-flex align-items-center">
                            <a href="#" class="card-link">view products</a>
                            <a href="#" class="card-link">add products</a>
                            </div>
                        </div>
                    </div>
                </div> 




                <div class="card-deck m-3">
                    <div class="card" style="width: 18rem;" id="c">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $orders["COUNT(order_id)"] ?></h4>
                            <h4 class="card-title"><b>Orders</b></h4>
                            <p class="card-text">The requests that customers have used in the past period and their characteristics</p>
                             <div class="d-flex align-items-center">
                            <a href="#" class="card-link ">view orders</a>
                            <a href="#" class="card-link">add orders</a>
                             </div>
                        </div>
                    </div>
                </div> 




                <div class="card-deck m-3">
                    <div class="card" style="width: 18rem;" id="d">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $coupon["COUNT(discount_id)"] ?></h4>
                            <h4 class="card-title"><b>Coupons</b></h4>
                            <p class="card-text"> active  :<?php echo $actcoupon["COUNT(discount_id)"] ?> <br> non-active : <?php echo $noncoupon["COUNT(discount_id)"] ?><br><br> </p>
                            <a href="#" class="card-link">view coupons</a>
                            <a href="#" class="card-link">add coupons</a>
                        </div>
                    </div>
                </div> 


                <div class="card-deck m-3">
                    <div class="card" style="width: 18rem;" id="e">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $products["COUNT(product_id)"] ?></h4>
                            <h4 class="card-title"><b>Categories</b></h4>
                            <p class="card-text">The number of category used to display the products that the user can see <br></p>
                            <a href="#" class="card-link">view Categories</a>
                            <a href="#" class="card-link">add Categories</a>
                        </div>
                    </div>
                </div> 






            </div>

        </div>
        </div>

    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>