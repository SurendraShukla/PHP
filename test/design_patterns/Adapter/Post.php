<?php

namespace design_patterns\Adapter\Post;


use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class Post extends TestCase
{
    public function test()
    {
        $statusUpdate = new Facebook;
        $statusUpdate->getUserToken('9211');
        echo "\n";
        $statusUpdate->postUpdate('Message for Facebook');

        $statusUpdate = new TwitterAdapter(new Twitter);
        $statusUpdate->getUserToken('420');
        echo "\n";
        $statusUpdate->postUpdate('Message for Twitter');

        Assert::assertTrue(true);
    }

}