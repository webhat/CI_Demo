<?php

class PostTest extends PHPUnit_Framework_TestCase {

    private $CI;

    public function setUp() {
        $this->CI = &get_instance();
    }

    public function testGetAllPosts() {
        $this->CI->load->model('post');

        $expected = 5;

        $actual = $this->CI->post->getAll();

        $this->assertEquals($expected, count($actual));
    }

    public function testGetArrayPosts() {
        $this->CI->load->model('post');

        $expected_first_post = 'title';

        $posts = $this->CI->post->getAll();

        $actual_first_post = $posts[1];

        $this->assertArrayHasKey($expected_first_post, $actual_first_post);
    }

    public function testNumbers() {
        $this->CI->load->model('post');
        
        $expected = 5;
        
        $actual = $this->CI->post->numbers($expected);
        
        $this->assertEquals($expected,$actual);
    }

    
    public function testNumbers4() {
        $this->CI->load->model('post');
        
        $expected = 4;
        
        $actual = $this->CI->post->numbers($expected);
        
        $this->assertEquals($expected,$actual);        
    }
}