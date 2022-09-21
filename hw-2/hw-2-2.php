<?php

echo('Скажите мне, как вас зовут? ');
$userName = readline();
do {
  echo ('Сколько задач вы запланировали на сегодня? (от 1 до 10) ');
  $tasksCount = (int)readline();
} while ($tasksCount < 1 or $tasksCount > 10);

$todoList = [];
for ($i = 0; $i < $tasksCount; $i++) {
  echo 'Опишите задачу №', $i + 1, ': ';
  $todo = readline();
  do {
    echo 'Сколько часов на это потребуется? (целое число больше 0): ';
    $hours = (int)readline();
  } while ($hours <= 0);
  $todoList[$i][0] = $todo;
  $todoList[$i][1] = $hours;
}

$fullTime = 0;
echo $userName, ', сегодня у вас запланировано задач: ', $tasksCount, PHP_EOL;
for ($i = 0; $i < $tasksCount; $i++) {
  echo $i + 1, '. ', $todoList[$i][0], ' (', $todoList[$i][1], 'ч)', PHP_EOL;
  $fullTime += $todoList[$i][1];
}
echo 'Примерное время выполнения плана: ', $fullTime, ' ч';