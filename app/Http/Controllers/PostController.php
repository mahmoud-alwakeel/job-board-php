<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\BlogPostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Orm get all data
        $data = Post::latest()->cursorPaginate(10);
        return view('post.index', ['posts' => $data, 'pageTitle' => 'Blog']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create', ['pageTitle' => 'Create new Post']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogPostRequest $request)
    {   
        $post = new Post();
        $post->title = $request->input('title');
        $post->author = $request->input('author');
        $post->body = $request->input('content');
        $post->published = $request->has('published');

        $post->save();
        return redirect('/blog')->with('success', 'Post created successfully');
        // TODO: this will be completed in the forms section
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view('post.show', ['post' => $post, 'pageTitle' => $post->title]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit', ['pageTitle' => 'Edit Post', 'post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogPostRequest $request, string $id)
    {
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->author = $request->input('author');
        $post->body = $request->input('content');
        $post->published = $request->has('published');

        $post->save();
        return redirect('/blog')->with('success', 'Post updated successfully');
        // TODO: this will be completed in the forms section

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // TODO: this will be completed in the forms section
    }
}
