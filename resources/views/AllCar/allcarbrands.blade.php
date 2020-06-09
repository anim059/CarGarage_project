@extends('layouts.user_layout')
@section('content')
      
            <div class="full-contain">
                <div class="searchtxtforcar">
                    <h3>SEARCH TEXT</h3>
                </div>
                <form class="navbar-form navbar-left searchformmargin" role="search" action="{{route('AllCar.searchcarbrands')}}" method="get">
                    <div class="form-group">
                        <input type="text" class="form-control searchform" name="search_brand"placeholder="Enter Keyword">
                    </div>
                    <button type="submit" class="btn btn-primary">search</button>
                </form>
                
            </div>
                  
               <div class="middle_section_body">
                 <div class="row">
                     
                  <div class="col-8 ">
                  	<div class="feturedsection">
		              <h1 class="text-center"><span class="bdots">&bullet;</span>B R A N D S<span class="carstxt">C A R S</span>&bullet;</h1>
	                </div>
                   <div class="feturedimage">
		            <div class="row firstrow">
                  @foreach($newcar as $newcars)     
                   <div class="col-lg-6 costumcol colborder1 mt-5 mb-5">
				         <div class="row costumrow mr-5">
				         	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon">
				         		<img src="/{{$newcars->Carimage}}" class="imgcontent mr-3" alt="porsche">
				         	</div>
				         	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
				         		<div class="featurecontantfrbrcr">
				         			<h1>{{$newcars->Brandname}}</h1>
				         			<p>{{$newcars->Description}}</p>
			 	         			<h2>{{$newcars->Price}} &euro;</h2>
			 	         			<button id="btnRM" onclick="rmtxt()">READ MORE</button>

				         		</div>
				         	</div>
				         </div>
			         </div>
                    @endforeach
                    </div>
                   </div>
                    <nav aria-label="Page navigation example">{{ $newcar->links() }}</nav>
                  </div>

                   <div class="col-4">
                    <div class="side_body">
                             
                         <div class="heading">
                          <h3> Car Brands</h3>                        
                         </div>                           
                         </div>

                       <div class="side_body">
                        <div class="specified_part_list">
                        	@foreach($postRScars as $postRScar)
                          <div class="specified_part_text">
                             <h3>{{$postRScar->brandname}}</h3>
                          </div>
                          @endforeach
                        </div>
                       </div>

                        
                    

                    </div>
                   </div>

                 </div> 
          

               <!-- doctor page  side part section -->

@endsection