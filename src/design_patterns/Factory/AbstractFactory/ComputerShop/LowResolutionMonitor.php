<?php
namespace design_patterns\Factory\AbstractFactory\ComputerShop;

class LowResolutionMonitor implements IMonitor {

    public function displayPicture() {
        echo "\nPicture quality is Average";
    }
}
