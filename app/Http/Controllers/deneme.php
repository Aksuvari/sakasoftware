<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class deneme extends Controller
{
    public function deneme(){
        //resorce kullanılacak
        return view('backend.Setting.create');
    }
    public function icerik(){
        return view('backend.Content.create');
    }
    public function icerik1(){
        return view('backend.Content.index');
    }
    public function is(){
        //resorce kullanılacak
        return view("backend.Business.create");
    }
    public function is1(){
        return view("backend.Business.index");
    }
    public function slider(){
        return view("backend.Slider.create");
    }
    public function slider1(){
        return view("backend.Slider.index");
    }
    public function portfolio(){
        return view("backend.Portfolio.create");
    }
    public function portfolio1(){
        return view("backend.Portfolio.index");
    }
    public function hizmetler(){
        return view("backend.Services.create");
    }
    public function hizmetler1(){
        return view("backend.Services.index");
    }
    public function blog(){
        return view("backend.Blog.create");
    }
    public function blog1(){
        return view("backend.Blog.index");
    }
    public function paket(){
        return view("backend.Package.create");
    }
    public function paket1(){
        return view("backend.Package.index");
    }
}
