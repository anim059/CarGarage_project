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
                        <p class="navbar-button">search text</p>
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarmidle">
                <div class="searchtxt">
                    <h1>SEARCH TEXT</h1>
                </div>
                <form class="navbar-form navbar-left searchformmargin" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control searchform" placeholder="Enter Keyword">
                    </div>
                </form>
 
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
            <div class="col-lg-6 costumcol colborder1">
                <div class="row costumrow">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon">
                        <img src="image/featurporch.jpg" alt="porsche">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
                        <div class="featurecontant">
                            <h1>LOREM IPSUM</h1>
                            <p>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                    sed do eiusmod tempor incididunt </p>
                            <h2>Price &euro;</h2>
                            <button id="btnRM" onclick="rmtxt()">READ MORE</button>
                            <div id="readmore">
                                    <h1>Car Name</h1>
                                    <p>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                    sed do eiusmod tempor incididunt <br>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                    sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1 ,
                                    sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1
                                    sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1<br>
                                    </p>
                                    <button id="btnRL">READ LESS</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 costumcol colborder2">
                <div class="row costumrow">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img2colon">
                        <img src="image/featurporch1.jpg" alt="porsche1">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
                        <div class="featurecontant">
                            <h1>LOREM IPSUM</h1>
                            <p>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                    sed do eiusmod tempor incididunt </p>
                            <h2>Price &euro;</h2>
                            <button id="btnRM2">READ MORE</button>
                            <div id="readmore2">
                                    <h1>Car Name</h1>
                                    <p>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                    sed do eiusmod tempor incididunt <br>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                    sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1 ,
                                    sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1
                                    sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1<br></p>
                                    <button id="btnRL2">READ LESS</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
<br>
<br>
<div class="latestcars">
    <h1 class="text-center">&bullet; LATEST   CARS &bullet;</h1>
    
</div>
  


        <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="txthover">
                    <img src="image/car4.jpg" alt="car4">
                        <div class="txtcontent">
                            <div class="stars">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                            <div class="simpletxt">
                                <h3 class="name">Rover</h3>
                                <p>"Lorem ipsum dolor sit amet, consectetur,<br>
                                sed do eiusmod tempor incididunt" </p>
                                <h4 class="price">1000 &euro;</h4>
                                <button>READ MORE</button><br>
                               
                            </div>
                         
                        </div>
                </div>   
            </div>
              <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="txthover">
                    <img src="image/car4.jpg" alt="car4">
                        <div class="txtcontent">
                            <div class="stars">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                            <div class="simpletxt">
                                <h3 class="name">Rover</h3>
                                <p>"Lorem ipsum dolor sit amet, consectetur,<br>
                                sed do eiusmod tempor incididunt" </p>
                                <h4 class="price">1000 &euro;</h4>
                                <button>READ MORE</button><br>
                               
                            </div>
                         
                        </div>
                </div>   
            </div>
              <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="txthover">
                    <img src="image/car4.jpg" alt="car4">
                        <div class="txtcontent">
                            <div class="stars">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                            <div class="simpletxt">
                                <h3 class="name">Rover</h3>
                                <p>"Lorem ipsum dolor sit amet, consectetur,<br>
                                sed do eiusmod tempor incididunt" </p>
                                <h4 class="price">1000 &euro;</h4>
                                <button>READ MORE</button><br>
                               
                            </div>
                         
                        </div>
                </div>   
            </div>
              <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="txthover">
                    <img src="image/car4.jpg" alt="car4">
                        <div class="txtcontent">
                            <div class="stars">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                            <div class="simpletxt">
                                <h3 class="name">Rover</h3>
                                <p>"Lorem ipsum dolor sit amet, consectetur,<br>
                                sed do eiusmod tempor incididunt" </p>
                                <h4 class="price">1000 &euro;</h4>
                                <button>READ MORE</button><br>
                               
                            </div>
                         
                        </div>
                </div>   
            </div>
          
         
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