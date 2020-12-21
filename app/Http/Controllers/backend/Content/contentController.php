<?php

namespace App\Http\Controllers\backend\Content;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\ContentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class contentController extends Controller
{
    public function index(){
        $contents=ContentModel::orderby("rank","asc")->get();
        return view('Backend.Content.index',compact('contents'));
    }
    public function create(){
        $categories=CategoryModel::all();
        return view('Backend.Content.create',compact('categories'));
    }
    public function store(Request $request){
        $rules=[
            'title'=>'required',
            'short_des'=>'required',
            'category'=>'required',
            'description'=>'required',
        ];
        $customMessages=[
            'title.required'=>'Bu Alanı doldurmak zorunludur.',
            'short_des.required'=>'Bu Alanı doldurmak zorunludur.',
            'category.required'=>'Bu Alanı doldurmak zorunludur.',
            'description.required'=>'Bu Alanı doldurmak zorunludur.',
        ];
        $this->validate($request,$rules,$customMessages);

        $contents=new ContentModel();
        $contents->category_id=$request->category;
        $contents->title=$request->title;
        $contents->short_des=$request->short_des;
        $contents->description=$request->description;
        $contents->slug = Str::slug(request('title'),'-');
        $contents->updated_at=now();
        $contents->created_at=now();
        $contents->save();
        return redirect()->route('Contents.index')->with('Success','Kayıt İşlemi Başarıyla Gerçekleşti');;
    }
    public function edit($id){
        $contents=ContentModel::findOrFail($id);
        $categories=CategoryModel::all();
        return view('Backend.Content.update',compact('categories','contents'));
    }
    public function update(Request $request,$id){
        $rules=[
            'title'=>'required',
            'short_des'=>'required',
            'category'=>'required',
            'description'=>'required',
        ];
        $customMessages=[
            'title.required'=>'Bu Alanı doldurmak zorunludur.',
            'short_des.required'=>'Bu Alanı doldurmak zorunludur.',
            'category.required'=>'Bu Alanı doldurmak zorunludur.',
            'description.required'=>'Bu Alanı doldurmak zorunludur.',
        ];
        $this->validate($request,$rules,$customMessages);

        $contents=ContentModel::find($id);
        $contents->title=$request->title;
        $contents->category_id=$request->category;
        $contents->short_des=$request->short_des;
        $contents->description=$request->description;
        $contents->slug = Str::slug(request('title'),'-');
        $contents->updated_at=now();
        $contents->created_at=now();
        $contents->save();
        return redirect()->route('Contents.index')->with('Success','Kayıt İşlemi Başarıyla Güncellendi');;
    }
    public function delete(int $id){
        $delete = ContentModel::destroy($id);

        if ($delete) {
            $success = true;
            $message = "İçerik Yazısı Silindi.";
        } else {
            $success = false;
            $message = "İçerik Yazısı Bulunamadı.";
        }

        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }
    public function rankSetter()
    {
        $data = request('data');
        parse_str($data, $order);
        $contents = $order["ord"];
        print_r($contents);
        foreach ($contents as $rank => $id) {
            DB::table('content')
                ->where('id', $id)
                ->where('rank', '!=', $rank)
                ->update(['rank' => $rank]);
        }
    }
    public function isActiveSetter($id)
    {
        if ($id) {
            $contents = ContentModel::find($id);
            $isActive = (request('data') == "true") ? 1 : 0;
            $contents->isActive = $isActive;
            $contents->save();
        }
    }
    public function homePageView($id)
    {
        if ($id) {
            $contents = ContentModel::find($id);
            $homePage = (request('data') == "true") ? 1 : 0;
            $contents->anasayfa = $homePage;
            $contents->save();
        }
    }
    public function sliderView($id)
    {
        if ($id) {
            $contents = ContentModel::find($id);
            $sliderr = (request('data') == "true") ? 1 : 0;
            $contents->slider = $sliderr;
            $contents->save();
        }
    }
}
