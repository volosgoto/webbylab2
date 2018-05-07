<?php
// Подключаем автозагрузчик классов autoloader.php
require_once 'autoloader.php';
use app\Cat;

$cat = new Cat('garfield');

// Выводит имя кота
//$cat->getName()

// Выводит имя кота c проверкой
if ($cat->getName()) {
    echo $cat->getName();
}

// Выводит имя кота c проверкой через тернарный оператор
//$catName = $cat->getName() ? $cat->getName() : '';
//echo $catName;

//Выводит имя кота c проверкой. Работает только на PHP 7.0 или выше
//echo $catName = $cat->getName() ?? '';

echo '</br>';

// Все проверки по аналогии подставить $cat->meow() вместо $cat->getName()
echo $cat->meow();