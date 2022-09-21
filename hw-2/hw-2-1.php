<?php

// Приглашения выводятся через echo, т.к. параметр prompt в php8.1 на AltLinux игнорируется.
$question = 'В каком году произошло сражение на Омовже между новгородским войском и Орденом меча?'.PHP_EOL;
$variants = ['1234', '1243', '1248'];
$correctVariant = 0;
$prompt = 'Введите год: ';
$answer = 0;

echo $question;
foreach ($variants as $variant) {
  echo $variant.PHP_EOL;
};

while (!in_array($answer, $variants)) {
  echo $prompt;
  $answer = readline();
}

if ($answer == $variants[$correctVariant]) {
  echo 'Вы абсолютно правы!';
} else {
  echo 'Вы ошиблись.';
}