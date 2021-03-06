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
                                    <li><a href="login.php"><i class="fa fa-lock"></i> ????????</a></li>
                                     <li>
                                 <?php
                                    if (isset($_SESSION['username'])){
                                    $username = $_SESSION['username'];
                                    echo  $username .  "<a href='logout.php'> ?????????? </a>";
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
                                    <li><a href="index.php">??????????????</a></li>
                                    <li><a href="#">?? ????????????????</a></li>
                                    <li><a href="contact.php">????????????????</a></li>
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
                            <h2>??????????????</h2>
                            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="telephone.php">??????????????????</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="tv.php">????????????????????</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="refregerator.php">????????????????????????</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="laptop.php">????????????????</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="stove.php">?????????????? ??????????</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="microwave.php">??????????????????????????</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="adapter.php">?????????????????????? ??????????????</a></h4>
                                    </div>
                                </div>
                            </div><!--/category-products-->


                            <div class="shipping text-center"><!--shipping-->
                                <img src="images/home/shipping.jpg" alt="" />
                            </div><!--/shipping-->

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
                        $row81 = mysqli_fetch_array($res);
                        $row82 = mysqli_fetch_array($res);
                        $row83 = mysqli_fetch_array($res);
                        $row84 = mysqli_fetch_array($res);
                        $row85 = mysqli_fetch_array($res);
                        $row86 = mysqli_fetch_array($res);
                        $row87 = mysqli_fetch_array($res);
                        $row88 = mysqli_fetch_array($res);
                        $row89 = mysqli_fetch_array($res);
                        $row90 = mysqli_fetch_array($res);
                        $row91 = mysqli_fetch_array($res);
                        $row92 = mysqli_fetch_array($res);
                        $row93 = mysqli_fetch_array($res);
                        $row94 = mysqli_fetch_array($res);
                        $row95 = mysqli_fetch_array($res);
                        $row96 = mysqli_fetch_array($res);
                        $row97 = mysqli_fetch_array($res);
                        $row98 = mysqli_fetch_array($res);

                    }                      
                    ?>

                        </div>
                    </div>

                    <div class="col-sm-9 padding-right">
                        <div class="features_items"><!--features_items-->
                            <h2 class="title text-center">????????????????????????</h2>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/ref1.jpg" alt="" />
                                            <h2><?php echo $row25['price'];?>???</h2>
                                            <p><?php echo $row25['name'];?></p>
                                            <a href="ref1.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>????????????</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2><?php echo $row25['price'];?>???</h2>
                                                <p><?php echo $row25['name'];?></p>
                                                <a href="ref1.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>????????????</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/ref2.jpg" alt="" />
                                            <h2><?php echo $row26['price'];?>???</h2>
                                            <p><?php echo $row26['name'];?></p>
                                            <a href="ref2.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>????????????</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2><?php echo $row26['price'];?>???</h2>
                                            <p><?php echo $row26['name'];?></p>
                                                <a href="ref2.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>????????????</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/ref3.jpg" alt="" />
                                            <h2><?php echo $row27['price'];?>???</h2>
                                            <p><?php echo $row27['name'];?></p>
                                            <a href="ref3.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>????????????</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2><?php echo $row27['price'];?>???</h2>
                                            <p><?php echo $row27['name'];?></p>
                                                <a href="ref3.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>????????????</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/ref4.jpg" alt="" />
                                            <h2><?php echo $row28['price'];?>???</h2>
                                            <p><?php echo $row28['name'];?></p>
                                            <a href="ref4.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>????????????</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2><?php echo $row28['price'];?>???</h2>
                                            <p><?php echo $row28['name'];?></p>
                                                <a href="ref4.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>????????????</a>
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
                                            <img src="images/home/ref5.jpg" alt="" />
                                            <h2><?php echo $row29['price'];?>???</h2>
                                            <p><?php echo $row29['name'];?></p>
                                            <a href="ref5.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>????????????</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2><?php echo $row29['price'];?>???</h2>
                                            <p><?php echo $row29['name'];?></p>
                                                <a href="ref5.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>????????????</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/ref6.jpg" alt="" />
                                            <h2><?php echo $row30['price'];?>???</h2>
                                            <p><?php echo $row30['name'];?></p>
                                            <a href="ref6.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>????????????</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                            <h2><?php echo $row30['price'];?>???</h2>
                                            <p><?php echo $row30['name'];?></p>
                                                <a href="ref6.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>????????????</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/ref7.jpg" alt="" />
                                            <h2><?php echo $row31['price'];?>???</h2>
                                            <p><?php echo $row31['name'];?></p>
                                            <a href="ref7.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>????????????</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                            <h2><?php echo $row31['price'];?>???</h2>
                                            <p><?php echo $row31['name'];?></p>
                                                <a href="ref7.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>????????????</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/ref8.jpg" alt="" />
                                            <h2><?php echo $row32['price'];?>???</h2>
                                            <p><?php echo $row32['name'];?></p>
                                            <a href="ref8.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>????????????</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                            <h2><?php echo $row32['price'];?>???</h2>
                                            <p><?php echo $row32['name'];?></p>
                                                <a href="ref8.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>????????????</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/ref9.jpg" alt="" />
                                            <h2><?php echo $row33['price'];?>???</h2>
                                            <p><?php echo $row33['name'];?></p>
                                            <a href="ref9.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>????????????</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2><?php echo $row33['price'];?>???</h2>
                                            <p><?php echo $row33['name'];?></p>
                                                <a href="ref9.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>????????????</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/ref10.jpg" alt="" />
                                            <h2><?php echo $row34['price'];?>???</h2>
                                            <p><?php echo $row34['name'];?></p>
                                            <a href="ref10.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>????????????</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <<h2><?php echo $row34['price'];?>???</h2>
                                            <p><?php echo $row34['name'];?></p>
                                                <a href="ref10.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>????????????</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/ref11.jpg" alt="" />
                                            <h2><?php echo $row35['price'];?>???</h2>
                                            <p><?php echo $row35['name'];?></p>
                                            <a href="ref11.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>????????????</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2><?php echo $row35['price'];?>???</h2>
                                            <p><?php echo $row35['name'];?></p>
                                                <a href="ref11.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>????????????</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/ref12.jpg" alt="" />
                                            <h2><?php echo $row36['price'];?>???</h2>
                                            <p><?php echo $row36['name'];?></p>
                                            <a href="ref12.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>????????????</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                            <h2><?php echo $row36['price'];?>???</h2>
                                            <p><?php echo $row36['name'];?></p>
                                                <a href="ref12.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>????????????</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                           
                    </div>
                </div>
            </div>
        </section>

        <footer id="footer"><!--Footer-->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <p class="pull-left">Copyright ?? 2015</p>
                        
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