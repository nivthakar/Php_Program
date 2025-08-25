<?php
class cars{

    public $car_brand;
    public $car_model;

    public function __construct($car_brand, $car_model)
    {

        $this->car_brand = $car_brand;
        $this->car_model = $car_model;
    }  


    public function info_car(){
        echo "I have a  car  name is{$this->car_brand} and model name is {$this->car_model}";
    }


}
class bike extends cars{
    public $cc;

    public function __construct($car_brand,$car_model,$cc)
    {
        $this->car_brand = $car_brand;
        $this->car_model = $car_model;
        $this->cc = $cc;

        
    }

    public function info_bike(){
        echo "I have a bike name is {$this->car_brand} and model name is {$this->car_model} and cc is {$this->cc}";
    }

    


}

?>