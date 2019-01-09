<?php include('includes/header.php'); ?>
<div class="section-preview section-preview-web_camera">
	<div class="container">
		<h1 class='section-preview__title'>Веб камера</h1>
		
		<ul class="breadcrumb">
		  <li><a href="/dist/index.php">Главная</a></li>
		  <li>Веб камера</li>
		</ul>
	</div>
	<!-- /.container -->
</div>
<!-- /.sectionHome__gallery -->


<div class="container">
	<div class="webCamera">
		<div class="webCamera__video">
			<a href="https://www.youtube.com/watch?v=Bumj1_bZGog" class="video__link" target="_blank">
				<picture>
					<source srcset="https://img.youtube.com/vi_webp/Bumj1_bZGog/maxresdefault.webp" type="image/webp">
					<img class='webCamera__video-embed' src="https://img.youtube.com/vi/Bumj1_bZGog/maxresdefault.jpg" alt="Картинка с ютуба">
				</picture>
			</a>
			
			<button class="video-btn" aria-label='Запустить видео'>
				<?php include('img/svg/youtybe.svg'); ?>
			</button>
		</div>
		<!-- /.webCamera__video -->
		<div class="webCamera__descr">
			<h3 class="descr__title">Запланированное время завершения строительства:</h3>
			<!-- /.descr__title -->
			<h4 class="descr__subtitle">IV квартал 2018 года</h4>
			<!-- /.descr__subtitle -->
			<a href="/dist/stage-building.php" class="btn-green-border">
				Ход строительства
			</a>
			<!-- /.btn -->
		</div>
		<!-- /.webCamera__descr -->
	</div>
	<!-- /.webCamera -->
</div>
<!-- /.container -->

<?php include('includes/footer.php'); ?>

	<script src="js/scripts.min.js"></script>
	<script src="js/web-camera.js"></script>

	</body>
</html>