<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    public function index(){
        return view('form');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email'=> 'required|email',
                'phone'=> 'required|digits:11',
                'password'=>'required',
                'conform_password' => 'required|same:password'
            ]
        );


    
            $user = new User;
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->phone = $request['phone'];
            $user->password = md5($request['password']);
            $user->save();

            return redirect('/reg/view');

    }
    public function congratulation(){
        return view('congratulation');
    }

    public function view(Request $request){
        $user = array();
        $search = $request['search'] ?? "";
        if($search != ""){
            $user = User::where('name','LIKE',"%$search%")->orwhere('phone','LIKE',"%$search%")->get();
        }else{
            $user = User::paginate(5);
        }
        $data = compact('user','search');
        return view('succ')->with($data);
    }
}
