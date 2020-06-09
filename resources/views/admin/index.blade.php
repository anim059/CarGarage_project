@extends('layouts.adminlayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User</div>

                <div class="card-body">
                       <table class="table">  
                          <thead>
                            <tr>
                              <th scope="col">id</th>
                              <th scope="col">name</th>
                              <th scope="col">email</th>
                              <th scope="col">roles</th>
                            </tr>
                          </thead>
                           @foreach($users as $user)                  
                          <tbody>
                            <tr>
                              <th scope="row">{{$user->id}}</th>
                              <td>{{$user->name}}</td>
                              <td>{{$user->email}}</td>
                              <td><button class="btn-primary"><a href="{{route('admin.edit',[$user->id])}}">edit</a></button></td>
                            </tr>
                           
                          </tbody>
                           @endforeach 
                        </table>
                         
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection