<?php
/*
*   Template Name: Trade in Вашего автомобиля
*/
get_header();
?>

<div id="trade-in">
    <div class="container">
        <div class="info-box">Если у Вас есть автомобиль с пробегом - Вы можете обменять его по системе Trade-in и оформить доплату в кредит.</div>

        <div class="title-medium text-center">Узнайте стоимость Вашего авто:</div>

        <div class="get-cost-my-car">
            <form id="get-cost-my-car" action="javascript:" onsubmit="callHandler('#get-cost-my-car')" >
                <input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
                <input type="hidden" name="form" value="Узнайте стоимость авто">
                
                <div class="row-1">
                    <div class="h3">КОНТАКТНАЯ ИНФОРМАЦИЯ</div>
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
                </div>
                <!-- /.row-1 -->
                <div class="row-2">
                    <div class="h3">Опишите Ваш автомобиль</div>
                    <div class="input-row">
                        <div class="input-wrapper">
                            <input type="text" placeholder="Марка" name="car_name" required>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" placeholder="Модель" name="car_model" required>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" placeholder="Год выпуска" name="car_year" required>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" placeholder="Пробег" name="car_mileage" required>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" placeholder="Цена" name="car_price" required>
                        </div>
                    </div>
                </div>
                <!-- /.row-2 -->
                <div class="row-3">
                    <div class="h3">Выберите автомобиль, который вы желаете купить</div>
                    <div class="input-wrapper selector">
                        <select class="custom-select" name="favorite_car">
                            <option>Модель желаемого автомобиля</option>
                            <?php 
                                // задаем нужные нам критерии выборки данных из БД
                                $args = array(
                                    'posts_per_page' => 50,
                                    'post_type' => 'automobiles'
                                );

                                $query = new WP_Query( $args );

                                // Цикл
                                if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) {
                                        $query->the_post(); ?> 
                                            <option value="<?php the_title() ?>"><?php the_title() ?></option>
                                        <?
                                    }
                                } 
                                // Возвращаем оригинальные данные поста. Сбрасываем $post.
                                wp_reset_postdata();
                            ?>
                        </select>
                    </div>
                    <div>
                        <button class="btn btn-primary">Отправить</button>
                    </div>
                </div>
                <!-- /.row-3 -->
            </form>
        </div>
    </div>
</div>


<?php
get_footer();
?>