<?php

namespace design_patterns\Adapter\Post;


class Facebook
{
    public function getUserToken($userId) {
        echo __CLASS__." userId is ".$userId;
    }

    public function postUpdate($message) {
        echo "Posted message:'".$message."' on ".__CLASS__;
    }

}