<?php
class demo{

    function one(){
        echo "Test one()<br>";
    }

}
class demo1 extends demo{

    function two(){
        echo "Test two()<br>";
    }

}
class demo3 extends demo1{

    function three(){
        echo "Test three() <br>";
    }

}

$test = new demo3();
$test->one();  
$test->two();
$test->three(); 

?>