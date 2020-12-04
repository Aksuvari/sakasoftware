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
        $rules=[
            'title'=>'required',
            'costumer_name'=>'required',
            'costumer_contact'=>'required',
            'aut_name'=>'required',
            'aut_maker_name'=>'required',
            'contentt'=>'required',
        ];
        $customMessages=[
            'title.required'=>'Bu Alanı doldurmak zorunludur.',
            'costumer_name.required'=>'Bu Alanı doldurmak zorunludur.',
            'costumer_contact.required'=>'Bu Alanı doldurmak zorunludur.',
            'aut_name.required'=>'Bu Alanı doldurmak zorunludur.',
            'aut_maker_name.required'=>'Bu Alanı doldurmak zorunludur.',
            'contentt.required'=>'Bu Alanı doldurmak zorunludur.',
        ];
        $this->validate($request,$rules,$customMessages);

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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $business=BusinessModel::findorFail($id);
         return view('Backend.Business.update',compact('business'));
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
        $rules=[
            'title'=>'required',
            'costumer_name'=>'required',
            'costumer_contact'=>'required',
            'aut_name'=>'required',
            'aut_maker_name'=>'required',
            'contentt'=>'required',
        ];
        $customMessages=[
            'title.required'=>'Bu Alanı doldurmak zorunludur.',
            'costumer_name.required'=>'Bu Alanı doldurmak zorunludur.',
            'costumer_contact.required'=>'Bu Alanı doldurmak zorunludur.',
            'aut_name.required'=>'Bu Alanı doldurmak zorunludur.',
            'aut_maker_name.required'=>'Bu Alanı doldurmak zorunludur.',
            'contentt.required'=>'Bu Alanı doldurmak zorunludur.',
        ];
        $this->validate($request,$rules,$customMessages);

        $business=BusinessModel::findorFail($id);
        $business->title=$request->title;
        $business->costumer_name=$request->costumer_name;
        $business->costumer_contact=$request->costumer_contact;
        $business->aut_name=$request->aut_name;
        $business->aut_maker_name=$request->aut_maker_name;
        $business->contentt=$request->contentt;
        $business->updated_at=now();
        $business->created_at=now();
        $business->save();

        return redirect()->route('business.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete(int $id)
    {
        BusinessModel::find($id)->delete();
        return redirect()->route('business.index');
    }
    public function destroy($id)
    {
        //
    }
}
