<?php


namespace App\Controllers\Admin;


use App\Controllers\BaseController;

class Blog extends BaseController
{
    public function index()
    {
        echo '<h2>All the blog post</h2>';
    }

    public function createNew()
    {
        return view('blog_form');
    }

    public function saveBlog()
    {
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
    }

}