<div class="container">
	<div class="tabs">
		<ul class="tabs__header">
			<li data-page="0">Наши контактные данные</li>
			<li class="active-li" data-page="1">Заказать звонок</li>
			<li data-page="2">Форма обратной связи</li>
		</ul>
		<div class="tabs__content">
			<div class="tabs__inner">
				<h3 class="section-title leaves-green">Наши контактные данные</h3>
				<div class="contact-block">
					<ul class="contact-list">
						<li class="contact-list__item">
							<h4 class='contact-list__title phone-icon'>Наш телефон</h4>
							<a href="#">(044)299-49-61</a>
						</li>
						<!-- /.contact-list__item -->
						<li class="contact-list__item">
							<h4 class='contact-list__title location-icon'>Адрес ЖК:</h4>
							<a href="#" class="mb30">Home & Park comfort house
								ул. Бежовка, 14</a>

							<h4 class='contact-list__title location-icon'>Отдел продаж:</h4>
							<a href="#">Home & Park comfort house
								ул. Бежовка, 15</a>


						</li>
						<!-- /.contact-list__item -->
						<li class="contact-list__item">
							<h4 class='contact-list__title email-icon'>Наш e-mail</h4>
							<a href="#">info@Home&Park.com.ua</a>
						</li>
						<!-- /.contact-list__item -->
						<li class="contact-list__item">
							<h4 class='contact-list__title clock'>Часы работы отдела продаж</h4>
							<span class="block">Пн-пт: 09.00 - 19.00</span>
							<span class="block">Сб-вс: 10.00 - 18.00</span>
						</li>
						<!-- /.contact-list__item -->
					</ul>
					<!-- /.contact-block-list -->
				</div>
				<!-- /.contact-block -->
			</div>
			<!-- /.tabs__inner -->
			<div class="tabs__inner active-js">
				<h3 class="section-title leaves-green">Заказать телефонный звонок</h3>
				<form class="mainForm" id="mainForm">
					<div class="mainForm-wrap requaired">
						<span class="mainForm__text" data-defaultMessage="Имя:" data-errorMessage="Имя не заполнено">
							<div class="wrap-icon">
								<?php include('img/svg/user-icon.svg'); ?>
							</div>
						Имя:
						</span>
						<input name="name" type="text" class="mainForm__input mainForm__input-requaired">
					</div>
					<!--  </mainForm-wrap> -->
					<div class="mainForm-wrap requaired">
						<span class="mainForm__text" data-defaultMessage="Ваш телефон:" data-errorMessage="Телефон не заполнен">Ваш телефон:</span>
						<input name="tel" type="text" class="mainForm__input mainForm__input-requaired">
					</div>
					<!--  </mainForm-wrap> -->
					<div class="mainForm-wrap">
						<span class="mainForm__text " data-defaultMessage="В какое удобное время Вам перезвонить:" data-errorMessage="Заполните сообщение">
							<div class="wrap-icon">
								<?php include('img/svg/phone-icon.svg'); ?>
							</div>
							В какое удобное время Вам перезвонить:
						</span>
						<input name="message" type="text" class="mainForm__input">
					</div>
					<!--  </mainForm-wrap> -->
						<button class="btn-fill">
							Отправить
						</button>
					<!--  </contact-form-submit> -->
				</form>
				<!-- /form -->
			</div>
			<!-- /.tabs__inner -->
			<div class="tabs__inner ">
				<h3 class="section-title leaves-green">Форма обратной связи</h3>
				<form class="mainForm" id="mainForm2">
					<div class="mainForm-wrap requaired">
						<span class="mainForm__text" data-defaultMessage="Имя:" data-errorMessage="Имя не заполнено">
							<div class="wrap-icon">
								<?php include('img/svg/user-icon.svg'); ?>
							</div>
						Имя:
						</span>
						<input name="name" type="text" class="mainForm__input mainForm__input-requaired">
					</div>
					<!--  </mainForm-wrap> -->
					<div class="mainForm-wrap requaired">
						<span class="mainForm__text" data-defaultMessage="Ваш телефон:" data-errorMessage="Email не заполнен">Ваш Email:</span>
						<input name="email" type="text" class="mainForm__input mainForm__input-requaired">
					</div>
					<!--  </mainForm-wrap> -->
					<div class="mainForm-wrap">
						<span class="mainForm__text " data-defaultMessage="В какое удобное время Вам перезвонить:" data-errorMessage="Заполните сообщение">
							<div class="wrap-icon">
								<?php include('img/svg/phone-icon.svg'); ?>
							</div>
							Ваш вопрос:
						</span>
						<input placeholder="" name="message" type="text" class="mainForm__input">
					</div>
					<!--  </mainForm-wrap> -->
						<button class="btn-fill">
							Отправить
						</button>
					<!--  </contact-form-submit> -->
				</form>
				<!-- /form -->
			</div>
			<!-- /.tabs__inner -->
		</div>
		<!-- /.tabs__content -->
	</div>
	<!-- /.tabs -->
</div>
<!-- /.container -->