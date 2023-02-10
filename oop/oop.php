<?php
    class MyClass{
        public $x, $y, $z;

        public function __construct($a, $b)
        {
            $this->x = $a;
            $this->y = $b;
        }
        public function mysum(){
            $this->z = $this->x + $this->y;
            return $this->z;
        }
    }

    $asib = new MyClass(200,250);
    echo $asib->mysum();

    echo "<br>";

    $ridoy = new MyClass(500,600);
    echo $ridoy->mysum();

?>