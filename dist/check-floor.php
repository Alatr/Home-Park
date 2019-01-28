<?php include('includes/header.php'); ?>
<div class="section-preview section-preview-check-floor">
	<div class="container">
		<h1 class='section-preview__title'>Выбор этажа</h1>
		
		<ul class="breadcrumb">
		  <li><a href="/dist/index.php">Главная</a></li>
		  <li>Выбор этажа</li>
		</ul>
	</div>
	<!-- /.container -->
</div>
<!-- /.sectionHome__gallery -->
<div class="check-floor">
	<div class="container">
		<div class="check-floor__img">
			<?php include('includes/check-floor-build-svg.php'); ?>
		</div>
		<!-- /.check-floor__img -->
		<aside class="check-floor__aside">
			<div class="button-wrap">
				<a class="btn-fill filter--margin wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s" href="/dist/filter.php">
					<?php include('img/svg/filter-icon.svg'); ?>
					Фильтр
				</a>
				<a href="#" class="btn-green-border wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">1-комнатные</a>
				<a href="#" class="btn-green-border wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">2-комнатные</a>
				<a href="#" class="btn-green-border wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.7s">3-комнатные</a>
			</div>
			<!-- /.button-wrap -->
			<div class="info-block-wrap">
				<p class="info-block__item background--green"><span class="info-block-floor">3</span>этаж</p>
				<!-- /.info-floor -->
				<div class="info-block__item padding--side">
					<p>
						<span class="info-block-appartments">17</span>квартир на этаже
					</p>
				</div>
				<!-- /.info-appartment -->
				<div class="compass-img">
					<img src="img/appartment/icon-compass.png" alt="" title="">
				</div>
			</div>
			<!-- /.info-block-wrap -->
		</aside>
		<!-- /.check-floor__aside -->
		<div class="check-floor__note">
			<p class="note-title">Выберите нужный этаж</p>
			<!-- /.note-title -->
			<div class="arrow--position">
				<?php include('img/svg/arrow.svg'); ?>
			</div>
			<!-- /.arrow-wrap -->
		</div>
		<!-- /.check-floor__note -->
	</div>
</div>
<!-- /.check-floor -->
<?php include('includes/footer.php'); ?>

	<script src="js/scripts.min.js"></script>
	<script src="js/check-floor.js"></script>

	</body>
</html>