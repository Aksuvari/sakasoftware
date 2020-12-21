<?php

namespace App\Http\Controllers\backend\Blog;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class blogController extends Controller
{

    public function create(){

        return view('Backend.Blog.create');
    }

    public function index(){
        $blog=BlogModel::all();
        return view('Backend.Blog.index',compact('blog'));
    }
    public function store(Request $request){

        $rules=[
            'title'=>'required',
            'description'=>'required',
            'label'=>'required',
        ];
        $customMessages=[
            'title.required'=>'Bu Alanı doldurmak zorunludur.',
            'description.required'=>'Bu Alanı doldurmak zorunludur.',
            'label.required'=>'Bu Alanı doldurmak zorunludur.',
        ];
        $this->validate($request,$rules,$customMessages);

        $blog=new BlogModel;
        $blog->title=$request->title;
        $blog->description=$request->description;
        $blog->label=$request->label;
        $blog->slug = Str::slug(request('title'),'-');
        $blog->updated_at=now();
        $blog->created_at=now();
        $blog->save();

        return redirect()->route('Blogs.index')->with('Success','Kayıt İşlemi Başarıyla Gerçekleşti');
    }


    public function edit($id){
        $blog=BlogModel::find($id);
        return view('Backend.Blog.update',compact('blog'));
    }

    public function update(Request $request,$id){
        $rules=[
            'title'=>'required',
            'description'=>'required',
            'label'=>'required',
        ];
        $customMessages=[
            'title.required'=>'Bu Alanı doldurmak zorunludur.',
            'description.required'=>'Bu Alanı doldurmak zorunludur.',
            'label.required'=>'Bu Alanı doldurmak zorunludur.',
        ];
        $this->validate($request,$rules,$customMessages);
        $blog=BlogModel::find($id);
        $blog->title=$request->title;
        $blog->description=$request->description;
        $blog->label=$request->label;
        $blog->slug = Str::slug(request('title'),'-');
        $blog->updated_at=now();
        $blog->created_at=now();
        $blog->save();
        return redirect()->route('Blogs.index')->with('Success','Kayıt İşlemi Başarıyla Güncellendi');
    }



    public function delete(int $id)
    {

        $delete = BlogModel::destroy($id);

        if ($delete) {
            $success = true;
            $message = "Blog Yazısı Silindi.";
        } else {
            $success = false;
            $message = "Blog Yazısı Bulunamadı.";
        }

        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }

    public function homePageView($id)
    {
        if ($id) {
            $blog = BlogModel::find($id);
            $homePage = (request('data') == "true") ? 1 : 0;
            $blog->anasayfa = $homePage;
            $blog->save();
        }
    }

    public function rankSetter()
    {
        $data = request('data');
        parse_str($data, $order);
        $blog = $order["ord"];
        print_r($blog);
        foreach ($blog as $rank => $id) {
            DB::table('blog')
                ->where('id', $id)
                ->where('rank', '!=', $rank)
                ->update(['rank' => $rank]);
        }
    }
    public function isActiveSetter($id)
    {
        if ($id) {
            $blog = BlogModel::find($id);
            $isActive = (request('data') == "true") ? 1 : 0;
            $blog->isActive = $isActive;
            $blog->save();
        }
    }
    public function sliderView($id)
    {
        if ($id) {
            $blog = BlogModel::find($id);
            $sliderr = (request('data') == "true") ? 1 : 0;
            $blog->slider = $sliderr;
            $blog->save();
        }
    }

}
