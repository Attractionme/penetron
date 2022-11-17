<?php

namespace App\Http\Controllers\certificates;

use App\Http\Controllers\Controller;
use App\Models\Certificates;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CertificatesController extends Controller
{
    public function show()
    {
        $images = Certificates::all();
        return view('certificatesAdmin', compact('images'));
    }

    public function edit($id)
    {
        $certificates = DB::table('certificates')->where('id', '=', $id)->first();
        return view('editCertificates', compact('certificates'));
    }

    public function selectCertificates(Request $request)
    {
        $results = Certificates::paginate(6);

        $artilces = '';
        if ($request->ajax()) {
            foreach ($results as $result) {
                $artilces.='
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
										<div class="portfolio-item">
                                            <a href="public/assets/images/gallery/'.$result->path.'" data-lightbox="tarmim">
											<div class="pt-img2">
                                                <img src="public/assets/images/gallery/'.$result->path.'" alt="">
											</div>
                                            </a>
										</div><!--portfolio-item end-->
									</div>
									';
            }
            return $artilces;
        }
        return view('certificates');

    }

    public function newCertificate()
    {
        return view('createCertificate');
    }

    public function store(Request $request)
    {
        $files = $request->file('fileimage');
        $filename = $files->getClientOriginalName();
        $extension = $files->getClientOriginalExtension();
        $fileName = "CE" . time() . date("his") . "." . $extension;
        $destinationPath = 'public/assets/images/gallery' . '/';
        $files->move($destinationPath, $fileName);
        $images = new Certificates();
        $images->path = $fileName;;
        $images->save();
        return redirect('certificatesAdmin')->with('success', 'data Inserted Successfully..');
    }
    public function delete_Certificate($id)
    {
        $image = Certificates::find($id);
        if($image->path!=""){
            unlink("public/assets/images/gallery/".$image->path);
        }
        $data = Certificates::where("id", $id)->delete();
        return redirect('certificatesAdmin')->with('success',"Deleted Successfully");
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

    public function upd_certificate(Request $request, $id){
        if ($request->file('image')) {
            $certificate = Certificates::find($id);
            if ($certificate->path != "") {
                unlink("public/assets/images/gallery/" . $certificate->path);
            }

            $files = $request->file('image');
            $filename = $files->getClientOriginalName();
            $extension = $files->getClientOriginalExtension();
            $fileName = "CE" . time() . date("his") . "." . $extension;
            $destinationPath = 'public/assets/images/gallery' . '/';
            $files->move($destinationPath, $fileName);
            $image = $fileName;
            $insertmodel = Certificates::where("id", $id)->update(["path" => $image]);

        }
        return redirect('certificatesAdmin')->with('success', 'data Updated Successfully..');
    }
}
