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
    <title>Cart | Technoshop</title>
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
								<li><a href="index.php">Главная</a></li>
                                    <li><a href="aboutshop.php">О магазине</a></li>
                                    <li><a href="contact.php">Контакты</a></li>
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
							<td class="image">Название</td>
							<td class="description"></td>
							<td class="price">Цена</td>
							<td class="quantity">Количество</td>
							<td></td>
						</tr>
					</thead>
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
					<?php 
						$quantity = $_POST['quantity'];
                    	$country = $_POST['country'];
                    	$city = $_POST['city'];
                    	$zip = $_POST['zip'];
                    	$name = 'HIBERG RFT-65D NFX';
                    	$price = '43999';


					    $db_host = "localhost";
					    $db_user = "root"; // Логин БД
					    $db_password = "root"; // Пароль БД
					    $db_table = "practice"; // Имя Таблицы БД
                        $mysqli = new mysqli("localhost", "root", "root", "practice");                       
                    	$query1 = "INSERT INTO zakaz (quantity,tel,city,zip,name,price) VALUES ('$quantity', '$country','$city','$zip','$name',$price)";
                    	$mysqli->query($query1);	                   
                    ?>  
					<tbody>
						<tr> <form method="POST"> 
							<td class="cart_product">
								<a href=""><img src="images/home/ref12.jpg" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $row36['name'];?></a></h4>
							</td>
							<td class="cart_price">
								<p><?php echo $row36['price'];?>₽</p>
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
								<label>Телефон:</label>
								<input type="text" name="country">
							</li>
							</li>
							<li class="single_field zip-field">
								<label>Город:</label>
								<input type="text" name="city">
							</li>
							
							</li>
							<li class="single_field zip-field">
								<label>Почтовый индекс:</label>
								<input type="text" 	name="zip">
							</li>
						</ul>
						<button class="btn btn-default check_out" type="submit">Оформить заказ</button>
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
					<p class="pull-left">Copyright © 2020 Techno-shop Inc. All rights reserved.</p>
					<p class="pull-right">Designed by VLAMER</p>
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