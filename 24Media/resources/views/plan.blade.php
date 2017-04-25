@extends('layouts.layout')

@section('plan')


<div class="subnav" style="width: 100%; background-color: lightgrey; margin-top: 80px; padding: 1%">
<div class="column">
<header>
<p>Home >{{ $plan->title }}</p> 
</header>
</div>
</div>

<section title="title">
<div class="row">
<div class="col-md-1">
<img src="{!! asset('image/molar.png') !!}" alt="molar" style="width: 50%; margin: 5px">
</div>
<div class="col-md-11">
<h2 style="">{{ $plan->title}}</h2>
</div>
</div>
<p style="margin-right: ">{{ $plan->description}}</p>
</section>
     
            <section id="business" class="business bg-grey roomy-70">
                <div class="container">
                    <div class="row">
                        <div class="main_business">
                            <div class="col-md">
                                <div class="business_item sm-m-top-50">
                                        <h3 style="color:#fff; text-align: center">{{ $plan->subDescription}} </h3>
                                        <h1 style="color:#fff; text-align: center"><i>only </i>{{ $plan->price}}</h1>   
                                  
                                    <div style="text-align: center" >
                                        <a href="" class="btn btn-default" style="margin-bottom: 0">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

                     <!--product section-->
            <section id="product" class="product">
<div class="container">
            	<h2 style="text-align:center"> The Benefits of Dental Insurance </h2>
               
                  <div class="row">
                  <div class="col-md-3">
                  <div class="benefits"> 
                  	  <img src="{!! asset('image/dentist.png') !!}" alt="molar" style="width: 35%">
                  	<p style="margin-top:30px">{{ $benefits[0]['description']}}</p>
                  	 <a href="" class="btn btn-primary" style="background: #D80027; max-width:100%; margin-top:30px; border-color: none">Learn More</a>
                  </div>
                  </div>
                  <div class="col-md-3">
                  <div  class="benefits">
                  	<img src="{!! asset('image/molar2.png') !!}" alt="molar" style="width: 35%">
                  		<p style="margin-top:30px">{{ $benefits[1]['description']}}</p>
                  		 <a href="" class="btn btn-primary" style="background: #D80027; max-width:100%; margin-top:30px ">Learn More</a>
                  </div>
                  </div>
                  <div class="col-md-3">
                  <div  class="benefits">
                  	 <img src="{!! asset('image/molar.png') !!}" alt="molar" style="width: 35%">
                    	<p style="margin-top:30px">{{ $benefits[2]['description']}}</p>
                    	 <a href="" class="btn btn-primary" style="background: #D80027; max-width:100%; margin-top:30px ">Learn More</a>
                  </div>
                  </div>
                  <div class="col-md-3">
                  <div class="benefits">
                   <img src="{!! asset('image/tool.png') !!}" alt="molar" style="width: 35%">
                   	<p style="margin-top:30px">{{ $benefits[3]['description']}}</p>
                   	 <a href="" class="btn btn-primary " style="background: #D80027;  max-width:100%; margin-top:30px ">Learn More</a>
                  </div>
                  </div>
      </div>
  </div>
            </section><!-- End off Product section -->


@endsection