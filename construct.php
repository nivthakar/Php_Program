<?php
class Car{
    public $model;
    public $color;

    public function __construct($model,$color){
        $this->model = $model;
        $this->color = $color;


    }
    public function display()
    {
        return "Car Model: ".$this->model." Color: ".$this->color;
    }
}

$car1 = new Car("BMW","Black");
echo $car1->display()
?>