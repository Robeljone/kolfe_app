<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departments;
use App\Models\Property;

class ModuleController extends Controller
{
   public function new_department(Request $request)
   {
     try
     {
        Departments::query()->create([
          'name'=>$request->name,
          'status'=>1
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'Data stored success',
            'data' => []
        ], 200);
     }catch(Exception $e)
     {
        Log::debug($e);
        return response()->json([
            'status' => 'error',
            'message' => 'Data stored failed',
            'data' => $e
        ], 500);
     }
   }

   public function new_property(Request $request)
   {
     try
     {
        Property::query()->create([
          'name'=>$request->name,
          'status'=>1
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'Data stored success',
            'data' => []
        ], 200);
     }catch(Exception $e)
     {
        Log::debug($e);
        return response()->json([
            'status' => 'error',
            'message' => 'Data stored failed',
            'data' => $e
        ], 500);
     }
   }


}
