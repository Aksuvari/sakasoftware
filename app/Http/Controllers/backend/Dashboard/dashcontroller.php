<?php

namespace App\Http\Controllers\backend\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashcontroller extends Controller
{
    public function create(){
        return view('Backend.Dashboard.create');
    }
}
