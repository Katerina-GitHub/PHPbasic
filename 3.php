<?php

do{
    $num = readline("Введите номер ");
    }while ($num <=0);

echo "Этот палец ";

$num %= 8;

switch (true) {
    case $num == 1:
        echo "большой";
        break;
    case $num == 2 || $num == 0:
        echo "указательный";
        break;
    case $num == 3 || $num = 7:
        echo "средний";
        break;
    case $num == 4 || $num == 6:
        echo "безымянный";
        break;
   default:
        echo "мизинец";
           }
