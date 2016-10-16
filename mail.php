<?php

$email = "webmaster@example.com";
$to = "dasflancer@gmail.com";
$sitename = "Городская служба реставрации ванн";
$pagetitle = "Заявка с сайта \"$sitename\"";

$name = trim($_POST["name"]);

$phone = trim($_POST["phone"]);
$text = trim($_POST["text"]);
$hidden = trim($_POST["hidden"]);


$message = "
Форма: $hidden <br>
Имя: $name <br>
Телефон: $phone <br>

";

$headers = "From: $email" . "\r\n" .
    "Reply-To: $email" . "\r\n" .
    "X-Mailer: PHP/" . phpversion() . "\r\n" .
	"Content-type: text/html; charset=\"utf-8\"";

mail($to, $pagetitle, $message, $headers);


