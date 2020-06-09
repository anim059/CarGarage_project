<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */
    public function __construct(){
        $this->middleware('auth', ['only' => ['index','create','show','edit','']]);
    }

    public function index()
    {
        //
          $post=DB::table('post_cars')->get();
          $user=DB::table('users')->get();
          $role=DB::table('roles')->get();
        
        return view('admin.index',['users'=>$user,'roles'=>$role,'posts'=>$post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $carname=DB::table('brand_names')->get();
        return view('admin.create',['carname'=>$carname]);
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
        $validobj=request()->validate([
         'Brandname'=>'required',
          'Modelname'=>'required',
          'Price'=>'required',
          'Description'=>'required',
          'Color'=>'required',
          'Carimage'=>'required | mimes:jpeg,jpg,png | max:1000',  
        ]);

       $data=array();
       $data['Brandname']=$request->Brandname;
       $data['Modelname']=$request->Modelname;
       $data['Price']=$request->Price;
       $data['Description']=$request->Description;
       $data['color']=$request->Color;
       $data['Featured']=$request->Featured;
       $image=$request->file('Carimage');
        if($image){
            $imagename=Str::random();
            $extention=strtolower($image->getClientOriginalExtension());
            $filename=$imagename.'.'.$extention;
            $uplode_path='public/uplodes/image/new/';
            $image_url=$uplode_path.$filename;
            $success=$image->move($uplode_path,$filename);
            $data['Carimage']=$image_url;
             $post=Db::table('post_new_cars')->insert(
              $data
              );
             $notification=array(
             'massage'=>'success',
             'alert-type'=>'success'
             );
           
      $post=DB::table('post_new_cars')->get();
     return view('admin.showpost',['posts'=>$post]);
        }else{

           $post=Db::table('post_new_cars')->updateOrInsert(
           $data
        );
           
       
       $post=DB::table('post_new_cars')->get();
     return view('admin.showpost',['posts'=>$post]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($user)
    {
        //
        if(Gate::denies('admin')){
          return redirect(route('admin.index'));
        }
        $carname=DB::table('brand_names')->get();
       $user=User::findOrFail($user);
       return view('admin.edit',['users'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function showpost()
    {
           $post=DB::table('post_new_cars')->get();
     return view('admin.showpost',['posts'=>$post]);
    }

     public function login()
    {
           $post=DB::table('post_new_cars')->get();
     return view('admin.showpost',['posts'=>$post]);
    }

    public function register(){
      return view('admin.register');
    }
    public function regupdate(Request $request){

          $user=User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        $role=Role::select('id')->where('name','admin')->first();
        $user->roles()->attach($role);
     
        return view('admin.register');
    }
    

}
