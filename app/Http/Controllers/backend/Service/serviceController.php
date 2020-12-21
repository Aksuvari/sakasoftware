<?php

namespace App\Http\Controllers\backend\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class serviceController extends Controller
{
    public function create(){
        return view('Backend.Services.create');
    }

    public function index(){
        $services=ServiceModel::all();
        return view('Backend.Services.index',compact('services'));
    }
    public function store(Request $request){
        $rules=[
            'title'=>'required',
            'description'=>'required',
        ];
        $customMessages=[
            'title.required'=>'Bu Alanı doldurmak zorunludur.',
            'description.required'=>'Bu Alanı doldurmak zorunludur.'
        ];
        $this->validate($request,$rules,$customMessages);
        $services=new ServiceModel;
        $services->title=$request->title;
        $services->description=$request->description;
        $services->slug = Str::slug(request('title'),'-');
        $services->updated_at=now();
        $services->created_at=now();
        $services->save();
        return redirect()->route('Services.index')->with('Success','Kayıt İşlemi Başarıyla Gerçekleşti');;
    }

    public function edit($id){
        $services=ServiceModel::find($id);
        return view('Backend.Services.update',compact('services'));
    }

    public function update(Request $request,$id){
        $rules=[
            'title'=>'required',
            'description'=>'required',
        ];
        $customMessages=[
            'title.required'=>'Bu Alanı doldurmak zorunludur.',
            'description.required'=>'Bu Alanı doldurmak zorunludur.'
        ];
        $this->validate($request,$rules,$customMessages);
        $services=ServiceModel::find($id);
        $services->title=$request->title;
        $services->description=$request->description;
        $services->slug = Str::slug(request('title'),'-');
        $services->updated_at=now();
        $services->created_at=now();
        $services->save();
        return redirect()->route('Services.index')->with('Success','Kayıt İşlemi Başarıyla Güncellendi');;
    }

    public function delete(int $id)
    {
        $delete = ServiceModel::destroy($id);

        if ($delete) {
            $success = true;
            $message = "Hizmet Yazısı Silindi.";
        } else {
            $success = false;
            $message = "Hizmet Yazısı Bulunamadı.";
        }

        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }

    public function homePageView($id)
    {
        if ($id) {
            $services = ServiceModel::find($id);
            $homePage = (request('data') == "true") ? 1 : 0;
            $services->anasayfa = $homePage;
            $services->save();
        }
    }

    public function rankSetter()
    {
        $data = request('data');
        parse_str($data, $order);
        $services = $order["ord"];
        print_r($services);
        foreach ($services as $rank => $id) {
            DB::table('service')
                ->where('id', $id)
                ->where('rank', '!=', $rank)
                ->update(['rank' => $rank]);
        }
    }
    public function isActiveSetter($id)
    {
        if ($id) {
            $services = ServiceModel::find($id);
            $isActive = (request('data') == "true") ? 1 : 0;
            $services->isActive = $isActive;
            $services->save();
        }
    }

}
