<?php
require $_SERVER['DOCUMENT_ROOT'] . '/functions.php';
require $_SERVER['DOCUMENT_ROOT'] . '/header.php';

class Cat
{
}

$cat1 = new Cat();
$cat2 = new Cat();
$cat3 = new Cat();

dd($cat1);
dd($cat2);
dd($cat3);

require $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
