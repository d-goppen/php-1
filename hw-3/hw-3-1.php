<?php

// Масссивы генерируются автоматом, содержат целые числа.
$arrSize = 0;
do {
  echo 'Введите длину массива (от 10 до 30): ';
  $arrSize = (int)readline();
} while ($arrSize < 10 or $arrSize > 30);

// Массивы генерируем в цикле и заполняем случайными значениями
$arr1 = [];
$arr2 = [];
for ($i = 0; $i < $arrSize; $i++) {
  $arr1[$i] = rand(0, $arrSize * 5);
  $arr2[$i] = rand(0, $arrSize * 5);
};

// Показываем массивы (для проверки)
echo implode(' | ', $arr1), PHP_EOL;
echo implode(' | ', $arr2), PHP_EOL;
// Перемножаем и выводим без цикла
print_r(array_map(fn($el1, $el2): int => $el1 * $el2, $arr1, $arr2));
