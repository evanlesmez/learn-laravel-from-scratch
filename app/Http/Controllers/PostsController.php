<?php

namespace App\Http\Controllers;

class PostsController 
{
    public function show($post) {
        $posts = [
            'a' => 'Hi I a m post',
            'b' => 'post I am'
        ];
        if (! array_key_exists($post,$posts)){
            abort(404, 'Sorry that post was not found.');
        };
    
        return view('post', [
            'post' => $posts[$post]
        ]);
    }
}