<?php

interface  iPrint
{
    public function print();
}

interface iTest
{
    public function getTest();
}

class  Us implements iPrint, iTest
{
    private $test = 123;

    public function getTest()
    {
        // TODO: Implement getTest() method.
    }

    public function print()
    {
        echo 123 . "<br/>";
    }

    public function __get($name)
    {
        echo "Нельзя обратиться к свойству с именем $name <br/>" ;
    }

    public function __set($name, $value)
    {
        echo "Вы не можете присвоить значение $value несущкствующему значению $name <br/>";
    }

    public function __call($name, $arguments)
    {
        echo "Метода с именем $name не существует <br/>";
    }

    public function __toString()
    {
        return "Это объект чего-то";
    }


}


$abc = new Us();
echo $abc->test;
echo $abc->sdfhksd = 5155;
echo $abc->get();
echo $abc;
$abc->print();