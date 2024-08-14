<?php

namespace App\Http\Controllers;

use App\Models\Qoute;
use App\Models\User;
use Illuminate\Http\Request;

class UserController
{
    public function index(){
        return view('admin.index');
    }
    public function login(Request $request){
        $request->validate([
            'username' => 'required',
            'userpassword' => 'required'
        ],[
            'username.required' => 'This field is Required',
            'userpassword.required' => 'This field is Required'
        ]);
        $user = User::where('username', $request->username)->first();
        // return $user->username;
        if($user){
            if($user->password == $request->userpassword){
                $qoute = Qoute::all();
                session(['id' => $user->id]);
                session(['name' => $user->name]);
                return view('admin.index',compact('qoute'));
            }else{
                return redirect()->route('loginPage')->with('message','Invalid username or password');
            }
        }else{
            return redirect()->route('loginPage')->with('message','Invalid username or password');
        }
    }
    public function logout(){
        session()->flush();
        return redirect()->route('admin');
    }
}
