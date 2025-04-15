<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
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
    public function index()
    {
        return view('user');
    }

    public function login(Request $request)
    {
        try {
            $user = User::where('username', $request->uname)->first();

            if (!$user || !Hash::check($request->password, $user->password)) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Data Fetch Failed',
                    'data' => []
                ], 500);
            } else {
                Session::put('user_name', $user->name);
                Session::put('user_role', $user->name);
                Session::put('is_true', true);
                return response()->json([
                    'status' => 'success',
                    'message' => 'Data stored',
                    'data' => $user
                ], 200);
                // return redirect()->intended('/dashboard');
            }
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Data Fetch Failed',
                'data' => []
            ], 500);
        }
    }
    public function logout(Request $request)
    {
        try {
            // $request->session()->flush();
            return redirect()->intended('/index');

        } catch (Exception $e) {
            Log::debug($e);
        }
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
