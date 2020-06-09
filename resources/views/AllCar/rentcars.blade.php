@extends('layouts.user_layout')
@section('content')

<!-- ____________________Featured Section ______________________________--> 
<div class="allcontain">
    <div class="feturedsection">
        <h1 class="text_color_heading">R E N T<span class="carstxt">C A R S</span></h1>
    </div>
    <div class="feturedimage">
        <div class="row firstrow">

           @foreach($newcar as $newcars)
             @if($newcars->rent=='yes')
            <div class="col-lg-6 costumcol colborder2">
                <div class="row costumrow">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img2colon">
                        <img src="/{{$newcars->carimage}} " class="hover_img"alt="porsche1">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
                        <div class="featurecontant">
                            <h1>{{$newcars->brandname}}</h1>
                            <p class="text_color_b"><strong>Color:</strong>{{$newcars->color}}</p>
                            <p>{{$newcars->description}} </p>
                            <h2 class="text_color_b">{{$newcars->price}}  &euro;</h2>
                            <button id="btnRM2">READ MORE</button>
                           
                        </div>
                    </div>
                </div>
            </div>
            @endif
           @endforeach
        </div>
    </div>
     <nav aria-label="Page navigation example">{{ $newcar->links() }}</nav>
 </div>
<br>
<br>

     

      <div class="footer">
              <ul class="bottomlinks">
            <li><a href="#/" role="button">ABOUT US</a></li>
            <li><a href="#/">CATEGORIES</a></li>
            <li><a href="#/">PREORDERS</a></li>
            <li><a href="#/">CONTACT US</a></li>
            <li><a href="#/">RECEIVE OUR NEWSLETTER</a></li>
        </ul>
        <p>"Lorem ipsum dolor sit amet, consectetur,  sed do eiusmod tempor incididunt <br>
            eiusmod tempor incididunt </p>
         <img src="image/line.png" alt="line"> <br>
         <div class="bottomsocial">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
        </div>
      </div>
      
@endsection