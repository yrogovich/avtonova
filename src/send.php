<?php
$to = 'work-biznesrost24@yandex.by, atz-nissan@autonova.by, market@autonova.by, mskoblik@autonova.by, fil@autonova.by'; //Почта получателя, через запятую можно указать сколько угодно адресов
$subject = 'Заявка с сайта '.$_SERVER['SERVER_NAME'] . ' ' . $_POST['form']; //Заголовок сообщения
// $senddate = date("d.m.Y H:i:s");
// $ref = $_SERVER['HTTP_REFERER'];
// $result=parse_url($ref);
// parse_str($result['query'],$params);
// if (isset($params['utm_source']) || isset($params['utm_medium']) ||
//     isset($params['utm_campaign']) || isset($params['utm_content']) || isset($params['utm_term'])){
//     $utm .= "<p><strong>Источник:</strong> ".$params['utm_source'];
//     $utm .= "<p><strong>Тип трафика:</strong> ".$params['utm_medium'];
//     $utm .= "<p><strong>Кампания:</strong> ".$params['utm_campaign'];
//     $utm .= "<p><strong>Объявление:</strong> ".$params['utm_content'];
//     $utm .= "<p><strong>Кл. фраза:</strong> ".$params['utm_term'];
// } else {
//     $utm .= "<p>Нет данных UTM</p>";
// }
$message = '
        <html>
            <head>
                <title>'.$subject.'</title>
            </head>
            <body>';
        $message .= '<p>'.$_POST['form'].'</p>';
        $message .= '<p>'.$_POST['url'].'</p>';

        if(isset($_POST['user_name']) && $_POST['user_name'] !== '')
            $message .= '<h2>Личная информация</h2>';
        if(isset($_POST['user_name']) && $_POST['user_name'] !== '')
            $message .= '<p>Имя: '.$_POST['user_name'].'</p>';
        if(isset($_POST['user_phone']) && $_POST['user_phone'] !== '')
            $message .= '<p>Телефон: '.$_POST['user_phone'].'</p>';
        if(isset($_POST['user_email']) && $_POST['user_email'] !== '')
            $message .= '<p>Email: '.$_POST['user_email'].'</p>';
        if(isset($_POST['user_message']) && $_POST['user_message'] !== '')
            $message .= '<p>Сообщение: '.$_POST['user_message'].'</p>';

        if(isset($_POST['car_name']) && $_POST['car_name'] !== '') {
            $message .= '<h2>Trade-in данные</h2>';
            $message .= '<p>Марка: '.$_POST['car_name'].'</p>';
            $message .= '<p>Модель: '.$_POST['car_model'].'</p>';
            $message .= '<p>Год выпуска: '.$_POST['car_year'].'</p>';
            $message .= '<p>Пробег: '.$_POST['car_mileage'].'</p>';
            $message .= '<p>Цена: '.$_POST['car_price'].'</p>';
            $message .= '<p>Желаемый авто: '.$_POST['favorite_car'].'</p>';
        }

        // $message .= '<h2>Данные UTM</h2>';
        // $message .= $utm;
        
            //$message .= $utm;
$message .= '                 
            </body>
        </html>'; //Текст нащего сообщения можно использовать HTML теги
$headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
$headers .= "From: form@".$_SERVER['SERVER_NAME']."\r\n"; //Наименование и почта отправителя
mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
