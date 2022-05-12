<?php
require $_SERVER['DOCUMENT_ROOT'] . '/header.php';
require $_SERVER['DOCUMENT_ROOT'] . '/functions.php';

spl_autoload_register(function (string $className)
{
    dd($className);
    require_once $_SERVER['DOCUMENT_ROOT'] . '/src/' . str_replace('\\', '/', $className) . '.php';
});

$author = new Architecture\Models\Users\User('Иван');
$article = new Architecture\Models\Articles\Article('Заголовок', 'Текст', $author);
dd($article);

require $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
