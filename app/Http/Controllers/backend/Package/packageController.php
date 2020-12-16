<?php

namespace App\Http\Controllers\backend\Package;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PackageModel;
use App\Models\PackageTypeModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class packageController extends Controller
{
    public function index(){
        $packages=PackageModel::orderby("rank","asc")->get();
        return view('Backend.Package.index',compact('packages'));
    }
    public function create(){
        $types=PackageTypeModel::all();
        return view('Backend.Package.create',compact('types'));
    }
    public function store(Request $request){
        $rules=[
            'type'=>'required',
            'title'=>'required',
            'label'=>'required',
            'description'=>'required',
        ];
        $customMessages=[
            'type.required'=>'Bu Alanı doldurmak zorunludur.',
            'title.required'=>'Bu Alanı doldurmak zorunludur.',
            'label.required'=>'Bu Alanı doldurmak zorunludur.',
            'description.required'=>'Bu Alanı doldurmak zorunludur.',
        ];
        $this->validate($request,$rules,$customMessages);
        $packages=new PackageModel;
        $packages->title=$request->title;
        $packages->package_id=$request->type;
        $packages->description=$request->description;
        $packages->label=$request->label;
        $packages->slug = Str::slug(request('title'),'-');
        $packages->updated_at=now();
        $packages->created_at=now();
        $packages->save();
        return redirect()->route('Packages.index')->with('Success','Kayıt İşlemi Başarıyla Gerçekleşti');
    }
    public function edit($id){
        $types=PackageTypeModel::all();
        $packages=PackageModel::findOrFail($id);
        return view('Backend.Package.update',compact('packages','types'));
    }
    public function update(Request $request,$id){
        $rules=[
            'type'=>'required',
            'title'=>'required',
            'label'=>'required',
            'description'=>'required',
        ];
        $customMessages=[
            'type.required'=>'Bu Alanı doldurmak zorunludur.',
            'title.required'=>'Bu Alanı doldurmak zorunludur.',
            'label.required'=>'Bu Alanı doldurmak zorunludur.',
            'description.required'=>'Bu Alanı doldurmak zorunludur.',
        ];
        $this->validate($request,$rules,$customMessages);
        $packages=PackageModel::findOrFail($id);
        $packages->title=$request->title;
        $packages->package_id=$request->type;
        $packages->description=$request->description;
        $packages->label=$request->label;
        $packages->slug = Str::slug(request('title'),'-');
        $packages->updated_at=now();
        $packages->created_at=now();
        $packages->save();
        return redirect()->route('Packages.index')->with('Success','Kayıt İşlemi Başarıyla Gerçekleşti');
    }
    public function delete(int $id){
        PackageModel::find($id)->delete();
        return redirect()->route('Packages.index');

    }
    public function homePageView($id)
    {
        if ($id) {
            $packages =PackageModel::find($id);
            $homePage = (request('data') == "true") ? 1 : 0;
            $packages->anasayfa = $homePage;
            $packages->save();
        }
    }

    public function rankSetter()
    {
        $data = request('data');
        parse_str($data, $order);
        $packages = $order["ord"];
        print_r($packages);
        foreach ($packages as $rank => $id) {
            DB::table('package')
                ->where('id', $id)
                ->where('rank', '!=', $rank)
                ->update(['rank' => $rank]);
        }
    }
    public function isActiveSetter($id)
    {
        if ($id) {
            $packages = PackageModel::find($id);
            $isActive = (request('data') == "true") ? 1 : 0;
            $packages->isActive = $isActive;
            $packages->save();
        }
    }
}
