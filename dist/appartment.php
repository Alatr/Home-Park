<?php include('includes/header.php'); ?>
<div class="section-preview section-preview-appartment">
	<div class="container">
		<h1 class='section-preview__title'>Квартира 3А-120</h1>
		
		<ul class="breadcrumb">
		  <li><a href="/dist/index.php">Главная</a></li>
		  <li><a href="/dist/check-floor.php">Выбор этажа</a></li>
		  <li><a href="/dist/floor.php">Выбор квартиры</a></li>
		  <li>Квартира 3А-120</li>
		</ul>
	</div>
	<!-- /.container -->
</div>
<!-- /.sectionHome__gallery -->

<div class="container">
	<div class="appartment-block">
		<div class="appartment-block__left">
			<div class="button-wrap">
				<a class="appartment-btn btn-fill filter--margin" href="/dist/filter.php">
				<?php include('img/svg/filter-icon.svg'); ?>
				Фильтр</a>
				<a class="appartment-btn btn-green-border arrow--size padding-right--more" href="/dist/check-floor.php">
				<?php include('img/svg/arrow.svg'); ?>
				Выбрать этаж</a>
				<a class="appartment-btn btn-green-border pdf--color" href="#">
				<?php include('img/svg/pdf-icon.svg'); ?>
				Скачать PDF</a>
				<a class="appartment-btn btn-fill" href="#">Узнать цену</a>
			</div>
			<!-- /.batton-wrap -->
			<div class="plan-floor">
				<p class="plan-floor__title">План поверху</p>
				
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
		</div>
		<!-- /.appartment-block__left -->
		<a href="../src/img/appartment/floor-plan--big.png" data-modal-class="mfp-bg--white" class="appartment-block__center">
			<img src="img/appartment/appartment-plan.jpg" alt="" title="" class="appartment-block-img">
		</a>
		<!-- /.appartment-block__center -->
		<div class="appartment-block__right">
			<div class="compass-img">
				<img src="img/appartment/icon-compass.png" alt="" title="">
			</div>
			<div class="appartment-table">
				<table>
					<tbody>
						<tr>
							<td>Загальна площа:</td>
							<td>50.74 м.кв</td>
						</tr>
						<tr>
							<td>Житлова площа:</td>
							<td>13.4 м.кв</td>
						</tr>
						<tr>
							<td>Передпокій</td>
							<td>16.32 м.кв</td>
						</tr>
						<tr>
							<td>Кухня-їдальня:</td>
							<td>15.56 м.кв</td>
						</tr>
						<tr>
							<td>Спальня</td>
							<td>1 13.85 м.кв</td>
						</tr>
						<tr>
							<td>Спальня</td>
							<td>2 21.33 м.кв</td>
						</tr>
						<tr>
							<td>Вітальня</td>
							<td>1 3.93 м.кв </td>
						</tr>
						<tr>
							<td>Ванна кімната:</td>
							<td>1 2.06 м.кв</td>
						</tr>
						<tr>
							<td>С/в:</td>
							<td>1 5.7 м.кв</td>
						</tr>
						<tr>
							<td>Гардеробна</td>
							<td>1 2.87 м.кв</td>
						</tr>
						<tr>
							<td>Балкон</td>
							<td>1 4.04 м.кв</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- /.appartment-table -->
		</div>
		<!-- /.appartment-block__right -->
	</div>
	<!-- /.appartment-block -->
</div>
<!-- /.container -->



<?php include('includes/footer.php'); ?>

	<script src="js/scripts.min.js"></script>
	<script src="js/appartment.js"></script>

	</body>
</html>