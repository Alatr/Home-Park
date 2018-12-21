<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<!-- <base href="/"> -->

	<title>Home&Park</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Template Basic Images Start -->
	<meta property="og:image" content="path/to/image.jpg">
	<!-- <link rel="icon" href="img/favicon/favicon.ico"> -->
	<!-- <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png"> -->
	<!-- Template Basic Images End -->
	
	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#000">
	<!-- Custom Browsers Color End -->

	<link rel="stylesheet" href="css/main.min.css">

</head>

<body>

<!-- <div class="debug">
	<div>
		<div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>
</div> -->

<div class="header-section">
	<div class="container">
		<header class="header">
		    <div class="top-menu-left">
		    	<div class="language">
		    	    <div class="language-btn"></div>
		    	    <ul class="language__list">
		    	    	<li class="lang__item lang_item_active"><a href="#">Укр</a></li>
		    	    	<li class="lang__item"><a href="#">Рус</a></li>
		    	    </ul>
		    	    <!-- <select name="lang">
		    	    	<option value="ua">Укр</option>
		    	    	<option value="rus">Рус</option>
		    	    </select> -->
		    	</div>
		    			<a href="#" class="webcamera btn">
		    				<?php include('img/svg/webCamera-icon.svg'); ?>
		    				Камера
		    			</a>
		    			<!-- /.webcamera -->
		    			<a href="#" class="gallery btn-empty">
		    				<div class="wrap-icon">
		    					<?php include('img/svg/picture-icon.svg'); ?>
		    				</div>
		    				<span class="gallery__text">Галерея</span>
		    			</a>
		    			<!-- /.gallery -->
		    </div>
		    <!-- /.left-top-menu -->
			<a href="#"><div class="logo"></div></a>
			<div class="top-menu-right">
				<a href="tel:+380635781801" class="tellink">(044) 222-35-47</a>
				 <div class="btn">
				 	<?php include('img/svg/phone-icon.svg'); ?>
				 	Заказать звонок
				 </div>
				 <!-- /.btn -->
				 <div class="menu-icon">
					<?php include('img/svg/menu-icon.svg'); ?>
				</div>
			</div>
			<!-- /.right-top-menu -->
		</header>
		<!-- /.header -->
	</div>
	<!-- /.container -->
</div>
<!-- /.section-header -->

<div class="menu-section">
	<div class="menu-block-top">
		<h2 class="menu__word">Меню</h2>
	</div>
	<!-- /.menu-block-top -->
	<div class="menu-block-bottom">
		<div class="container">
			<div class="menu-wrap">
				<ul class="header-menu">
	                <li class="has-children">
	                    <a href="#" class="menu__title">Главная</a>
	                    <ul class="sub-menu">
                        	<li><a href="#">Новости</a></li>
                        	<li><a href="#">Галерея</a></li>
	                    </ul>
	                </li>
	                <li class="has-children">
	                    <a href="#" class="menu__title">О проекте</a>
	                    <ul class="sub-menu">
                        	<li><a href="#">О Home & Park</a></li>
                        	<li><a href="#">Преимущества</a></li>
                        	<li><a href="#">Ценности</a></li>
                        	<li><a href="#">Инфраструктура</a></li>
	                    </ul>
	                </li>
	                <li class="has-children">
	                    <a href="#" class="menu__title">Выбрать квартиру</a>
	                    <ul class="sub-menu">
                        	<li><a href="#">Выбрать по этажу</a></li>
                        	<li><a href="#">Выбрать по параметрам</a></li>
                        	<li><a href="#">Однокомнатные</a></li>
                        	<li><a href="#">Двухкомнатные</a></li>
                        	<li><a href="#">Трехкомнатные</a></li>
	                    </ul>
	                </li>
	                <li class="has-children">
	                    <a href="#" class="menu__title">Строительство</a>
	                    <ul class="sub-menu">
	                        <li><a href="#">Застройщик</a></li>
	                        <li><a href="#">Ход строительства</a></li>
	                        <li><a href="#">Веб-камера</a></li>
	                        <li><a href="#">Документация</a></li>
	                        <li><a href="#">Генплан</a></li>
	                    </ul>
	                </li>
	                <li class="has-children">
	                    <a href="#" class="menu__title">Конткты</a>
	                    <ul class="sub-menu">
                        	<li><a href="../contacts">Расположение</a></li>
                        	<li><a href="#">Связь</a></li>
	                    </ul>
	                </li>
				</ul>
			</div>
			<!-- /.menu-wrap -->
		</div>
		<!-- /.container -->
	</div>
	<!-- /.menu-block-bottom -->
</div>
<!-- /.menu-section -->