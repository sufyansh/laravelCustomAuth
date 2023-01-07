<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class SampleController extends Controller
{
    public function index(){
        return view('login');
    }
    public function registration(){
       return view('registration');
    }
    public function validate_login(Request $req){
       $req->validate([
           'email' => 'required',
           'password'=> 'required'
       ]);
        $credential = $req->only('email', 'password');
        if(Auth::attempt($credential)){
            return redirect('dashboard');
        }
        return redirect('login')->with('success', 'Login detail are not valid');

     }
     public function dashboard(){
         if(Auth::check()){
            return view('dashboard');
        }
        return redirect('login')->with('success', 'you are not Allowed to access');
     }
    public function validate_registration(Request $req){
        $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required |min:6'
        ]);
        $data = $req->all();
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']) 
        ]);
        return redirect('login')->with('success', 'Registartion COmpleted  You can login ');
     }
    public function logout(){
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
