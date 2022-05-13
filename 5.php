<?php

for ($i = 0; $i <= 100; $i++) {
    $apple = $i % 100; //использовать числа в диапазоне до 100
}if ($apple >=10 && $apple <=20) {
    echo "$i яблок";
}else {
    switch ($apple % 10){
        case 1:
            echo "$i яблоко";
            break;
        case 2:
            case 3:
        case 4:
            echo "$i яблока";
            break;
        default:
            echo "$i яблок";
            break;
    }
}

