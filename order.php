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

    try {
        $sql = 'SELECT COUNT(*) FROM orders WHERE date= :date';
        $s = $pdo->prepare($sql);
        $s->bindValue(':date', ($calendar[$i]['yearSQL'] . '-' . $calendar[$i]['monthSQL'] . '-' . $calendar[$i]['monthDay']));
        $s->execute();
    } catch (PDOException $e) {
        $error = 'Error when select count orders of the date';
        include 'error.html.php';
        exit();
    }
    $count = $s->fetch();

    if ($count[0] == 0) {
        $calendar[$i]['color'] = 'text-success';
    } else if ($count[0] > 0 and $count[0] < 5) {
        $calendar[$i]['color'] = 'text-warning';
    } else {
        $calendar[$i]['color'] = 'text-danger';
    }
    $day = $day->add(new \DateInterval('P1D'));
}
//if ($day['order'] == 'free'){
//                                            $optionClass='text-success';
//                                            } else if ($day['order'] == 'available'){
//                                            $optionClass='text-warning';
//                                            } else {
//                                            $optionClass='text-danger';
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
include 'order.html.php';
exit();


