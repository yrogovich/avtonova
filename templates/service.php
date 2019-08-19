<?php
/*
*   Template Name: Сервис электромобилей
*/
get_header();
?>

<section class="section-internal" id="service">
    <div class="container">
        <h2>Наши услуги:</h2>

        <div class="row">
            <div class="content">
                <div class="service-block">
                    <div class="h5">Компьютерная диагностика</div>
                    <a href="#service-modal" rel="modal:open" class="btn btn-primary btn-small">Записаться на сервис</a>
                </div>
                <!-- /.service-block -->
                <div class="service-block">
                    <div class="h5">РЕМОНТ ХОДОВОЙ ЛЮБОЙ СЛОЖНОСТИ</div>
                    <a href="#service-modal" rel="modal:open" class="btn btn-primary btn-small">Записаться на сервис</a>
                </div>
                <!-- /.service-block -->
                <div class="service-block">
                    <div class="h5">РЕМОНТ И ЗАМЕНА ВЫСОКОВОЛЬТНОЙ БАТАРЕИ</div>
                    <a href="#service-modal" rel="modal:open" class="btn btn-primary btn-small">Записаться на сервис</a>
                </div>
                <!-- /.service-block -->
                <div class="service-block">
                    <div class="h5">ОБСЛУЖИВАЮЩИЙ РЕМОНТ И ЗАМЕНА ЭЛЕКТРОДВИГАТЕЛЯ</div>
                    <a href="#service-modal" rel="modal:open" class="btn btn-primary btn-small">Записаться на сервис</a>
                </div>
                <!-- /.service-block -->
                <div class="service-block">
                    <div class="h5">ОБСЛУЖИВАЮЩИЙ РЕМОНТ И ЗАМЕНА РАДИАТОРА</div>
                    <a href="#service-modal" rel="modal:open" class="btn btn-primary btn-small">Записаться на сервис</a>
                </div>
                <!-- /.service-block -->
                <div class="service-block">
                    <div class="h5">РЕМОНТ И ЗАМЕНА ЭЛЕКТРО ПЕЧКИ</div>
                    <a href="#service-modal" rel="modal:open" class="btn btn-primary btn-small">Записаться на сервис</a>
                </div>
                <!-- /.service-block -->
                <div class="service-block">
                    <div class="h5">ПРОГРАММИРОВАНИЕ АВТОМОБИЛЕЙ</div>
                    <a href="#service-modal" rel="modal:open" class="btn btn-primary btn-small">Записаться на сервис</a>
                </div>
                <!-- /.service-block -->
                <div class="service-block">
                    <div class="h5">ЗАПРАВКА И ОБСЛУЖИВАНИЕ КОНДИЦИОНЕРОВ</div>
                    <a href="#service-modal" rel="modal:open" class="btn btn-primary btn-small">Записаться на сервис</a>
                </div>
                <!-- /.service-block -->
                <div class="service-block">
                    <div class="h5">ЗРЕМОНТ И ОБНОВЛЕНИЕ ЭЛЕКТРО-БЛОКОВ, ПЛАТ АВТОМОБИЛЯ</div>
                    <a href="#service-modal" rel="modal:open" class="btn btn-primary btn-small">Записаться на сервис</a>
                </div>
                <!-- /.service-block -->
                <div class="service-block">
                    <div class="h5">РЕМОНТ И АДАПТАЦИЯ ЗАРЯДНЫХ УСТРОЙСТВ</div>
                    <a href="#service-modal" rel="modal:open" class="btn btn-primary btn-small">Записаться на сервис</a>
                </div>
                <!-- /.service-block -->
                <div class="service-block">
                    <div class="h5">ПОДГОТОВКА АВТО ДО СЕРТИФИКАЦИИ</div>
                    <a href="#service-modal" rel="modal:open" class="btn btn-primary btn-small">Записаться на сервис</a>
                </div>
                <!-- /.service-block -->
                <div class="service-block">
                    <div class="h5">ПЛАНОВОЕ ТО ВСЕХ ВИДОВ ЭЛЕКТРОМОБИЛЕЙ</div>
                    <a href="#service-modal" rel="modal:open" class="btn btn-primary btn-small">Записаться на сервис</a>
                </div>
                <!-- /.service-block -->
                <div class="service-block">
                    <div class="h5">КОМПЛЕКСНАЯ ДИАГНОСТИКА АВТО</div>
                    <a href="#service-modal" rel="modal:open" class="btn btn-primary btn-small">Записаться на сервис</a>
                </div>
                <!-- /.service-block -->
            </div>
            <div class="sidebar">
                <div class="manager-consult">
                    <div class="h5">Консультация специалиста по сервисному обслуживанию</div>
                    <!-- <div class="manager-image">
                        <img src="<?php bloginfo('template_url') ?>/src/img/internal-pages/manager-image.png" alt="manager-image">
                    </div> 
                    <div class="h6">Артем Уваров</div>
                    <div class="manager-sub">Менеджер по продажам</div> -->

                    <div class="btns">
                        <a href="tel:+375447300300" class="btn btn-inverse">+375 (44) 7-300-300</a>
                        <a href="#consult-modal" rel="modal:open" class="btn btn-primary btn-small">Заказать консультацию</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="service-modal" class="modal">
    <div class="head">
        <div class="h2">Запись на сервис</div>
        <p>Оставьте свои контактные данные, чтобы мы смогли с вами связаться</p>
    </div>
    <div class="body">
        
        <form action="javascript:" onsubmit="callHandler('#service-form')" id="service-form">
            <input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
            <input type="hidden" name="form" value="Запись на сервис">
            <div class="input-row">
                <div class="input-wrapper">
                    <input type="text" placeholder="Ваше имя" name="user_name" required>
                </div>
                <div class="input-wrapper">
                    <input type="text" placeholder="Ваш № телефона" name="user_phone" class="phone-mask" required>
                </div>
            </div>
            <button class="btn btn-primary btn-block">Записаться</button>
            <p class="privacy-text">Нажимая на кнопку “Отправить”, Вы принимаете условия <a href="<?php echo get_home_url(null, 'privacy-policy/'); ?>">Политики конфиденциальности</a></p>
        </form>
    </div>
</div>

<?php
get_footer();
?>