<?php

namespace App\Http\Controllers\backend\Slider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SliderModel;

class sliderController extends Controller
{
    public function index(){
        $sliders=SliderModel::orderby("rank","asc")->get();
        return view('Backend.Slider.index',compact('sliders'));
    }
    public function create(){
        return view('Backend.Slider.create');
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

        $sliders=new SliderModel();
        $sliders->title=request('title');
        $sliders->description =request('description');
        $sliders->created_at=now();
        $sliders->updated_at=now();
        $sliders->save();
        return redirect()->route('Sliders.index')->with('Success','Kayıt İşlemi Başarıyla Gerçekleşti');


    }
    public function edit($id){
        $sliders=SliderModel::find($id);
        return view('Backend.Slider.update',compact('sliders'));
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
        $sliders=SliderModel::find($id);
        $sliders->title=$request->title;
        $sliders->description =$request->description;
        $sliders->created_at=now();
        $sliders->updated_at=now();
        $sliders->save();
        return redirect()->route('Sliders.index')->with('Success','Kayıt İşlemi Başarıyla Güncellendi');;
    }
    public function delete($id){
        $delete = SliderModel::destroy($id);

        if ($delete) {
            $success = true;
            $message = "Slider Silindi.";
        } else {
            $success = false;
            $message = "Slider Bulunamadı.";
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
        $items = $order["ord"];
        print_r($items);
        foreach ($items as $rank => $id) {
            DB::table('slider')
                ->where('id', $id)
                ->where('rank', '!=', $rank)
                ->update(['rank' => $rank]);
        }
    }
    public function isActiveSetter($id)
    {
        if ($id) {
            $sliders = SliderModel::find($id);
            $isActive = (request('data') == "true") ? 1 : 0;
            $sliders->isActive = $isActive;
            $sliders->save();
        }
    }

}
