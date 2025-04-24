<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Departments;
use App\Models\Property;
use Illuminate\Support\Facades\Hash;
use Log;

class UserController extends Controller
{
    public function login_pg()
    {
        return view('index')->with('customScript', 'js/login.js');
    }

    public function dash_pg()
    {
        return view('dashboard');
    }
    public function index(Request $request)
    {
        $data = User::query()->where('status','!=',3)->get();
        return view('user',['script'=>'user.js','data'=>$data]);
    }

    public function login(Request $request)
    {
        try {
            $user = User::where('username', $request->uname)->first();

            if (!$user || !Hash::check($request->password, $user->password))
            {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Data Fetch Failed',
                    'data' => []
                ], 500);
            } else {
                $request->session()->put('user_id', $user->id);
                return response()->json([
                    'status' => 'Success',
                    'message' => 'Data stored',
                    'data' => $user
                ], 200);
            }
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Data Fetch Failed',
                'data' => $e
            ], 500);
        }
    }
    public function logout(Request $request)
    {
        try {
            $request->session()->flush();
            return redirect()->intended('/index');

        } catch (Exception $e) {
            Log::debug($e);
        }
    }
    public function department()
    {
        $data = Departments::query()->where('status','!=',3)->get();
        return view('department',['script'=>'department.js','data'=>$data]);
    }
    public function index_property()
    {
        $data = Property::query()->where('status','!=',3)->get();
        return view('property',['script'=>'property.js','data'=>$data]);
    }

    public function new_user(Request $request)
    {
      try{
      $pass_hash = Hash::make($request->password);
      User::query()->create([
       'name'=>$request->fname,
       'username'=>$request->uname,
       'password'=>$pass_hash,
       'role'=>$request->role,
       'status'=>1
      ]);
      return response()->json([
        'status' => 'success',
        'message' => 'Data Save Scuccess',
        'data' => []
    ], 200);
      }catch(Exception $e)
      {
       Log::debug($e);
       return response()->json([
        'status' => 'error',
        'message' => 'Data Save Failed',
        'data' => $e
    ], 500);
      }

    }
}
