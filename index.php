<?php session_start();
include("connect.php");
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Главная</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/price-range.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">    
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
                                    <li><a href="aboutshop.php">О магазине</a></li>
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
                            <div class="panel-group category-products">
                                
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
                                        <h4 class="panel-title"><a href="adapter.php">Переходники,провода</a></h4>
                                    </div>
                                </div>
                            </div>

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
                        $row25 = mysqli_fetch_array($res);
                        $row26 = mysqli_fetch_array($res);
                        $row27 = mysqli_fetch_array($res);
                        $row28 = mysqli_fetch_array($res);
                        $row29 = mysqli_fetch_array($res);
                        $row30 = mysqli_fetch_array($res);
                        $row31 = mysqli_fetch_array($res);
                        $row32 = mysqli_fetch_array($res);
                        $row33 = mysqli_fetch_array($res);
                        $row34 = mysqli_fetch_array($res);
                        $row35 = mysqli_fetch_array($res);
                        $row36 = mysqli_fetch_array($res);
                        $row37 = mysqli_fetch_array($res);
                        $row38 = mysqli_fetch_array($res);
                        $row39 = mysqli_fetch_array($res);
                        $row40 = mysqli_fetch_array($res);
                        $row41 = mysqli_fetch_array($res);
                        $row42 = mysqli_fetch_array($res);
                        $row43 = mysqli_fetch_array($res);
                        $row44 = mysqli_fetch_array($res);
                        $row45 = mysqli_fetch_array($res);
                        $row46 = mysqli_fetch_array($res);
                        $row47 = mysqli_fetch_array($res);
                        $row48 = mysqli_fetch_array($res);
                        $row49 = mysqli_fetch_array($res);
                        $row50 = mysqli_fetch_array($res);
                        $row51 = mysqli_fetch_array($res);
                        $row52 = mysqli_fetch_array($res);
                        $row53 = mysqli_fetch_array($res);
                        $row54 = mysqli_fetch_array($res);
                        $row55 = mysqli_fetch_array($res);
                        $row56 = mysqli_fetch_array($res);
                        $row57 = mysqli_fetch_array($res);
                        $row58 = mysqli_fetch_array($res);
                        $row59 = mysqli_fetch_array($res);
                        $row60 = mysqli_fetch_array($res);
                        $row61 = mysqli_fetch_array($res);
                        $row62 = mysqli_fetch_array($res);
                        $row63 = mysqli_fetch_array($res);
                        $row64 = mysqli_fetch_array($res);
                        $row65 = mysqli_fetch_array($res);
                        $row66 = mysqli_fetch_array($res);
                        $row67 = mysqli_fetch_array($res);
                        $row68 = mysqli_fetch_array($res);
                        $row69 = mysqli_fetch_array($res);
                        $row70 = mysqli_fetch_array($res);
                        $row71 = mysqli_fetch_array($res);
                        $row72 = mysqli_fetch_array($res);
                        $row73 = mysqli_fetch_array($res);
                        $row74 = mysqli_fetch_array($res);
                        $row75 = mysqli_fetch_array($res);
                        $row76 = mysqli_fetch_array($res);
                        $row77 = mysqli_fetch_array($res);
                        $row78 = mysqli_fetch_array($res);
                        $row79 = mysqli_fetch_array($res);
                        $row80 = mysqli_fetch_array($res);
                    }                      
                    ?>


                    <div class="col-sm-9 padding-right">
                        <div class="features_items"><!--features_items-->
                            <h2 class="title text-center">Последние товары</h2>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/product1.jpg" alt="" />
                                            <h2><?php echo $row1['price'];?>₽</h2>
                                            <p><?php echo $row1['name'];?></p>
                                            <a href="tel1.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/product2.jpg" alt="" />
                                            <h2><?php echo $row79['price'];?>₽</h2>
                                            <p><?php echo $row79['name'];?></p>
                                            <a href="rec1.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/product3.jpg" alt="" />
                                            <h2><?php echo $row13['price'];?>₽</h2>
                                            <p><?php echo $row13['name'];?></p>
                                            <a href="tv1.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/product4.jpg" alt="" />
                                            <h2><?php echo $row80['price'];?>₽</h2>
                                            <p><?php echo $row80['name'];?></p>
                                            <a href="rec2.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                        </div>
                                        <img src="images/home/new.png" class="new" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/product5.jpg" alt="" />
                                            <h2><?php echo $row5['price'];?>₽</h2>
                                            <p><?php echo $row5['name'];?></p>
                                            <a href="tel5.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/product6.jpg" alt="" />
                                            <h2><?php echo $row48['price'];?>₽</h2>
                                            <p><?php echo $row48['name'];?></p>
                                            <a href="lap12.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div><!--features_items-->

                        <div class="recommended_items"><!--recommended_items-->
                            <h2 class="title text-center">Рекомендуемые товары</h2>

                            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">	
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="images/home/recommend1.jpg" alt="" />
                                                         <h2><?php echo $row48['price'];?>₽</h2>
                                            			<p><?php echo $row48['name'];?></p>
                                                        <a href="lap12.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="images/home/recommend2.jpg" alt="" />
                                                         <h2><?php echo $row61['price'];?>₽</h2>
                                            			<p><?php echo $row61['name'];?></p>
                                                        <a href="mic1.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="images/home/recommend3.jpg" alt="" />
                                                         <h2><?php echo $row68['price'];?>₽</h2>
                                            			<p><?php echo $row68['name'];?></p>
                                                        <a href="mic8.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">	
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="images/home/recommend4.jpg" alt="" />
                                                         <h2><?php echo $row17['price'];?>₽</h2>
                                            			<p><?php echo $row17['name'];?></p>
                                                        <a href="tv5.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="images/home/recommend5.jpg" alt="" />
                                                         <h2><?php echo $row23['price'];?>₽</h2>
                                            			<p><?php echo $row23['name'];?></p>
                                                        <a href="tv11.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="images/home/recommend6.jpg" alt="" />
                                                         <h2><?php echo $row64['price'];?>₽</h2>
                                            			<p><?php echo $row64['name'];?></p>
                                                        <a href="mic4.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>			
                            </div>
                        </div><!--/recommended_items-->

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
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/price-range.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>