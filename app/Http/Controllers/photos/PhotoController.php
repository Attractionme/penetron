<?php

namespace App\Http\Controllers\photos;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PhotoController extends Controller
{
    public function show()
    {
        $images = DB::table('categories')
            ->join('images', 'categories.id', '=', 'images.id_category')
            ->select('categories.*', 'images.*')->orderBy('images.created_at')
            ->get();
        $categories = Category::all();
        return view('photos', compact('images','categories'));
    }
    public function getArticles(Request $request)
    {
        $categories = Category::all();
        if($request->catego=='0'){
            $results = DB::table('categories')
                ->join('images', 'categories.id', '=', 'images.id_category')
                ->select('categories.*', 'images.*')->paginate(9);
        }else{
            $results = DB::table('categories')
                ->join('images', 'categories.id', '=', 'images.id_category')
                ->select('categories.*', 'images.*')->where('id_category',$request->catego)->paginate(9);
        }
        $artilces = '';
        if ($request->ajax()) {
            foreach ($results as $result) {
                $artilces.='
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 '.$result->name_en.'">
										<div class="portfolio-item">
                                            <a href="public/assets/images/gallery/'.$result->path.'" data-lightbox="tarmim" data-title="'.$result->description.'">
											<div class="pt-img">
                                                <img id="im" src="public/assets/images/gallery/'.$result->path.'" alt="">
											</div>
                                            </a>
											<div class="item-info">
												<span>'.$result->description.'</span>
											</div>
										</div><!--portfolio-item end-->
									</div>';
            }
            return $artilces;
        }
        return view('works-grid');;
    }

    public function edit($id)
    {
        $categories = Category::all();
        $images = DB::table('images')->where('id', '=', $id)->first();
        return view('editPhotos', compact('images','categories'));
    }

    public function selectCategories()
    {
        $categories = Category::all();
        return view('createPhotos', compact('categories'));
    }

    public function store(Request $request)
    {
        $files = $request->file('fileimage');
        $filename = $files->getClientOriginalName();
        $extension = $files->getClientOriginalExtension();
        $fileName = "GA" . time() . date("his") . "." . $extension;
        $destinationPath = 'public/assets/images/gallery' . '/';
        $files->move($destinationPath, $fileName);
        $images = new Image();
        $images->path = $fileName;;
        $images->description = $request->input('description');
        $images->id_category = $request->input('category-name');
        $images->save();
        return redirect('photos')->with('success', 'data Inserted Successfully..');
    }
    public function delete_photos($id)
    {

        $image = Image::find($id);
        if($image->path!=""){
            unlink("public/assets/images/gallery/".$image->path);
        }


        $data = Image::where("id", $id)->delete();
        return redirect('photos')->with('success',"Deleted Successfully");
    }
    public function upd_photo(Request $request,$id){
        if ($request->file('image')) {
            $image = Image::find($id);
            if ($image->path != "") {
                unlink("public/assets/images/gallery/" . $image->path);
            }

            $files = $request->file('image');
            $filename = $files->getClientOriginalName();
            $extension = $files->getClientOriginalExtension();
            $fileName = "GA" . time() . date("his") . "." . $extension;
            $destinationPath = 'public/assets/images/gallery' . '/';
            $files->move($destinationPath, $fileName);
            $image = $fileName;
            $insertmodel = Image::where("id", $id)->update(["path" => $image]);
        }
        $insertmodel = Image::where("id", $id)->update(["description" => $request->input('description')]);
        return redirect('photos')->with('success', 'data Updated Successfully..');
    }
}
