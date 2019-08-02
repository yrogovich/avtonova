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
        <a href="#test-drive-modal" rel="modal:open" class="btn btn-primary btn-large ">Записаться на тест драйв</a>

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

<?php get_template_part('templates/parts/section-features') ?>

<?php get_template_part('templates/parts/calculator') ?>

<div id="myths">
    <div class="container">
        <div class="row">
            <div class="left-column">
                <div class="h2">
                    <span class="big">МИФЫ</span>
                    об электромобилях
                </div>
                <a href="<?php echo get_home_url( null, 'myfth/'); ?>" class="btn btn-primary">Узнать все мифы</a>
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
                    <?php
                        // задаем нужные нам критерии выборки данных из БД
                        $args = array(
                            'posts_per_page' => 3,
                            'post_type' => 'automobiles',
                            'tax_query' => array(
                                array (
                                    'taxonomy' => 'additional-options',
                                    'field' => 'slug',
                                    'terms' => 'in-stock',
                                )
                            ),
                        );

                        $query = new WP_Query( $args );

                        // Цикл
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                                $query->the_post();
                                get_template_part('templates/parts/automobile-card');
                            }
                        } else {
                           echo '<div class="h3" style="margin-top: 1rem;">Товаров не найдено</div>';
                        }
                        // Возвращаем оригинальные данные поста. Сбрасываем $post.
                        wp_reset_postdata();
                    ?>
               </div>
            </div>
            <div class="tab" id="tabs-2">
            <div class="catalog-row">
                    <?php
                        // задаем нужные нам критерии выборки данных из БД
                        $args = array(
                            'posts_per_page' => 3,
                            'post_type' => 'automobiles',
                            'tax_query' => array(
                                array (
                                    'taxonomy' => 'additional-options',
                                    'field' => 'slug',
                                    'terms' => 'novye-postupleniya',
                                )
                            ),
                        );

                        $query = new WP_Query( $args );

                        // Цикл
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                                $query->the_post();
                                get_template_part('templates/parts/automobile-card');
                            }
                        } else {
                           echo '<div class="h3" style="margin-top: 1rem;">Товаров не найдено</div>';
                        }
                        // Возвращаем оригинальные данные поста. Сбрасываем $post.
                        wp_reset_postdata();
                    ?>
               </div>
            </div>
            <div class="tab" id="tabs-3">
                <div class="catalog-row">
                    <?php
                        // задаем нужные нам критерии выборки данных из БД
                        $args = array(
                            'posts_per_page' => 3,
                            'post_type' => 'automobiles',
                            'tax_query' => array(
                                array (
                                    'taxonomy' => 'additional-options',
                                    'field' => 'slug',
                                    'terms' => 'akczionnye-predlozheniya',
                                )
                            ),
                        );

                        $query = new WP_Query( $args );

                        // Цикл
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                                $query->the_post();
                                get_template_part('templates/parts/automobile-card');
                            }
                        } else {
                           echo '<div class="h3" style="margin-top: 1rem;">Товаров не найдено</div>';
                        }
                        // Возвращаем оригинальные данные поста. Сбрасываем $post.
                        wp_reset_postdata();
                    ?>
               </div>
            </div>
        </div>
        <!-- /#tabs -->

        <div class="btns">
            <a href="<?php echo get_home_url( null, 'catalog/'); ?>" class="btn btn-primary">Смотреть весь каталог</a>
            <a href="#" class="btn btn-primary">Аксессуары для электроавтомобилей</a>
        </div>
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
        <a href="<?php echo get_home_url( null, 'corp-clients/'); ?>" class="btn btn-primary">Узнать подробнее</a>
    </div>
</div>
<!-- /#special-offer -->

<?php get_template_part('templates/parts/consult-section') ?>

<?php
get_footer();
?>