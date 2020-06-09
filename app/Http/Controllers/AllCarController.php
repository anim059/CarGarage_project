<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AllCarController extends Controller
{
    //
  public function __construct(){
        $this->middleware('auth');
    }
  public function shownewcars()
    {
       if(Gate::denies('user')){
      if(Auth::user()->hasrole('admin')){
          return redirect(route('admin.index'));
        }   
     }
       $newcars=DB::table('post_new_cars')->paginate(6);
        $postRScar=DB::table('post_cars')->get();
        
       return view('AllCar.newcars',['newcar'=>$newcars,'postRScars'=>$postRScar]);
    }




  public function showrentcars()
 {
       if(Gate::denies('user')){
      if(Auth::user()->hasrole('admin')){
          return redirect(route('admin.index'));
        }   
     }
       //$newcars=DB::table('post_new_cars')->get();
       $newcars=DB::table('post_cars')->paginate(6);
        $postRScar=DB::table('post_cars')->get();
        
       return view('AllCar.rentcars',['newcar'=>$newcars,'postRScars'=>$postRScar]);
    }




  public function showsellcars()
 {

        if(Gate::denies('user')){
      if(Auth::user()->hasrole('admin')){
          return redirect(route('admin.index'));
        }   
     }
       //$newcars=DB::table('post_new_cars')->get();
       $newcars=DB::table('post_cars')->paginate(6);
        $postRScar=DB::table('post_cars')->get();
        
       return view('AllCar.sellcars',['newcar'=>$newcars,'postRScars'=>$postRScar]);
    }




   public function allcarbrands()
 {

        if(Gate::denies('user')){
      if(Auth::user()->hasrole('admin')){
          return redirect(route('admin.index'));
        }   
     }
       $newcars=DB::table('post_new_cars')->paginate(6);
      // $newcars=DB::table('post_cars')->paginate(6);
        $postRScar=DB::table('post_cars')->get();
        
       return view('AllCar.allcarbrands',['newcar'=>$newcars,'postRScars'=>$postRScar]);
    }

   public function searchcarbrands(Request $request)
    {
        if(Gate::denies('user')){
      if(Auth::user()->hasrole('admin')){
          return redirect(route('admin.index'));
        }   
     }
     $search=$request->get('search_brand');
     $newcars=DB::table('post_new_cars')->where('Brandname','like', '%' . $search . '%')->paginate(1);
        
       return view('AllCar.searchcarbrands',['newcar'=>$newcars]);
    }

}
