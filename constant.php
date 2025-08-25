<?php 
class code {
    const gretings = "Welcome to Geetanjali college";

    public function welcome() {
        return self::gretings;
    }
}

$val = new code();

echo $val->welcome();
/*
class code{
    const gretings = "Welcome to Geetanjali college";
}

echo code::gretings;
*/
?>