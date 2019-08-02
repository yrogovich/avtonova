<?php
/*
*   Template Name: Кредит
*/
get_header();
?>

<div class="section" id="credit">
    <div class="container">
        <div class="h3">Компания “Автонова Моторс” Предлагает Вам обновленный <br> финансовый продукт - <span class="primary">“Выгодный кредит на Электромобили”</span></div>
        <div class="row">
            <div class="column-left">
                <ul class="checklist">
                    <li>Только паспорт. Без справок.</li>
                    <li>Первоначальный взнос - <span class="bold">от 20%;</span></li>
                    <li class="nowrap">Возраст кредитуемого автомобиля - <span class="bold">до 12 лет</span> (с 2008 г. включительно);</li>
                    <li>Валюта кредитования -  <span class="bold">белорусские рубли;</span></li>
                    <li>Срок кредитования - до 5 лет;</li>
                    <li>Ставка по кредиту - СР*+7,99%;</li>
                    <li>Возможность <span class="bold">досрочного погашения;</span></li>
                    <li>Оформление <span class="bold">на месте за 60 мин.;</span></li>
                </ul>

                <div class="footnote">*По состоянию на 26.02.2019 г ставка рефинансирования (СР) = 10%.</div>

                <a href="#callback-modal" rel="modal:open" class="btn btn-primary">Перезвоните мне</a>
            </div>
            <!-- /.column-left -->
            <div class="column-right">
                <img src="<?php bloginfo('template_url') ?>/src/img/credit/credit.png" alt="fiat">
            </div>
            <!-- /.column-right -->
        </div>
    </div>
</div>


<?php
get_footer();
?>