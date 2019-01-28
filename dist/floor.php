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
			<?php include('includes/check-floor-appartment-svg.php'); ?>
			
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
	
	<script src="js/floor.js"></script>

	</body>
</html>