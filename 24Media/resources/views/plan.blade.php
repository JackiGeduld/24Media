@extends('layouts.layout')

@section('plan')


 <!--Home Sections-->
            <!-- Carousal needs to be changed into a loop -->
              <div style="max-width: 100%; overflow: hidden;">
                <div style="float: left; max-width: 100%; overflow: hidden;" >

            <!--Featured Section-->
            <section style="max-width:100% !Important; display: position; absolute !important; margin: 0 auto">
               
                    <div class="row" style="max-width: 100%; margin: 0 !important">
                  
                    </div><!-- End off row -->

            </section><!-- End off Featured Section-->

            <!--Business Section-->
            <section id="image-background" style="height: 300px" class=" bg-grey ">
              <img class="image" src="../image/smile.jpeg" alt="">
            </section><!-- End off Business section -->

              <!--Test section-->
            <section id="test" class="test bg-white roomy-60 fix">
                <div class="container" style="max-width: 100%; padding-left: 60px !important; padding-right: 60px !important">
                    <div class="row">                        
                        <div class="main_test fix">
                            <div class="col-md-12 col-sm-12 col-xs-12" >
                                <div class="head_title text-center fix">
                                    <h2 class="text-uppercase text-left m-bottom-20" style="font-family: 'Roboto Condensed', sans-serif; font-weight: 200; color: #999999">{{$plan->title }}</h2>
                                    <h5 class="text-uppercase text-left m-bottom-40" style="color: #888888; font-size: 1.8rem !important; font-family">{{ $plan->description }}</h5>
                                    <h5 class="text-left justify" style="color: black; font-size: 1.2rem !important; text-align">sdkjflasd fs aa  sd as d adasd na dmn m dns mna dmna dm asmdn amd amns dmans j h asd a sd asdas da sd asdj asdjk ajd askjd kjas djkas djkas djkas dkjas aldks jfal dslkf aklds jfa dsf asdfj lads jflk dsajfk adjsfk jadskf ads fad jsflkj asdlkfjaldks flkasd  ggmm mb m mbnbm  m bmbmb bmnb m bm  bmbm bm bmb mbm bm bm bmbm bm mbmb bm bf g kh asdas bhj </p>
                                    <h5 class=" text-left h2" style="color: black; font-family: font-family: 'Marvel', sans-serif;">{{ $plan->subDescription}} </h5>
                                    <h5 class="text-uppercase text-left m-bottom-40" style="color: black; font-size: 1.8rem !important; font-family ">{{ $plan->price}}</h5> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End off test section -->

              <!--product section-->
            <section id="product" class="product" style="max-width: 100%;">
                <div class="container" style="max-width: 100%; padding-left: 60px !important; padding-right: 60px !important" >
                    <div class="main_product roomy-60">
                        <div class="head_title text-left h2 fix">
                            <h2 class="text-uppercase text-left m-bottom-20" style="font-family: 'Roboto Condensed', sans-serif; font-weight: 200; color: #999999">Benefits</h2>
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
                                    <div class="container" style="padding-right: 60px !important; padding-left: 60px !important; max-width: 100%">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                    <div class="glyphicon-ring glyphicon-white" style="margin: 0 auto !important"><img class="inner-icon" src="{!! asset('image/icon/tooth2.png') !!}" alt="molar" style="width: 35%">
                                                    </div>               
                                                    </div>
                                                    <div class="port_caption m-top-20 text-center">
                                                    <h5>{{ $benefits[0]['description']}}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                               <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                    <div class="glyphicon-ring glyphicon-white text-center"><img class="inner-icon" src="{!! asset('image/icon/tooth.png') !!}" alt="molar" style="width: 35%">
                                                    </div>               
                                                    </div>
                                                    <div class="port_caption m-top-20 text-cnter">
                                                        <h5>{{ $benefits[1]['description']}}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                 <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                    <div class="glyphicon-ring glyphicon-white text-center"><img class="inner-icon" src="{!! asset('image/icon/tooth3.png') !!}" alt="molar" style="width: 35%">
                                                    </div>               
                                                    </div>
                                                    <div class="port_caption m-top-20 text-center">
                                                        <h5>{{ $benefits[2]['description']}}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                               <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                    <div class="glyphicon-ring glyphicon-white text-center"><img class="inner-icon" src="{!! asset('image/icon/pliers.png') !!}" alt="molar" style="width: 35%">
                                                    </div>               
                                                    </div>
                                                    <div class="port_caption m-top-20 text-center">
                                                        <h5>{{ $benefits[3]['description']}}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                                <span class="sr-only">Previous</span>
                            </a>

                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off Product section -->



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