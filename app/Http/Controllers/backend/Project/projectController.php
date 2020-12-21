<?php

namespace App\Http\Controllers\backend\Project;

use App\Http\Controllers\Controller;
use App\Models\ProjectTypeModel;
use App\Models\ProjectModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class projectController extends Controller
{
    public function index(){
        $projects=ProjectModel::orderBy("rank","asc")->get();
        return view('Backend.Portfolio.index',compact('projects'));
    }
    public function create(){
        $types=ProjectTypeModel::all();
        return view('Backend.Portfolio.create',compact('types'));
    }
    public function store(Request $request){
        $rules=[
            'title'=>'required',
            'type'=>'required',
            'project_url'=>'required',
            'description'=>'required',
        ];
        $customMessages=[
            'title.required'=>'Bu Alanı doldurmak zorunludur.',
            'type.required'=>'Bu Alanı doldurmak zorunludur.',
            'project_url.required'=>'Bu Alanı doldurmak zorunludur.',
            'description.required'=>'Bu Alanı doldurmak zorunludur.',
        ];
        $this->validate($request,$rules,$customMessages);
        $projects= new ProjectModel;
        $projects->title=$request->title;
        $projects->project_type_id=$request->type;
        $projects->project_url=$request->project_url;
        $projects->description=$request->description;
        $projects->slug=Str::slug(request('title'),'-');
        $projects->updated_at=now();
        $projects->created_at=now();
        $projects->save();
        return redirect()->route('Ports.index')->with('Success','Kayıt İşlemi Başarıyla Gerçekleşti');;
    }
    public function edit($id){
        $projects=ProjectModel::findOrFail($id);
        $types=ProjectTypeModel::all();
        return view('Backend.Portfolio.update',compact('projects','types'));
    }
    public function update(Request $request,$id){
        $rules=[
            'title'=>'required',
            'type'=>'required',
            'project_url'=>'required',
            'description'=>'required',
        ];
        $customMessages=[
            'title.required'=>'Bu Alanı doldurmak zorunludur.',
            'type.required'=>'Bu Alanı doldurmak zorunludur.',
            'project_url.required'=>'Bu Alanı doldurmak zorunludur.',
            'description.required'=>'Bu Alanı doldurmak zorunludur.',
        ];
        $this->validate($request,$rules,$customMessages);
        $projects= ProjectModel::findOrFail($id);
        $projects->title=$request->title;
        $projects->project_type_id=$request->type;
        $projects->project_url=$request->project_url;
        $projects->description=$request->description;
        $projects->slug=Str::slug(request('title'),'-');
        $projects->updated_at=now();
        $projects->created_at=now();
        $projects->save();
        return redirect()->route('Ports.index')->with('Success','Kayıt İşlemi Başarıyla Güncellendi');;

    }
    public function delete(int $id){
        $delete = ProjectModel::destroy($id);

        if ($delete) {
            $success = true;
            $message = "Portfölyö Yazısı Silindi.";
        } else {
            $success = false;
            $message = "Portfölyö Yazısı Bulunamadı.";
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
        $projects = $order["ord"];
        print_r($projects);
        foreach ($projects as $rank => $id) {
            DB::table('project')
                ->where('id', $id)
                ->where('rank', '!=', $rank)
                ->update(['rank' => $rank]);
        }
    }
    public function isActiveSetter($id)
    {
        if ($id) {
            $projects =ProjectModel::find($id);
            $isActive = (request('data') == "true") ? 1 : 0;
            $projects->isActive = $isActive;
            $projects->save();
        }
    }
}
