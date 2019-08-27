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
        $ps = [];
        $posts =Post::orderBy('created_at', 'desc')->get();
        foreach ($posts as $post) {
            $image = null;
            if($post->image){
                $image = $post->image->getPath();
            }
            $p = $post->toArray();
            $p['image'] = $image;
            array_push($ps, $p);
        }
        return $ps;
    }
}
