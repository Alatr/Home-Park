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

<div class="section-main">
	<div class="main-slider">
		<div class="main-slider-img"></div>
		<div class="main-slider-img"></div>
	</div>
	<!-- /.main-slider -->
	<div class="slaierNav">
		<h2 class="slaierNav__title">Все для семейного счастья</h2>

		<div class="arrows-block">
			<div class="btn-slider-prev"><?php include('img/svg/arrow.svg'); ?></div>
			<div class="btn-slider-next"><?php include('img/svg/arrow.svg'); ?></div>
		</div>
		
	</div>
	<!-- /.slaierNav -->
		}
	<div class="section-main-down">
		<?php include('img/svg/arrow.svg'); ?>
	</div>
</div>
<!-- /.section-main -->

<div class="container">
	<div class="article-block">
		<article class="article">
			<h2 class="section-title">О проeкте</h2>
			<!-- /.section-title -->
			<div class="article__img">
				<img src="img/home/home-bg.jpg" alt="Мужик с собакой" >
			</div>
			<div class="article__descr">
				<h3 class="article__subtitle">Что нужно для счастья? </h3>
				<!-- /.article__subtitle -->
				<div class="article__text">
					<p>Комфортное жилье по экономной цене. Парк для прогулок и спорта рядом с домом.</p>
					<p>Современная и безопасная инфраструктура для ваших детей. Все, что необходимо - в вашем доме или рядом с ним.</p>
				</div>
				<!-- /.article__text -->
				<div class="article__btn">
					<span class="article__btn-text">
						<?php include('img/svg/arrow.svg'); ?>
						Читать
						<?php include('img/svg/leaves-w.svg'); ?>
					</span>
				</div>
			</div>
			<!-- /.article__descr -->
		</article>
		<!-- /.article -->

		<article class="article article-mt">
			<h2 class="section-title">РАСПОЛОЖЕНИЕ</h2>
			<!-- /.section-title -->
			<div class="article__img">
				<img src="img/home/home__about.jpg" alt="Мужик с собакой" >
			</div>
			<div class="article__descr">
				<h3 class="article__subtitle">HOME&PARK расположен</h3>
				<!-- /.article__subtitle -->
				<div class="article__text"> 
					<p>в центре Борисполя по адресу ул. Беживка, 14 рядом
					с гимназией «Перспектива».</p>
					<p>Где бы вы ни работали — в Киеве или в Борисполе, вам будет удобно добираться до работы. А вашим детям — в школу или в детский садик, который находится в доме.</p>
					
				</div>
				<div class="article__btn">
					<span class="article__btn-text">
						<?php include('img/svg/arrow.svg'); ?>
						Читать
						<?php include('img/svg/leaves-w.svg'); ?>
					</span>
				</div>
				<!-- /.article__text -->
			</div>
			<!-- /.article__descr -->
		</article>
		<!-- /.article -->

	</div>
	<!-- /.article-block -->
</div>
<!-- /.container -->

<div class="sectionHome__banner sectionHome__banner-plan">
	<h2 class='banner__title'>ГенПлан</h2>
</div>
<!-- /.sectionHome__plan -->
<div class="container">
	<div class="article-block">
		<article class="article article-slider">
			<h2 class="section-title">ПРЕИМУЩЕСТВА</h2>
			<!-- /.section-title -->
			<div class="article__img">
				<img src="img/home/home__featyres.jpg" alt="ПРЕИМУЩЕСТВА" >
			</div>
			<div class="article__descr">
				<!-- /.article__subtitle -->
				<div class="article__text">
					<p class="article__text-top">Удобные планировки квартир, которые удовлетворяют запросы любой семьи </p>
					<p class="article__text-bottom"><span class="color-accent-block">Выбирая жилье,</span>
					надо учесть много различных факторов. Но главный из них - счастливое и гармоничное жизни вашей семьи</p>
				</div>
				<!-- /.article__text -->
				<div class="article__btn">
					<span class="article__btn-text">
						<?php include('img/svg/arrow.svg'); ?>
						Читать
						<?php include('img/svg/leaves-w.svg'); ?>
					</span>
				</div>
				<div class="article-slider__nav">
					<div class="article-slider__nav-left">
						<?php include('img/svg/arrow.svg'); ?>
					</div>
					<!-- /.article-slider__nav-left -->
					<div class="article-slider__nav-right">
						<?php include('img/svg/arrow.svg'); ?>
					</div>
					<!-- /.article-slider__nav-right -->
				</div>
				<!-- /.article-slider__nav -->
			</div>
			<!-- /.article__descr -->
		</article>
		<!-- /.article -->


	</div>
	<!-- /.article-block -->
</div>
<!-- /.container -->
<div class="sectionHome__banner sectionHome__banner-gallery">
	<h2 class='banner__title'>галерея</h2>
</div>
<!-- /.sectionHome__gallery -->
<div class="sectionHome__banner sectionHome__banner-apartment">
	<div class="container">
		<div class="sectionHome__banner-wrap">
			<h2 class='banner__title'>Квартиры</h2>
			<div class="bannerDescr">
				<div class="bannerDescr__text bannerDescr__text-width">Выберите квартиру вашей мечты уже сейчас!</div>
				<div class="btn bannerDescr__btn">
					<?php include('img/svg/key-icon.svg'); ?>
					Выбрать квартиру
				</div>
			</div>
		</div>
		<!-- /.sectionHome__banner-apartment-wrap -->
	</div>
	<!-- /.container -->
</div>
<!-- /.sectionHome__apartment -->
<div class="sectionHome__banner sectionHome__banner-day-in">
	<div class="container">
		<div class="sectionHome__banner-wrap">
			<h2 class='banner__title'>День в Home & park</h2>
			<div class="bannerDescr">
				<div class="bannerDescr__text bannerDescr__text-width">Посмотрите, как проходит наполненный счастьем день в HOME & PARK!</div>
				<div class="btn bannerDescr__btn">
					Смотреть
				</div>
			</div>
		</div>
		<!-- /.sectionHome__banner-wrap -->
	</div>
	<!-- /.container -->
</div>

<script src="js/scripts.min.js"></script>

</body>
</html>
