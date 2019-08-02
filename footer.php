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
	<?php if ( !is_front_page() && !is_home() && !is_page('catalog/')) : ?>
		<?php get_template_part('templates/parts/section-features') ?>
	<?php endif; ?>

	<div id="subscription">
		<div class="circles">
			<div class="circle-1"></div>
			<div class="circle-2"></div>
			<div class="circle-3"></div>
		</div>

		<div class="container">
			<div class="pair">
                   
				<form id="subscr-form" action="javascript:" onsubmit="callHandler('#subscr-form')" class="subscr-form" >
					<input type="hidden" name="form" value="Подписаться на акции">
					<div class="input-wrapper-2">
						<input type="email" placeholder="Адрес электронной почты" name="user_email" required>
					</div>
					<button class="btn i-send">Подписаться на акции</button>
				</form>

				<div class="social">
					<span>Мы в социальных сетях:</span>
					<div class="links">
						<a href="#"><img src="<?php bloginfo('template_url') ?>/src/img/icons/social/facebook.svg" alt="facebook"></a>
						<a href="#"><img src="<?php bloginfo('template_url') ?>/src/img/icons/social/vk.svg" alt="vk"></a>
						<a href="#"><img src="<?php bloginfo('template_url') ?>/src/img/icons/social/youtube.svg" alt="youtube"></a>
						<a href="#"><img src="<?php bloginfo('template_url') ?>/src/img/icons/social/inst.svg" alt="inst"></a>
					</div>
				</div>
			</div>
			<!-- /.pair -->
		</div>
	</div>
	<!-- /#subscription -->

	</div><!-- #content -->

	<footer id="footer" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="column-1">
					<div class="title">Наша компания</div>

					<ul id="menu-2" class="menu">
						<li id="menu-item-14" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14"><a href="<?php echo get_home_url( null, 'about-company/'); ?>">О компании</a></li>
						<li id="menu-item-15" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15"><a href="<?php echo get_home_url( null, 'contacts/'); ?>">Контакты</a></li>
						<li id="menu-item-16" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16"><a href="<?php echo get_home_url( null, 'catalog/'); ?>">Каталог электромобилей</a></li>
						<li id="menu-item-17" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-17"><a href="<?php echo get_home_url( null, 'catalog/?_sft_additional-options=in-stock'); ?>">Авто в наличии</a></li>
						<li id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18"><a href="<?php echo get_home_url( null, 'catalog/?_sft_additional-options=novye-postupleniya'); ?>">Новые поступления</a></li>
						<li id="menu-item-19" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19"><a href="<?php echo get_home_url( null, 'catalog/?_sft_additional-options=akczionnye-predlozheniya'); ?>">Акционные предложения</a></li>
						<li id="menu-item-19" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19"><a href="<?php echo get_home_url( null, 'map/'); ?>">Карта заправок в Беларуси</a></li>
					</ul>
				</div>
				<!-- /.collumn-1 -->

				<div class="column-2">
					<div class="title">Наши услуги</div>

					<ul id="menu-2" class="menu">
						<li id="menu-item-14" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14"><a href="<?php echo get_home_url( null, 'trade-in/'); ?>">TRADE IN</a></li>
						<li id="menu-item-15" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15"><a href="<?php echo get_home_url( null, 'credit/'); ?>">Кредит / Лизинг</a></li>
						<li id="menu-item-16" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16"><a href="<?php echo get_home_url( null, 'myfth/'); ?>">Мифы (вопросы и ответы)</a></li>
						<li id="menu-item-17" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-17"><a href="#">Полезные статьи и обзоры</a></li>
						<li id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18"><a href="#">Аксесуары для электромобилей</a></li>
						<li id="menu-item-19" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19"><a href="<?php echo get_home_url( null, 'service/'); ?>">Сервис</a></li>
						<li id="menu-item-19" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19"><a href="#">Страхование электромобилей</a></li>
						<li id="menu-item-19" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19"><a href="<?php echo get_home_url( null, 'corp-clients/'); ?>">Корпоративным клиентам</a></li>
					</ul>
				</div>
				<!-- /.collumn-2 -->

				<div class="column-3">
					<div class="title">Контакты</div>

					<a href="tel:+375291569521" class="icon-phone">+375 (29) 156-95-21</a>
					<a href="mailto:info@power.avtonova.by" class="icon-mail">info@power.avtonova.by</a>
					<a href="<?php echo get_home_url( null, 'contacts/'); ?>" class="icon-map">Гомель, ул. Хатаевича, 2</a>
					<span class="icon-time">Время работы:</span>
					<ul>
						<li>Понед. – Пятн.: с 9.00 до 19.00</li>
						<li>Суб. – Воскр.: с 09.00 до 17.00</li>
					</ul>
				</div>
				<!-- /.collumn-3 -->

				<div class="column-4">
					<a href="<?php echo get_home_url(); ?>" class="logo">
						<img src="<?php bloginfo('template_url') ?>/src/img/logo-v2.png" alt="автонова">
					</a>

					<p class="bold">ООО "Автонова"</p>
					<a href="#callback-modal" rel="modal:open" class="btn btn-outline">бесплатная консультация</a>

					<div class="copyright">Copyright ©, 2000-2019 ООО “Автонова”. Первый мультибрендовый салон электромобилей в Беларуси.</div>

					<a href="<?php echo get_home_url(null, 'privacy-policy/'); ?>" class="primary">Политика конфиденциальности</a>
				</div>
				<!-- /.collumn-4 -->
			</div>
			<!-- /.row -->
		</div>
	</footer><!-- #footer -->
</div><!-- #page -->

<?php get_template_part('templates/parts/modals') ?>

<?php wp_footer(); ?>

<script>
	function callHandler(form) {
		console.log('form func is running');
		var  msg = jQuery(form).serialize();
		jQuery.ajax({
			type: 'POST',
			url: '<?php bloginfo("template_url"); ?>/src/send.php',
			data: msg,
			success: function(data) {
				console.log('form ok');
				jQuery.modal.close();
				jQuery("#thx-modal").modal({
					fadeDuration: 200
				});
				return false;
			},
			error: function () {
				console.log('form error');
				jQuery.modal.close();
			}
		});
	}
</script>

</body>
</html>
