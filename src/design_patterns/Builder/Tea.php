<?php

namespace design_patterns\Builder;

/* "Product" */
class Tea
{
    private $milkQuantity = 50;
    private $waterQuantity = 50;
    private $sugarSpoons = 1;

    /**
     * @param int $milkQuantity
     */
    public function setMilkQuantity(int $milkQuantity)
    {
        $this->milkQuantity = $milkQuantity;
    }

    /**
     * @param int $waterQuantity
     */
    public function setWaterQuantity(int $waterQuantity)
    {
        $this->waterQuantity = $waterQuantity;
    }

    /**
     * @param int $sugarSpoons
     */
    public function setSugarSpoons(int $sugarSpoons)
    {
        $this->sugarSpoons = $sugarSpoons;
    }

    /**
     * @return int
     */
    public function getMilkQuantity(): int
    {
        return $this->milkQuantity;
    }

    /**
     * @return int
     */
    public function getWaterQuantity(): int
    {
        return $this->waterQuantity;
    }

    /**
     * @return int
     */
    public function getSugarSpoons(): int
    {
        return $this->sugarSpoons;
    }



}

