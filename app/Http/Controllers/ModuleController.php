<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departments;
use App\Models\Destinations;
use App\Models\Locations;
use App\Models\Heritages;
use App\Models\Property;
use App\Models\Crafts;
use App\Models\CraftLists;
use App\Models\EventBookings;
use Exception;
use Illuminate\Support\Facades\Log;

class ModuleController extends Controller
{
    public function destination()
    {
        $data = Destinations::query()->get();
        return view('destination',['script'=>'destination.js','data'=>$data]);
    }
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

   public function new_destination(Request $request)
   {
     try
     {
        Destinations::query()->create([
          'type'=>$request->type,
          'name'=>$request->name,
          'disc'=>$request->dest
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

   public function new_heritage(Request $request)
   {
     try
     {
        Heritages::query()->create([
            'type'=>$request->type,
            'name'=>$request->name,
            'aName'=>$request->aname,
            'pLoc'=>1,
            'mLoc'=>$request->loca,
            'vid'=>'O',
            'disc'=>$request->desc,
            'aDisc'=>$request->adesc,
            'viewer'=>0
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

   public function heritage()
    {
        $data = Heritages::query()->get();
        return view('heritage',['script'=>'heritage.js','data'=>$data]);
    }

    public function location()
    {
        $data = Locations::query()->get();
        return view('location',['script'=>'location.js','data'=>$data]);
    }

    public function new_location(Request $request)
   {
     try
     {
        Locations::query()->create([
            'name'=>$request->name,
            'aName'=>$request->aname,
            'stat'=>1
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

   public function craft()
    {
        $data = Crafts::query()->get();
        return view('craft',['script'=>'craft.js','data'=>$data]);
    }

    public function craft_list($id)
    {
        $data = CraftLists::query()->where('rid','=',$id)->get();
        return view('craft_list',['script'=>'craft_list.js','data'=>$data]);
    }

    public function new_craft(Request $request)
    {
      try
      {
         Crafts::query()->create([
          'name'=>$request->name,
          'aName'=>$request->aname,
          'map'=>$request->loc,
          'det'=>$request->det,
          'ADet'=>$request->adet
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

    public function new_craftlist(Request $request)
    {
      try
      {
         CraftLists::query()->create([
            'rid'=>$request->rid,
            'name'=>$request->name,
            'aName'=>$request->aname,
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

    public function request_pg()
    {
        $data = Property::query()->where('status','=',1)->get();
        $dep = Departments::query()->where('status','=',1)->get();
        return view('requ',['script'=>'request.js','css'=>'signature.css','data'=>$data,'dep'=>$dep]);
    }

    public function approval_pg()
    {
        $data = EventBookings::query()->where('status','=',1)->get();
        return view('approval',['script'=>'approval.js','data'=>$data]);
    }

    public function invalid_url(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('index'); // or ->route('index') based on your route name
    }

}
