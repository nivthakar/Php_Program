<?php
spl_autoload_register(function ($class_name) {
    include "classes/" . $class_name . ".php";
});

// Now you can directly create the object
$obj = new first("Ravi","Indore");
$obj = new second();
$obj = new third();
$obj->display();
?>
