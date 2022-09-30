<?php

$numbers = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$check_even = function(int $n): string {
  return $n % 2 > 0 ? 'нечётное' : 'чётное';
};

echo print_r(array_map($check_even, $numbers));