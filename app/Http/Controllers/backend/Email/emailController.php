<?php

namespace App\Http\Controllers\backend\Email;

use App\Http\Controllers\Controller;
use App\Models\EmailModel;
use Illuminate\Http\Request;
use PharIo\Manifest\Email;

class emailController extends Controller
{
    public function index(){
        $items=EmailModel::all();
        return view('Backend.Email.index',compact('items'));
    }
    public function create(){

        return view('Backend.Email.create');
    }
    public function store(Request $request){
    $items=new EmailModel();
    $items->port=$request->port;
    $items->host=$request->host;
    $items->from=$request->from;
    $items->to=$request->to;
    $items->username=$request->username;
    $items->password=$request->password;
    $items->title=$request->title;
    $items->protocol=$request->protocol;
    $items->save();
        return redirect()->route('Emails.index')->with('Success','Kayıt İşlemi Başarıyla Gerçekleşti');
    }
    public function edit($id){
        $items=EmailModel::find($id);
        return view('Backend.Email.update',compact('items'));

    }
    public function update(Request $request, $id){
        $items=EmailModel::find($id);
        $items->port=$request->port;
        $items->host=$request->host;
        $items->from=$request->from;
        $items->to=$request->to;
        $items->username=$request->username;
        $items->password=$request->password;
        $items->title=$request->title;
        $items->protocol=$request->protocol;
        $items->save();
        return redirect()->route('Emails.index')->with('Success','Güncelleme İşlemi Başarıyla Gerçekleşti');

    }
    public function delete(int $id){
        $delete = EmailModel::destroy($id);

        if ($delete) {
            $success = true;
            $message = "Blog Yazısı Silindi.";
        } else {
            $success = false;
            $message = "Blog Yazısı Bulunamadı.";
        }

        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }

    public function isActiveSetter($id)
    {
        if ($id) {
            $items = EmailModel::find($id);
            $isActive = (request('data') == "true") ? 1 : 0;
            $items->isActive = $isActive;
            $items->save();
        }
    }


}
