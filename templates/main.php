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




<?php
get_footer();
?>