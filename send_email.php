<?php
// Настройки почты
$to = "gajnullin.iskander@mail.ru"; // Укажите вашу почту
$subject = "Результаты опроса";

// Получаем данные из формы
$name = $_POST['name'];
$attendance = $_POST['attendance'];
$alcohol = isset($_POST['alcohol']) ? implode(", ", $_POST['alcohol']) : "Нет предпочтений";

// Формируем текст письма
$message = "Имя: $name\n";
$message .= "Присутствие: $attendance\n";
$message .= "Предпочтения по алкоголю: $alcohol\n";

// Заголовки письма
$headers = "From: no-reply@askauvita.github.io.ru"; // Укажите домен вашего сайта

// Отправляем письмо
if (mail($to, $subject, $message, $headers)) {
    echo "Спасибо! Ваш ответ отправлен.";
} else {
    echo "Произошла ошибка. Попробуйте еще раз.";
}
?>