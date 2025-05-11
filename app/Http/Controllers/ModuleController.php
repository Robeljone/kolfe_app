<?php

namespace App\Http\Controllers;

use App\Models\ArtNews;
use App\Models\CulturalBlog;
use App\Models\Images;
use App\Models\News;
use Illuminate\Http\Request;
use App\Models\Departments;
use App\Models\Destinations;
use App\Models\Locations;
use App\Models\Heritages;
use App\Models\Property;
use App\Models\Crafts;
use App\Models\CraftLists;
use App\Models\EventBookings;
use App\Models\CulturalEvents;
use App\Models\Libraries;
use App\Models\Books;
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
 
        $res = Destinations::query()->create([
          'type'=>$request->type,
          'name'=>$request->name,
          'disc'=>$request->dest
        ]);

        if($request->file('image')!=null)
        {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('uploaded_images/destination'), $imageName);

            Images::query()->create([
                'type'=>'d',
                'rid'=>$res->id,
                'img'=>$imageName
            ]);
        }
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
        $res = Heritages::query()->create([
            'type'=>$request->type,
            'name'=>$request->name,
            'aName'=>$request->aname,
            'pLoc'=>1,
            'mLoc'=>1,
            'vid'=>'O',
            'disc'=>$request->desc,
            'aDisc'=>$request->adesc,
            'viewer'=>0
        ]);
        if($request->file('image')!=null)
        {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('uploaded_images/heritage'), $imageName);

            Images::query()->create([
                'type'=>'h',
                'rid'=>$res->id,
                'img'=>$imageName
            ]);
        }
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
         $res = Crafts::query()->create([
          'name'=>$request->name,
          'aName'=>$request->aname,
          'map'=>$request->loc,
          'det'=>$request->det,
          'ADet'=>$request->adet
         ]);

         if($request->file('image')!=null)
        {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('uploaded_images/craft'), $imageName);

            Images::query()->create([
                'type'=>'c',
                'rid'=>$res->id,
                'img'=>$imageName
            ]);
        }

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

    public function events()
    {
        $data = CulturalEvents::query()->get();
        return view('events',['data'=>$data,'script'=>'event.js']);
    }

    public function new_events(Request $request)
    {
      try
      {
         CulturalEvents::query()->create([
            'name'=>$request->name,
            'aName'=>$request->aname,
            'det'=>$request->det,
            'aDet'=>$request->adet,
            'loc'=>$request->place,
            'aLoc'=>$request->aplace,
            'date'=>$request->edate
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

    public function index_libraries()
    {
        $data = Libraries::query()->get();
        return view('libraries',['data'=>$data,'script'=>'library.js']);
    }

    public function index_books()
    {
        $lib = Libraries::query()->get();
        $data = Books::query()->get();
        return view('books',['script'=>'books.js','lib'=>$lib,'data'=>$data]);
    }

    public function new_library(Request $request)
    {
      try
      {
        if($request->file('image')!=null)
        {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('uploaded_images/libs'), $imageName);
        }
        else{
         $imageName = "lib.jpg";   
        }
         Libraries::query()->create([
            'name'=>$request->name,
            'aName'=>$request->aname,
            'det'=>$request->des,
            'aDet'=>$request->ades,
            'img'=>$imageName,
            'map'=>$request->map
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

    public function blogs()
    {
        $data = CulturalBlog::query()->get();
        return view('blogs',['script'=>'blog.js','data'=>$data]);
    }

    public function arts()
    {
        $data = ArtNews::query()->get();
        return view('art',['script'=>'art.js','data'=>$data]);
    }

    public function news()
    {
        $data = News::query()->get();
        return view('news',['script'=>'news.js','data'=>$data]);
    }    

    public function new_blog(Request $request)
    {
      try
      {
         $res = CulturalBlog::query()->create([
            'title'=>$request->title,
            'aTitle'=>$request->atitle,
            'aut'=>$request->auth,
            'aAut'=>$request->aauth,
            'det'=>$request->desc,
            'ADet'=>$request->adesc
         ]);

         if($request->file('image')!=null)
        {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('uploaded_images/blogs'), $imageName);

            Images::query()->create([
                'type'=>'cb',
                'rid'=>$res->id,
                'img'=>$imageName
            ]);
        }

         return response()->json([
             'status' => 'success',
             'message' => 'Data stored success',
             'data' => []
         ], 200);
      }
      catch(Exception $e)
      {
         Log::debug($e);
         return response()->json([
             'status' => 'error',
             'message' => 'Data stored failed',
             'data' => $e
         ], 500);
      }
    }

    public function new_news(Request $request)
    {
      try
      {
         $res = News::query()->create([
            'title'=>$request->title,
            'aTitle'=>$request->atitle,
            'aut'=>$request->auth,
            'aAut'=>$request->aauth,
            'det'=>$request->desc,
            'ADet'=>$request->adesc
         ]);

         if($request->file('image')!=null)
        {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('uploaded_images/news'), $imageName);

            Images::query()->create([
                'type'=>'n',
                'rid'=>$res->id,
                'img'=>$imageName
            ]);
        }

         return response()->json([
             'status' => 'success',
             'message' => 'Data stored success',
             'data' => []
         ], 200);
      }
      catch(Exception $e)
      {
         Log::debug($e);
         return response()->json([
             'status' => 'error',
             'message' => 'Data stored failed',
             'data' => $e
         ], 500);
      }
    }

    public function art_news(Request $request)
    {
      try
      {
         $res = ArtNews::query()->create([
            'title'=>$request->title,
            'aTitle'=>$request->atitle,
            'aut'=>$request->auth,
            'aAut'=>$request->aauth,
            'det'=>$request->desc,
            'ADet'=>$request->adesc
         ]);

         if($request->file('image')!=null)
        {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('uploaded_images/art_news'), $imageName);

            Images::query()->create([
                'type'=>'a',
                'rid'=>$res->id,
                'img'=>$imageName
            ]);
        }

         return response()->json([
             'status' => 'success',
             'message' => 'Data stored success',
             'data' => []
         ], 200);
      }
      catch(Exception $e)
      {
         Log::debug($e);
         return response()->json([
             'status' => 'error',
             'message' => 'Data stored failed',
             'data' => $e
         ], 500);
      }
    }

    public function new_books(Request $request)
    {
      try
      {

         if($request->file('image')!=null && $request->file('fil')!=null)
        {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('books/img'), $imageName);

            $file = $request->file('fil');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('books/file'), $fileName);

            Books::query()->create([
                'libid'=>$request->libs,
                'name'=>$request->name,
                'aName'=>$request->aname,
                'aut'=>$request->auth,
                'aAut'=>$request->amauth,
                'img'=>$imageName,
                'file'=>$fileName  
             ]);
        }
        elseif($request->file('image')==null && $request->file('fil')!=null)
        {

            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('books/file'), $fileName);

            Books::query()->create([
                'libid'=>$request->libs,
                'name'=>$request->name,
                'aName'=>$request->aname,
                'aut'=>$request->auth,
                'aAut'=>$request->amauth,
                'img'=>'img.jpg',
                'file'=>$fileName
             ]);
        }
        elseif($request->file('image')!=null && $request->file('fil')==null)
        {

            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('books/img'), $imageName);

            Books::query()->create([
                'libid'=>$request->libs,
                'name'=>$request->name,
                'aName'=>$request->aname,
                'aut'=>$request->auth,
                'aAut'=>$request->amauth,
                'img'=>$imageName,
                'file'=>'file.pdf'
             ]);
        }
        else
        {
            Books::query()->create([
                'libid'=>$request->libs,
                'name'=>$request->name,
                'aName'=>$request->aname,
                'aut'=>$request->auth,
                'aAut'=>$request->amauth,
                'img'=>'img.jpg',
                'file'=>'file.pdf'  
             ]);
        }

         return response()->json([
             'status' => 'success',
             'message' => 'Data stored success',
             'data' => []
         ], 200);
      }
      catch(Exception $e)
      {
         Log::debug($e);
         return response()->json([
             'status' => 'error',
             'message' => 'Data stored failed',
             'data' => $e
         ], 500);
      }
    }

    public function invalid_url(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('index'); // or ->route('index') based on your route name
    }

}
