<?php
/*
*   Template Name: Политика конфиденциальности
*/
get_header();
?>

<div class="section article">
    <div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
    endwhile; else: ?>
        <p>Тут пока пусто...</p>
    <?php endif; ?>
    </div>
</div>

<?php
get_footer();
?>