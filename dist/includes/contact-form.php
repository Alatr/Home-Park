<div class="container">
	<div class="tabs">
		<ul class="tabs__header">
			<li data-page="0"><button>Наши контактные данные</button></li>
			<li class="active-li" data-page="1"><button>Заказать звонок</button> </li>
			<li data-page="2"><button>Форма обратной связи</button></li>
		</ul>
		<div class="tabs__content">
			<div class="tabs__inner">
				<h3 class="section-title tablet-font--size leaves-green leaves-green--hidden">Наши контактные данные</h3>
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
								ул. Беживка, 14</a>

							<h4 class='contact-list__title location-icon'>Отдел продаж:</h4>
							<a href="#">Home & Park comfort house
								ул. Беживка, 15</a>


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
				<h3 class="section-title tablet-font--size leaves-green leaves-green--hidden">Заказать телефонный звонок</h3>
				<p class="tabs-form-sublitle">Отправьте заявку на звонок и менеджер отдела продаж свяжется с вами в ближайшее время.<br>Или выберите удобное вам время для звонка</p>
				<form class="mainForm" id="mainForm">
					<div class="mainForm-wrap requaired">
						<span class="mainForm__text" data-defaultMessage="Имя:" data-errorMessage="Имя не заполнено">
							<span class="wrap-icon">
								<?php include('img/svg/user-icon.svg'); ?>
							</span>
						Имя:
						</span>
						<input name="name" type="text" class="mainForm__input mainForm__input-requaired">
					</div>
					<!--  </mainForm-wrap> -->
					<div class="mainForm-wrap requaired">
						<span class="mainForm__text position--left" data-defaultMessage="Ваш телефон:" data-errorMessage="Телефон не заполнен"></span>
						<input name="tel" type="text" placeholder="Ваш телефон:" class="mainForm__input mainForm__input-requaired inputtelmask">
					</div>
					<!--  </mainForm-wrap> -->
					<div class="mainForm-wrap">
						<span class="mainForm__text display--mobile" data-defaultMessage="В какое удобное время вам перезвонить:" data-errorMessage="Заполните сообщение">
							<span class="wrap-icon">
								<?php include('img/svg/phone-icon.svg'); ?>
							</span>
							<span>В какое удобное время вам перезвонить:</span>
						</span>
						<input name="message" type="text" autocomplete="off" class="datetimepicker_dark mainForm__input">
					</div>
					<!--  </mainForm-wrap> -->
						<button class="btn-fill sand-form">
							Отправить
						</button>
					<!--  </contact-form-submit> -->
				</form>
				<!-- /form -->
			</div>
			<!-- /.tabs__inner -->
			<div class="tabs__inner ">
				<h3 class="section-title tablet-font--size leaves-green leaves-green--hidden">Форма обратной связи</h3>
				<form class="mainForm" id="mainForm2">
					<div class="mainForm-wrap requaired">
						<span class="mainForm__text" data-defaultMessage="Имя:" data-errorMessage="Имя не заполнено">
							<span class="wrap-icon">
								<?php include('img/svg/user-icon.svg'); ?>
							</span>
						Имя:
						</span>
						<input name="name" type="text" class="mainForm__input mainForm__input-requaired">
					</div>
					<!--  </mainForm-wrap> -->
					<div class="mainForm-wrap requaired">
						<span class="mainForm__text" data-defaultMessage="Ваш телефон:" data-errorMessage="Email не заполнен">
							<span class="wrap-icon color--white">
								<?php include('img/svg/email-icon.svg'); ?>
							</span>
						Ваш Email:</span>
						<input name="email" type="text" class="mainForm__input mainForm__input-requaired">
					</div>
					<!--  </mainForm-wrap> -->
					<div class="mainForm-wrap">
						<span class="mainForm__text " data-defaultMessage="В какое удобное время вам перезвонить:" data-errorMessage="Заполните сообщение">
							<span class="wrap-icon">
								<?php include('img/svg/phone-icon.svg'); ?>
							</span>
							Ваш вопрос:
						</span>
						<input placeholder="" name="message" type="text" class="mainForm__input">
					</div>
					<!--  </mainForm-wrap> -->
						<button class="btn-fill sand-form">
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