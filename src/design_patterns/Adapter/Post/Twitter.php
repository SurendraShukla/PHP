<?php

namespace design_patterns\Adapter\Post;


class Twitter
{
    public function checkUserToken($userId) {
        echo __CLASS__." userId is ".$userId;
    }

    public function setStatusUpdate($message) {
        echo "Posted message:'".$message."' on ".__CLASS__;
    }
}