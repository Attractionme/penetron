<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Carbon\Carbon;
use Egulias\EmailValidator\Parser\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogController extends Controller
{

    public function show(Request $request)
    {
        $results = Blog::paginate(6);
        $artilces = '';
        if ($request->ajax()) {
            foreach ($results as $result) {
                $artilces .= ' <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 news">
                                            <div class="post">
                                                <div class="post-img">
                                                    <img src="public/assets/images/blog_images/' . $result->image . '" alt="">
                                                </div>
                                                <div class="post-details">
                                                    <ul class="post-info">
                                                        <li><span>' . Carbon::parse($result->created_at)->format('M d,Y') . '</span></li>
                                                    </ul>
                                                    <h3><a href="single-blog/' . $result->id . '" title="">' . $result->tittle . '</a></h3>


                                                    <p>' . Str::limit($result->description, 80) . '</p>
                                                    <a href="single-blog/' . $result->id . '" title="">المقال كامل  <i class="fa fa-angle-left"></i></a>
                                                </div>
                                            </div><!--post end-->
                                        </div>';
            }
            return $artilces;
        }
        return view('blog');
    }

    public function showBlogsAdmin()
    {
        $blogs = DB::table('blogs')->select()->get();

        return view('blogsAdmin', ['blogs' => $blogs]);
    }

    public function getdata($id)
    {
        $blogs = Blog::find($id);
        $numOfCount = DB::table('comments')->where('id_post', $blogs->id)->count('id');
        $comments = DB::table('comments')->where('id_post', '=', $blogs->id)->select()->get();
        $latest_blogs = DB::table('blogs')->select()->orderBy('created_at', 'desc')->limit(3)->get();
        return view('single-blog', compact('blogs', 'comments', 'numOfCount', 'latest_blogs'));
    }

    public function showFourthBlogs()
    {
        $blogs = Blog::get();
        // dd('test');
        // $blogs = DB::table('blogs')->select()->orderBy('created_at','desc')->limit(4)->get();
        return view('index', compact('blogs'));
    }


    public function store(Request $request)
    {
        $files = $request->file('fileimage');
        $extension = $files->getClientOriginalExtension();
        $fileName = "IM" . time() . date("his") . "." . $extension;
        $destinationPath = 'public/assets/images/blog_images' . '/';
        $files->move($destinationPath, $fileName);

        $files2 = $request->file('fileimage2');
        $extension = $files2->getClientOriginalExtension();
        $filename2 = "IMP" . time() . date("his") . "." . $extension;
        $destinationPath2 = 'public/assets/images/blog_images' . '/';
        $files2->move($destinationPath2, $filename2);

        $blogs = new Blog();
        $blogs->tittle = $request->input('tittle');
        $blogs->description = $request->input('description');
        $blogs->image = $fileName;
        $blogs->image_profile = $filename2;
        $blogs->save();
        return redirect('blogsAdmin')->with('success', 'data Inserted Successfully..');
    }

    public function delete_blogs($id)
    {
        $blog = Blog::find($id);

        if ($blog->image != "") {
            unlink("public/assets/images/blog_images/" . $blog->image);
        }

        if ($blog->image_profile != "") {
            unlink("public/assets/images/blog_images/" . $blog->image_profile);
        }

        $data1 = DB::table('comments')->where("id_post", $id)->delete();
        $data2 = Blog::where("id", $id)->delete();
        return redirect('blogsAdmin')->with('success', "Deleted Successfully");
    }


    public function edit($id)
    {
        $blogs = DB::table('blogs')->where('id', '=', $id)->first();
        return view('editBlogs', compact('blogs'));
    }


    public function upd_blog(Request $request, $id)
    {
        if ($request->file('image')) {
            $image = Blog::find($id);
            if ($image->image != "") {
                unlink("public/assets/images/blog_images/" . $image->image);
            }

            $files = $request->file('image');
            $filename = $files->getClientOriginalName();
            $extension = $files->getClientOriginalExtension();
            $fileName = "IM" . time() . date("his") . "." . $extension;
            $destinationPath = 'public/assets/images/blog_images' . '/';
            $files->move($destinationPath, $fileName);
            $image = $fileName;
            $insertmodel = Blog::where("id", $id)->update(["image" => $image]);
        }


        if ($request->file('image2')) {
            $image2 = Blog::find($id);
            if ($image2->image_profile != "") {
                unlink("public/assets/images/blog_images/" . $image2->image_profile);
            }

            $files2 = $request->file('image2');
            $filename2 = $files2->getClientOriginalName();
            $extension2 = $files2->getClientOriginalExtension();
            $filename2 = "IMP" . time() . date("his") . "." . $extension2;
            $destinationPath2 = 'public/assets/images/blog_images' . '/';
            $files2->move($destinationPath2, $filename2);
            $image2 = $filename2;
            $insertmodel = Blog::where("id", $id)->update(["image_profile" => $image2]);
        }

        $insertmodel = Blog::where("id", $id)->update([
            "tittle" => $request->input('tittle'),
            "description" => $request->input('description')
        ]);
        return redirect('blogsAdmin')->with('success', 'data Updated Successfully..');
    }
}
