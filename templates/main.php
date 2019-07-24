<?php
/*
*   Template Name: Главная страница
*/
get_header();
?>

<header>
    <div class="container">
        <h1>
            Первый мультибрендовый 
            <span class="block">салон электромобилей</span>
            <span class="block">в Беларуси</span>
        </h1>
        <ul class="main-ul">
            <li>Trade in</li>
            <li>Лизинг</li>
            <li>Сервис</li>
        </ul>
        <a href="#" class="btn btn-primary btn-large ">Записаться на тест драйв</a>

        <ul class="links foot">
            <li>
                <a href="#">Nissan Leaf от 199 руб./мес.</a>
            </li>
            <li>
                <a href="#">Fiat 500E от 99 руб./мес.</a>
            </li>
            <li>
                <a href="#">BMW i3 от 299 руб./мес.</a>
            </li>
        </ul>
    </div>
</header>
<!-- /header -->

<div class="section-features" id="features">
    <div class="container">
        <div class="features-row">
            <div class="feature">
                <div class="img-wrapper">
                    <img src="<?php bloginfo('template_url') ?>/src/img/home/features/icon-service.svg" alt="service">
                </div>
                <div class="content">
                    <h3 class="h3">Сервис</h3>
                    <p>Диагностика, ремонт и обслуживание электромобилей в Гомеле</p>
                    <a href="#" class="link-primary">подробнее</a>
                </div>
            </div>
            <!-- ./feature -->
            <div class="feature">
                <div class="img-wrapper">
                    <img src="<?php bloginfo('template_url') ?>/src/img/home/features/icon-car-now.svg" alt="service">
                </div>
                <div class="content">
                    <h3 class="h3">Авто в наличии</h3>
                    <p>Большой штат электромобилей на складе в Гомеле</p>
                    <a href="#" class="link-primary">подробнее</a>
                </div>
            </div>
            <!-- ./feature -->
            <div class="feature">
                <div class="img-wrapper">
                    <img src="<?php bloginfo('template_url') ?>/src/img/home/features/icon-car-wait.svg" alt="service">
                </div>
                <div class="content">
                    <h3 class="h3">Под заказ от 2-х дней</h3>
                    <p>Заказ и доставка авто из Украины, Европы и США</p>
                    <a href="#" class="link-primary">подробнее</a>
                </div>
            </div>
            <!-- ./feature -->
            <div class="feature">
                <div class="img-wrapper">
                    <img src="<?php bloginfo('template_url') ?>/src/img/home/features/icon-calculator.svg" alt="service">
                </div>
                <div class="content">
                    <h3 class="h3">Кредит / Лизинг</h3>
                    <p>Кредитные и лизинговые программы при покупке электромобилей</p>
                    <a href="#" class="link-primary">подробнее</a>
                </div>
            </div>
            <!-- ./feature -->
            <div class="feature">
                <div class="img-wrapper">
                    <img src="<?php bloginfo('template_url') ?>/src/img/home/features/icon-tradein.svg" alt="service">
                </div>
                <div class="content">
                    <h3 class="h3">TRADE IN</h3>
                    <p>Прием Вашего авто в зачет по выгодным ценам</p>
                    <a href="#" class="link-primary">подробнее</a>
                </div>
            </div>
            <!-- ./feature -->
        </div>
        <!-- ./features-row -->
    </div>
    <img class="car" src="<?php bloginfo('template_url') ?>/src/img/home/car-on-charging-compressed.jpg" alt="">
</div>
<!-- /#features -->

<div class="section-calculator">
    <div class="circles">
        <div class="circle-1"></div>
        <div class="circle-2"></div>
        <div class="circle-3"></div>
    </div>

    <div class="container">
        <div id="calculator">
            <div class="head">
                <div class="h2">Калькулятор экономии электромобилей:</div>
            </div>
            <!-- /.head -->
            <div class="body">
                <div class="left-column">
                    <div class="h3">Цена:</div>

                    <div class="pair">
                        <label for="consumption">Расход</label>
                        <div class="input-wrapper">
                            <input id="consumption" type="text" placeholder="XXXX XXXX XXXX">
                        </div>
                    </div>
                    <div class="pair">
                        <label for="cost">Стоимость</label>
                        <div class="input-wrapper">
                            <input id="cost" type="text" placeholder="XXXX XXXX XXXX">
                        </div>
                    </div>
                    <div class="pair">
                        <label for="mileage_per_month">Пробег в месяц</label>
                        <div class="input-wrapper">
                            <input id="mileage_per_month" type="text" placeholder="XXXX XXXX XXXX">
                        </div>
                    </div>
                    <div class="pair">
                        <label for="filling_rate">Тариф заправки</label>
                        <div class="input-wrapper">
                            <input id="filling_rate" type="text" placeholder="XXXX XXXX XXXX">
                        </div>
                    </div>
                </div>
                <!-- /.left-column -->
                <div class="right-column">
                    <div class="h3 primary">Экономия:</div>

                    <ul class="leaders">
                        <li>
                            <span class="name">На топливе</span>
                            <span class="value">XXXX</span>
                        </li>

                        <li>
                            <span class="name">На ГСМ</span>
                            <span class="value">XXXX</span>
                        </li>

                        <li>
                            <span class="name">На обслуживании и ремонте</span>
                            <span class="value">XXXX</span>
                        </li>

                        <li>
                            <span class="name">За 1 год и за 3 года</span>
                            <span class="value">XXXX</span>
                        </li>
                    </ul>
                </div>
                <!-- /.right-column -->
            </div>
            <!-- /.body -->
            <div class="foot">
                <a href="#" class="link-primary icon-gas-station">Карта заправок в Беларуси</a>
            </div>
            <!-- /.foot -->
        </div>
        <!-- /#calculator -->
    </div>
</div>
<!-- /.section-calculator -->

<div id="myths">
    <div class="container">
        <div class="row">
            <div class="left-column">
                <div class="h2">
                    <span class="big">МИФЫ</span>
                    об электромобилях
                </div>
                <div class="btn btn-primary">Узнать все мифы</div>
            </div>
            <!-- /.left-column -->
            <div class="right-column">
                <img src="<?php bloginfo('template_url') ?>/src/img/home/charging-plug-compressed.jpg" alt="charging-plug">
            </div>
            <!-- /.right-column -->
        </div>
    </div>
</div>
<!-- /#myths -->

<div class="section gray" id="catalog">
    <div class="container">
        <div class="h2 center">Каталог электромобилей</div>

        <div id="tabs">
            <ul class="tabs-nav">
                <li><a href="#tabs-1">Электромобили в наличии</a></li>
                <li><a href="#tabs-2">Новые поступления</a></li>
                <li><a href="#tabs-3">Акционные предложения</a></li>
            </ul>
            <div class="tab" id="tabs-1">
               <div class="catalog-row">
                    <?php echo get_template_part('templates/parts/automobile-card') ?>
               </div>
            </div>
            <div class="tab" id="tabs-2">
            <div class="catalog-row">
                    <?php echo get_template_part('templates/parts/automobile-card') ?>
               </div>
            </div>
            <div class="tab" id="tabs-3">
                <div class="catalog-row">
                    <?php echo get_template_part('templates/parts/automobile-card') ?>
               </div>
            </div>
        </div>
        <!-- /#tabs -->
    </div>
</div>
<!-- /#catalog -->

<div id="special-offer">
    <div class="container">
        <div class="h2">
            <span class="big">Специальное предложение</span>
            для корпоративных клиентов с автопарком
            <span class="block">от 10 автомобилей</span>
        </div>
        <div class="btn btn-primary">Узнать подробнее</div>
    </div>
</div>
<!-- /#special-offer -->

<div class="section" id="consult-manager">
    <div class="container">
        <div class="h2 center">Консультация менеджера</div>

        <div class="row">
            <div class="column-left manager-label">
                <img src="<?php bloginfo('template_url') ?>/src/img/home/consult-man-compressed.jpg" alt="Консультация менеджера">
            </div>
            <!-- /.column-left -->
            <div class="column-right">
                <div class="h3">Консультация специалиста</div>
                <p class="subtitle">Если у Вас есть какие-либо вопросы или предложения, пожалуйста задайте их нашему специалисту:</p>

                <a href="tel:+375291569521" class="phone-link velcom">+375 (29) 156-95-21</a>
                <a href="tel:+375291569521" class="phone-link mts">+375 (29) 156-95-21</a>

                <form action="#" id="main-manager-form" >
                    <p>Оставьте заявку онлайн и наш специалист свяжется с Вами в ближайшее время:</p>
                    <div class="pair">
                        <div class="input-wrapper">
                            <input type="text" placeholder="Ваше имя" name="user_name">
                        </div>
                        <div class="input-wrapper">
                            <input type="text" placeholder="Ваш № телефона" name="user_phone" class="phone-mask">
                        </div>
                    </div>  
                    <button type="submit" class="btn btn-primary btn-block">Заказать консультацию</button>
                </form>
            </div>
             <!-- /.column-right -->
        </div>
    </div>
</div>
<!-- /#consult-manager -->

<div id="subscription">
    <div class="circles">
        <div class="circle-1"></div>
        <div class="circle-2"></div>
        <div class="circle-3"></div>
    </div>

    <div class="container">
        <div class="pair">
            <form action="#" class="subscr-form">
                <div class="input-wrapper-2">
                    <input type="email" placeholder="Адрес электронной почты" name="user_email">
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

<?php
get_footer();
?>