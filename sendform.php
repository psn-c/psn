<?php
$currency = $_POST['radio'];
$emaill = $_POST['emaill'];


{
$email="support@pskeys.pro"; // ----------------------------------------- почта, куда отправляем письмо
$headers  =  'MIME-Version: 1.0' . "\r\n";
$headers .=  'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .=  'From: '.$_SERVER['HTTP_HOST'] . "\r\n"; // ---------------------- адрес отправителя, это заголовок письма, менять не обязательно
$subject    = "Новый заказ"; // ----------------------------------------- тема письма
$message    = "
<b>Клиент:</b>
<br>Валюта : ".$currency."
<br>Почта: ".$emaill."
<br>
<br>Ссылка: ".@$_SERVER['HTTP_REFERER']."
<br>IP-адрес посетителя: ".@$_SERVER['REMOTE_ADDR']."
";
$mail=mail($email, $subject, $message, $headers);
if($mail==true){
?>
<html>
Заявка отправлена!		
</html>
<?
}else{
    echo "no";
}
}
?>
