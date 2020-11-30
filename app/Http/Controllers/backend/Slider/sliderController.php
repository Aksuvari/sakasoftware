<?php

namespace App\Http\Controllers\backend\Slider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SliderModel;

class sliderController extends Controller
{
    public function index(){
        $sliders=SliderModel::all();
        return view('Backend.Slider.index',compact('sliders'));
    }
    public function create(){
        return view('Backend.Slider.create');
    }
    public function store(Request $request){
        $sliders=new SliderModel();
        $sliders->title=request('title');
        $sliders->description =request('description');
        $sliders->created_at=now();
        $sliders->updated_at=now();
        $sliders->save();
        return back();

    }
    public function edit($id){
        $sliders=SliderModel::find($id);
        return view('Backend.Slider.update',compact('sliders'));
    }
    public function update(Request $request,$id){
        $sliders=SliderModel::find($id);
        $sliders->title=$request->title;
        $sliders->description =$request->description;
        $sliders->created_at=now();
        $sliders->updated_at=now();
        $sliders->save();
        return redirect()->route('Sliders.index');
    }
    public function delete($id){
        SliderModel::find($id)->delete();
        return redirect()->route('Sliders.index');
    }
    public function rankSetter()
    {
        $data = request('data');
        parse_str($data, $order);
        $sliders = $order["ord"];
        print_r($sliders);
        foreach ($sliders as $rank => $id) {
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
