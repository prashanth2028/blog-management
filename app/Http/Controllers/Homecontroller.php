<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\Auth;

class Homecontroller extends Controller
{
    public function index(){
        if(Auth::id()){
            $usertype = Auth()->user()->usertype;
            if($usertype == 'user'){
                return view("user.user");
            }
            elseif($usertype == 'admin'){
                return view('admin.admin');
            }
            else{
                return redirect()->back();
            }

        }


    }
    public function homepage(){
        return view('Home.homepage');
    }
}
