<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index(Request $request){
        $result = session('key');
        if($result == "yes"){
            $search = $request['search'] ?? "";
            if($search != ""){
                $user = User::where('name','LIKE',"%$search%")->orwhere('phone','LIKE',"%$search%")->get();
            }else{
                $user = User::paginate(5);
            }
            $data = compact('user','search');
            return view('succ')->with($data);
        }
        else{
            return view('login');
        }
    }



    public function store(Request $request){

       $email = $request['email'];
       $pass  = md5($request['password']);
       $search ="";

        if($email == "" || $pass ==""){
            
            return view('login');
        }
        else{
            $user = User::where('email','=',"$email")->orwhere('phone','=',"$email")->get();
            if(count($user)){
                $psquery = $user[0]['password'];
                if ($pass==$psquery){   
                    $request->session()->put('key','yes');
                    
                    $user = User::paginate(5);
    
                    $data = compact('user','search');
                    return view('succ')->with($data);
                }
                else{
                return view('login');
                }
            }
            else{
                return view('login');
            }

        }

        
    }
}
