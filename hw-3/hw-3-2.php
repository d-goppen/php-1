<?php

$wishes = [
  'благосостояния',
  'дохода',
  'урожая',
  'бизнеса',
  'развития',
  'самовыражения',
  'пути',
  'озарения',
  'освобождения',
  'признания',
  'везения',
  'будущего',
  'отпуска',
  'секса',
  'настроения',
  'веселья',
  'смеха',
  'драйва',
  'тепла',
  'здоровья',
];
$epithets = [
  'большого',
  'огромного',
  'достойноного',
  'успешного',
  'постоянного',
  'гениального',
  'лёгкого',
  'яркого',
  'внутреннего',
  'грандиозного',
  'отменного',
  'волшебного',
  'золотого',
  'восхитительного',
  'радужного',
  'улетного',
  'звонкого',
  'искрометного',
  'душевного',
  'богатырского',
];
$appeals = [
  'Любим',
  'Драгоценн',
  'Мил',
  'Лучезарн',
  'Волшебн',
  'Чудесн',
  'Удивительн',
  'Прекрасн',
];
$sexEndings = [
  'male' => 'ый',
  'female' => 'ая',
];

echo 'Как зовут именинника? ';
$name = readline();

do {
  echo 'Это мужчина (1) или женщина (2): ';
  $sexNum = (int)readline();
} while ($sexNum !== 1 && $sexNum !== 2);
$sex = $sexNum === 1 ? 'male' : 'female';

// Чем ближе количество элементов в array_rand к длине массива
// тем чаще возвращается набор ключей в исходном порядке.
// Длина массивов пожеланий и эпитетов (теоретически) может оказаться разной.
// Поэтому берём половину от минимального количества.
$maxWishes = intdiv(min(count($wishes), count($epithets)), 2);
do {
  echo 'Сколько пожеланий написать (от 3 до ', $maxWishes, '): ';
  $wishesNum = (int)readline();
} while ($wishesNum < 3 or $wishesNum > $maxWishes);

$wishesKeys = array_rand($wishes, $wishesNum);
$epithetsKeys = array_rand($epithets, $wishesNum);

// Чтобы не усложныть строку вывода формируем эпитеты и пожелания в отдельные массивы
$epithetsReady = array_intersect_key($epithets, array_flip($epithetsKeys));
$wishesReady = array_intersect_key($wishes, array_flip($wishesKeys));

echo 'А вот и поздравление:', PHP_EOL;
echo $appeals[rand(0, count($appeals) - 1)].$sexEndings[$sex].' '.$name.
     ', от всего сердца поздравляю тебя с днем рождения, желаю '.
     implode(', ',
       array_map(
         fn($el1, $el2): string => $el1.' '.$el2,
         array_slice($epithetsReady, 0, $wishesNum - 1),
         array_slice($wishesReady, 0, $wishesNum - 1)
       )
     ).' и '.array_slice($epithetsReady, -1)[0].' '.array_slice($wishesReady, -1)[0].'!';

