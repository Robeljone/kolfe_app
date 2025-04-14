<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login_pg()
    {
     return view('index');
    }

    public function dash_pg()
    {
     return view('dashboard');
    }
   public function index()
   {
    return view('user');
   }

   public function login(Request $request)
   {

   }
   public function logout(Request $request)
   {
    
   }
   public function department()
   {
    return view('department');
   }
   public function index_property()
   {
    return view('property');
   }

   
}
