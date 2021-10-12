<?php

namespace App\Http\Controllers\Website;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function entrar()
    {
        $categorias = Category::all();
        return view('auth.login')->with(['categorias'=>$categorias]);
    }

    public function auth(Request $request)
    {
       $credenciais = $request->only('email','password');
       if (Auth::attempt($credenciais)){
           $request->session()->regenerate();
           return redirect()->route('inicio');
       }else{
           return redirect()->back()->with('danger','Seu dados estão incorrectos');
       }
    }

    public function eu()
    {
        $user = Auth::user()->id;
        dd($user);
    }
}
