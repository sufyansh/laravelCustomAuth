<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
class Test_Controller extends Controller
{
    public function index(){
        // dd(11);
        $user = Test::latest()->get();
        // dd($user);
                return view('user', ['user'=>$user ]);

    }
    public function show(){
        $User = Test::all();
    return view('detail', ['User'=>$User]);
    }
    public function create(){
        return view('create');
    }
    public function store(){
        $User = new Test();
        $User['email'] = request('email');
        $User['password'] = request('password');
        $User->save();
        error_log($User);
        return redirect('/user');
    }

    public function destroy($id){
      $User = Test::findOrFail($id);
        $User->delete();
        return redirect('/user');
    }
    public function edit($id)
    {
        $users = Test::find($id);
        return view('edit',['users'=>$users]);
    }
    
    public function update(Request $req)
    {  
    $Users= Test::find($req->id);
       
         $Users->email=  $req->email;
         $Users->password  = $req->password;

          $Users->save();
        return redirect('/user');

    }
}
