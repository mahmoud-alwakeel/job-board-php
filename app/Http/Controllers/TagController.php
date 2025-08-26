<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Orm get all data
        $data = Tag::all();
        return view('tag.index', ['tags' => $data, 'pageTitle' => 'Tags']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tag.create', ['pageTitle' => 'Create new Tag']);
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
        $tag = Tag::findOrFail($id);
        return view('tag.show', ['tag' => $tag, 'pageTitle' => $tag->name]);
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
    function testManyToMany() {
        // $post1 = Post::find(1);
        // $post2 = Post::find(2);

        // $post1->tags()->attach([1, 2, 3]);
        // $post2->tags()->attach([1]);

        // return response()->json([
        //     'post1' => $post1->tags,
        //     'post2' => $post2->tags,
        // ]);
        $tag = Tag::find(2);

        $tag->posts()->attach([1, 2]);
        return view('tag.testManyToMany', ['pageTitle' => 'Test Many to Many']);
    }
}
