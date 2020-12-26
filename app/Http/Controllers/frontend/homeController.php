<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogModel;
use App\Models\BusinessModel;
use App\Models\CategoryModel;
use App\Models\ContentModel;
use App\Models\PackageModel;
use App\Models\PackageTypeModel;
use App\Models\ProjectTypeModel;
use App\Models\ProjectModel;
use App\Models\ServiceModel;
use App\Models\SettingModel;
use App\Models\SliderModel;

class homeController extends Controller
{
    public $footerContent="";
    public function __construct()
    {
        $this->footerContent = CategoryModel::all();
    }

    public function homepageshow(){
        $contents=ContentModel::where('isActive',1)->orderBy('rank','asc')->get();
        $projects=ProjectModel::where('isActive',1)->orderBy('rank','asc')->get();
        $blogs=BlogModel::where('isActive',1)->orderBy('rank','asc')->get();


        return view('Frontend.homepage',compact('contents','projects','blogs'));
    }
    public function kurumsal(){
        $contents=ContentModel::where('isActive',1)->orderBy('rank','asc')->get();
        return view('Frontend.kurumsal',compact('contents'))
            ->with('footerContent',$this->footerContent);
    }
    public function hizmet(){
        return view('Frontend.hizmet');
    }
    public function referans(){
        $projects=ProjectModel::where('isActive',1)->orderBy('rank','asc')->get();
        return view('Frontend.referans',compact('projects'));
    }
    public function blog(){
        $blogs=BlogModel::where('isActive',1)->orderBy('rank','asc')->get();
        return view('Frontend.blog',compact('blogs'));
    }
    public function blogdetay($slug){
        $blogs=BlogModel::where('slug',$slug)->firstOrFail();
        return view('Frontend.blogdetay',compact('blogs'));
    }
    public function contact(){
        return view('Frontend.contact');
    }

}
