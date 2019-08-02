<?php
/*
*   Template Name: Каталог
*/
get_header();
?>

<div id="catalog-page">

<div class="breadcrumbs-section with-border">
    <div class="container">
        <div class="breadcrumbs">
            <span class="label">Вы тут:</span>
            <a href="<?php echo get_home_url() ?>">Главная</a>
            <span>Каталог электромобилей</span>
        </div>
    </div>
</div>

<div class="catalog-section">
    <div class="container">
        <div class="head">
            <h1>Каталог электромобилей</h1>
            <div class="btn btn-outline">Смотреть каталог аксессуаров</div>
        </div>
        <div class="sort-by">
            <div class="label">Сортировать по: </div>
            <?php echo do_shortcode('[searchandfilter id="94"]') ?>
        </div>

        <div class="catalog-block">
            <div class="sidebar">
                <div id="filter">
                    <div class="h6">Подбор электромобиля</div>
                    <?php echo do_shortcode('[searchandfilter id="92"]') ?>
                </div>
                <?php get_template_part('templates/parts/manager-card') ?>
            </div>
            <!-- /.sidebar -->

            <div class="products">
                <div class="catalog-row">
                    <?php
                        // задаем нужные нам критерии выборки данных из БД
                        $args = array(
                            'posts_per_page' => 9,
                            'post_type' => 'automobiles'
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
                <!-- /.product-row -->
            </div>
            <!-- /.products -->
        </div>
        <!-- /.catalog-row -->
    </div>
</div>

</div>
<!-- /#catalog-page -->



<?php
get_footer();
?>