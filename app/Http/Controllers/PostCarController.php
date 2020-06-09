<?php

namespace App\Http\Controllers;

use App\PostCar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostCarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }
   public function index()
    {
        //
       if(Gate::denies('user')){
      if(Auth::user()->hasrole('admin')){
          return redirect(route('admin.index'));
        }   
     }
    
    
       $carname=DB::table('brand_names')->get();
        $postRScar=DB::table('post_cars')->get();
        return view('PostCar.index',['carname'=>$carname,'postRScars'=>$postRScar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         //
       if(Gate::denies('user')){
      if(Auth::user()->hasrole('admin')){
          return redirect(route('admin.index'));
        }   
     }
    
        $validpost=request()->validate([
          'brandname'=>'required',
          'modelname'=>'required',
          'description'=>'required',
          'price'=>'required',
          'color'=>'required',
          'carimage'=>'required | mimes:jpeg,jpg,png | max:1000',
        ]);
       $data=array();
       $data['brandname']=$request->brandname;
       $data['modelname']=$request->modelname;
       $data['description']=$request->description;
       $data['price']=$request->price;
       $data['color']=$request->color;
       $data['rent']=$request->rent;
       $data['sell']=$request->sell;
       $image=$request->file('carimage');

        if($image){
            $imagename=Str::random();
            $extention=strtolower($image->getClientOriginalExtension());
            $filename=$imagename.'.'.$extention;
            $uplode_path='public/uplodes/image/';
            $image_url=$uplode_path.$filename;
            $success=$image->move($uplode_path,$filename);
            $data['carimage']=$image_url;
             $post=Db::table('post_cars')->insert(
              $data
              );
             $notification=array(
             'massage'=>'success',
             'alert-type'=>'success'
             );
           
       $carname=DB::table('brand_names')->get();
     return view('postcar.index',['carname'=>$carname]);
        }else{
            $carname=DB::table('brand_names')->get();
           $post=Db::table('post_cars')->updateOrInsert(
           $data
        );
           
       
     return view('postcar.index',['carname'=>$carname]);
        }

       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PostCar  $postCar
     * @return \Illuminate\Http\Response
     */
    public function show(PostCar $postCar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PostCar  $postCar
     * @return \Illuminate\Http\Response
     */
    public function edit(PostCar $postCar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PostCar  $postCar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostCar $postCar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PostCar  $postCar
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostCar $postCar)
    {
        //
    }

     public function postcarbrand(){
       //
       if(Gate::denies('user')){
      if(Auth::user()->hasrole('admin')){
          return redirect(route('admin.index'));
          }   
           }
       
        return view('PostCar.postcarbrand');
     }

      public function postcarbrandupdate(Request $request){

               //
           if(Gate::denies('user')){
            if(Auth::user()->hasrole('admin')){
              return redirect(route('admin.index'));
               }   
             }

         $validpost=request()->validate([
          'Carbrand'=>'required',
           ]);
           $data=array();
           $data['Carbrand']=$request->Carbrand;


         $post=Db::table('brand_names')->updateOrInsert(
           $data
        );
        return view('PostCar.postcarbrand');
     }
}
