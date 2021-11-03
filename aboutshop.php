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
    <title>Contact | Techno-shop</title>
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
                                    <li><a href="#">О магазине</a></li>
                                    <li><a href="contact.php">Контакты</a></li>
                                    </ul>                           	
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    			    		    			   			
					<h2 class="title text-center">О магазине</h2> 					
					<div class="col-xs-12 col-md-8">
					 <p>Магазин с большим опытом Teхношоп онлайн с 2006 года</p>
						<p>Все это время мы постоянно улучшали качество работы и теперь нашим клиентам нравится, что:</p>
                        </br>
						<p>Все товары в наличии на складе в Москве</p>
						<p>Быстро подтверждаем и упаковываем заказы</p>
						<p>Доставляем по всей России</p>
						<p>Возможна оплата без риска - при получении посылки</p>
						<p>Тысячи пунктов выдачи заказов, доставка курьером или почтой</p>
						<p>50 000 заказов в месяц</p>
						<p>Работаем без выходных</p> </br>
						<p>Мы выполняем большое количество заказов ежедневно. Сегодня в штате компании 100 человек,</p> 
						<p>Дружная команда профессионалов

						<p>Чтобы заказы выполнялись на отлично и клиенты были довольны, у нас работают: операторы        
						<p>контакт-центра, упаковщики заказов, курьеры, логисты, программисты, бухгалтеры, дизайнеры,</p>
						<p>маркетологи и аналитики. Коллектив Техношоп похож на большую дружную семью - мы работаем и 
						<p>отдыхаем вместе.
						<p>Заказывайте с уверенностью

						<p>Первая покупка в надежном магазине
						<p>Если вы пока не покупали ничего в интернете, с Техношоп у вас не возникнет проблем. Все пройдет
						гладко! Мы сделали процесс покупки очень простым. Добавляйте интересные товары в корзинку один</p> 
						<p>за другим и оформляйте заказ. Если что-то не получается, звоните на бесплатный федеральный </p>
						<p>номер - обязательно поможем.</p>
						<p>Мы будем очень рады знакомству. Сделайте ваш первый заказ сегодня!</p></br>	
				</div>	
				<a href="index.php"><img class="col-xs-6 col-md-4" src="images/home/shipping.jpg"></a>		 		
			</div>    	 		    				
    	</div>	
    </div><!--/#contact-page-->
	
	<Footer>
		
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
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/gmaps.js"></script>
	<script src="js/contact.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>