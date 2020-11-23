<?php

namespace App\Http\Controllers\backend\Business;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BusinessModel;

class businesscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $business=BusinessModel::orderBy('created_at','ASC')->get();
        return view('backend.Business.index',compact('business'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.Business.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $business=new BusinessModel;
        $business->title=$request->title;
        $business->costumer_name=$request->costumer_name;
        $business->costumer_contact=$request->costumer_contact;
        $business->aut_name=$request->aut_name;
        $business->aut_maker_name=$request->aut_maker_name;
        $business->contentt=$request->contentt;
        $business->updated_at=now();
        $business->created_at=now();
        $business->save();

        return back()->with('Success','Kayıt işlemi başarıyla gerçekleşti.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
