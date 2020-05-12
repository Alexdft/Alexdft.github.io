<?php
$fio = $_POST['fio'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$fio = htmlspecialchars($fio);
$phone = htmlspecialchars($phone);
$email = htmlspecialchars($email);
$fio = urldecode($fio);
$phone = urldecode($phone);
$email = urldecode($email);
$fio = trim($fio);
$phone = trim($phone);
$email = trim($email);
//echo $fio; ". Телефон:".$phone.
//echo "<br>";
//echo $email;
if (mail("alexey.tikho@gmail.com", "Заявка с сайта", "ФИО:".$fio.". Телефон:".$phone.". E-mail: ".$email ,"From: example2@mail.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>
