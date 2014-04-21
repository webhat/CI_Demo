<?php

// application/models/post.php
class Post extends CI_Model {

    public function getAll() {
        return array(
            array('title' => 'post 1', 'content' => '...'),
            array('title' => 'post 2', 'content' => '...'),
            array('title' => 'post 3', 'content' => '...'),
            array('title' => 'post 4', 'content' => '...'),
            array('title' => 'post 5', 'content' => '...'),
        );
    }

    public function numbers($in) {
        if ($in > 4)
            return $in;
        else
            return pow(10,$in);
    }

}