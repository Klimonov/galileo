<?
    $to = 'почта@mail.ru';
    $subject = 'Заявка с сайта Галилео';
    $message = '
        <html>
            <head>
                <title>'.$subject.'</title>
            </head>
            <body>
                <p>Имя: '.$_POST['name'].'</p>
                <p>E-mail: '.$_POST['mail'].'</p>
                <p>Телефон: '.$_POST['phone'].'</p>
            </body>
        </html>';
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: Сайт Галилео <почта@mail.ru>\r\n";
    mail($to, $subject, $message, $headers);