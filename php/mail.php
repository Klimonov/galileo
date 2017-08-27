<?
    $to = 'znikolai@mail.ru, lidersport83@mail.ru, freesport1@mail.ru';
    // $to = 'dh-ka@bk.ru';
    $subject = 'Заявка с сайта gyro.lidsport.ru';
    $message = '
        <html>
            <head>
                <title>'.$subject.'</title>
            </head>
            <body>
                <p>Имя: '.$_POST['name'].'</p>
                <p>Телефон: '.$_POST['phone'].'</p>
                <p>Сообщение: '.$_POST['text'].'</p>
                <p>Модель: '.$_POST['model'].'</p>
                <p>'.$_POST['color'].'</p>
            </body>
        </html>';
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: Сайт гироскутеров <admin@lidsport.ru>\r\n";
    mail($to, $subject, $message, $headers);