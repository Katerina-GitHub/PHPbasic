<?php
$userName = readline("Как вас зовут? ");
$userDoOne = readline('Какая задача стоит перед вами сегодня? ');
$userToDoOne =readline ('Сколько примерно времени эта задача займет? ');
$userDoTwo = readline('А еще что вы должны сегодня сделать? ');
$userToDoTwo = readline ("А на эту задачу сколько времени потребуется? ");
$userDoThree = readline ('Добавьте последнюю задачу на сегодня ');
$userToDoThree = readline ('Сколько времени займет последнее задание? ');
$userTotal = ($userToDoOne + $userToDoTwo + $userToDoThree);
echo "Привет, $userName, сегодня тебе предстоит выполнить 3 приоритетных задачи:\n -$userDoOne ($userToDoOne ч)\n -$userDoTwo ($userToDoTwo ч)\n -$userDoThree ($userToDoThree ч)\n Примерное время выпол
нения плана = ($userTotal ч)";
