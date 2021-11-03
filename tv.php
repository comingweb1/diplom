<?php session_start(); 
include("connect.php");?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Shop | E-Shopper</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/price-range.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>
        <header id="header"><!--header-->
            <div class="header_top"><!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a><i class="fa fa-phone"></i> +7(800)-555-35-35</a></li>
                                    <li><a><i class="fa fa-envelope"></i> techno@shop.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header_top-->

            <div class="header-middle"><!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="logo pull-left">
                                <a href="index.php"><img src="images/home/logo.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="login.php"><i class="fa fa-lock"></i> Вход</a></li> 
                                     <li>
                                 <?php
                                    if (isset($_SESSION['username'])){
                                    $username = $_SESSION['username'];
                                    echo  $username .  "<a href='logout.php'> Выйти </a>";
                                     }  
                                ?> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-middle-->

            <div class="header-bottom"><!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="mainmenu pull-left">
                               <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li><a href="index.php">Главная</a></li> 
                                    <li><a href="#">О магазине</a></li>
                                    <li><a href="contact.php">Контакты</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-bottom-->
        </header><!--/header-->

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Каталог</h2>
                            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="telephone.php">Смартфоны</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="tv.php">Телевизоры</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="refregerator.php">Холодильники</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="laptop.php">Ноутбуки</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="stove.php">Газовые плиты</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="microwave.php">Микроволновки</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="adapter.php">Переходники провода</a></h4>
                                    </div>
                                </div>
                            </div><!--/category-products-->


                            <div class="shipping text-center"><!--shipping-->
                                <img src="images/home/shipping.jpg" alt="" />
                            </div><!--/shipping-->

                        </div>
                    </div>
                      <?php
                        $query = "SELECT * FROM `good`";
                        $res = mysqli_query($connection,$query);

                        $count = mysqli_num_rows($res);

                         if ($count) {
                        $row1 = mysqli_fetch_array($res);
                        $row2 = mysqli_fetch_array($res);
                        $row3 = mysqli_fetch_array($res);
                        $row4 = mysqli_fetch_array($res);
                        $row5 = mysqli_fetch_array($res);
                        $row6 = mysqli_fetch_array($res);
                        $row7 = mysqli_fetch_array($res);
                        $row8 = mysqli_fetch_array($res);
                        $row9 = mysqli_fetch_array($res);
                        $row10 = mysqli_fetch_array($res);
                        $row11 = mysqli_fetch_array($res);
                        $row12 = mysqli_fetch_array($res);
                        $row13 = mysqli_fetch_array($res);
                        $row14 = mysqli_fetch_array($res);
                        $row15 = mysqli_fetch_array($res);
                        $row16 = mysqli_fetch_array($res);
                        $row17 = mysqli_fetch_array($res);
                        $row18 = mysqli_fetch_array($res);
                        $row19 = mysqli_fetch_array($res);
                        $row20 = mysqli_fetch_array($res);
                        $row21 = mysqli_fetch_array($res);
                        $row22 = mysqli_fetch_array($res);
                        $row23 = mysqli_fetch_array($res);
                        $row24 = mysqli_fetch_array($res);     
                    }                      
                    ?>

                    <div class="col-sm-9 padding-right">
                        <div class="features_items"><!--features_items-->
                            <h2 class="title text-center">ТЕЛЕВИЗОРЫ</h2>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/product3.jpg" alt="" />
                                           <h2><?php echo $row13['price'];?>₽</h2>
                                            <p><?php echo $row13['name'];?></p>
                                            <a href="tv1.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2><?php echo $row13['price'];?>₽</h2>
                                            <p><?php echo $row13['name'];?></p>
                                                <a href="tv1.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/tv1.jpg" alt="" />
                                            <h2><?php echo $row14['price'];?>₽</h2>
                                            <p><?php echo $row14['name'];?></p>
                                            <a href="tv2.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2><?php echo $row14['price'];?>₽</h2>
                                            <p><?php echo $row14['name'];?></p>
                                                <a href="tv2.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/tv2.jpg" alt="" />
                                            <h2><?php echo $row15['price'];?>₽</h2>
                                            <p><?php echo $row15['name'];?></p>
                                            <a href="tv3.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2><?php echo $row15['price'];?>₽</h2>
                                            <p><?php echo $row15['name'];?></p>
                                                <a href="tv3.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/tv3.jpg" alt="" />
                                            <h2><?php echo $row16['price'];?>₽</h2>
                                            <p><?php echo $row16['name'];?></p>
                                            <a href="tv4.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2><?php echo $row16['price'];?>₽</h2>
                                            <p><?php echo $row16['name'];?></p>
                                                <a href="tv4.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                            </div>
                                        </div>
                                        <img src="images/home/new.png" class="new" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/tv4.jpg" alt="" />
                                            <h2><?php echo $row17['price'];?>₽</h2>
                                            <p><?php echo $row17['name'];?></p>
                                            <a href="tv5.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2><?php echo $row17['price'];?>₽</h2>
                                                <p><?php echo $row17['name'];?></p>
                                                <a href="tv5.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/tv5.jpg" alt="" />
                                            <h2><?php echo $row18['price'];?>₽</h2>
                                                <p><?php echo $row18['name'];?></p>
                                            <a href="tv6.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2><?php echo $row18['price'];?>₽</h2>
                                                <p><?php echo $row18['name'];?></p>
                                                <a href="tv6.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/tv6.jpg" alt="" />
                                            <h2><?php echo $row19['price'];?>₽</h2>
                                                <p><?php echo $row19['name'];?></p>
                                            <a href="tv7.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2><?php echo $row19['price'];?>₽</h2>
                                                <p><?php echo $row19['name'];?></p>
                                                <a href="tv7.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/tv7.jpg" alt="" />
                                            <h2><?php echo $row20['price'];?>₽</h2>
                                                <p><?php echo $row20['name'];?></p>
                                            <a href="tv8.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2><?php echo $row20['price'];?>₽</h2>
                                                <p><?php echo $row20['name'];?></p>
                                                <a href="tv8.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/tv8.jpg" alt="" />
                                            <h2><?php echo $row21['price'];?>₽</h2>
                                                <p><?php echo $row21['name'];?></p>
                                            <a href="tv9.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2><?php echo $row21['price'];?>₽</h2>
                                                <p><?php echo $row21['name'];?></p>
                                                <a href="tv9.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/tv9.jpg" alt="" />
                                            <h2><?php echo $row22['price'];?>₽</h2>
                                                <p><?php echo $row22['name'];?></p>
                                            <a href="tv10.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2><?php echo $row22['price'];?>₽</h2>
                                                <p><?php echo $row22['name'];?></p>
                                                <a href="tv10.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/tv10.jpg" alt="" />
                                            <h2><?php echo $row23['price'];?>₽</h2>
                                                <p><?php echo $row23['name'];?></p>
                                            <a href="tv11.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                               <h2><?php echo $row23['price'];?>₽</h2>
                                                <p><?php echo $row23['name'];?></p>
                                                <a href="tv11.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/tv11.jpg" alt="" />
                                            <h2><?php echo $row24['price'];?>₽</h2>
                                                <p><?php echo $row24['name'];?></p>
                                            <a href="tv12.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2><?php echo $row24['price'];?>₽</h2>
                                                <p><?php echo $row24['name'];?></p>
                                                <a href="tv12.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div><!--features_items-->
                    </div>
                </div>
            </div>
        </section>

        <footer id="footer"><!--Footer-->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <p class="pull-left">Copyright © 2015</p>
                        
                    </div>
                </div>
            </div>
        </footer><!--/Footer-->



        <script src="js/jquery.js"></script>
        <script src="js/price-range.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>