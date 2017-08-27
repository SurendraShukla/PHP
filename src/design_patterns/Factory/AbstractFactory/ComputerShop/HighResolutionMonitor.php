<?php
 namespace design_patterns\Factory\AbstractFactory\ComputerShop;

class HighResolutionMonitor implements IMonitor {

    public function displayPicture() {
        echo "\nPicture quality is Best";
    }
}
