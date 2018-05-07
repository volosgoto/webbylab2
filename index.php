<?php
require_once 'autoloader.php';
use app\Cat;


$cat = new Cat('garfield');
echo $cat->getName();
echo '</br>';
echo $cat->meow();