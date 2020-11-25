<?php

namespace App\Http\Controllers\backend\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SettingModel;
use Str;
class settingscontroller extends Controller
{
    public $viewFolder = "";
    public function __construct()
    {
        $this->viewFolder="webSetting";
    }

    public function index(){
        $setting = SettingModel::find(1);
        return view('Backend.setting.create', compact('setting'));
    }
    public function update(Request $request){

        $logo = request()->hasFile("logo");
        $logo2 = request()->hasFile("logo2");
        $icon = request()->hasFile("icon");

        $setting = SettingModel::find(1);
        if($logo == 1){

            dizinolustur("uploads/$this->viewFolder", 0777, true, true);

            $logo = request()->file('logo');
            $filename = time() . '.' . $logo->extension();
            upload_picture($_FILES["logo"]["tmp_name"], "uploads/$this->viewFolder", 370, 316, $filename);

            if($logo2 == 1){

                $logo2 = request()->file('logo2');
                $filename2 = time() . '.' . $logo2->extension();
                upload_picture($_FILES["logo2"]["tmp_name"], "uploads/$this->viewFolder", 770, 464, $filename2);
            }

            if($icon == 1){

                $icon = request()->file('icon');
                $filename3 = time() . '.' . $icon->extension();
                upload_picture($_FILES["icon"]["tmp_name"], "uploads/$this->viewFolder", 69, 69, $filename3);

            }

        $setting->company_name=$request->company_name;
        $setting->description=$request->description;
        $setting->keywords=$request->keywords;
        $setting->email=$request->email;
        $setting->phone_1=$request->phone_1;
        $setting->phone_2=$request->phone_2;
        $setting->address=$request->address;
        $setting->facebook=$request->facebook;
        $setting->twitter=$request->twitter;
        $setting->instagram=$request->instagram;
        $setting->youtube=$request->youtube;
        $setting->logo = $filename;
        $setting->logo2 = $filename2;
        $setting->icon = $filename3;
        $setting->updated_at=now();
        $setting->created_at=now();


    }else{
            $setting->company_name=$request->company_name;
            $setting->description=$request->description;
            $setting->keywords=$request->keywords;
            $setting->email=$request->email;
            $setting->phone_1=$request->phone_1;
            $setting->phone_2=$request->phone_2;
            $setting->address=$request->address;
            $setting->facebook=$request->facebook;
            $setting->twitter=$request->twitter;
            $setting->instagram=$request->instagram;
            $setting->youtube=$request->youtube;
            $setting->updated_at=now();
            $setting->created_at=now();
        }
        $setting->save();
        return redirect()->back();
    }

}
