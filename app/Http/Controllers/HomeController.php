<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\PostCar;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
            //
      
           $post=DB::table('post_new_cars')->get();
        $postRScar=DB::table('post_cars')->get();
        
        return view('home.index',['posts'=>$post,'postRScars'=>$postRScar]);
    
    }
}
