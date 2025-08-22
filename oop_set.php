<?php
class info{

    public $name;
    public $age;

    function set_detail($name,$age){
        $this->name = $name;
        $this->age= $age;

    }
}
$info = new info();
$info->set_detail("Rahul",23);
echo $info->name;
echo $info->age;


?>