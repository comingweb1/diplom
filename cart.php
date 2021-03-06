<?php session_start(); 
require('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
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
								<li><a href=""><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
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
								  <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> ??????????????</a></li>
                                    <li><a href=""><i class="fa fa-user"></i> ??????????????</a></li>
                                    <li><a href="login.php"><i class="fa fa-lock"></i> ????????</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
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
					            </ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">????????????????</td>
							<td class="description"></td>
							<td class="price">????????</td>
							<td class="quantity">????????????????????</td>
							<td></td>
						</tr>
					</thead>

					 <?php
                        $query = "SELECT * FROM `good`";
                        $res = mysqli_query($connection,$query);
                        $count = mysqli_num_rows($res);
                         if ($count) {
                        $row1 = mysqli_fetch_array($res);                            
                      }                                         
                    ?>

					<?php 
						$quantity = $_POST['quantity'];
                    	$country = $_POST['country'];
                    	$city = $_POST['city'];
                    	$zip = $_POST['zip'];
                    	$name = 'XIAOMI MI8';
                    	$price = '11999';

					    $db_host = "localhost";
					    $db_user = "root"; // ?????????? ????
					    $db_password = "root"; // ???????????? ????
					    $db_table = "practice"; // ?????? ?????????????? ????                         
                         $mysqli = new mysqli("localhost", "root", "root", "practice");                          
                    	$query1 = "INSERT INTO zakaz (quantity,country,city,zip,name,price) VALUES ('$quantity', '$country','$city','$zip','$name',$price)";
                    	$mysqli->query($query1);                
                    ?>                   
					<tbody>
						<tr> <form method="POST"> 
							<td class="cart_product">
								<a href=""><img src="images/home/product1.jpg" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $row1['name'];?></a></h4>
							</td>
							<td class="cart_price">
								<p><?php echo $row1['price'];?>???</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
								</div>
							</td>							
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-8">
					<div class="chose_area">						
						<ul class="user_info">
							<li class="single_field">
								<li class="single_field zip-field">
								<label>????????????:</label>
								<input type="text" name="country">
							</li>
							</li>
							<li class="single_field zip-field">
								<label>??????????:</label>
								<input type="text" name="city">
							</li>
							
							</li>
							<li class="single_field zip-field">
								<label>???????????????? ????????????:</label>
								<input type="text" 	name="zip">
							</li>
						</ul>
						<button class="btn btn-default check_out" type="submit">???????????????? ??????????</button>
					</div>
				</div>				
			</div>
		</div>
		</form>
	</section><!--/#do_action-->

	<footer id="footer"><!--Footer-->		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright ?? 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	



    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>