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
		<article class="article ">
			<h2 class="section-title">О проeкте</h2>
			<!-- /.section-title -->
			<div class="article__img">
				<img src="img/home/home__about.jpg" alt="Мужик с собакой" >
			</div>
			<div class="article__descr">
				<h3 class="article__subtitle">Что нужно для счастья? </h3>
				<!-- /.article__subtitle -->
				<div class="article__text">
					<p>Комфортное жилье по экономной цене. Парк для прогулок и спорта рядом с домом.</p>
					<p>Современная и безопасная инфраструктура для ваших детей. Все, что необходимо - в вашем доме или рядом с ним.</p>
				</div>
				<!-- /.article__text -->
				<a href="#" class="article__btn">
					<span class="article__btn-text">
						<?php include('img/svg/arrow.svg'); ?>
						Читать
						<?php include('img/svg/leaves-w.svg'); ?>
					</span>
				</a>
			</div>
			<!-- /.article__descr -->
		</article>
		<!-- /.article -->

		<article class="article  mt60">
			<h2 class="section-title">РАСПОЛОЖЕНИЕ</h2>
			<!-- /.section-title -->
			<div class="article__img">
				<img src="img/home/home__map.jpg" alt="карта" >
			</div>
			<div class="article__descr">
				<h3 class="article__subtitle">HOME&PARK расположен</h3>
				<!-- /.article__subtitle -->
				<div class="article__text"> 
					<p>в центре Борисполя по адресу ул. Беживка, 14 рядом
					с гимназией «Перспектива».</p>
					<p>Где бы вы ни работали — в Киеве или в Борисполе, вам будет удобно добираться до работы. А вашим детям — в школу или в детский садик, который находится в доме.</p>
					
				</div>
				<a href="#" class="article__btn">
					<span class="article__btn-text">
						<?php include('img/svg/arrow.svg'); ?>
						Читать
						<?php include('img/svg/leaves-w.svg'); ?>
					</span>
				</a>
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
		<article class="article article-slider features-slaider-js">
			<h2 class="section-title">ПРЕИМУЩЕСТВА</h2>
			<!-- /.section-title -->
			<div class="article__img">
				<div class="slider-wrap">
					<img src="img/home/home__featyres.jpg" alt="ПРЕИМУЩЕСТВА" >
					<img src="img/home/home__appartment.jpg" alt="ПРЕИМУЩЕСТВА" >
					<img src="img/home/home-bg.jpg" alt="ПРЕИМУЩЕСТВА" >
				</div>
				<!-- /.sloder-wrap -->
			</div>
			<div class="article__descr">
				<!-- /.article__subtitle -->
				<div class="article__text">
					<p class="article__text-top">Удобные планировки квартир, которые удовлетворяют запросы любой семьи </p>
					<p class="article__text-bottom"><span class="color-accent-block">Выбирая жилье,</span>
					надо учесть много различных факторов. Но главный из них - счастливое и гармоничное жизни вашей семьи</p>
					<span class="slider__count">6</span>
				</div>
				<!-- /.article__text -->
				<a href="#" class="article__btn">
					<span class="article__btn-text">
						<?php include('img/svg/arrow.svg'); ?>
						Читать
						<?php include('img/svg/leaves-w.svg'); ?>
					</span>
				</a>
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

		<article class="article article-slider mt-90 infostructure-slaider-js">
			<h2 class="section-title">ИНФРАСТРУКТУРА</h2>
			<!-- /.section-title -->
			<div class="article__img">
				<div class="slider-wrap">
					<img src="img/home/home__infostructure.jpg" alt="ИНФРАСТРУКТУРА" >
					<img src="img/home/home__infostructure.jpg" alt="ИНФРАСТРУКТУРА" >
					<img src="img/home/home__infostructure.jpg" alt="ИНФРАСТРУКТУРА" >
				</div>
				<!-- /.sloder-wrap -->
			</div>
			<div class="article__descr">
				<!-- /.article__subtitle -->
				<div class="article__text">
					<p class="article__text-top">Собственный парк для вашей семьи Собственный парк для вашей семьи Собственный парк для вашей семьи</p>
					<p class="article__text-bottom"><span class="color-accent-block">Гармоничная инфраструктура</span>
					
					<span class="color-accent">HOME&PARK</span> создана для семейного счастья.</p>
					<span class="slider__count">1</span>
				</div>
				<!-- /.article__text -->
				<a href="#" class="article__btn">
					<span class="article__btn-text">
						<?php include('img/svg/arrow.svg'); ?>
						Читать
						<?php include('img/svg/leaves-w.svg'); ?>
					</span>
				</a>
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

<div class="container">
	<div class="article-block">
		<article class="article article-slider values-slaider-js">
			<h2 class="section-title">Цености</h2>
			<!-- /.section-title -->
			<div class="article__img">
				<div class="slider-wrap">
					<img src="img/home/home__values.jpg" alt="Цености" >
					<img src="img/home/home__values.jpg" alt="Цености" >
					<img src="img/home/home__values.jpg" alt="Цености" >
				</div>
				<!-- /.slider-wrap -->
			</div>
			<div class="article__descr">
				<!-- /.article__subtitle -->
				<div class="article__text">
					<p class="article__text-top"><span class="fw500  block">СЕМЬЯ</span>
					Благодаря вниманию к деталям уют и комфорт 
					вашей семьи обеспечен </p>
					<!-- <p class="article__text-bottom"></p> -->
					<span class="slider__count">6</span>
				</div>
				<!-- /.article__text -->
				<a href="#" class="article__btn">
					<span class="article__btn-text">
						<?php include('img/svg/arrow.svg'); ?>
						Читать
						<?php include('img/svg/leaves-w.svg'); ?>
					</span>
				</a>
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

		<article class="article article-slider mt-90 specifically-slaider-js">
			<h2 class="section-title">Специальные условия</h2>
			<!-- /.section-title -->
			<div class="article__img">
				<div class="slider-wrap">
					<img src="img/home/home__specifically.jpg" alt="Специальные условия" >
					<img src="img/home/home__specifically.jpg" alt="Специальные условия" >
					<img src="img/home/home__specifically.jpg" alt="Специальные условия" >
				</div>
				<!-- /.slider-wrap -->
			</div>
			<div class="article__descr">
				<!-- /.article__subtitle -->
				<div class="article__text">
					<p class="article__text-top">Выгодное кредитование</p>
					<p class="article__text-bottom"><span class="color-accent-block">HOME&PARK предлагает</span>
					сразу несколько программ лояльности для покупателей:</p>
					<span class="slider__count">1</span>
				</div>
				<!-- /.article__text -->
				<a href="#" class="article__btn">
					<span class="article__btn-text">
						<?php include('img/svg/arrow.svg'); ?>
						Читать
						<?php include('img/svg/leaves-w.svg'); ?>
					</span>
				</a>
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
<div class="container">
	<div class="article-block">
		<article class="article">
			<h2 class="section-title">Коммерческая недвижимость</h2>
			<!-- /.section-title -->
			<div class="article__img">
				<img src="img/home/home__realEstate.jpg" alt="Коммерческая недвижимость" >
			</div>
			<div class="article__descr">
				<h3 class="article__subtitle">Киев – мегаполис, который</h3>
				<!-- /.article__subtitle -->
				<div class="article__text">
					активно развивается. Неизменным спросом пользуется коммерческая недвижимость...
				</div>
				<!-- /.article__text -->
				<a href="#" class="article__btn">
					<span class="article__btn-text">
						<?php include('img/svg/arrow.svg'); ?>
						Читать
						<?php include('img/svg/leaves-w.svg'); ?>
					</span>
				</a>
			</div>
			<!-- /.article__descr -->
		</article>
		<!-- /.article -->

		<article class="article mt90">
			<h2 class="section-title">Sfera Living System</h2>
			<!-- /.section-title -->
			<div class="article__img">
				<img src="img/home/home__atmosfera.jpg" alt="Sfera Living System" >
			</div>
			<div class="article__descr">
				<h3 class="article__subtitle">ATMOSFERA</h3>
				<!-- /.article__subtitle -->
				<div class="article__text"> 
					это высокотехнологичная управляющая компания, которая заботится о комфортной и счастливой жизни 
					во всех дома, созданных компанией SAGA Development.
					
				</div>
				<a href="#" class="article__btn">
					<span class="article__btn-text">
						<?php include('img/svg/arrow.svg'); ?>
						Читать
						<?php include('img/svg/leaves-w.svg'); ?>
					</span>
				</a>
				<!-- /.article__text -->
			</div>
			<!-- /.article__descr -->
		</article>
		<!-- /.article -->
		<article class="article">
			<h2 class="section-title">Строительство</h2>
			<!-- /.section-title -->
			<div class="article__img">
				<img src="img/home/home___build.jpg" alt="Строительство" >
			</div>
			<div class="article__descr">
				<h3 class="article__subtitle">Узнайте про ход строительства</h3>
				<!-- /.article__subtitle -->
				<div class="article__text">
					<p>	и этапы выполнения работ.</p>
				</div>
				<!-- /.article__text -->
				<a href="#" class="article__btn">
					<span class="article__btn-text">
						<?php include('img/svg/arrow.svg'); ?>
						Читать
						<?php include('img/svg/leaves-w.svg'); ?>
					</span>
				</a>
			</div>
			<!-- /.article__descr -->
		</article>
		<!-- /.article -->

		<article class="article mt-40">
			<h2 class="section-title">Застройщик</h2>
			<!-- /.section-title -->
			<div class="article__img">
				<img src="img/home/home__builder.jpg" alt="Застройщик" >
			</div>
			<div class="article__descr">
				<h3 class="article__subtitle">Девелопер HOME&PARK –</h3>
				<!-- /.article__subtitle -->
				<div class="article__text"> 
					<p>	компания SAGA Development</p>
				</div>
				<a href="#" class="article__btn">
					<span class="article__btn-text">
						<?php include('img/svg/arrow.svg'); ?>
						Читать
						<?php include('img/svg/leaves-w.svg'); ?>
					</span>
				</a>
				<!-- /.article__text -->
			</div>
			<!-- /.article__descr -->
		</article>
		<!-- /.article -->
	</div>
	<!-- /.article-block -->
</div>
<!-- /.container -->
<div class="container">
	<div class="logo-slaider-block">
		<h2 class="section-title pb50">Другие проекты застройщика</h2>
		<!-- /.section-title -->
		<div class="logo-slaider-btn logo-slaider-btn-left">
			<?php include('img/svg/arrow.svg'); ?>
		</div>
		<!-- /.logo-slaider-btn -->
		<div class="logo-slaider-wrap">
			<div class="logo-slaider-items">
				<a href="#" class="logo-link">
					<?php include('img/logos/chicago.svg'); ?>
				</a>
			</div>
			<!-- /.logo-slaider-items -->
			<div class="logo-slaider-items">
				<a href="#" class="logo-link">
					<?php include('img/logos/kandinsky.svg'); ?>
				</a>
			</div>
			<!-- /.logo-slaider-items -->
			<div class="logo-slaider-items">
				<a href="#" class="logo-link">
					<?php include('img/logos/sf.svg'); ?>
				</a>
			</div>
			<!-- /.logo-slaider-items -->
			<div class="logo-slaider-items">
				<a href="#" class="logo-link">
					<?php include('img/logos/resident.svg'); ?>
				</a>
			</div>
			<!-- /.logo-slaider-items -->
			<div class="logo-slaider-items">
				<a href="#" class="logo-link">
					<?php include('img/logos/nework.svg'); ?>
				</a>
			</div>
			<!-- /.logo-slaider-items -->
			<div class="logo-slaider-items">
				<a href="#" class="logo-link">
					<?php include('img/logos/bristol.svg'); ?>
				</a>
			</div>
			<!-- /.logo-slaider-items -->
		</div>
		<!-- /.logo-slaider-wrap -->
		<div class="logo-slaider-btn logo-slaider-btn-right">
			<?php include('img/svg/arrow.svg'); ?>
		</div>
		<!-- /.logo-slaider-btn -->

	</div>
	<!-- /.logo-slaider-block -->
</div>
<!-- /.container -->
<div class="sectionHome__banner sectionHome__banner-day-in">
	<div class="container">
		<div class="sectionHome__banner-wrap">
			<h2 class='banner__title t25p'>День в Home & park</h2>
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
<div class="container">
	<div class="tabs">
		<ul class="tabs__header">
			<li data-page="0">Наши контактные данные</li>
			<li class="active-li" data-page="1">Заказать звонок</li>
			<li data-page="2">Форма обратной связи</li>
		</ul>
		<div class="tabs__content">
			<div class="tabs__inner">
				конткнт 1
			</div>
			<!-- /.tabs__inner -->
			<div class="tabs__inner active-js">
				<h3 class="section-title leaves-green">Заказать телефонный звонок</h3>

				<form class="mainForm" onsubmit="ajax_form(this)" id="mainForm">
					<div class="mainForm-wrap requaired">
						<span class="contact-form-input__text" data-defaultMessage="Имя" data-errorMessage="Имя не заполнено">Имя</span>
						<input placeholder="" name="name" type="text" class="mainForm__input">
					</div>
					<div class="mainForm-wrap requaired">
						<span class="contact-form-input__text" data-defaultMessage="Телефон" data-errorMessage="Телефон не заполнен">Телефон</span>
						<input placeholder="" name="tel" type="text" class="mainForm__input">
					</div>
					<div class="mainForm-wrap">
						<span class="contact-form-input__text" data-defaultMessage="Сообщение" data-errorMessage="Заполните сообщение">Сообщение</span>
						<input placeholder="" name="message" type="text" class="mainForm__input">
					</div>
						<div class="btn-fill">
							Отправить
						</div>
					<!--  </contact-form-submit> -->
				</form>
			</div>
			<!-- /.tabs__inner -->
			<div class="tabs__inner">
				конткнт 3
			</div>
			<!-- /.tabs__inner -->
		</div>
		<!-- /.tabs__content -->
	</div>
	<!-- /.tabs -->
</div>
<!-- /.container -->



	<footer class="sectionHome__footer">
		<div class="container">
			<div class="row">
				<ul class="footer__menu">
					<li><a href="#">Про проект</a></li>
					<li><a href="#">Выбрать квартиру</a></li>
					<li><a href="#">Ход строительства</a></li>
					<li><a href="#">Отдел продаж</a></li>
				</ul>
				<!-- /.footer__menu -->
				<div class="footer-wrap">
					<a href="tel:+380635781801" class="tellink">(044) 222-35-47</a>
					 <div class="btn btn-zindex">
					 	<?php include('img/svg/phone-icon.svg'); ?>
					 	Заказать звонок
					 </div>
				</div>
				<!-- /.footer-wrap -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</footer>
	<!-- /.sectionHome__footer -->

<script src="js/scripts.min.js"></script>

</body>
</html>
