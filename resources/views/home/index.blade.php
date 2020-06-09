@extends('layouts.user_layout')
@section('content')


<!--_______________________________________ Carousel__________________________________ -->
<div class="allcontain">
    <div id="carousel-up" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner " role="listbox">
            <div class="item active">
                <img src="image/oldcar.jpg" alt="oldcar">
                <div class="carousel-caption">
                    <h2>Porsche 356</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur ,<br>
                        sed do eiusmod tempor incididunt ut labore </p>
                </div>
            </div>
 
        </div>
        <nav class="navbar navbar-default midle-nav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed textcostume" data-toggle="collapse" data-target="#navbarmidle" aria-expanded="false">
                        <p class="navbar-button">WELCOME</p>
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarmidle">
                <div class="searchtxt">
                    <h1>welcome to my website,tnx for visiting</h1>
                </div>

            </div>
        </nav>
    </div>
</div>
<!-- ____________________Featured Section ______________________________--> 
<div class="allcontain">
    <div class="feturedsection">
        <h1 class="text-center"><span class="bdots">&bullet;</span>F E A T U R E S<span class="carstxt">C A R S</span>&bullet;</h1>
    </div>
    <div class="feturedimage">
        <div class="row firstrow">

           @foreach($posts as $post)
           @if($post->Featured=='yes')
            <div class="col-lg-6 costumcol colborder2">
                <div class="row costumrow">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img2colon">
                        <img src="{{$post->Carimage}}" alt="porsche1">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
                        <div class="featurecontant">
                            <h1>{{$post->Brandname}}</h1>
                            <p class="text_color_b"><strong>Color:</strong>{{$post->color}}</p>
                            <p>{{$post->Description}} </p>
                            <h2 class="text_color_b">{{$post->Price}}  &euro;</h2>
                            <button id="btnRM2">READ MORE</button>
                           
                        </div>
                    </div>
                </div>
            </div>
            @endif
           @endforeach
        </div>
    </div>
 </div>
<br>
<br>
<div class="latestcars">
    <h1 class="text-center">&bullet; LATEST   CARS &bullet;</h1>
    
</div>
  


        <div class="row">
          @foreach($posts as $post)    
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="txthover">
                    <img src="{{$post->Carimage}}" alt="car4">
                        <div class="txtcontent">
                            <h3 class="name">{{$post->Brandname}}</h3>
                            <div class="stars">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                            <div class="simpletxt">
                                <h3 class="name">{{$post->Modelname}}</h3>
                                <p>{{$post->Description}} </p>
                                <h4 class="price">{{$post->Price}} &euro;</h4>
                                <h4 class="price">{{$post->color}} </h4>
                                <button>READ MORE</button><br>
                               
                            </div>
                         
                        </div>
                </div>   
            </div>
          @endforeach
           
          
         
         </div>


         <div class="latestcars">
    <h1 class="text-center">&bullet; Sell CARS &bullet;</h1>
    
</div>
  


        <div class="row">
          @foreach($postRScars as $postRScar)   
           @if($postRScar->sell=='yes') 
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="txthover">
                    <img src="{{$postRScar->carimage}}" alt="car4">
                        <div class="txtcontent">
                            <h3 class="name">{{$postRScar->brandname}}</h3>
                            <div class="stars">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                            <div class="simpletxt">
                                <h3 class="name">{{$postRScar->modelname}}</h3>
                                <p>{{$postRScar->description}} </p>
                                <h4 class="price">{{$postRScar->price}} &euro;</h4>
                                <h4 class="price">{{$postRScar->color}} </h4>
                                <button>READ MORE</button><br>
                               
                            </div>
                         
                        </div>
                </div>   
            </div>
              @endif
          @endforeach      
         </div>


         <div class="latestcars">
    <h1 class="text-center">&bullet; Rent CARS &bullet;</h1>
    
</div>
  


         <div class="row">
          @foreach($postRScars as $postRScar)   
           @if($postRScar->rent=='yes') 
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="txthover">
                    <img src="{{$postRScar->carimage}}" alt="car4">
                        <div class="txtcontent">
                            <h3 class="name">{{$postRScar->brandname}}</h3>
                            <div class="stars">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                            <div class="simpletxt">
                                <h3 class="name">{{$postRScar->modelname}}</h3>
                                <p>{{$postRScar->description}} </p>
                                <h4 class="price">{{$postRScar->price}} &euro;</h4>
                                <h4 class="price">{{$postRScar->color}} </h4>
                                <button>READ MORE</button><br>
                               
                            </div>
                         
                        </div>
                </div>   
            </div>
              @endif
          @endforeach      
         </div>
     

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