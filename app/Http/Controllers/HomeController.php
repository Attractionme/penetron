<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogsCount = DB::table('blogs')->count();
        $imagesCount = DB::table('images')->count();
        $certificatesCount = DB::table('certificates')->count();
        $CommentsCount = DB::table('comments')->count();
        $latest_blogs = DB::table('blogs')->select()->orderBy('created_at','desc')->limit(3)->get();
        $latest_comments = DB::table('comments')->select()->orderBy('comment_date','desc')->limit(3)->get();


        return view('admins/dashboard',compact('blogsCount','imagesCount','certificatesCount','CommentsCount','latest_blogs','latest_comments'));
    }
}
