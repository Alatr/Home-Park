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
				<a class="appartment-btn btn-green-border arrow--size" href="/dist/check-floor.php">
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
				<a class="plan-floor__link" href="/dist/floor.php">
					<img src="img/appartment/plan-floor.png" title="" alt="">
				</a>
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