<?php
/*
*   Template Name: Контакты
*/
get_header();
?>

<div id="contacts">
    <div class="container">
        <a href="<?php echo get_home_url(); ?>" class="logo">
            <img src="<?php bloginfo('template_url') ?>/src/img/logo-v2.png" alt="автонова">
        </a>
        <div class="row">
            <div class="column-1">
                <div class="h3">АВТОНОВА - ЭЛЕКТРОМОБИЛИ</div>

                <div class="links">
                    <a href="#map-container" class="icon-map">Гомель, ул. Хатаевича, 2</a>
                    <a href="tel:+375447300300" class="icon-phone">+375 (44) 7-300-300</a>
                    <a href="mailto:info@power.avtonova.by" class="icon-mail">info@power.avtonova.by</a>
                </div>
                
                <div class="img-wrapper">
                    <img src="<?php bloginfo('template_url') ?>/src/img/icons/no-picture.svg" alt="no-picture">
                </div>
            </div>
            <!-- /.column-1 -->
            <div class="column-2">
                <div class="h3">Отдел продаж</div>
                <div class="links">
                    <a href="tel:+375447300300" class="icon-phone">+375 (44) 7-300-300</a>
                    <a href="mailto:sale-power@autonova.by" class="icon-mail">sale-power@autonova.by</a>
                    <div class="footnote">Понедельник-пятница: с 09:00 до 19:00 <br> Суббота-воскресенье: с 10:00 до 16:00</div>

                </div>


                <div class="img-wrapper">
                    <img src="<?php bloginfo('template_url') ?>/src/img/icons/no-picture.svg" alt="no-picture">
                </div>
            </div>
            <!-- /.column-2 -->
            <div class="column-3">
                <div class="h3">Отдел сервиса</div>
                <div class="links">
                    <a href="tel:+375447300300" class="icon-phone">+375 (44) 7-300-300</a>
                    <a href="mailto:servis-power@autonova.by" class="icon-mail">servis-power@autonova.by</a>
                    <div class="footnote">Понедельник-пятница: с 09:00 до 19:00 <br> Суббота-воскресенье: с 10:00 до 16:00</div>

                </div>


                <div class="img-wrapper">
                    <img src="<?php bloginfo('template_url') ?>/src/img/icons/no-picture.svg" alt="no-picture">
                </div>
            </div>
            <!-- /.column-3 -->
        </div>
        <!-- /.row -->
    </div>
</div>

<div id="map-container">
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A0e57283585b8af684919e86a81daac65ba8f4a82d053c2caf9ff597f397e32ff&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=false"></script>

    <div class="container">
        <div id="map-consult-form">
            <div class="h3">Консультация специалиста</div>
            <p>Оставьте заявку онлайн и наш специалист свяжется с Вами в ближайшее время:</p>

            <form action="javascript:" onsubmit="callHandler('#map-form')" id="map-form">
                <input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
                <input type="hidden" name="form" value="Консультация специалиста">
                <div class="pair">
                    <div class="input-wrapper">
                        <input type="text" placeholder="Ваше имя" name="user_name" required>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" placeholder="Ваш № телефона" name="user_phone" class="phone-mask" required>
                    </div>
                </div>

                <button class="btn btn-primary btn-block">заказать консультацию</button>
            </form>
        </div>
    </div>
</div>

<?php
get_footer();
?>