<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Orm get all data
        $data = Comment::cursorPaginate(10);
        return view('comment.index', ['comments' => $data, 'pageTitle' => 'Comments']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comment.create', ['pageTitle' => 'Create new Comment']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comment = Comment::findOrFail($id);
        return view('comment.show', ['comment' => $comment, 'pageTitle' => 'Comment Details']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comment = Comment::findOrFail($id);
        return view('comment.edit', ['comment' => $comment, 'pageTitle' => 'Edit Comment']);
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
