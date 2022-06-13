<?php
require $_SERVER['DOCUMENT_ROOT'] . '/functions.php';
require $_SERVER['DOCUMENT_ROOT'] . '/header.php';

class Cat
{
    private $name;
    private $color;
    private $weight;
    public function __construct(string $name, string $color, string $weight)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }
    public function sayHello()
    {
        echo 'Привет! Меня зовут ' . $this->name . '. ';
        echo 'Я ' . $this->color . '. ';
        echo 'Я вешу ' . $this->weight . 'кг.';
        echo '<br>';
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function setColor(string $color)
    {
        $this->color = $color;
    }
    public function getColor(): string
    {
        return $this->color;
    }
}

$cat1 = new Cat('Снежок', 'белый', 4);
$cat2 = new Cat('Барсик', 'рыжий', 8);
$cat1->sayHello();
$cat2->sayHello();

require $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
