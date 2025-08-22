<?php
class sum{

    public $name;
    public $a;
    public $b;


    function set_sum($name,$a,$b){

        $this->name = $name;
        $this->a = $a;
        $this->b = $b;


    }

    function get_sum(){
        return $this->name.$this->a+$this->b;
    }
}

$obj = new sum();
if(isset($_POST["submit"])){

    $name = $_POST['name'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $obj->set_sum($name,$a,$b);

    echo $obj->get_sum();


}


?>
<form action="" method="post">
    <label>Enter your Name:-</label><br>
    <input type="text" name="name" size="30"><br>
    <label>Enter Number 1:-</label><br>
    <input type="number" name="a" size="30"><br>
    <label>Enter Number 2:-</label><br>
    <input type="number" name="b" size="30"><br>
    <button type="submit" name="submit">Submit</button>

</form>