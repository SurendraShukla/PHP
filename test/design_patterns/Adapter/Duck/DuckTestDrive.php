<?php

namespace design_patterns\Adapter\Duck;


use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class DuckTestDrive extends TestCase
{
    public function test()
    {
        $turkey = new WildTurkey();
        echo "The Turkey says....";
        echo "\n";
        $turkey->gobble();
        echo "\n";
        $turkey->fly();
        echo "\n================\n";

        $duck = new MallarDuck();
        echo "The Duck says....";
        echo "\n";
        $duck->quack();
        echo "\n";
        $duck->fly();
        echo "\n================\n";

        $adaptedTurkey = new TurkeyObjectAdapter($turkey);
        echo "The AdaptedTurkey behaving like Duck. It says....";
        echo "\n";
        $duck->quack();
        echo "\n";
        $duck->fly();
        echo "\n================\n";

        Assert::assertTrue(true);

    }

}