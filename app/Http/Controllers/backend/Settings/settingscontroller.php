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


    public function update(Request $request, $id)
    {
        $rules=[
            'company_name'=>'required',
            'description'=>'required',
            'keywords'=>'required',
            'email'=>'required',
            'phone_1'=>'required',
            'phone_2'=>'required',
            'address'=>'required',
        ];
        $customMessages=[
            'company_name.required'=>'Bu Alanı doldurmak zorunludur.',
            'description.required'=>'Bu Alanı doldurmak zorunludur.',
            'keywords.required'=>'Bu Alanı doldurmak zorunludur.',
            'email.required'=>'Bu Alanı doldurmak zorunludur.',
            'phone_1.required'=>'Bu Alanı doldurmak zorunludur.',
            'phone_2.required'=>'Bu Alanı doldurmak zorunludur.',
            'address.required'=>'Bu Alanı doldurmak zorunludur.',
        ];
        $this->validate($request,$rules,$customMessages);
        $setting = SettingModel::find($id);
        $logo = request()->has("logo");
        $logo2 = request()->has("logo2");
        $icon = request()->has("icon");

        if ($logo == 1 || $logo2 == 1 || $icon == 1) {
            dizinolustur("uploads/$this->viewFolder", 0777, true, true);
            if ($logo == 1) {
                if ($setting->logo != null) {
                    unlink("uploads/setting/$setting->logo");
                }
                $logo = request()->file('logo');
                $filename = "logo" .time(). '.' . $logo->extension();
                upload_picture($logo, "uploads/$this->viewFolder", 180, 180, $filename);
                $setting->logo = $filename;
            }
            if ($logo2 == 1) {
                if ($setting->logo2 != null) {
                    unlink("uploads/setting/$setting->logo2");
                }
                $logo2 = request()->file('logo2');
                $filename2 = "logo2" .time(). '.' . $logo2->extension();
                upload_picture($logo2, "uploads/$this->viewFolder", 180, 180, $filename2);
                $setting->logo2 = $filename2;
            }
            if ($icon == 1) {
                if ($setting->icon != null) {
                    unlink("uploads/setting/$setting->icon");
                }
                $icon = request()->file('icon');
                $filename3 = "icon" .time(). '.' . $icon->extension();
                upload_picture($icon, "uploads/$this->viewFolder", 180, 180, $filename3);
                $setting->icon = $filename3;
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
        } else {
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
        }
        $setting->save();
        if ($setting){
            return back()->with('Success','Kayıt İşlemi Başarıyla Gerçekleşti');
        }else{
            return back()->with('Error','Kayıt İşlemi Sırasında Hata Oluştu');
        }
    }

}
