<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Http\Requests\CommentRequest;
use App\Models\Post;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Orm get all data
        // $data = Comment::cursorPaginate(10);
        // return view('comment.index', ['comments' => $data, 'pageTitle' => 'Comments']);
        return redirect('/blog');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('comment.create', ['pageTitle' => 'Create new Comment']);
        return redirect('/blog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentRequest $request)
    {
        $post = Post::findOrFail($request->input('post_id'));

        $comment = new Comment();
        $comment->author = $request->input('author');
        $comment->content = $request->input('content');
        $comment->post_id = $request->input('post_id');

        $comment->save();
        
        return redirect("/blog/{$post->id}")->with('success', 'Comment created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $comment = Comment::findOrFail($id);
        // return view('comment.show', ['comment' => $comment, 'pageTitle' => 'Comment Details']);
        return redirect('/blog');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
