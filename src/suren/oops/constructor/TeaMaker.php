<?php

namespace src\suren\oops;


class TeaMaker{

    private $milkQuantity = 50;
    private $waterQuantity = 50;
    private $sugarSpoonCount = 1;

    public function __construct() {
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this,$f='__construct'.$i)) {
            call_user_func_array(array($this,$f),$a);
        }
    }

    public function __construct1($milkQuantity) {
        $this->milkQuantity = $milkQuantity;
    }

    public function __construct3($milkQuantity, $waterQuantity, $sugarSpoonCount) {
        echo 'inside __construct2';
        $this->milkQuantity = $milkQuantity;
        $this->waterQuantity = $waterQuantity;
        $this->sugarSpoonCount = $sugarSpoonCount;
    }

    public function make() {
        echo "\n".'Tea made with '.$this->milkQuantity."% and ".$this->waterQuantity."% water. And ".$this->sugarSpoonCount." tea spoon sugar is added";
    }

}

$normalTea = new TeaMaker();
$normalTea->make();

$blackTea = new TeaMaker(0);
$blackTea->make();

$specialTea = new TeaMaker(70, 30, 2);
$specialTea->make();
