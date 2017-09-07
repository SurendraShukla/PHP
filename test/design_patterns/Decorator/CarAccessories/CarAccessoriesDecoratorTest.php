<?php

namespace design_patterns\Decorator\CarAccessories;


use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CarAccessoriesDecoratorTest extends TestCase
{
    /**
     * @test
     */
    public function SuvWithSunRoof()
    {
        // Create an object from one of the basic classes.
        $basicCar = new Suv();

        // Pass the object from the basic class as a parameter to the first feature class.
        $carWithSunRoof = new SunRoof($basicCar);

        // Run the methods on the last object that was created.
        echo $carWithSunRoof -> description();
        echo " costs ";
        echo $carWithSunRoof -> cost();

        Assert::assertTrue(true);
    }

    /**
     * @test
     */
    public function SuvWithSunRoofAndHighEndWheels()
    {
        // 1. Create an object from one of the basic classes.
        $basicCar = new Suv();

        // 2. Pass the object from the basic class as a parameter to the first feature class.
        $carWithSunRoof = new SunRoof($basicCar);

        // 3. Pass the object from the first feature class as a parameter to the second feature class.
        $carWithSunRoofAndHighEndWheels = new HighEndWheels($carWithSunRoof);

        // 4. Run the methods on the last object that was created.
        echo "\n".$carWithSunRoofAndHighEndWheels -> description();
        echo " costs ";
        echo $carWithSunRoofAndHighEndWheels -> cost();

        Assert::assertTrue(true);
    }
}