<?php

//calendar
$today = new \DateTimeImmutable();
$daysInMonth = (int) $today->format('t');
$day = new \DateTimeImmutable('first day of this month');
$calendar = [];
for ($i = 1; $i <= $daysInMonth; $i++) {
    $calendar[$i]['weekday'] = $day->format('w');
    $calendar[$i]['monthDay'] = $day->format('d');
    $calendar[$i]['yearSQL'] = $day->format('Y');
    $calendar[$i]['monthSQL'] = $day->format('m');
    // Поскольку от 1 до 12, а в массиве, как мы знаем, отсчет идет от нуля (0 до 11),
// то вычитаем 1 чтоб правильно выбрать уже из нашего массива.
    $calendar[$i]['month'] = $day->format('n') - 1;
    if ($day->format('d') == $today->format('d')) {
        $calendar[$i]['today'] = true;
    }
    $day = $day->add(new \DateInterval('P1D'));
}
$month = [
    'Января',
    'Февраля',
    'Марта',
    'Апреля',
    'Мая',
    'Июня',
    'Июля',
    'Августа',
    'Сентября',
    'Октября',
    'Ноября',
    'Декабря'
];
$weekday = [
    'Воскресенье',
    'Понедельник',
    'Вторник',
    'Среда',
    'Четверг',
    'Пятница',
    'Суббота'
];
//try {
//    $sql = 'SELECT COUNT(*) FROM orders
//WHERE email = :email AND password = :password';
//    $s = $pdo->prepare($sql);
//    $s->bindValue(':email', $email);
//    $s->bindValue(':password', $password);
//    $s->execute();
//} catch (PDOException $e) {
//    $error = 'Ошибка при поиске автора.';
//    include 'error.html.php';
//    exit();
//}
//$row = $s->fetch();
//if ($row[0] > 5) {
//}
include 'order.html.php';
exit();


