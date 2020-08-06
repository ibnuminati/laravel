<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function register(){
        return view('register');
    }

    public function home(){
        return view('home');
    }

    public function welcome(Request $request){
        $firstname = $request->input('firstname');
    	$lastname = $request->input('lastname');
    	$nama = $firstname . " " . $lastname;

    	return view('welcome', ['nama' => $nama]);
    }

}
