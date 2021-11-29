<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

    // display specific user 
    public function show($id) {
        return view('controller', ['user' => User::find($id)]);
    }

    // session 
    // public function sess(Request $request, $id) {
    //     // $ses = $request->session()->get('key');
    //     $value = $request->session()->get('key', 'default');
    //     echo $value;
    // }

    public function setSession(Request $request, $key) {
        session(['key' => $key]);
    }

    public function retreiveSession(Request $request, $key) {
        echo  $request->session()->get('key');
    }



}
