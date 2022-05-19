<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



    <!-- fontss -->
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
    <!-- style -->


    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            scroll-behavior: smooth;
            font-family: 'Bebas', sans-serif;
        }


        /* ________________________________________________________________________________________________________________ */


        .content {
            width: 94%;
            margin: 4em auto;
            font-size: 20px;
            line-height: 30px;
            text-align: justify;
        }

        .logo {
            line-height: 60px;
            float: left;
            margin: 16px 46px;
            color: #fff;
            font-size: 20px;
            letter-spacing: 2px;
            font-family: 'Koulen', cursive;
            border: #fff 1px solid;
            position: absolute;
            padding: 5px;
        }

        nav {
            position: sticky;
            width: 100%;
            line-height: 60px;
        }

        nav ul {
            line-height: 60px;
            list-style: none;
            background-color: #ef7828;
            overflow: hidden;
            color: #fff;
            padding: 0;
            text-align: right;
            margin: 0;
            padding-right: 40px;

        }



        nav ul li {
            display: inline-block;
            padding: 16px 40px;
            ;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 20px;
        }
/* 
        nav ul li a:hover {


            background-color: #ef7828;
            color: rgb(255, 255, 255);
            text-decoration: none;
            font-size: 1.5em;
            border: rgb(225, 224, 224) .5px solid;


        } */

        .menu-icon {
            line-height: 60px;
            width: 100%;
            background: #000;
            text-align: right;
            box-sizing: border-box;
            padding: 15px 24px;
            cursor: pointer;
            color: #fff;
            display: none;
        }

        @media screen and (max-width: 1024px) {

            .logo {
                position: absolute;
                top: 0;
                margin-top: 16px;
                font-size: 20px;

            }


            nav ul {
                max-height: 0px;
                background: #e08547;
            }

            nav.black ul {
                background: #ef7828;


            }

            .showing {
                max-height: 34em;
            }

            nav ul li {
                box-sizing: border-box;
                width: 100%;
                padding: 24px;
                text-align: center;
            }

            .menu-icon {
                display: block;
                background-color: #ef7828;

            }
        }
        .menu a{
border: transparent;
        }
    </style>
</head>


<body>

    <div class="wrapper">
        <header>
            <nav>
                <div class="menu-icon">
                    <i class="fa fa-bars fa-2x"></i>
                </div>
                <div class="logo">
                    Focus Zone
                </div>
                <div class="menu">
                    <ul>
                        <li class="active">
                            <a  class="btn btn-outline-light mb-4" href="home.html">Home</a>
                        </li>
                        <li>
                            <a  class="btn btn-outline-light mb-4" href="#">Shop</a>
                        </li>
                        <li>
                            <a class="btn btn-outline-light mb-4"  href="#">Cart</a>
                        </li>
                        <li>
                            <a  class="btn btn-outline-light mb-4" href="#">Contact Us</a>
                        </li>
                        <li>
                            <a  class="btn btn-outline-light mb-4" href="#"></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>




        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>