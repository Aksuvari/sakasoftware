<?php

namespace App\Http\Controllers\backend\Email;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class emailController extends Controller
{
    public function index(){
        return view('Backend.Email.index');
    }
    public function create(){
        return view('Backend.Email.create');
    }
}
