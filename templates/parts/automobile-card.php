<a href="<?php the_permalink() ?>" class="car-card <?php if(has_term( 'in-stock', 'additional-options', $post->ID )) { echo ' in-stock '; } ?> ">
    <div class="img-container">
        <img src="<?php bloginfo('template_url') ?>/src/img/home/product-thumb.jpg" alt="<?php the_title(); ?>">
    </div>
    <div class="content">
        <div class="title"><?php the_title() ?></div>

        <ul class="leaders">
            <li>
                <span class="name">Макс. скорость</span>
                <span class="value"><?php the_field('max_speed'); ?> км/ч</span>
            </li>

            <li>
                <span class="name">Запас хода</span>
                <span class="value">до <?php the_field('range'); ?> км</span>
            </li>

            <li>
                <span class="name">Тип кузова</span>
                <span class="value"><?php the_field('max_speed'); ?></span>
            </li>

            <li>
                <span class="name">Год выпуска</span>
                <span class="value"><?php the_field('year'); ?></span>
            </li>
        </ul>

        <div class="price"><?php echo number_format(get_field('price'), 0, '', ' '); ?> BYN</div>

        <div class="btn btn-primary">Подробнее</div>
    </div>
</a>
<!-- /.car-card -->