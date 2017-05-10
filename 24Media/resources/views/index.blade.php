@extends('layouts.layout')

@section('index')

    @include('includes.slider')


            <!--Home Sections-->
            <!-- Carousal needs to be changed into a loop -->
              <div style="max-width: 100%; overflow: hidden;">
                <div style="float: left; max-width: 100%; overflow: hidden;" >

            <!--Featured Section-->
            <section  style="max-width:100% !Important; display: position; absolute !important; margin: 0 auto">
               
                    <div class="row" style="max-width: 100%; margin: 0 !important">
                  <a href="/plan/dentist-insurance" >
                  <div id="box" class="col-md-3 col-sm-3 ">
                        <div class="feature-box padd-30 text-center wow fadeInUp" style="overflow: hidden">
                            <img  src="{!! asset('image/icon/business.png') !!}" style="width: 20%; margin: 0 auto;">
                            <h4>Business</h4>
                            <div style="display: block">   
                            <p class="">Pellentesque posuere fermentum libero quis porta. </p>                                
                            </div> 
                        </div>
                  </div>
                  </a>
                        <div id="box" class="col-md-3 col-sm-3 ">
                            <div class="feature-box padd-30 text-center wow fadeInUp">
                            <img  src="{!! asset('image/icon/car.png') !!}" style="width: 20%; margin: 0 auto;">
                                <h4>Car</h4> 
                                <p>Pellentesque posuere fermentum libero quis porta. </p>    
                            </div>
                        </div>
                        <div id="box" class="col-md-3 col-sm-3 ">
                            <div class="feature-box padd-30 text-center wow fadeInUp">
                            <img  src="{!! asset('image/icon/house.png') !!}" style="width: 20%; margin: 0 auto;">
                                <h4>House</h4> 
                                <p>Pellentesque posuere fermentum libero quis porta. </p>
          
                            </div>
                        </div>
                        <div id="box" class="col-md-3 col-sm-3">
                            <div class="feature-box padd-30 text-center wow fadeInUp">
                             <img  src="{!! asset('image/icon/gardener.png') !!}" style="width: 20%; margin: 0 auto;">
                                <h4>Agriculture</h4> 
                                <p>Pellentesque posuere fermentum libero quis porta. </p>                                
                            </div>
                        </div>

                        <div  id="box" class="col-md-3 col-sm-3">
                            <div class="feature-box padd-30 text-center wow fadeInUp">
                            <img  src="{!! asset('image/icon/business.png') !!}" style="width: 20%; margin: 0 auto;">
                              <h4>Business</h4> 
                                <p>Pellentesque posuere fermentum libero quis porta. </p>
                            </div>
                        </div>
                        <div id="box" class="col-md-3 col-sm-3">
                            <div class="feature-box padd-30 text-center wow fadeInUp">
                            <img  src="{!! asset('image/icon/personal.png') !!}" style="width: 20%; margin: 0 auto;">
                                <h4>Personal</h4> 
                                <p>Pellentesque posuere fermentum libero quis porta. </p>
                                
                            </div>
                        </div>
                        <div id="box" class="col-md-3 col-sm-3 ">
                        <div class="feature-box padd-30 text-center wow fadeInUp" style="overflow: hidden">
                            <img  src="{!! asset('image/icon/business.png') !!}" style="width: 20%; margin: 0 auto;">
                            <h4>Business</h4>
                            <div style="display: block">   
                            <p class="">Pellentesque posuere fermentum libero quis porta. </p>                                
                            </div> 
                        </div>
                  </div>
                     <div id="box" class="col-md-3 col-sm-3 ">
                            <div class="feature-box padd-30 text-center wow fadeInUp">
                            <img  src="{!! asset('image/icon/car.png') !!}" style="width: 20%; margin: 0 auto;">
                                <h4>Car</h4> 
                                <p>Pellentesque posuere fermentum libero quis porta. </p>    
                            </div>
                        </div>

                    </div><!-- End off row -->
            </section><!-- End off Featured Section-->


            <!--Business Section-->
            <section id="business" class="business bg-grey ">
            <div class="img-overlay">
                    <h2>Why <b>Insure</b> with us?</h2>
               
                    <div class="col-md-5 fadeInUp">
                    <p style="font-family: 'Open Sans Condensed', sans-serif; font-size: 1.3em">Most South Africans don’t have access to professional quality and primary healthcare services due to the ridiculously high costs of private healthcare, and their inability to cope financially with rising medical costs.
                    Through our knowledge, passion and expertise, we have changed that. We offer you wide-ranging benefits at affordable prices.</p>
                    <button type="button" class="ghost-btn">Click Me!</button>
                    </div>
                    <div class="col-md-5">
                    <p style="font-family: 'Open Sans Condensed', sans-serif; font-size: 1.3em">We offer an effortless claims process A choice of medical providers and hospitals. Quick access to medical experts and specialists.
                    We have been doing this a long time and we know that everyone’s medical and healthcare needs are different, so we designed medical cover policies that allow you to select only the benefits that you need.
                    </div>
              
              <img id="business-image" src="../image/light.jpeg" alt="">
                    <div class="col-md-4" style="z-index: 10000">
                   </div> 
                   <p></p>
             <div class="fa fa-plus project-overlay"></div>
            </div>

            </section><!-- End off Business section -->
             

          



            <!--Test section-->
            <section id="test" class="test bg-grey roomy-60 fix">
                <div class="container" style="max-width: 100% !important">
                    <div class="row">                        
                        <div class="main_test fix">

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="head_title text-center fix">
                                    <h2 class="text-uppercase">Where are we Located?</h2>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </section><!-- End off test section -->



            <footer id="contact" style="max-width: 100% !important" class="footer bg-black p-top-80">
                <!--<div class="action-lage"></div>-->
                <div class="container" style="max-width: 100% !important">
                    <div class="row">
                        <div class="widget_area">
                            <div class="col-md-4">
                                <div class="widget_item widget_about">
                                    <h5 class="text-white">About Us</h5>
                                    <p class="m-top-20">bla blahasd a sfadskfasdjknfkjasdf sad fhkjsad hfksad hk hasdkf hasdk fasdk fkdsaj kjdsa k sadkj fhdaskj fksadj kadjs kda fkad s</p>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><span class="glyphicon glyphicon-envelope "></span></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Location: </h6>
                                            <p>
                                                23 Theal Road Milnerton
                                            </p>
                                        </div>
                                    </div>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><span class="glyphicon glyphicon-phone"></span></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Phone :</h6>
                                            <b><p>+1 2345 6789</p></b>
                                        </div>
                                    </div>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><span class="glyphicon glyphicon-envelope "></span></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Email Address :</h6>
                                            <p>youremail@mail.com</p>
                                        </div>
                                    </div>
                            
                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->
                            <div class="col-md-4">
                                <div class="widget_item widget_service sm-m-top-50">
                                    <h5 class="text-white">Plans</h5>
                                    <ul class="m-top-20">
                                        <li class="m-top-20"><a href=""> Health Insurance</a></li>
                                        <li class="m-top-20"><a href=""> Denatal</a></li>
                                        <li class="m-top-20"><a href=""> E- Commerce</a></li>
                                        <li class="m-top-20"><a href=""> Junior</a></li>
                                        <li class="m-top-20"><a href=""> Blah</a></li>
                                        <li class="m-top-20"><a href=""> Blah</a></li>
                                    </ul>
                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-4">
                                <div class="widget_item widget_newsletter sm-m-top-50">
                                    <h5 class="text-white">Feedback</h5>
                                     <p class="m-top-20"> Not happy with something? Please give us your feedback</p>
                                    <form class="form-inline m-top-30">
                                        <div class="form-group margin">
                                            <input type="text" class="form-control" placeholder="Enter Name">
                                        </div>
                                         <div class="form-group margin">
                                            <input type="email" class="form-control" placeholder="Enter Email">
                                        </div>
                                         <div class="form-group margin" >
                                            <textarea style="height: 100px" type="text" class="form-control"  rows="10" placeholder="Add Comment" ></textarea>
                                        </div>
                                         <div class="form-group margin" >
                                                 
                                        </div>
                                    </form>
                                 
                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->
                        </div>
                    </div>
                </div>
                <div class="main_footer fix bg-mega text-center p-top-40 p-bottom-30 m-top-80">
                    <div class="col-md-12">
                        <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
                    </div>
                </div>
               
            </footer>
        </div>
           
    
</div>

@endsection
