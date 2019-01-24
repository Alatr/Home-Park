<?php include('includes/header.php'); ?>
<div class="section-preview section-preview-floor">
	<div class="container">
		<h1 class='section-preview__title'>Выбор квартиры</h1>
		
		<ul class="breadcrumb">
		  <li><a href="/dist/index.php">Главная</a></li>
		  <li>Выбор квартиры</li>
		</ul>
	</div>
	<!-- /.container -->
</div>
<!-- /.sectionHome__gallery -->

<div class="container">
	<div class="floor-block">
		<div class="floor-block__header">
			<div class="button-wrap">
				<a class="appartment-btn btn-green-border arrow--size" href="/dist/check-floor.php">
				<?php include('img/svg/arrow.svg'); ?>
				Выбрать этаж</a>
				<a class="appartment-btn btn-fill filter--margin" href="/dist/filter.php">
				<?php include('img/svg/filter-icon.svg'); ?>
				Фильтр</a>
			</div>
			<!-- /.batton-wrap -->
			<div class="floor-nav block--padding">
				<div class="floor-nav__button arrow--size">
					<?php include('img/svg/arrow.svg'); ?>
				</div>
				<span class="floor-nav__current">17 этаж</span>
				<div class="floor-nav__button arrow--size arrow--next">
					<?php include('img/svg/arrow.svg'); ?>
				</div>
				<ul class="floor-nav__numbers animated">
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">6</a></li>
					<li><a href="#">7</a></li>
					<li><a href="#">8</a></li>
					<li><a href="#">9</a></li>
					<li><a href="#">10</a></li>
					<li><a href="#">11</a></li>
					<li><a href="#">12</a></li>
					<li><a href="#">13</a></li>
					<li><a href="#">14</a></li>
					<li><a href="#">15</a></li>
					<li><a href="#">16</a></li>
					<li><a href="#">17</a></li>
					<li><a href="#">18</a></li>
				</ul>
			</div>
			<!-- /.slide-button -->

			<div class="compass-img block--width">
				<img src="img/appartment/icon-compass.png" alt="" title="">
			</div>
		</div>
		<!-- /.floor-block__header -->
		<div class="indicator-block">
			<div class="indicator__items before--red">
				1-комната
			</div>
			<!-- /.indicator__items -->
			<div class="indicator__items before--green">
				2-комнаты
			</div>
			<!-- /.indicator__items -->
			<div class="indicator__items before--blue">
				3-комнаты
			</div>
			<!-- /.indicator__items -->
		</div>
		<!-- /.indicator-block -->
		<div class="floor-block__img">
			<svg version="1.1" id="floor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 viewBox="0 0 828 238" style="enable-background:new 0 0 828 238;" xml:space="preserve">
				<style type="text/css">
					.plan-appartment{opacity:0.6;}
				</style>
				<image style="overflow:visible;" width="100%" height="100%" xlink:href="img/floor/full-plan.png"></image>


				<a class="plan-floor-appartment-link" xlink:href="/dist/appartment.php" data-number="380" data-square="75.95" data-livsquare="39.61" data-flats="2">
					<polygon class="plan-appartment color--red" points="4.5,5.5 4.5,232.5 116.5,232.5 116.5,125.5 124.5,125.5 124.5,92.5 140.5,92.5 140.5,5.5 "/>
				</a>


				<a class="plan-floor-appartment-link" xlink:href="/dist/appartment.php" data-number="3" data-square="7.95" data-livsquare="3.61" data-flats="7">
					<polygon class="plan-appartment color--blue" points="222,233 222,135 169,135 169,125 158,125 158,93 142,93 142,6 278,6 278,233 "/>
				</a>


				<a class="plan-floor-appartment-link" xlink:href="/dist/appartment.php" data-number="15" data-square="15.95" data-livsquare="15.61" data-flats="15">
					<polygon class="plan-appartment color--gray" points="391,233 391,125 399,125 399,94 414,94 414,6 280,6 280,233 "/>
				</a>


				<a class="plan-floor-appartment-link color--gray" xlink:href="/dist/appartment.php" data-number="38" data-square="71.95" data-livsquare="39.61" data-flats="2">
					<polygon class="plan-appartment color--blue" points="416,6 416,93 431,93 431,124 443,124 443,134 495,134 495,233 552,233 552,6 "/>
				</a>


				<a class="plan-floor-appartment-link" xlink:href="/dist/appartment.php" data-number="22" data-square="22.95" data-livsquare="22.61" data-flats="22">
					<polygon class="plan-appartment color--green" points="556,233 556,6 690,6 690,92 674,92 674,124 667,124 667,233 "/>
				</a>


				<a class="plan-floor-appartment-link" xlink:href="/dist/appartment.php" data-number="77" data-square="77.95" data-livsquare="77.61" data-flats="77">
					<polygon class="plan-appartment color--blue" points="824,233 824,6 690,6 690,92 706,92 706,124 717,124 717,134 769,134 769,233 "/>
				</a>
			</svg>
		</div>
		<!-- /.floor-block__img -->
		<div class="appartment-info">
			<div class="logo-img">
				<?php include('img/logo-h.svg'); ?>
			</div>
			<table class="appartment-info__table">
				<tbody>
					<tr>
						<td>Загальна площа:</td>
						<td class="appartment-table__square">50.74 м<sub>2</sub></td>
					</tr>
					<tr>
						<td>Житлова площа:</td>
						<td class="appartment-table__livsquare">13.4 м<sub>2</sub></td>
					</tr>
					<tr>
						<td>Кількість кімнат:</td>
						<td class="appartment-table__rooms">3</td>
					</tr>
					<tr>
						<td>Поверх:</td>
						<td class="appartment-table__floor">17</td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- /.appartment-info -->
	</div>
	<!-- /.floor-block -->
</div>
<!-- /.container -->



<?php include('includes/footer.php'); ?>
	
	<script src="js/scripts.min.js"></script>
	<script src="js/floor.js"></script>

	</body>
</html>