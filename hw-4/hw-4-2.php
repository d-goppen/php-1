<?php

$numbers = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

function array_analyze(array $numbers): array {
  $result = [
    'min' => $numbers[0],
    'max' => $numbers[0],
    'avg' => $numbers[0],
  ];
  for ($i = 1; $i < count($numbers); $i++) {
    $result['min'] = $numbers[$i] < $result['min'] ? $numbers[$i] : $result['min'];
    $result['max'] = $numbers[$i] > $result['max'] ? $numbers[$i] : $result['max'];
    $result['avg'] += $numbers[$i]; // В общем случае тут возможно переполнение типа int
  }
  $result['avg'] /= count($numbers);
  return $result;
};

echo print_r(array_analyze($numbers));