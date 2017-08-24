<?php

namespace design_patterns\Adapter\Post;


interface iStatusUpdate
{
    function getUserToken($userId);

    function postUpdate($message);
}