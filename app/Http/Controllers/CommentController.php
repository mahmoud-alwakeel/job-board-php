<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
class CommentController extends Controller
{
    //
    function index() {
        // Orm get all data
        $data = Comment::all();
        return view('comment.index', ['comments' => $data, 'pageTitle' => 'Comments']);
    }

    function create() {
        // Comment::create([
        //     'author' => 'Weeka',
        //     'content' => 'wekasss anotherrrrrr Comment',
        //     'post_id' => 3
        // ]);
        Comment::factory(5)->create();
        return redirect('/comments');
    }
}
