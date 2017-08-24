<?php

namespace design_patterns\Adapter\Post;


class TwitterAdapter implements iStatusUpdate {

    protected $twitter;

    public function __construct(Twitter $twitter){
        $this->twitter = $twitter;
    }

    public function getUserToken($userId) {
        $this->twitter->checkUserToken($userId);
    }

    public function postUpdate($message) {
        $this->twitter->setStatusUpdate($message);
    }
}
