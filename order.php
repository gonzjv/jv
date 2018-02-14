<?php

$today = new \DateTimeImmutable();
$daysInMonth = (int) $today->format('t');
$day = new \DateTimeImmutable('first day of this month');
$firstWeek = $day->format('W');
$calendar = [];
for ($i = 1; $i <= $daysInMonth; $i++) {
    $calendar[$i]['weekday'] = $day->format('w');
    $calendar[$i]['monthDay'] = $day->format('d');
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
$weekday=[
    'Воскресенье',
    'Понедельник',
    'Вторник',
    'Среда',
    'Четверг',
    'Пятница',
    'Суббота'    
];
