@extends('layouts.adminlayout')

@section('content')

    <div class="row justify-content-center">
      
                <div class="card-header">Admin Post</div>

                <div class="card-body">
                       <table class="table">  
                          <thead>
                            <tr>
                              <th scope="col">Id</th>
                              <th scope="col">Brand name</th>
                              <th scope="col">Model name</th>
                              <th scope="col">Price</th>
                              <th scope="col">Description</th>
                              <th scope="col">color</th>
                              <th scope="col">Image</th>
                               <th scope="col">Featured</th>
                            </tr>
                          </thead>
                           @foreach($posts as $post)                  
                          <tbody>
                            <tr>
                              <th scope="row">{{$post->id}}</th>
                              <td>{{$post->Brandname}}</td>
                              <td>{{$post->Modelname}}</td>
                              <td>{{$post->Price}}</td>
                              <td>{{$post->Description}}</td>
                              <td>{{$post->color}}</td>
                              <td>{{$post->Carimage}}</td>
                              <td>{{$post->Featured}}</td>
                              <td><button class="btn-primary"><a href="">edit</a></button></td>
                               <td><button class="btn-primary"><a href="">delete</a></button></td>
                            </tr>
                           
                          </tbody>
                           @endforeach 
                        </table>
                         
                
                </div>
      
    </div>

@endsection