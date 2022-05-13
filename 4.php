<?php

for ($i=1; $i <=100; $i++){
    $fizz = ($i % 3 == 0);
    $buzz = ($i % 5 == 0);
       if ($fizz){
        echo "Fizz";
    }if ($buzz){
        echo "Buzz";
    }if (!$fizz && !$buzz){
        echo $i;
    }
       echo "\n";
}
