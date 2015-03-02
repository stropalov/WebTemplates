<?php get_header(); ?>

<section class="s_about bg_light" id="about">
	<div class="section_header">
		<h2>Обо мне</h2>
		<div class="s_descr_wrap">
			<div class="s_descr">Познакомимся поближе</div>
		</div>
	</div>
	<div class="section_content">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-push-4 animation1">
					<h3>Фото</h3>
					<div class="person">
						<a href="img/50-guitelec.png" class="popup"><img src="img/50-guitelec.png" alt="photo">
						</a>
					</div>
				</div>
				<div class="col-md-4 col-md-pull-4 animation2">
					<h3>Немного о себе</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa quasi numquam id eum saepe at et, inventore eaque deleniti incidunt.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi deleniti nesciunt fugit iste, sequi sint similique sunt saepe expedita doloremque.</p>
				</div>
				<div class="col-md-4 animation3 personal_block">
					<h3>Персональная информация</h3>
					<h2 class="personal_header">John Doe</h2>
					<ul>
						<li>Профессиональное создание сайтов. Разработка дизайна. </li>
						<li>День рождения: 1 января 1991г.</li>
						<li>Номер телефона: +9 999 99 99</li>
						<li>E-mail:
							<a href="mailto:admin@test.com">admin@test.com</a>
						</li>
						<li>Веб-сайт: <a href="test.com" target="_blank">test.com</a>
						</li>
					</ul>
					<div class="social_wrap">
						<ul>
							<li><a href="" target="_blank"><i class="fa fa-twitter"></i></a>
							</li>
							<li><a href="" target="_blank"><i class="fa fa-vk"></i></a>
							</li>
							<li><a href="" target="_blank"><i class="fa fa-github"></i></a>
							</li>
							<li><a href="" target="_blank"><i class="fa fa-twitter"></i></a>
							</li>
							<li><a href="" target="_blank"><i class="fa fa-facebook"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="s_resume" id="resume">
	<div class="section_header">
		<h2>Резюме</h2>
		<div class="s_descr_wrap">
			<div class="s_descr">Мои знания и достижения</div>
		</div>
	</div>
	<div class="section_container">
		<div class="row">
			<div class="resume_container">
				<div class="col-md-6 col-sm-6 left">
					<h3>Работа</h3>
					<div class="resume_icon"><i class="icon-basic-case"></i>
					</div>
					<div class="resume_item">
						<div class="year">2008-2015</div>
						<div class="resume_description">Lorem ipsum dolor. <strong>Lorem</strong>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum voluptates error eligendi praesentium excepturi consectetur repudiandae natus voluptate, exercitationem cumque.</p>
					</div>
					<div class="resume_item">
						<div class="year">2008-2015</div>
						<div class="resume_description">Lorem ipsum dolor. <strong>Lorem</strong>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum voluptates error eligendi praesentium excepturi consectetur repudiandae natus voluptate, exercitationem cumque.</p>
					</div>
					<div class="resume_item">
						<div class="year">2008-2015</div>
						<div class="resume_description">Lorem ipsum dolor. <strong>Lorem</strong>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum voluptates error eligendi praesentium excepturi consectetur repudiandae natus voluptate, exercitationem cumque.</p>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 right">
					<h3>Учеба</h3>
					<div class="resume_icon"><i class="icon-basic-book-pen"></i>
					</div>
					<div class="resume_item">
						<div class="year">2008-2015</div>
						<div class="resume_description">Lorem ipsum dolor. <strong>Lorem</strong>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum voluptates error eligendi praesentium excepturi consectetur repudiandae natus voluptate, exercitationem cumque.</p>
					</div>
					<div class="resume_item">
						<div class="year">2008-2015</div>
						<div class="resume_description">Lorem ipsum dolor. <strong>Lorem</strong>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum voluptates error eligendi praesentium excepturi consectetur repudiandae natus voluptate, exercitationem cumque.</p>
					</div>
					<div class="resume_item">
						<div class="year">2008-2015</div>
						<div class="resume_description">Lorem ipsum dolor. <strong>Lorem</strong>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum voluptates error eligendi praesentium excepturi consectetur repudiandae natus voluptate, exercitationem cumque.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="s_portfolio bg_dark" id="portfolio">
	<div class="section_header">
		<h2>Портфолио</h2>
		<div class="s_descr_wrap">
			<div class="s_descr">Мои работы</div>
		</div>
	</div>
	<div class="section_content">
		<div class="container">
			<div class="row">
				<div class="filter_div controls">
					<ul>
						<li class="filter active" data-filter="all">Все работы</li>
						<li class="filter" data-filter=".category_1">Сайты</li>
						<li class="filter" data-filter=".category_2">Айдентика</li>
						<li class="filter" data-filter=".category_3">Логотипы</li>
					</ul>
				</div>
				<div id="portfolio_grid">
					<div class="mix col-md-3 col-sm-6 col-xs-6 portfolio_item category_1" data-myorder="1"><img src="img/portfolio-images/1.jpg" alt="">
						<div class="port_item_cont">
							<h3>Заголовок работы</h3>
							<p>Описание работы</p>
							<a href="#work_1" class="popup_content">Посмотреть</a>
							<div class="hidden">
								<div class="podrt_descr" id="work_1">
									<div class="modal-box-content">
										<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
										<h3>Заголовок работы</h3>
										<p>Lorem ipsum dolor sit amet.</p>
										<img src="img/portfolio-images/1.jpg" alt="Alt">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="mix col-md-3 col-sm-6 col-xs-6 portfolio_item category_1" data-myorder="1"><img src="img/portfolio-images/2.jpg" alt="">
						<div class="port_item_cont">
							<h3>Заголовок работы</h3>
							<p>Описание работы</p>
							<a href="#work_2" class="popup_content">Посмотреть</a>
							<div class="hidden">
								<div class="podrt_descr" id="work_2">
									<div class="modal-box-content">
										<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
										<h3>Заголовок работы</h3>
										<p>Lorem ipsum dolor sit amet.</p>
										<img src="img/portfolio-images/2.jpg" alt="Alt">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="mix col-md-3 col-sm-6 col-xs-6 portfolio_item category_1" data-myorder="1"><img src="img/portfolio-images/3.jpg" alt="">
						<div class="port_item_cont">
							<h3>Заголовок работы</h3>
							<p>Описание работы</p>
							<a href="#work_3" class="popup_content">Посмотреть</a>
							<div class="hidden">
								<div class="podrt_descr" id="work_3">
									<div class="modal-box-content">
										<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
										<h3>Заголовок работы</h3>
										<p>Lorem ipsum dolor sit amet.</p>
										<img src="img/portfolio-images/3.jpg" alt="Alt">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="mix col-md-3 col-sm-6 col-xs-6 portfolio_item category_1" data-myorder="1"><img src="img/portfolio-images/4.jpg" alt="">
						<div class="port_item_cont">
							<h3>Заголовок работы</h3>
							<p>Описание работы</p>
							<a href="#work_4" class="popup_content">Посмотреть</a>
							<div class="hidden">
								<div class="podrt_descr" id="work_4">
									<div class="modal-box-content">
										<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
										<h3>Заголовок работы</h3>
										<p>Lorem ipsum dolor sit amet.</p>
										<img src="img/portfolio-images/4.jpg" alt="Alt">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="mix col-md-3 col-sm-6 col-xs-6 portfolio_item category_2" data-myorder="2"><img src="img/portfolio-images/5.jpg" alt="">
						<div class="port_item_cont">
							<h3>Заголовок работы</h3>
							<p>Описание работы</p>
							<a href="#work_5" class="popup_content">Посмотреть</a>
							<div class="hidden">
								<div class="podrt_descr" id="work_5">
									<div class="modal-box-content">
										<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
										<h3>Заголовок работы</h3>
										<p>Lorem ipsum dolor sit amet.</p>
										<img src="img/portfolio-images/5.jpg" alt="Alt">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="mix col-md-3 col-sm-6 col-xs-6 portfolio_item category_2" data-myorder="2"><img src="img/portfolio-images/6.jpg" alt="">
						<div class="port_item_cont">
							<h3>Заголовок работы</h3>
							<p>Описание работы</p>
							<a href="#work_6" class="popup_content">Посмотреть</a>
							<div class="hidden">
								<div class="podrt_descr" id="work_6">
									<div class="modal-box-content">
										<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
										<h3>Заголовок работы</h3>
										<p>Lorem ipsum dolor sit amet.</p>
										<img src="img/portfolio-images/6.jpg" alt="Alt">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="mix col-md-3 col-sm-6 col-xs-6 portfolio_item category_2" data-myorder="2"><img src="img/portfolio-images/2.jpg" alt="">
						<div class="port_item_cont">
							<h3>Заголовок работы</h3>
							<p>Описание работы</p>
							<a href="#work_2" class="popup_content">Посмотреть</a>
							<div class="hidden">
								<div class="podrt_descr" id="work_2">
									<div class="modal-box-content">
										<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
										<h3>Заголовок работы</h3>
										<p>Lorem ipsum dolor sit amet.</p>
										<img src="img/portfolio-images/2.jpg" alt="Alt">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="mix col-md-3 col-sm-6 col-xs-6 portfolio_item category_3" data-myorder="3"><img src="img/portfolio-images/5.jpg" alt="">
						<div class="port_item_cont">
							<h3>Заголовок работы</h3>
							<p>Описание работы</p>
							<a href="#work_5" class="popup_content">Посмотреть</a>
							<div class="hidden">
								<div class="podrt_descr" id="work_5">
									<div class="modal-box-content">
										<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
										<h3>Заголовок работы</h3>
										<p>Lorem ipsum dolor sit amet.</p>
										<img src="img/portfolio-images/5.jpg" alt="Alt">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="s_contacts bg_light" id="contacts">
	<div class="section_header">
		<h2>Контакты</h2>
		<div class="s_descr_wrap">
			<div class="s_descr">Оставьте ваше сообщение</div>
		</div>
	</div>
	<div class="section_content">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="contact_box">
						<div class="contacts_icon icon-basic-geolocalize-05"></div>
						<h3>Адрес</h3>
						<p>Lorem ipsum dolor sit amet.</p>
					</div>
					<div class="contact_box">
						<div class="contacts_icon icon-basic-smartphone"></div>
						<h3>Телефон</h3>
						<p>+9 999 99 99</p>
					</div>
					<div class="contact_box">
						<div class="contacts_icon icon-basic-webpage-img-txt"></div>
						<h3>Веб-сайт:</h3>
						<p><a href="mailto:admin@test.com">admin@test.com</a>
						</p>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<form action="http://formspree.io/admin@test.com" class="main_form" novalidate target="_blank" method="post">
						<label class="form-group">
							<span class="color_element">*</span> Ваше имя:
							<input type="text" name="name" placeholder="Ваше имя" data-validation-required-message="Вы не ввели имя" required />
							<span class="help-block text-danger"></span>
						</label>
						<label class="form-group">
							<span class="color_element">*</span> Ваш E-mail:
							<input type="email" name="email" placeholder="Ваш E-mail" data-validation-required-message="Не корректно введен E-mail" required />
							<span class="help-block text-danger"></span>
						</label>
						<label class="form-group">
							<span class="color_element">*</span> Ваше сообщение:
							<textarea name="message" placeholder="Ваше сообщение" data-validation-required-message="Вы не ввели сообщение" required></textarea>
							<span class="help-block text-danger"></span>
						</label>
						<button>Отправить</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
	
<?php get_footer(); ?>