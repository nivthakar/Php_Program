<?php
abstract class car{

    public $name;

    public function __construct($name){
        $this->name = $name;
    }
     abstract public function intro() : string;

}
class Audi extends car{
    public function  intro() : string{
        return "Choose German quality! I'm an $this->name!";
    }
}
class bmw extends car{
    public function intro() : string{
        return "Enjoy the ride! I'm a $this->name!";
    }
}
class Citroen extends car{
    public function intro() : string{
        return "French extravagance! I'm a $this->name!";
    }
}

$audi = new Audi("Audi");
echo $audi->intro();
echo "<br>";
$bmw = new bmw("BMW");
echo $bmw->intro();
echo "<br>";
$citroen = new Citroen("Citroen");
echo $citroen->intro();
echo "<br>";
?>