<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class CrudController extends Controller
{
    public function AddUser(Request $req)
    {
        $validator= Validator::make($req->all(),[
            'fname'=>'required|max:50',
            'uname'=>'required|max:50|unique:information,username',
            'mail'=>'required|max:50',
            'password'=>'required|max:50',
            'phone'=>'required|max:20',
            'address'=>'required|max:100',
            'birth'=>'required|date',
            'imagge'=>'required|max:100'
        ],
    );
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        User::create([
            'fullName' => $req->fname,
            'username' => $req->uname,
            'email' => $req->mail,
            'password' => bcrypt($req->password),
            'phone' => $req->phone,
            'address' => $req->address,
            'birth' => $req->birth,
            'ImgName' => $req->imagge
        ]);
        // ...
        Session::flash('success', 'Registration successful!');
        MailController::send();
        return redirect()->back();

    }
}


