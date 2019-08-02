<div class="section-features 
    <?php if(is_front_page() || is_home())
            echo "white"; ?>" id="features">
    <div class="container">
        <div class="features-row">
            <div class="feature">
                <div class="img-wrapper">
                    <img src="<?php bloginfo('template_url') ?>/src/img/home/features/icon-service.svg" alt="service">
                </div>
                <div class="content">
                    <h3 class="h3">Сервис</h3>
                    <p>Диагностика, ремонт и обслуживание электромобилей в Гомеле</p>
                    <a href="<?php echo get_home_url( null, 'service/'); ?>" class="link-primary">подробнее</a>
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
                    <a href="<?php echo get_home_url( null, 'catalog/?_sft_additional-options=in-stock'); ?>" class="link-primary">подробнее</a>
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
                    <a href="<?php echo get_home_url( null, 'catalog/'); ?>" class="link-primary">подробнее</a>
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
                    <a href="<?php echo get_home_url( null, 'credit/'); ?>" class="link-primary">подробнее</a>
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
                    <a href="<?php echo get_home_url( null, 'trade-in/'); ?>" class="link-primary">подробнее</a>
                </div>
            </div>
            <!-- ./feature -->
        </div>
        <!-- ./features-row -->
    </div>
    <img class="car" src="<?php bloginfo('template_url') ?>/src/img/home/car-on-charging-compressed.jpg" alt="">
</div>
<!-- /#features -->