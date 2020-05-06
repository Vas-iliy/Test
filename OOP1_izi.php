<?php

class Dinosaurs
{
    public $name;
    public $type;
    public $legs;
    public $weight;

    public function __construct($name, $type, $legs, int $weight)
    {
        $this->name = $name;
        $this->type = $type;
        $this->legs = $legs;
        $this->weight = $weight;
    }

    public function eat()
    {
        echo 'я  поел' . "<br/>";
    }

    public function drink()
    {
        echo 'я  gjgbk' . "<br/>";
    }
    public function discribeYourself()
    {
        echo "Привет, я $this->name, я $this->type. Мой вес $this->weight" . "<br/>";
    }
}
$dinosaurs1 = new Dinosaurs('T-Rex', 'Pidor', 2, 158);
$dinosaurs1->discribeYourself();
