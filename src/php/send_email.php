<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = 'rbru-metrika@yandex.ru';
    $subject = 'Новое сообщение с сайта';
    $body = "Имя: $name\n";
    $body .= "Email: $email\n";
    $body .= "Сообщение:\n$message";
    
    if (mail($to, $subject, $body)) {
        echo 'Email успешно отправлен!';
    } else {
        echo 'Что-то пошло не так. Пожалуйста, попробуйте еще раз.';
    }
}

?>