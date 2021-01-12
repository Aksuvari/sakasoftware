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
        $blogs=BlogModel::where('isActive',1)->orderBy('rank','asc')->get();
        $services=ServiceModel::where('isActive',1)->orderBy('rank','asc')->get();
        $projects=ProjectModel::where('isActive',1)->orderBy('rank','asc')->get();
        return view('Frontend.homepage',compact('contents','blogs','services','projects'));
    }
    public function kurumsal($slug){
        $contents=ContentModel::where('slug',$slug)->firstOrFail();
        return view('Frontend.kurumsal',compact('contents'));
    }
    public function hizmet(){
        $services=ServiceModel::where('isActive',1)->orderBy('rank','asc')->get();
        return view('Frontend.hizmet',compact('services'));
    }
    public function hizmetdetay($slug){
        $services=ServiceModel::where('slug',$slug)->firstOrFail();
        return view('Frontend.hizmetdetay',compact('services'));
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
    public function contactForm(){
        $send = sendMail('email.mailverify', "info@sakasoftware.com", "Konu", "denemeyaptık");

        if ($send) {
            return back();
        } else {
            return back();
        }
    }

}
