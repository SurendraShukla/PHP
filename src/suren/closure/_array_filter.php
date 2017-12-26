<?php
function findByPostId($postId) {

    $comments = [array('id'=>1, 'comment'=> 'comment 1'), array('id'=>2, 'comment'=> 'comment 2')];

    return array_filter($comments, function ($comment) use ($postId){
        return $comment['id'] == $postId;
    });
}

print_r(findByPostId(2));

// Note: Closures can be used in any functions like array_map, array_filter