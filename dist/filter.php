<?php include('includes/header.php'); ?>
<div class="section-preview section-preview-filter">
	<div class="container">
		<h2 class='section-preview__title'>Фильтр</h2>
		
		<ul class="breadcrumb">
		  <li><a href="/dist/index.php">Главная</a></li>
		  <li><a href="/dist/check-floor.php">Выбор этажа</a></li>
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
					<!-- <input id="checkbox__room4" class="checkbox__room filter__checkbox" type="checkbox" value="4">
					<label for="checkbox__room4" class="checkbox__text">4</label> -->
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
					<input class="js_val_floor_min slider__currentMin" type="number" min="3" value="3" max="25" id="entrance_min">
					<input class="js_val_floor_max slider__currentMax" type="number" min="3" value="25" max="25" id="entrance_max">
					<input type="hidden" class="range-init irs-hidden-input" id="val_floor" value="3;25" readonly="">
				</div>
				<!-- /.range-item -->



				<div class="range-item option__item">
					<div class="range-item__title">Общая площадь, м.кв</div>
					<input class="js_val_square_min slider__currentMin" type="number" min="39" value="39" max="100" id="entrance_min">
					<input class="js_val_square_max slider__currentMax" type="number" min="39" value="100" max="100" id="entrance_max">
					<input type="hidden" class="range-init irs-hidden-input" id="val_square" value="39;100" readonly="">
				</div>
				<!-- /.range-item -->


				<div class="range-item option__item">
					<div class="range-item__title">Жилая площадь, м.кв</div>
					<input class="js_val_squareLiv_min slider__currentMin" type="number" min="15" value="15" max="99" id="entrance_min">
					<input class="js_val_squareLiv_max slider__currentMax" type="number" min="15" value="99" max="99" id="entrance_max">
					<input type="hidden" class="range-init irs-hidden-input" id="val_squareLiv" value="15;99" readonly="">
				</div>
				<!-- /.range-item -->


				<p class="option__results option__item">По вашим параметрам найдено <span class="number_flats">0</span> квартир</p>
				<!-- /.option__results -->
				<button class="option__item btn-fill js-button_search">Искать</button>
				<button class="option__item option__reset js-reset_button">Скинуть параметры</button>
		</div>
		<!-- /.option-block -->

		<div class="filter-info">
			<p class="filter-info__text">Найдено типов квартир: <span class="count_filter"></span></p>
			<!-- /.filter-info__text -->
			<div class="filter-info--wrap">
				<button class="btn-green-border apartment-button">1-комнатные</button>
				<button class="btn-green-border apartment-button">2-комнатные</button>
				<button class="btn-green-border apartment-button">3-комнатные</button>
				<!-- <button class="btn-green-border apartment-button">4-комнатные</button> -->
			</div>
			<!-- /.filter-info--wrap -->
		</div>
		<!-- /.filter-info -->


		<ul class="filter-results">


			
			<li class="filter-item js-result__item" data-floor="6" data-rooms="1" data-area="66" data-larea="68" data-build="4">
				<a href="/dist/appartment.php" class="filter-item__link">
					<div class="filter-item__img">
						<img src="img/home/home-bg.jpg" alt="" title="">
					</div>
					<table class="filter-item__table">
						<tbody>
							<tr>
								<td class='table-title'>Секція:</td>
								<td class="table-result">1</td>
							</tr>
							<tr>
								<td class='table-title'>Кіл-ть кімнат:</td>
								<td class="table-result">1</td>
							</tr>
							<tr>
								<td class='table-title'>Загальна площа:</td>
								<td class="table-result">66</td>
							</tr>
							<tr>
								<td class='table-title'>Житлова площа:</td>
								<td class="table-result">68</td>
							</tr>
						</tbody>
					</table>
					<button class="filter-item__button btn-fill">Смотреть квартиру</button>
				</a>
			</li>
			<!-- /.filter-item -->

			


			<li class="filter-item js-result__item " data-floor="3" data-rooms="2" data-area="40" data-larea="35" data-build="1">
				<a href="/dist/appartment.php" class="filter-item__link">
					<div class="filter-item__img">
						<img src="img/filter/Plan_copy.png" alt="" title="">
					</div>
					<table class="filter-item__table">
						<tbody>
							<tr>
								<td class='table-title'>Секція:</td>
								<td class="table-result">2</td>
							</tr>
							<tr>
								<td class='table-title'>Кіл-ть кімнат:</td>
								<td class="table-result">2</td>
							</tr>
							<tr>
								<td class='table-title'>Загальна площа:</td>
								<td class="table-result">45</td>
							</tr>
							<tr>
								<td class='table-title'>Житлова площа:</td>
								<td class="table-result">40</td>
							</tr>
						</tbody>
					</table>
					<button class="filter-item__button btn-fill">Смотреть квартиру</button>
				</a>
			</li>
			<!-- /.filter-item -->



			
			<li class="filter-item js-result__item " data-floor="3" data-rooms="2" data-area="39" data-larea="20" data-build="1">
				<a href="/dist/appartment.php" class="filter-item__link">
					<img src="img/filter/Plan_copy.png" alt="" title="" class="filter-item__img">
					<table class="filter-item__table">
						<tbody>
							<tr>
								<td class='table-title'>Секція:</td>
								<td class="table-result">3</td>
							</tr>
							<tr>
								<td class='table-title'>Кіл-ть кімнат:</td>
								<td class="table-result">2</td>
							</tr>
							<tr>
								<td class='table-title'>Загальна площа:</td>
								<td class="table-result">25</td>
							</tr>
							<tr>
								<td class='table-title'>Житлова площа:</td>
								<td class="table-result">20</td>
							</tr>
						</tbody>
					</table>
					<button class="filter-item__button btn-fill">Смотреть квартиру</button>
				</a>
			</li>
			<!-- /.filter-item -->



			
			<li class="filter-item js-result__item " data-floor="3" data-rooms="3" data-area="70" data-larea="65" data-build="1">
				<a href="/dist/appartment.php" class="filter-item__link">
					<img src="img/filter/Plan_copy.png" alt="" title="" class="filter-item__img">
					<table class="filter-item__table">
						<tbody>
							<tr>
								<td class='table-title'>Секція:</td>
								<td class="table-result">4</td>
							</tr>
							<tr>
								<td class='table-title'>Кіл-ть кімнат:</td>
								<td class="table-result">3</td>
							</tr>
							<tr>
								<td class='table-title'>Загальна площа:</td>
								<td class="table-result">70</td>
							</tr>
							<tr>
								<td class='table-title'>Житлова площа:</td>
								<td class="table-result">65</td>
							</tr>
						</tbody>
					</table>
					<button class="filter-item__button btn-fill">Смотреть квартиру</button>
				</a>
			</li>
			<!-- /.filter-item -->



			
			<li class="filter-item js-result__item " data-floor="3" data-rooms="4" data-area="95" data-larea="90" data-build="1">
				<a href="/dist/appartment.php" class="filter-item__link">
					<img src="img/filter/Plan_copy.png" alt="" title="" class="filter-item__img">
					<table class="filter-item__table">
						<tbody>
							<tr>
								<td class='table-title'>Секція:</td>
								<td class="table-result">5</td>
							</tr>
							<tr>
								<td class='table-title'>Кіл-ть кімнат:</td>
								<td class="table-result">4</td>
							</tr>
							<tr>
								<td class='table-title'>Загальна площа:</td>
								<td class="table-result">95</td>
							</tr>
							<tr>
								<td class='table-title'>Житлова площа:</td>
								<td class="table-result">90</td>
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