@extends('layouts.user_layout')
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
<form method="post" action="/post" enctype="multipart/form-data">
	@csrf
  <div class="form-group">
    <label for="postbrandname">Brand Name</label>
   <div class="col-sm-6">
    <select name="brandname" class="form-control">
      @foreach($carname as $carnames)
      <option value="{{$carnames->Carbrand}}">{{$carnames->Carbrand}}</option>
      @endforeach
    </select>
   </div>
    @error('brandname')
    <p class="help is-danger">{{$errors->first('brandname')}}</p>
    @enderror
  </div>

  <div class="form-group">
    <label for="postmodelname">Model Name</label>
    <input type="text" class="form-control @error('modelname') is-danger @enderror" id="postmodelname" name='modelname' value="{{old('modelname')}}">
    @error('modelname')
    <p class="help is-danger">{{$errors->first('modelname')}}</p>
    @enderror
  </div>
 <br>
  <div class="form-group">
    <label for="postnewTextarea1">Description</label>
    <textarea class="form-control  @error('description') is-danger @enderror" value="{{old('description')}}" id="postnewTextarea1" rows="3" name='description'></textarea>
     @error('description')
    <p class="help is-danger">{{$errors->first('description')}}</p>
    @enderror
  </div>
  <br>
  <div class="form-group">
    <label for="postprize">Prize</label>
    <input type="text" class="form-control @error('price') is-danger @enderror" id="postprize" name='price' value="{{old('price')}}">
    @error('price')
    <p class="help is-danger">{{$errors->first('price')}}</p>
    @enderror
  </div>
  <br>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="postcheckbox" name='rent' value='yes'>
    <label class="form-check-label"  for="postcheckbox">Rent car</label>
  </div>
  <br>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="postcheckbox" name='sell' value='yes'>
    <label class="form-check-label"  for="postcheckbox">Sell car</label>
  </div>
  <br>

  <div class="form-group">
    <label for="postcolor">Color</label>
    <input type="text" class="form-control @error('color') is-danger @enderror" id="postcolor" name='color' value="{{old('color')}}">
    @error('color')
    <p class="help is-danger">{{$errors->first('color')}}</p>
    @enderror
  </div>

 <div class="form-group">
    <label for="postimage">Post Image</label>
    <input type="file" class="form-control-file @error('carimage') is-danger @enderror" id="postimage" name='carimage' value="{{old('carimage')}}">
    @error('carimage')
    <p class="help is-danger">{{$errors->first('carimage')}}</p>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection