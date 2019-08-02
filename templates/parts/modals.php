<!-- Modal HTML embedded directly into document -->
<div id="test-drive-modal" class="modal">
    <div class="head">
        <div class="h2">Записаться на тест драйв</div>
        <p>Оставьте свои контактные данные, чтобы мы смогли с вами связаться</p>
    </div>
    <div class="body">
        
        <form action="javascript:" onsubmit="callHandler('#test-drive-form')" id="test-drive-form">
            <input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
            <input type="hidden" name="form" value="Записаться на тест драйв">
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

<div id="callback-modal" class="modal">
    <div class="head">
        <div class="h2">Заказать обратный звонок</div>
        <p>Оставьте свои контактные данные, чтобы мы смогли с вами связаться</p>
    </div>
    <div class="body">
        
        <form action="javascript:" onsubmit="callHandler('#callback-form')" id="callback-form">
            <input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
            <input type="hidden" name="form" value="Заказать обратный звонок">
            <div class="input-row">
                <div class="input-wrapper">
                    <input type="text" placeholder="Ваше имя" name="user_name" required>
                </div>
                <div class="input-wrapper">
                    <input type="text" placeholder="Ваш № телефона" name="user_phone" class="phone-mask" required>
                </div>
            </div>
            <button class="btn btn-primary btn-block">Заказать звонок</button>
            <p class="privacy-text">Нажимая на кнопку “Отправить”, Вы принимаете условия <a href="<?php echo get_home_url(null, 'privacy-policy/'); ?>">Политики конфиденциальности</a></p>
        </form>
    </div>
</div>

<div id="consult-modal" class="modal">
    <div class="head">
        <div class="h2">Заказать консультацию</div>
        <p>Оставьте свои контактные данные, чтобы мы смогли с вами связаться</p>
    </div>
    <div class="body">
        
        <form action="javascript:" onsubmit="callHandler('#consult-form')" id="consult-form">
            <input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
            <input type="hidden" name="form" value="Заказать консультацию">
            <div class="input-row">
                <div class="input-wrapper">
                    <input type="text" placeholder="Ваше имя" name="user_name" required>
                </div>
                <div class="input-wrapper">
                    <input type="text" placeholder="Ваш № телефона" name="user_phone" class="phone-mask" required>
                </div>
            </div>
            <button class="btn btn-primary btn-block">Заказать консультацию</button>
            <p class="privacy-text">Нажимая на кнопку “Отправить”, Вы принимаете условия <a href="<?php echo get_home_url(null, 'privacy-policy/'); ?>">Политики конфиденциальности</a></p>
        </form>
    </div>
</div>

<div id="corp-modal" class="modal">
    <div class="head">
        <div class="h2">Получить подробное КП с условиями лизинга</div>
        <p>Оставьте свои контактные данные, чтобы мы смогли с вами связаться</p>
    </div>
    <div class="body">
        
        <form action="javascript:" onsubmit="callHandler('#corp-form')" id="corp-form">
            <input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
            <input type="hidden" name="form" value="Получить подробное КП с условиями лизинга">
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
            <button class="btn btn-primary btn-block">Отправить</button>
            <p class="privacy-text">Нажимая на кнопку “Отправить”, Вы принимаете условия <a href="<?php echo get_home_url(null, 'privacy-policy/'); ?>">Политики конфиденциальности</a></p>
        </form>
    </div>
</div>

<div id="thx-modal" class="modal">
    <div class="head">
        <div class="h2">Спасибо за заявку!</div>
        <p>Наши специалисты свяжутся с вами в ближайшее время.</p>
    </div>
    <div class="body">
        
        <a href="#" class="btn btn-primary btn-block" rel="modal:close">Вернуться к странице</a>
    </div>
</div>