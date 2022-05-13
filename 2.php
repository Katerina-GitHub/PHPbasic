<?php

do{
    $doList = (int)readline("Сколько задач стоит перед вами сегодня?\n");
}while ($doList <= 0);

$output = "У вас на сегодня: $doList задачи:\n";
$sum =0;

for ($i =0; $i < $doList; $i++){
    $userDo = readline("Ваша задача на сегодня? ");
    $userTime = readline("Сколько она займет времени? ");
    $output .= "$userDo ({$userTime}ч.)\n";
    $sum += $userTime;
}
echo $output;
echo "Итого времени: {$sum}ч.";
