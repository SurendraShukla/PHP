<?php
interface Door {
    public function displayDoor();
}
class GlassDoor implements Door{

    public function displayDoor() {
        return "Glass Door";
    }
}

class WoodenDoor implements Door {
    private $woodType;

    public function __construct($woodType)
    {
        $this->woodType = $woodType;
    }

    public function displayDoor() {
        return "Wooden Door is build from ".$this->woodType;
    }
}

class GlassWindow {
    public function displayWidnow() {
        return "Glass Window";
    }
}


class House {
    private $windows;
    private $doors;

    public function __construct(Door $door, GlassWindow $windows)
    {
        $this->doors = $door;
        $this->windows = $windows;
    }

    /**
     * @param Door $doors
     */
    public function setDoors(Door $doors)
    {
        $this->doors = $doors;
    }



    public function buildHouse() {
        echo "\n".$this->doors->displayDoor();
        echo "\n".$this->windows->displayWidnow();
    }
}

// Client 1
$door = new WoodenDoor('teek');
$windows = new GlassWindow();
$house = new House($door, $windows);
$house->buildHouse();
$house->setDoors(new GlassDoor());
$house->buildHouse();

//
//// Client 2
//$glassDoor = new GlassDoor();
//$windows = new GlassWindow();
//$house = new House($glassDoor, $windows);
//$house->buildHouse();