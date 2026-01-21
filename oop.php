<?php

class MyClass{
    public $x, $y, $z;

    public function mySum(){
        $this->z = $this->x + $this->y;
        return $this->z;
    }
}

$taposh = new MyClass();
$taposh->x = 100;
$taposh->y = 200;

echo $taposh->mySum();

?>