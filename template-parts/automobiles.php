<div class="breadcrumbs-section with-border">
    <div class="container">
        <div class="breadcrumbs">
            <span class="label">Вы тут:</span>
            <a href="<?php echo get_home_url() ?>">Главная</a>
            <a href="<?php echo get_home_url(null, 'catalog/') ?>">Каталог электромобилей</a>
            <span><?php the_title(); ?></span>
        </div>
    </div>
</div>

<div id="single-product">
    <div class="container">
        <div class="head">
            <div class="title-medium<?php if(has_term( 'in-stock', 'additional-options', $post->ID )) 
                                            echo ' in-stock ';  ?>"><?php the_title(); ?></div>
            
        </div>
        <!-- /.head -->
        <div class="main-card">
            <div class="slider-wrapper">
                <div id="big-slider">
                    <?php for ($i=1; $i<=15; $i++): ?>
                        <div class="slide">                
                            <img data-lazy="<?php 
                            $image = get_field('car_image_'.$i);
                            if(isset($image)) 
                            {
                                the_field('car_image_'.$i);
                            } 
                            ?>" alt="<?php the_title() ?>">
                        </div>
                    <?php endfor; ?>
                </div>
                <!-- /#big-slider -->
                <div id="nav-slider">
                    <?php for ($i=1; $i<=15; $i++): 
                        $image = get_field('car_image_'.$i);
                        if($image):?>
                            <a class="slide" href="#" data-slide="<?=$i?>">                
                            <img src="<?=$image?>" alt="<?php the_title() ?>">
                        <?php endif;
                    endfor; ?>
                </div>
                <!-- /#nav-slider -->
            </div>
            <!-- /.slider-wrapper -->
            <div class="sidebar-wrapper">
                <a href="#" class="i-info">Освобожден от дорожного сбора</a>
                <div class="gray-card main-features">
                    <ul class="leaders">
                        <li>
                            <span class="name">Марка</span>
                            <span class="value"><?php $term = get_the_terms($post->ID, 'mark'); echo $term[0]->name; ?></span>
                        </li>

                        <li>
                            <span class="name">Модель</span>
                            <span class="value"><?php the_field('модель'); ?></span>
                        </li>

                        <li>
                            <span class="name">Запас хода</span>
                            <span class="value">до <?php the_field('range'); ?> км</span>
                        </li>

                        <li>
                            <span class="name">Кузов</span>
                            <span class="value"><?php $term = get_the_terms($post->ID, 'type'); echo $term[0]->name; ?></span>
                        </li>

                        <li>
                            <span class="name">Год</span>
                            <span class="value"><?php the_field('year'); ?></span>
                        </li>

                        <li>
                            <span class="name">Пробег</span>
                            <span class="value"><?php the_field('пробег'); ?> км</span>
                        </li>

                        <li>
                            <span class="name">Батарея</span>
                            <span class="value"><?php the_field('батарея'); ?></span>
                        </li>

                        <li>
                            <span class="name">Трансмиссия</span>
                            <span class="value"><?php the_field('трансмиссия'); ?></span>
                        </li>

                        <li>
                            <span class="name">Цвет</span>
                            <span class="value"><?php $term = get_the_terms($post->ID, 'color'); echo $term[0]->name; ?></span>
                        </li>
                    </ul>                  
                </div>
                <!-- /.gray-card main-features -->
                <div class="pair">
                    <div class="price"><?php echo number_format(get_field('price'), 0, '', ' '); ?> BYN</div>
                    <a href="#test-drive-single-modal" rel="modal:open" class="btn btn-primary btn-small">Записаться на тест драйв</a>
                </div>
                <hr>
                <div class="pair">
                    <div class="price"><span class="small">от</span> <?php echo number_format(get_field('price_in_credit'), 0, '', ' '); ?> BYN <span class="sub">в кредит на <?php the_field('в_кредит_на') ?></span></div>
                    <a href="<?php echo get_home_url( null, 'credit/'); ?>" class="btn btn-primary btn-small">Подробнее про кредит</a>
                </div>

                <div class="gray-card fast-consult">
                    <div class="h6">Быстрая консультация</div>
                    <a href="tel:+375291569521" class="btn btn-outline btn-phone">+375 (29) 156-95-21</a>
                    <a href="tel:+375291569521" class="btn btn-outline btn-whatsapp">Написать в WhatsApp</a>
                    <a href="tel:+375291569521" class="btn btn-outline btn-viber">Написать в Viber</a>
                    <a href="tel:+375291569521" class="btn btn-outline btn-telegram">Написать в Telegram</a>
                </div>
                <!-- /.gray-card fast-consult -->
            </div>
            <!-- /.sidebar-wrapper -->
        </div>
        <!-- /.main-card -->
        <div id="tabs">
            <ul class="tabs-nav">
                <li><a href="#tabs-1">Характеристики <?php the_title(); ?></a></li>
                <li><a href="#tabs-2">Особенности</a></li>
            </ul>
            <div class="tab" id="tabs-1">
              <div class="table">
                  <div class="table-row">
                      <div class="name">Тип двигателя</div>
                      <div class="value"><?php the_field('тип_двигателя') ?></div>
                  </div>
                   <!-- /.table-row -->
                   <div class="table-row">
                      <div class="name">Максимальный крутящий момент электромотора</div>
                      <div class="value"><?php the_field('максимальный_крутящий_момент_электромотора') ?></div>
                  </div>
                   <!-- /.table-row -->
                   <div class="table-row">
                      <div class="name">Тип аккумулятора</div>
                      <div class="value"><?php the_field('тип_аккумулятора') ?></div>
                  </div>
                   <!-- /.table-row -->
                   <div class="table-row">
                      <div class="name">Медленная зарядка</div>
                      <div class="value"><?php the_field('медленная_зарядка') ?></div>
                  </div>
                   <!-- /.table-row -->
                   <div class="table-row">
                      <div class="name">Ускоренная зарядка</div>
                      <div class="value"><?php the_field('ускоренная_зарядка') ?></div>
                  </div>
                   <!-- /.table-row -->
                   <div class="table-row">
                      <div class="name">Быстрая зарядка</div>
                      <div class="value"><?php the_field('быстрая_зарядка') ?></div>
                  </div>
                   <!-- /.table-row -->
                   <div class="table-row">
                      <div class="name">Размер шин</div>
                      <div class="value"><?php the_field('размер_шин') ?></div>
                  </div>
                   <!-- /.table-row -->
                   <div class="table-row">
                      <div class="name">Количество мест</div>
                      <div class="value"><?php the_field('количество_мест') ?></div>
                  </div>
                   <!-- /.table-row -->
                   <div class="table-row">
                      <div class="name">Количество дверей</div>
                      <div class="value"><?php the_field('количество_дверей') ?></div>
                  </div>
                   <!-- /.table-row -->
                   <div class="table-row">
                      <div class="name">Количество дверей</div>
                      <div class="value"><?php the_field('длина') ?> мм</div>
                  </div>
                   <!-- /.table-row -->
                   <div class="table-row">
                      <div class="name">Ширина</div>
                      <div class="value"><?php the_field('ширина') ?> мм</div>
                  </div>
                   <!-- /.table-row -->
                   <div class="table-row">
                      <div class="name">Высота</div>
                      <div class="value"><?php the_field('высота') ?> мм</div>
                  </div>
                   <!-- /.table-row -->
                   <div class="table-row">
                      <div class="name">Клиренс</div>
                      <div class="value"><?php the_field('клиренс') ?> мм</div>
                  </div>
                   <!-- /.table-row -->
                   <div class="table-row">
                      <div class="name">Колесная база</div>
                      <div class="value"><?php the_field('колесная_база') ?> мм</div>
                  </div>
                   <!-- /.table-row -->
                   <div class="table-row">
                      <div class="name">Колея передних колес</div>
                      <div class="value"><?php the_field('колея_передних_колес') ?> мм</div>
                  </div>
                   <!-- /.table-row -->
                   <div class="table-row">
                      <div class="name">Колея задних колес</div>
                      <div class="value"><?php the_field('колея_задних_колес') ?> мм</div>
                  </div>
                   <!-- /.table-row -->
                   <div class="table-row">
                      <div class="name">Коэффициент аэродинамического сопротивления</div>
                      <div class="value"><?php the_field('коэффициент_аэродинамического_сопротивления') ?> Сх</div>
                  </div>
                   <!-- /.table-row -->
                   <div class="table-row">
                      <div class="name">Снаряженная масса</div>
                      <div class="value"><?php the_field('снаряженная_масса') ?> кг</div>
                  </div>
                   <!-- /.table-row -->
                   <div class="table-row">
                      <div class="name">Полная масса</div>
                      <div class="value"><?php the_field('полная_масса') ?> кг</div>
                  </div>
                   <!-- /.table-row -->
                   <div class="table-row">
                      <div class="name">Объём багажника</div>
                      <div class="value"><?php the_field('объём_багажника') ?> л</div>
                  </div>
                   <!-- /.table-row -->
              </div>
              <!-- /.table -->
            </div>
            <div class="tab" id="tabs-2">
                <div class="table">
                    <?php for ($i=1; $i <= 8; $i++): 
                        if(get_field('особенность_'.$i)):  ?>
                        <div class="table-row">
                            <div class="value"><?php the_field('особенность_'.$i) ?></div>
                        </div>
                        <!-- /.table-row -->
                        <?php endif; 
                    endfor; ?>
                
                </div>
                <!-- /.table -->
            </div>
        </div>
        <!-- /#tabs -->

        <div id="product-review" class="article">

                
            <?php if (get_the_content()): ?>
                <div class="title">Обзор <?php the_title(); ?></div>
                <?php the_content();
            endif; ?>

            
            <div class="gradient"></div>
            <a href="#" id="read-more" class="link-primary">Открыть обзор полностью</a>
        </div>
        <!-- /#product-review -->
    </div>
</div>

<?php get_template_part('templates/parts/calculator') ?>

<?php get_template_part('templates/parts/consult-section') ?>

<!-- Modal HTML embedded directly into document -->
<div id="test-drive-single-modal" class="modal">
    <div class="head">
        <div class="h2">Записаться на тест драйв <br> <?php the_title(); ?></div>
        <p>Оставьте свои контактные данные, чтобы мы смогли с вами связаться</p>
    </div>
    <div class="body">
        
        <form action="javascript:" onsubmit="callHandler('#test-drive-form')" id="test-drive-form">
            <input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
            <input type="hidden" name="form" value="Записаться на тест драйв <?php the_title(); ?>">
            <div class="input-row">
                <div class="input-wrapper">
                    <input type="text" placeholder="Ваше имя" name="user_name" required>
                </div>
                <div class="input-wrapper">
                    <input type="text" placeholder="Ваш № телефона" name="user_phone" class="phone-mask" required>
                </div>
            </div>
            <button class="btn btn-primary btn-block">Отправить</button>
            <p class="privacy-text">Нажимая на кнопку “Отправить”, Вы принимаете условия <a href="<?php echo get_home_url(null, 'privacy-policy/'); ?>">Политики конфиденциальности</a></p>
        </form>
    </div>
</div>


<script>
    (function($){    
        $(function() {
            $('#big-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                prevArrow: '<div class="slider-arrow prev"></div>',
                nextArrow: '<div class="slider-arrow next"></div>',
                autoplay: true,
                autoplaySpeed: 3000,
                lazyLoad: 'ondemand'
            });
            $('a[data-slide]').click(function(e) {
                e.preventDefault();
                var slideno = $(this).data('slide');
                $('#big-slider').slick('slickGoTo', slideno - 1);
            });
            $('#read-more').click(function() {
                $(this).hide();
                $('.gradient').hide();
                $('#product-review').css('height', 'unset');
                return false;
            });
        });
    })(jQuery); // <----- jQuery no conflict wrapper
</script>