<?php
$sendto   = "dvzip@bk.ru";
$usermail = $_POST['email'];
$content  = nl2br($_POST['msg']);
$title  = nl2br($_POST['title']);
$mark  = nl2br($_POST['mark']);
$model  = nl2br($_POST['model']);
$body  = nl2br($_POST['body']);
$engine  = nl2br($_POST['engine']);
$tel  = nl2br($_POST['tel']);
// Формирование заголовка письма
$subject  = "Запрос на поиск запчасти";
$headers  = "From: " . strip_tags($usermail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Найти запчасть</h2>\r\n";
$msg .= "<p><strong>Запчасть:</strong> ".$title."</p>\r\n";
$msg .= "<p><strong>Марка авто:</strong> ".$mark."</p>\r\n";
$msg .= "<p><strong>Модель авто:</strong> ".$model."</p>\r\n";
$msg .= "<p><strong>Номер кузова:</strong> ".$body."</p>\r\n";
$msg .= "<p><strong>Номер двигателя:</strong> ".$engine."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$tel."</p>\r\n";
$msg .= "<p><strong>Почта:</strong> ".$usermail."</p>\r\n";
$msg .= "<p><strong>Сообщение:</strong> ".$content."</p>\r\n";
$msg .= "</body></html>";

// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
	echo "true";
} else {
	echo "false";
}

?>