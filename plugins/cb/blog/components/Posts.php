<?php namespace Cb\Blog\Components;

use Cms\Classes\ComponentBase;
use Cb\Blog\Models\Post;

class Posts extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Posts Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getPosts()
    {
        return Post::all()->toArray();
    }
}
