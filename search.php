

<?php
get_header();
?>

<div id="catalog-page">

<div class="breadcrumbs-section with-border">
    <div class="container">
        <div class="breadcrumbs">
            <span class="label">Вы тут:</span>
            <a href="<?php echo get_home_url() ?>">Главная</a>
            <span><?php the_title() ?></span>
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
			<span class="label">Сортировать по: </span>
			<span>Цена по возрастанию</span>
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
				<?php if ( have_posts() ) :
                        while ( have_posts() ) :
							the_post();
								get_template_part('templates/parts/automobile-card');
							endwhile;
							the_posts_navigation();
						else :
							echo '<div class="h3" style="margin-top: 1rem;">Товаров не найдено</div>';
						endif;
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