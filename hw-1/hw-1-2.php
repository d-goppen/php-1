<?php

// Приглашение выводчится через echo, т.к. параметр prompt в php8.1 на AltLinux игнорируется.
// В $userAge может быть введено что угодно, проверку на ввод числа не делаю.

echo('Скажите мне, как вас зовут: ');
$userName = readline();
echo('И сколько вам лет: ');
$userAge = readline();
echo('Вас зовут '.$userName.', вам '.$userAge.' лет').PHP_EOL;
