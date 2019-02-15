<?php include('includes/header.php'); ?>
<div class="section-preview section-preview-location">
	<div class="container">
		<h1 class='section-preview__title'>Расположение</h1>
		
		<ul class="breadcrumb">
		  <li><a href="/dist/index.php">Главная</a></li>
		  <li>Расположение</li>
		</ul>
	</div>
	<!-- /.container -->
</div>
<!-- /.sectionHome__gallery -->


<div class="container">
	<div class="location-block">
		<div class="location-items">
			<div class="location-item">
				<?php include('img/svg/location/location-icon-map.svg'); ?>
				<p class="location-item__text">HOME&PARK расположен в центре Борисполя по адресу <span class="fw700">ул. Бежовка,14 рядом с гимназией «Перспектива».</span></p>
				<!-- /.location-item__text -->
			</div>
			<!-- /.location-item -->
			<div class="location-item width--max">
				<?php include('img/svg/location/location-icon-car.svg'); ?>
				<p class="location-item__text">Где бы вы ни работали — в Киеве или в Борисполе, вам будет удобно добираться до работы. А вашим детям — в школу или в детский садик, который находится в доме.</p>
				<!-- /.location-item__text -->
			</div>
			<!-- /.location-item -->
			<div class="location-item flex--width">
				<?php include('img/svg/location/location-icon-tree.svg'); ?>
				<p class="location-item__text">Жилой комплекс окружен собственным парком, который обустроен детской и спортивной площадками, местами для отдыха, беговыми и прогулочными маршрутами.</p>
				<!-- /.location-item__text -->
			</div>
			<!-- /.location-item -->
		</div>
		<!-- /.location-items -->
		<div class="section-main-down">
		<?php include('img/svg/arrow.svg'); ?>
	</div>
	</div>
	<!-- /.location-block -->
</div>
<!-- /.container -->

<div class="map-block">
	<div class="map-aside">
		<h2 class="map-aside__title">Инфраструктура</h2>
		<ul class="map-aside__nav">
			<li data-category='pharmacy' class='mark-item'>
				<button>
				<?php include('img/svg/location/location-icon-pharm-cross.svg'); ?>
				Аптеки</button>
			</li>
			<li data-category='hospital' class='mark-item'>
				<button>
				<?php include('img/svg/location/location-icon-pharm.svg'); ?>
				Медицинские учреждения</button>
			</li>
			<li data-category='gym' class='mark-item'>
				<button>
				<?php include('img/svg/location/location-icon-gym.svg'); ?>
				Спортивные комплексы</button>
			</li>
			<li data-category='graduation' class='mark-item'>
				<button>
				<?php include('img/svg/location/location-icon-graduation-hat.svg'); ?>
				Университеты</button>
			</li>
			<li data-category='school' class='mark-item'>
				<button>
				<?php include('img/svg/location/location-icon-book.svg'); ?>
				Школы</button>
			</li>
			<li data-category='garden' class='mark-item'>
				<button>
				<?php include('img/svg/location/location-icon-coub.svg'); ?>
				Детские садики</button>
			</li>
			<li data-category='mall' class='mark-item active-map-item'>
				<button>
				<?php include('img/svg/location/location-icon-shop-bag.svg'); ?>
				Торгово-развлекательные комплексы</button>
			</li>
			<li data-category='supermarket' class='mark-item'>
				<button>
				<?php include('img/svg/location/location-icon-shop-cart.svg'); ?>
				Продуктовые магазины</button>
			</li>
		</ul>
		<!-- /.map-nav -->
	</div>
	<!-- /.map__aside -->
	<div class="main-map">
		<div id="map"></div>
		<!-- /#map -->
	</div>
	<!-- /.main-map -->
</div>
<!-- /.map-block AIzaSyC3v4tMpbXGrrr2GY00co Dwi9YeP4aqyA4-->


<?php include('includes/footer.php'); ?>

	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3v4tMpbXGrrr2GY00coDwi9YeP4aqyA4"></script>

	<script src="js/map.js"></script>
	</body>
</html>