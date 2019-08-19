<div class="section" id="consult-manager">
    <div class="container">
        <div class="h2 center">Консультация менеджера</div>

        <div class="row">
            <div class="column-left manager-label">
                <img src="<?php bloginfo('template_url') ?>/src/img/home/consult-man-compressed.jpg" alt="Консультация менеджера">
            </div>
            <!-- /.column-left -->
            <div class="column-right">
                <div class="h3">Консультация специалиста</div>
                <p class="subtitle">Если у Вас есть какие-либо вопросы или предложения, пожалуйста задайте их нашему специалисту:</p>

                <a href="tel:+375447300300" class="phone-link velcom">+375 (44) 7-300-300</a>
                <a href="tel:+375447300300" class="phone-link mts">+375 (44) 7-300-300</a>

                <form id="main-manager-form" action="javascript:" onsubmit="callHandler('#main-manager-form')" >
                    <input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
                    <input type="hidden" name="form" value="Консультация специалиста">
                    <p>Оставьте заявку онлайн и наш специалист свяжется с Вами в ближайшее время:</p>
                    <div class="pair">
                        <div class="input-wrapper">
                            <input type="text" placeholder="Ваше имя" name="user_name" required>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" placeholder="Ваш № телефона" name="user_phone" class="phone-mask" required>
                        </div>
                    </div>  
                    <button type="submit" class="btn btn-primary btn-block">Заказать консультацию</button>
                </form>
            </div>
             <!-- /.column-right -->
        </div>
    </div>
</div>
<!-- /#consult-manager -->