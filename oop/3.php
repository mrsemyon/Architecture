<?php
require $_SERVER['DOCUMENT_ROOT'] . '/functions.php';
require $_SERVER['DOCUMENT_ROOT'] . '/header.php';

class Post
{
    private $title;
    private $text;
    public function __construct(string $title, string $text)
    {
        $this->title = $title;
        $this->text = $text;
    }
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setText(string $text): void
    {
        $this->text = $text;
    }
    public function getText()
    {
        return $this->text;
    }
}

class Lesson extends Post
{
    private $homework;
    public function __construct($title, $text, $homework)
    {
        parent::__construct($title, $text);
        $this->homework = $homework;
    }
    public function setHomework(string $homework): void
    {
        $this->homework = $homework;
    }
    public function getHomework(): string
    {
        return $this->homework;
    }
}

class PaidLesson extends Lesson
{
    private $price;
    public function __construct(string $title, string $text, string $homework, float $price)
    {
        parent::__construct($title, $text, $homework);
        $this->price = $price;
    }
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
    public function getPrice(): float
    {
        return $this->price;
    }
}

$post = new Post('Заголовок поста', 'Текст поста');
$lesson = new Lesson('Заголовок урока', 'Текст урока', 'Homework');
$paidLesson = new PaidLesson('Урок о наследовании в PHP', 'Лол, кек, чебурек', 'Ложитесь спать, утро вечера мудренее', 99.90);

$lesson->setHomework('Домашка');

$paidLesson->setPrice(9.99);

dd($post);
dd($lesson);
dd($paidLesson);

require $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
