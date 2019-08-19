<div class="section-calculator">
    <div class="circles">
        <div class="circle-1"></div>
        <div class="circle-2"></div>
        <div class="circle-3"></div>
    </div>

    <div class="container">
        <div id="calculator">
            <div class="head">
                <div class="h2">Калькулятор экономии электромобилей:</div>
            </div>
            <!-- /.head -->
            <div class="body">
                <div class="left-column">
                    <div class="h3">Цена:</div>

                    <div class="pair">
                        <label for="consumption">Расход</label>
                        <div class="input-wrapper">
                            <input id="consumption" type="text" placeholder="XXXX XXXX XXXX">
                        </div>
                    </div>
                    <div class="pair">
                        <label for="cost">Стоимость</label>
                        <div class="input-wrapper">
                            <input id="cost" type="text" placeholder="XXXX XXXX XXXX">
                        </div>
                    </div>
                    <div class="pair">
                        <label for="mileage_per_month">Пробег в месяц</label>
                        <div class="input-wrapper">
                            <input id="mileage_per_month" type="text" placeholder="XXXX XXXX XXXX">
                        </div>
                    </div>
                    <div class="pair">
                        <label for="filling_rate">Тариф заправки</label>
                        <div class="input-wrapper">
                            <input id="filling_rate" type="text" placeholder="XXXX XXXX XXXX">
                        </div>
                    </div>
                </div>
                <!-- /.left-column -->
                <div class="right-column">
                    <div class="h3 primary">Экономия:</div>

                    <ul class="leaders">
                        <li>
                            <span class="name">На топливе</span>
                            <span class="value">XXXX</span>
                        </li>

                        <li>
                            <span class="name">На ГСМ</span>
                            <span class="value">XXXX</span>
                        </li>

                        <li>
                            <span class="name">На обслуживании и ремонте</span>
                            <span class="value">XXXX</span>
                        </li>

                        <li>
                            <span class="name">За 1 год и за 3 года</span>
                            <span class="value">XXXX</span>
                        </li>
                    </ul>
                </div>
                <!-- /.right-column -->
            </div>
            <!-- /.body -->
            <div class="foot">
                <a href="<?php echo get_home_url( null, 'map/'); ?>" class="link-primary icon-gas-station">Карта заправок в Беларуси</a>
            </div>
            <!-- /.foot -->
        </div>
        <!-- /#calculator -->
    </div>
</div>
<!-- /.section-calculator -->