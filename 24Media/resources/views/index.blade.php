@extends('layouts.layout')

@section('index')



                      <!-- Jssor Slider Begin -->
        
        <!-- ================================================== -->
        <div id="slider1_container"  style="visibility: hidden; position: relative; margin: 0 auto; !important;  max-width: 100%; height: 442px; overflow: hiddenasdas; width: 1300px !important">

            <!-- Loading Screen -->
            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;

                background-color: #000; top: 0px; left: 0px;width: 100%; height:100%;">
                </div>
                <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;

                top: 0px; left: 0px;width: 100%;height:100%;">
                </div>
            </div>

            <!-- Slides Container -->
            <div u="slides" style="position: absolute; left: 0px; top: 0px; width: 1300px; height: 442px;
            overflow: hidden;">
                <div>
                    <img   alt="image" class="fill "src="{!! asset('image/image1.jpeg') !!}"  />
             <div class="absolute-div">
                        <div class="carousel-caption">
                           <h2 class="text-white" class="slider"> 
                            <strong>Rescue </strong>Insurance
                           </h2>
                        </div>
                    </div>
                </div>
                <div>
                    <img alt="image" class="fill"  src="{!! asset('image/image2.jpeg') !!}"  />
                         <div class="absolute-div">
                        <div class="carousel-caption">
                           <h2 class="text-white" class="slider"> 
                            <strong>Dental </strong>Insurance
                           </h2>
                        </div>
                    </div>
                </div>
                <div>
                    <img alt="image" class="fill" src="{!! asset('image/image3.jpeg') !!}"   />
                         <div class="absolute-div">
                        <div class="carousel-caption">
                           <h2 class="text-white"> 
                            <strong>Health </strong>Insurance
                           </h2>
                        </div>
                    </div>
                </div>
                <div>
                    <img alt="image" class="fill" src="{!! asset('image/image4.jpeg') !!}" />
                        <div class="absolute-div">
                        <div class="carousel-caption">
                           <h2 class="text-white"> 
                            <strong>Health </strong>Insurance
                           </h2>
                        </div>
                    </div>

                </div>
            </div>
            
          
            <!-- bullet navigator container -->
            <div u="navigator" class="jssorb05" style="bottom: 16px; right: 6px;">
                <!-- bullet navigator item prototype -->
                <div u="prototype"></div>
            </div>
      
            <!-- Arrow Left -->
            <span u="arrowleft" class="jssora11l" style="top: 123px; left: 8px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora11r" style="top: 123px; right: 8px;">
            </span>

        </div>
        <!-- Jssor Slider End -->


            <!--Home Sections-->
            <!-- Carousal needs to be changed into a loop -->
              <div style="max-width: 100%; overflow: hidden;">
                <div style="float: left;max-width: 100%; overflow: hidden;" >


            <!--Featured Section-->
            <section id="features" class="features" style="max-width:100% Important">
                <div class="container" style="max-width: 100%;">
                    <div class="row" style="max-width: 100%;">
                        <div class="main_features fix roomy-70">
                            <div class="col-md-4">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                    </div>
                                    <div class="f_item_text">
                                        <h3 style="text-align: center">Health</h3>
                                        <p style="text-align: center">Blaa ak sjhfakhkjhfalkjhfakjsdhf kads fhasd fahsdkfh ask fhkasd fhasdl fhaksdf haksd </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                    </div>
                                    <div class="f_item_text">
                                        <h3 style="text-align: center">Dental</h3>
                                        <p style="text-align: center">akdsj fdasfasdkf asda sdflasd jdfkj sdfsdkfl jlksdf sd flsd jfl sdf sdf sdlkf sd fsd</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                    </div>
                                    <div class="f_item_text">
                                        <h3 style="text-align: center">Hospital</h3>
                                        <p style="text-align: center">asdkajds kads hkashd khfkasdhfkajhsd fadhs kfk asd has hda sd ashkd aks dka dka shd asd ha</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off Featured Section-->


            <!--Business Section-->
            <div id="overlay">
            <section id="business" class="business bg-grey roomy-70 ">

                <div class="container" style="max-width: 100% !important">
                    <div class="row" style="max-width: 100%;">
                        <h1 style="color:white; text-align:center; margin-bottom: 40px"> Why Choose 24Medical?</h1>
                        <div class="col-md-6">
                        <div style="margin: 0 auto; width: 250px; text-align: justify;">
                          <h5 style="color: white">Most South Africans don’t have access to professional quality and primary healthcare services due to the ridiculously high costs of private healthcare, and their inability to cope financially with rising medical costs.</h5>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div style="margin: 0 auto; width: 250px; text-align: justify;">
                    <h5 style="color: white">We have been doing this a long time and we know that everyone’s medical and healthcare needs are different, so we designed medical cover policies that allow you to select only the benefits that you need.</h5>
                        </div>
                        </div>
                    
                    </div>
                </div>
            </section><!-- End off Business section -->
              </div>

            <!--product section-->
            <section id="product" class="product">
                <div class="container" style="max-width: 95% !important">
                    <div class="main_product roomy-80" style="max-width: 100%;">
                        <div class="head_title text-center fix">
                            <h2 class="text-uppercase">Our Products</h2>
                            <h5>our Producst</h5>
                        </div>

                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>Dental Insurance</h5>
                                                        <h6>Learn More</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>Health Insurance</h5>
                                                        <h6>Learn More</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>Health Insurance</h5>
                                                        <a>Learn More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>Junior Insurance</h5>
                                                        <h6>Learn More</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>Senior Insurance</h5>
                                                        <h6>Learm More</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>Blah</h5>
                                                        <h6>learn more</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>Your Work Title</h5>
                                                        <h6>- Graphic Design</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>Your Work Title</h5>
                                                        <h6>- Graphic Design</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="container" style="max-width: 100% !important">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>Your Work Title</h5>
                                                        <h6>- Graphic Design</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>Your Work Title</h5>
                                                        <h6>- Graphic Design</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>Your Work Title</h5>
                                                        <h6>- Graphic Design</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>Your Work Title</h5>
                                                        <h6>- Graphic Design</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-pencil"></span>
                                <span class="sr-only">Previous</span>
                            </a>

                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-menu-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off Product section -->



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


            <!--Call to  action section-->
            <section id="action" class="action bg-primary roomy-40">
                <div class="container" style="max-width: 100% !important">
                    <div class="row">
                        <div class="maine_action">
                            <div class="col-md-8">
                                <div class="action_item text-center">
                                    <h2 class="text-white text-uppercase">Your Promotion Text Will Be Here</h2>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="action_btn text-left sm-text-center">
                                    <a href="" class="btn btn-default">Purchase Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <footer id="contact" style="max-width: 100% !important" class="footer action-lage bg-black p-top-80">
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
                      
                    </div>
                </div>
            </footer>
        </div>
           
    
</div>
@endsection
