<?php
/*
*   Template Name: Корпоративным клиентам
*/
get_header();
?>

<div class="section template-1" id="get-offer">
    <div class="container">
        <div class="row">
            <div class="left-side">
                <div class="title-medium">Компания Автонова рада предложить корпоративному сегмену <span class="primary">особые условия по лизингу</span> на покупку электромобилей от 10 единиц</div>
                <a href="#corp-modal" rel="modal:open" class="btn btn-primary">Получить подробное КП с условиями лизинга</a>

                <div class="contacts">
                    <p class="bold">Или связаться с нашими менеджерами:</p>
                    <a href="tel:+375447300300" class="icon-phone">375 (44) 7-300-300</a>
                    <a href="mailto:info@power.avtonova.by" class="icon-mail">korp-power@autonova.by</a>
                </div>
            </div>
            <div class="right-side">
                <div class="with-bubbles">
                    <div class="bubble"></div>
                    <img src="<?php bloginfo('template_url') ?>/src/img/corp-page/img-1.jpg" alt="nissan">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section template-1 gray">
    <div class="container">
        <div class="row">
            <div class="right-side">
                <div class="with-bubbles">
                    <div class="bubble"></div>
                    <img src="<?php bloginfo('template_url') ?>/src/img/corp-page/img-2.jpg" alt="ev">
                </div>
            </div>
            <!-- /.right-side -->
            <div class="left-side">
                <img class="icon" src="<?php bloginfo('template_url') ?>/src/img/corp-page/icon-calc.svg" alt="calc">
                <div class="primary-text">
                    До <span class="big">3 000 000</span>  бел.руб. в год!*
                </div>
                <div class="bold">Может достигать экономия на автопарке электрических автомобилей. За счет экономии на топливе, ремонте и обслуживании автомобилей.</div>
                <div class="footnote">*Данные для парка 20 машин логистической службы.</div>
            </div>
            <!-- /.left-side -->
        </div>
    </div>
</div>


<?php get_template_part('templates/parts/calculator') ?>

<?php
get_footer();
?>