<?php include('includes/header.php'); ?>
<div class="section-preview section-preview-filter">
	<div class="container">
		<h2 class='section-preview__title'>Фильтр</h2>
		
		<ul class="breadcrumb">
		  <li><a href="#">Главная</a></li>
		  <li><a href="#">Выбор этажа</a></li>
		  <li>Фильтр</li>
		</ul>
	</div>
	<!-- /.container -->
</div>
<!-- /.sectionHome__gallery -->

<div class="container">
	<div class="filter-block">


		<div class="option-block">
			<h3 class="option__title option__item">Подбор по параметрам</h3>
			<!-- /.option__title -->
				<div class="checkbox-item option__item checkboxes__rooms js_checkboxes__rooms">
					<div class="range-item__title">Кол-во комнат</div>
					<input id="checkbox__room1" class="checkbox__room filter__checkbox" type="checkbox" value="1">
					<label for="checkbox__room1" class="checkbox__text">1</label>
					<input id="checkbox__room2" class="checkbox__room filter__checkbox" type="checkbox" value="2">
					<label for="checkbox__room2" class="checkbox__text">2</label>
					<input id="checkbox__room3" class="checkbox__room filter__checkbox" type="checkbox" value="3">
					<label for="checkbox__room3" class="checkbox__text">3</label>
					<input id="checkbox__room4" class="checkbox__room filter__checkbox" type="checkbox" value="4">
					<label for="checkbox__room4" class="checkbox__text">4</label>
				</div>
				<!-- /.checkbox-wrap -->
				<div class="range-item option__item">
					<div class="range-item__title">Подъезд</div>
					<input class="js_val_entrance_min slider__currentMin" type="number" min="1" value="1" max="4" id="entrance_min">
					<input class="js_val_entrance_max slider__currentMax" type="number" min="1" value="4" max="4" id="entrance_max">
					<input type="hidden" class="range-init irs-hidden-input" id="val_entrance" value="1;4" readonly="">
				</div>
				<!-- /.range-item -->


				<div class="range-item option__item">
					<div class="range-item__title">Этаж</div>
					<input class="js_val_entrance_min slider__currentMin" type="number" min="1" value="1" max="4" id="entrance_min">
					<input class="js_val_entrance_max slider__currentMax" type="number" min="1" value="4" max="4" id="entrance_max">
					<input type="hidden" class="range-init irs-hidden-input" id="val_entrance" value="1;4" readonly="">
				</div>
				<!-- /.range-item -->



				<div class="range-item option__item">
					<div class="range-item__title">Общая площадь, м.кв</div>
					<input class="js_val_entrance_min slider__currentMin" type="number" min="1" value="1" max="4" id="entrance_min">
					<input class="js_val_entrance_max slider__currentMax" type="number" min="1" value="4" max="4" id="entrance_max">
					<input type="hidden" class="range-init irs-hidden-input" id="val_entrance" value="1;4" readonly="">
				</div>
				<!-- /.range-item -->


				<div class="range-item option__item">
					<div class="range-item__title">Жилая площадь, м.кв</div>
					<input class="js_val_entrance_min slider__currentMin" type="number" min="1" value="1" max="4" id="entrance_min">
					<input class="js_val_entrance_max slider__currentMax" type="number" min="1" value="4" max="4" id="entrance_max">
					<input type="hidden" class="range-init irs-hidden-input" id="val_entrance" value="1;4" readonly="">
				</div>
				<!-- /.range-item -->


				<p class="option__results option__item">По вашим параметрам найдено 125 квартир</p>
				<!-- /.option__results -->
				<button class="option__item btn-fill">Искать</button>
				<button class="option__item option__reset js-reset-filter-button">Скинуть параметры</button>
		</div>
		<!-- /.option-block -->

		<div class="filter-info">
			<p class="filter-info__text">Найдено типов квартир: <span class="result-counter">3768</span></p>
			<!-- /.filter-info__text -->
			<div class="filter-info--wrap">
				<button class="btn-green-border apartment-button">1-комнатные</button>
				<button class="btn-green-border apartment-button">2-комнатные</button>
				<button class="btn-green-border apartment-button">3-комнатные</button>
				<button class="btn-green-border apartment-button">4-комнатные</button>
			</div>
			<!-- /.filter-info--wrap -->
		</div>
		<!-- /.filter-info -->


		<ul class="filter-results">


			
			<li class="filter-item" data-floor="3" data-rooms="2" data-area="69.44" data-larea="32.88" data-build="1">
				<a href="#" class="filter-item__link">
					<img src="img/filter/Plan_copy.png" alt="" title="" class="filter-item__img">
					<table class="filter-item__table">
						<tbody>
							<tr>
								<td class='table-title'>Секція:</td>
								<td class="table-result">12</td>
							</tr>
							<tr>
								<td class='table-title'>Кіл-ть кімнат:</td>
								<td class="table-result">185</td>
							</tr>
							<tr>
								<td class='table-title'>Загальна площа:</td>
								<td class="table-result">41.16</td>
							</tr>
							<tr>
								<td class='table-title'>Житлова площа:</td>
								<td class="table-result">16.84</td>
							</tr>
						</tbody>
					</table>
					<button class="filter-item__button btn-fill">Смотреть квартиру</button>
				</a>
			</li>
			<!-- /.filter-item -->



			<li class="filter-item" data-floor="3" data-rooms="2" data-area="69.44" data-larea="32.88" data-build="1">
				<a href="#" class="filter-item__link">
					<img src="img/filter/Plan_copy.png" alt="" title="" class="filter-item__img">
					<table class="filter-item__table">
						<tbody>
							<tr>
								<td class='table-title'>Секція:</td>
								<td class="table-result">12</td>
							</tr>
							<tr>
								<td class='table-title'>Кіл-ть кімнат:</td>
								<td class="table-result">185</td>
							</tr>
							<tr>
								<td class='table-title'>Загальна площа:</td>
								<td class="table-result">41.16</td>
							</tr>
							<tr>
								<td class='table-title'>Житлова площа:</td>
								<td class="table-result">16.84</td>
							</tr>
						</tbody>
					</table>
					<button class="filter-item__button btn-fill">Смотреть квартиру</button>
				</a>
			</li>
			<!-- /.filter-item -->



			
			<li class="filter-item" data-floor="3" data-rooms="2" data-area="69.44" data-larea="32.88" data-build="1">
				<a href="#" class="filter-item__link">
					<img src="img/filter/Plan_copy.png" alt="" title="" class="filter-item__img">
					<table class="filter-item__table">
						<tbody>
							<tr>
								<td class='table-title'>Секція:</td>
								<td class="table-result">12</td>
							</tr>
							<tr>
								<td class='table-title'>Кіл-ть кімнат:</td>
								<td class="table-result">185</td>
							</tr>
							<tr>
								<td class='table-title'>Загальна площа:</td>
								<td class="table-result">41.16</td>
							</tr>
							<tr>
								<td class='table-title'>Житлова площа:</td>
								<td class="table-result">16.84</td>
							</tr>
						</tbody>
					</table>
					<button class="filter-item__button btn-fill">Смотреть квартиру</button>
				</a>
			</li>
			<!-- /.filter-item -->



			
			<li class="filter-item" data-floor="3" data-rooms="2" data-area="69.44" data-larea="32.88" data-build="1">
				<a href="#" class="filter-item__link">
					<img src="img/filter/Plan_copy.png" alt="" title="" class="filter-item__img">
					<table class="filter-item__table">
						<tbody>
							<tr>
								<td class='table-title'>Секція:</td>
								<td class="table-result">12</td>
							</tr>
							<tr>
								<td class='table-title'>Кіл-ть кімнат:</td>
								<td class="table-result">185</td>
							</tr>
							<tr>
								<td class='table-title'>Загальна площа:</td>
								<td class="table-result">41.16</td>
							</tr>
							<tr>
								<td class='table-title'>Житлова площа:</td>
								<td class="table-result">16.84</td>
							</tr>
						</tbody>
					</table>
					<button class="filter-item__button btn-fill">Смотреть квартиру</button>
				</a>
			</li>
			<!-- /.filter-item -->



			
			<li class="filter-item" data-floor="3" data-rooms="2" data-area="69.44" data-larea="32.88" data-build="1">
				<a href="#" class="filter-item__link">
					<img src="img/filter/Plan_copy.png" alt="" title="" class="filter-item__img">
					<table class="filter-item__table">
						<tbody>
							<tr>
								<td class='table-title'>Секція:</td>
								<td class="table-result">12</td>
							</tr>
							<tr>
								<td class='table-title'>Кіл-ть кімнат:</td>
								<td class="table-result">185</td>
							</tr>
							<tr>
								<td class='table-title'>Загальна площа:</td>
								<td class="table-result">41.16</td>
							</tr>
							<tr>
								<td class='table-title'>Житлова площа:</td>
								<td class="table-result">16.84</td>
							</tr>
						</tbody>
					</table>
					<button class="filter-item__button btn-fill">Смотреть квартиру</button>
				</a>
			</li>
			<!-- /.filter-item -->
		</ul>
		<!-- /.filter-results -->

		<button class="btn-green-border filter-see-more">Смотреть больше планировок</button>
	</div>
	<!-- /.filter-block -->
</div>
<!-- /.container -->


<?php include('includes/footer.php'); ?>

	<script src="js/scripts.min.js"></script>
	<script src="js/filter.js"></script>

	</body>
</html>