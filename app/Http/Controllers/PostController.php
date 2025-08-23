<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    function index() {
        // Orm get all data
        $data = Post::all();
        return view('post.index', ['posts' => $data, 'pageTitle' => 'Blog']);
    }

    function show($id) {
        $post = Post::findOrFail($id);
        return view('post.show', ['post' => $post, 'pageTitle' => $post->title]);
    }

    function create() {
        $posts = Post::create([
            'title' => 'this is a unique Post',
            'body' => 'unique Body ',
            'author' => 'unique Author ',
            'published' => true
        ]);
        return redirect('/blog');
    }
}
