@extends('layouts.user_layout')
@section('content')
      
            <div class="full-contain">
                <div class="searchtxtforcar">
                    <h3>SEARCH RESULTS</h3>
                </div>

            </div>
                  
               <div class="middle_section_body">
                 <div class="row">
                     
                  <div class="col-8 ">

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

                   </div>

                 </div> 
          

               <!-- doctor page  side part section -->

@endsection