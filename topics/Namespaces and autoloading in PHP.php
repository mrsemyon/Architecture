<?php
require $_SERVER['DOCUMENT_ROOT'] . '/header.php';
require $_SERVER['DOCUMENT_ROOT'] . '/functions.php';
require $_SERVER['DOCUMENT_ROOT'] . '/src/models/articles/article.php';
require $_SERVER['DOCUMENT_ROOT'] . '/src/models/users/user.php';

$author = new Architecture\Models\Users\User('Иван');
$article = new Architecture\Models\Articles\Article('Заголовок', 'Текст', $author);
dd($article);

require $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
