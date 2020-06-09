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
<form method="post" action="{{route('postcar.postcarbrandupdate')}}">

	@csrf

  <div class="form-group">
    <label for="postbrandname">Brand Name</label>
    <input type="text" class="form-control @error('Carbrand') is-danger @enderror" id="postbrandname" name='Carbrand' value="{{old('Carbrand')}}" aria-describedby="emailHelp">
    @error('Carbrand')
    <p class="help is-danger">{{$errors->first('Carbrand')}}</p>
    @enderror
  </div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection