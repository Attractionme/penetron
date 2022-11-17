<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function show()
    {
        $comments = DB::table('blogs')
            ->join('comments', 'blogs.id', '=', 'comments.id_post')
            ->select('blogs.*', 'comments.*')
            ->get();
        return view('commentsAdmin', compact('comments'));
    }

    public function delete_comment($id)
    {
        $comment = Comment::find($id);
        $data = Comment::where("id", $id)->delete();
        return redirect('commentsAdmin')->with('success', "Deleted Successfully");
    }

    public function store(Request $request)
    {
        $data = $request->except('_token', 'updated_at');
        DB::table('comments')->insert($data);
        return redirect()->back();
    }
}
