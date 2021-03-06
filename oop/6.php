<?php
require $_SERVER['DOCUMENT_ROOT'] . '/functions.php';
require $_SERVER['DOCUMENT_ROOT'] . '/header.php';

abstract class AbstractClass
{
    abstract public function getValue();
    public function printValue()
    {
        echo 'Значение: ' . $this->getValue();
    }
}

class ClassA extends AbstractClass
{
    private $value;
    public function __construct(string $value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
}

$objectA = new ClassA('kek');
$objectA->printValue();

echo '<hr>';

abstract class HumanAbstract
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    abstract public function getGreetings(): string;
    abstract public function getMyNameIs(): string;

    public function introduceYourself(): string
    {
        return $this->getGreetings() . '! ' . $this->getMyNameIs() . ' ' . $this->getName() . '.';
    }
}
class RussianHuman extends HumanAbstract
{
    public function getGreetings(): string
    {
        return 'Привет';
    }
    public function getMyNameIs(): string
    {
        return 'Меня зовут';
    }
}
class EnglishHuman extends HumanAbstract
{
    public function getGreetings(): string
    {
        return 'Hello';
    }
    public function getMyNameIs(): string
    {
        return 'My name is';
    }
}
$rus = new RussianHuman('Вася');
$eng = new EnglishHuman('John');
echo $rus->getName() . '<br>';
echo $eng->getName() . '<br>';
echo $rus->introduceYourself() . '<br>';
echo $eng->introduceYourself() . '<br>';

require $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
