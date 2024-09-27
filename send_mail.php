<?php
// Получение данных из формы
$name = isset($_POST['name']) ? strip_tags(trim($_POST['name'])) : '';
$email = isset($_POST['email']) ? strip_tags(trim($_POST['email'])) : '';
$message = isset($_POST['message']) ? strip_tags(trim($_POST['message'])) : '';

// Убедитесь, что все поля заполнены
if ($name && $email && $message) {
    $to = 'mcace6666@gmail.com'; // Замените на нужный адрес
    $subject = 'Новое сообщение от ' . $name;
    $body = "Имя: $name\nEmail: $email\nСообщение: $message";

    // Заголовки
    $headers = "From: $name <$email>" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Отправка сообщения
    if (mail($to, $subject, $body, $headers)) {
        echo 'Сообщение успешно отправлено!';
    } else {
        echo 'Ошибка при отправке сообщения.';
    }
} else {
    echo 'Пожалуйста, заполните все поля.';
}
?>
