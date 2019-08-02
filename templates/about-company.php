<?php
/*
*   Template Name: О компании
*/
get_header();
?>


<div class="section" id="about">
    <div class="container">
        <div class="row">
            <div class="text">
                <a href="<?php echo get_home_url(); ?>" class="logo">
					<img src="<?php bloginfo('template_url') ?>/src/img/logo-v2.png" alt="автонова">
                </a>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>

                <div class="img-wrapper">
                    <img src="<?php bloginfo('template_url') ?>/src/img/icons/no-picture.svg" alt="no-picture">
                </div>

                <div class="pair">
                    <div class="img-wrapper">
                        <img src="<?php bloginfo('template_url') ?>/src/img/icons/no-picture.svg" alt="no-picture">
                    </div>
                    <div class="img-wrapper">
                        <img src="<?php bloginfo('template_url') ?>/src/img/icons/no-picture.svg" alt="no-picture">
                    </div>
                </div>
            </div>
            <!-- /.content -->
            <div class="sidebar">
                <div class="title">Контакты</div>

                <div class="manager-consult manager-alt">
                    <div class="manager-image">
                        <img src="<?php bloginfo('template_url') ?>/src/img/internal-pages/manager-image.png" alt="manager-image">
                    </div>

                    <div class="content">
                        <div class="h6">Артем Уваров</div>
                        <div class="manager-sub">Менеджер по продажам</div>

                        <div class="btns">
                            <a href="mailto:vizhunou@autonova.by" class="btn btn-inverse">vizhunou@autonova.by</a>
                            <a href="tel:+375291569521" class="btn btn-inverse">+375 (29) 156-95-21</a>
                        </div>
                    </div>
                </div>
                <!-- /.manager -->
                <div class="manager-consult manager-alt">
                    <div class="manager-image">
                        <img src="<?php bloginfo('template_url') ?>/src/img/internal-pages/manager-image.png" alt="manager-image">
                    </div>

                    <div class="content">
                        <div class="h6">Артем Уваров</div>
                        <div class="manager-sub">Менеджер по продажам</div>

                        <div class="btns">
                            <a href="mailto:vizhunou@autonova.by" class="btn btn-inverse">vizhunou@autonova.by</a>
                            <a href="tel:+375291569521" class="btn btn-inverse">+375 (29) 156-95-21</a>
                        </div>
                    </div>
                </div>
                <!-- /.manager -->
                <div class="manager-consult manager-alt">
                    <div class="manager-image">
                        <img src="<?php bloginfo('template_url') ?>/src/img/internal-pages/manager-image.png" alt="manager-image">
                    </div>

                    <div class="content">
                        <div class="h6">Артем Уваров</div>
                        <div class="manager-sub">Менеджер по продажам</div>

                        <div class="btns">
                            <a href="mailto:vizhunou@autonova.by" class="btn btn-inverse">vizhunou@autonova.by</a>
                            <a href="tel:+375291569521" class="btn btn-inverse">+375 (29) 156-95-21</a>
                        </div>
                    </div>
                </div>
                <!-- /.manager -->
                <div class="manager-consult manager-alt">
                    <div class="manager-image">
                        <img src="<?php bloginfo('template_url') ?>/src/img/internal-pages/manager-image.png" alt="manager-image">
                    </div>

                    <div class="content">
                        <div class="h6">Артем Уваров</div>
                        <div class="manager-sub">Менеджер по продажам</div>

                        <div class="btns">
                            <a href="mailto:vizhunou@autonova.by" class="btn btn-inverse">vizhunou@autonova.by</a>
                            <a href="tel:+375291569521" class="btn btn-inverse">+375 (29) 156-95-21</a>
                        </div>
                    </div>
                </div>
                <!-- /.manager -->
            </div>
            <!-- /.sidebar -->
        </div>

        <div class="write-director">
            <div class="pair">
                <div class="director">
                    <div class="img-wrapper">
                        <img src="<?php bloginfo('template_url') ?>/src/img/icons/no-picture.svg" alt="no-picture">
                    </div>
                    <div class="h6">Иван Иванов</div>
                    <div class="manager-sub">Директор ООО “Автонова”</div>
                </div>
               
                <div class="text">
                    <div class="h3">Написать директору</div>
                    <p>Если у Вас есть вопрос или предложение относительно работы нашей компании, Вы можете написать письмо напрямую директору используя форму обратной связи ниже:</p>
                    <form action="javascript:" onsubmit="callHandler('#write-director-form')" id="write-director-form">
                        <input type="hidden" name="form" value="Написать директору">
                        <div class="input-row">
                            <div class="input-wrapper">
                                <input type="text" placeholder="Ваше имя" name="user_name" required>
                            </div>
                            <div class="input-wrapper">
                                <input type="text" placeholder="Ваш № телефона" name="user_phone" class="phone-mask" required>
                            </div>
                            <div class="input-wrapper">
                                <input type="email" placeholder="Ваш E-mail" name="user_email" required>
                            </div>
                        </div>
                        <textarea name="user_message" cols="30" rows="6" placeholder="Ваше сообщение" required></textarea>

                        <button class="btn btn-primary">отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>