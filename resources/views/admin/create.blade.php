@extends('layouts.adminlayout')
@section('content')
<div class="form_display">

@if($errors->any())
<div class="alert alert-danger">
	<ul> 
		@foreach($errors->all() as $error)
           <li>{{$error}}</li>
		@endforeach
	</ul>
	
</div>
@endif
<form method="post" action="/admin" enctype="multipart/form-data">
	@csrf
  <div class="form-group">
    <label for="postbrandname">Brand Name</label>
   <div class="col-sm-6">
    <select name="Brandname" class="form-control">
      @foreach($carname as $carnames)
      <option value="{{$carnames->Carbrand}}">{{$carnames->Carbrand}}</option>
      @endforeach
    </select>
   </div>
    @error('Brandname')
    <p class="help is-danger">{{$errors->first('Brandname')}}</p>
    @enderror
  </div>

  <div class="form-group">
    <label for="postmodelname">Model Name</label>
    <input type="text" class="form-control @error('Modelname') is-danger @enderror" id="postmodelname" name='Modelname' value="{{old('Modelname')}}">
    @error('Modelname')
    <p class="help is-danger">{{$errors->first('Modelname')}}</p>
    @enderror
  </div>

  <div class="form-group">
    <label for="postprize">Prize</label>
    <input type="text" class="form-control @error('Price') is-danger @enderror" id="postprize" name='Price' value="{{old('Price')}}">
    @error('Price')
    <p class="help is-danger">{{$errors->first('Price')}}</p>
    @enderror
  </div>
  <br>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="postcheckbox" name='Featured' value='yes'>
    <label class="form-check-label"  for="postcheckbox">featured car</label>
  </div>
  <br>
  <div class="form-group">
    <label for="postnewTextarea1">Description</label>
    <textarea class="form-control  @error('Description') is-danger @enderror" value="{{old('Description')}}" id="postnewTextarea1" rows="3" name='Description'></textarea>
     @error('Description')
    <p class="help is-danger">{{$errors->first('Description')}}</p>
    @enderror
  </div>
  <br>
  <div class="form-group">
    <label for="postcolor">Color</label>
    <input type="text" class="form-control @error('Color') is-danger @enderror" id="postcolor" name='Color' value="{{old('Color')}}">
    @error('Color')
    <p class="help is-danger">{{$errors->first('Color')}}</p>
    @enderror
  </div>

 <div class="form-group">
    <label for="postimage">Post Image</label>
    <input type="file" class="form-control-file @error('Carimage') is-danger @enderror" id="postimage" name='Carimage' value="{{old('Carimage')}}">
    @error('Carimage')
    <p class="help is-danger">{{$errors->first('Carimage')}}</p>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection