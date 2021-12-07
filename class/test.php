<?php


    


$aa = new A(1);
$bbb= new B(3);



Class A{

    public $bb;

    public function __construct($bb){
        $this -> $bb = $bb;
    }
}

class B extends A{

    public $tt;

    public function __construct($tt){
        $this -> $tt = $tt;
    }


}

echo '<pre>';
var_dump($bbb);
echo '<pre>';
