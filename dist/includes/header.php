<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<!-- <base href="/"> -->

	<title>Home&Park</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
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
		    	   		<button class="language-btn"></button>
						<a class="lang--active" href="/">Рус</a>
						<ul class="lang_dropdown">
							<li class="lang__item"><a href="/">Укр</a></li>
							<li class="lang__item"><a href="/">En</a></li>
						</ul>
		    	</div>
				<a href="/dist/web-camera.php" class="webcamera btn ">
					<?php include('img/svg/webCamera-icon.svg'); ?>
					<span class="tablet--hidden-1200">Камера</span>
				</a>
				<!-- /.webcamera -->
				<a href="/dist/gallery.php" class="gallery btn-empty">
					<div class="wrap-icon">
						<?php include('img/svg/picture-icon.svg'); ?>
					</div>
					<span class="gallery__text tablet--hidden-1050">Галерея</span>
				</a>
				<!-- /.gallery -->

		    </div>
		    <!-- /.left-top-menu -->
			<a href="/dist/index.php"><div class="logo"></div></a>
			<div class="top-menu-right">
				<a href="#popup-form" data-modal-class="bg-modal--white" class="email popup-with-form-js">
					<?php include('img/svg/email-icon.svg'); ?>
				</a>
				<!-- /.email -->
				<a href="tel:+380635781801" class="tellink tablet--hidden-1050">(044) 222-35-47</a>
				<a href="tel:+380635781801" class="phone">
					<?php include('img/svg/phone-icon.svg'); ?>
				</a>
				<!-- /.phone -->
				<a href="#popup-form" class="btn btn--header tablet--hidden-868 popup-with-form-js" data-modal-class="bg-modal--white">
					<?php include('img/svg/email-icon.svg'); ?>
					<span>Заказать звонок</span>
				</a>
				<!-- /.btn -->
				<button class="menu-icon">
					<?php include('img/svg/menu-icon.svg'); ?>
				</button>
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
	                    <span class="menu__title">Главная</span>
	                    <ul class="sub-menu">
                        	<li><a href="/dist/news.php">Новости</a></li>
                        	<li><a href="/dist/gallery.php">Галерея</a></li>
	                    </ul>
	                </li>
	                <li class="has-children">
	                    <span class="menu__title">О проекте</span>
	                    <ul class="sub-menu">
                        	<li><a href="/dist/about.php">О Home & Park</a></li>
                        	<li><a href="/dist/features.php">Преимущества</a></li>
                        	<li><a href="/dist/values-page.php">Ценности</a></li>
                        	<li><a href="/dist/infostructure.php">Инфраструктура</a></li>
	                    </ul>
	                </li>
	                <li class="has-children">
	                    <span class="menu__title">Выбрать квартиру</span>
	                    <ul class="sub-menu">
                        	<li><a href="/dist/check-floor.php">Выбрать по этажу</a></li>
                        	<li><a href="/dist/filter.php">Выбрать по параметрам</a></li>
                        	<li><a href="/dist/floor.php">Однокомнатные</a></li>
                        	<li><a href="/dist/floor.php">Двухкомнатные</a></li>
                        	<li><a href="/dist/floor.php">Трехкомнатные</a></li>

	                    </ul>
	                </li>
	                <li class="has-children">
	                    <span class="menu__title">Строительство</span>
	                    <ul class="sub-menu">
	                        <li><a href="/dist/developer.php">Застройщик</a></li>
	                        <li><a href="/dist/stage-building.php">Ход строительства</a></li>
	                        <li><a href="/dist/web-camera.php">Веб-камера</a></li>
	                        <li><a href="/dist/documentation.php">Документация</a></li>
	                        <li><a href="#">Генплан</a></li>
	                    </ul>
	                </li>
	                <li class="has-children">
	                    <span class="menu__title">Контакты</span>
	                    <ul class="sub-menu">
                        	<li><a href="/dist/location.php">Расположение</a></li>
                        	<li><a href="/dist/contacts.php">Связь</a></li>
	                    </ul>
	                </li>
	                <li class="menu-number">
	                	<a href="tel:+380635781801" class="tellink">(044) 222-35-47</a>
	                	 <a href="#popup-form" class="btn btn--header popup-with-form-js" data-modal-class="bg-modal--white">
	                	 	<?php include('img/svg/email-icon.svg'); ?>
	                	 	<span>Заказать звонок</span>
	                	 </a>
	                	 <!-- /.btn -->
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

<form class="mainForm white-popup-block mfp-hide" id="popup-form">
	<h4 class="main-form__title section-title">Заказать звонок<button class="mfp-close" title="Закрыть"></button></h4>
	<div class="mainForm-wrap requaired">
		<span class="mainForm__text" data-defaultMessage="Имя:" data-errorMessage="Имя не заполнено">
			<span class="wrap-icon">
				<?php include('img/svg/user-icon.svg'); ?>
			</span>
		Имя:
		</span>
		<input name="name" type="text" class="mainForm__input mainForm__input-requaired">
	</div>
	<!--  </mainForm-wrap> -->
	<div class="mainForm-wrap requaired">
		<span class="mainForm__text position--left" data-defaultMessage="Ваш телефон:" data-errorMessage="Телефон не заполнен"></span>
		<input name="tel" type="text" placeholder="Ваш телефон:" class="mainForm__input mainForm__input-requaired inputtelmask">
	</div>
	<!--  </mainForm-wrap> -->
	<button class="btn-fill sand-form">
		Отправить
	</button>
	<!--  </contact-form-submit> -->
</form>
<!-- /form -->