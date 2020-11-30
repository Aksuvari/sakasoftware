<?php

namespace App\Http\Controllers\backend\Blog;

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
        $blog=new BlogModel;
        $blog->title=$request->title;
        $blog->description=$request->description;
        $blog->slug = Str::slug(request('title'),'-');
        $blog->updated_at=now();
        $blog->created_at=now();
        $blog->save();
        return back();
    }

    public function edit($id){
        $blog=BlogModel::find($id);
        return view('Backend.Blog.update',compact('blog'));
    }

    public function update(Request $request,$id){
        $blog=BlogModel::find($id);
        $blog->title=$request->title;
        $blog->description=$request->description;
        $blog->slug = Str::slug(request('title'),'-');
        $blog->updated_at=now();
        $blog->created_at=now();
        $blog->save();
        return redirect()->route('Blogs.index');
    }



    public function delete(int $id)
    {
        BlogModel::find($id)->delete();
        return redirect()->route('Blogs.index');
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

}
