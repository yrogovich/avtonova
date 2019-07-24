<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package electromobiles
 */

?>

	</div><!-- #content -->

	<footer id="footer" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="column-1">
					<div class="title">Наша компания</div>

					<ul id="menu-2" class="menu">
						<li id="menu-item-14" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14"><a href="#">О компании</a></li>
						<li id="menu-item-15" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15"><a href="#">Контакты</a></li>
						<li id="menu-item-16" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16"><a href="#">Каталог электромобилей</a></li>
						<li id="menu-item-17" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-17"><a href="#">Авто в наличии</a></li>
						<li id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18"><a href="#">Новые поступления</a></li>
						<li id="menu-item-19" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19"><a href="#">Акционные предложения</a></li>
						<li id="menu-item-19" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19"><a href="#">Карта заправок в Беларуси</a></li>
					</ul>
				</div>
				<!-- /.collumn-1 -->

				<div class="column-2">
					<div class="title">Наши услуги</div>

					<ul id="menu-2" class="menu">
						<li id="menu-item-14" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14"><a href="#">TRADE IN</a></li>
						<li id="menu-item-15" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15"><a href="#">Кредит / Лизинг</a></li>
						<li id="menu-item-16" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16"><a href="#">Мифы (вопросы и ответы)</a></li>
						<li id="menu-item-17" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-17"><a href="#">Полезные статьи и обзоры</a></li>
						<li id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18"><a href="#">Аксесуары для электромобилей</a></li>
						<li id="menu-item-19" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19"><a href="#">Сервис</a></li>
						<li id="menu-item-19" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19"><a href="#">Страхование электромобилей</a></li>
						<li id="menu-item-19" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19"><a href="#">Корпоративным клиентам</a></li>
					</ul>
				</div>
				<!-- /.collumn-2 -->

				<div class="column-3">
					<div class="title">Контакты</div>

					<a href="tel:+375291569521" class="icon-phone">+375 (29) 156-95-21</a>
					<a href="mailto:info@power.avtonova.by" class="icon-mail">info@power.avtonova.by</a>
					<a href="#" class="icon-map">Гомель, ул. Хатаевича, 2</a>
					<span class="icon-time">Время работы:</span>
					<ul>
						<li>Понед. – Пятн.: с 9.00 до 19.00</li>
						<li>Суб. – Воскр.: с 09.00 до 17.00</li>
					</ul>
				</div>
				<!-- /.collumn-3 -->

				<div class="column-4">
					<a href="<?php echo get_home_url(); ?>" class="logo">
						<img src="<?php bloginfo('template_url') ?>/src/img/logo.png" alt="автонова">
					</a>

					<p class="bold">ООО "Автонова"</p>
					<button class="btn btn-outline">бесплатная консультация</button>

					<div class="copyright">Copyright ©, 2000-2019 ООО “Автонова”. Первый мультибрендовый салон электромобилей в Беларуси.</div>

					<a href="#" class="primary">Политика конфиденциальности</a>
				</div>
				<!-- /.collumn-4 -->
			</div>
			<!-- /.row -->
		</div>
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

	

</body>
</html>
