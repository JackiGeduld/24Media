  <meta charset="utf-8">
          
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Made One</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="favicon.ico">

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css?family=Montserrat:600|Open+Sans+Condensed:300|Roboto+Condensed" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Marvel" rel="stylesheet">

         <link rel="stylesheet" href="{!! asset('css/bootstrap.css') !!}">
        <link rel="stylesheet" href="{!! asset('css/slick/slick.css') !!}"> 
        <link rel="stylesheet" href="{!! asset('css/slick/slick-theme.css') !!}">
        <link rel="stylesheet" href="{!! asset('css/animate.css') !!}">
        <link rel="stylesheet" href="{!! asset('css/iconfont.css') !!}">
        <link rel="stylesheet" href="{!! asset('css/font-awesome.min.css') !!}">
        <link rel="stylesheet" href="{!! asset('css/magnific-popup.css') !!}">
        <link rel="stylesheet" href="{!! asset('css/bootsnav.css') !!}">
        <link rel="stylesheet" href="{!! asset('css/simple-line-icons.css') !!}">


        <!-- xsslider slider css -->

        <!--<link rel="stylesheet" href="assets/css/xsslider.css">-->


<style>
 body {
    overflow-x: hidden;
 }

/* Toggle Styles */


#wrapper {
    padding-left: 0;
    -webkit-transition: all 0.6s ease;
    -moz-transition: all 0.6s ease;
    -o-transition: all 0.6s ease;
    transition: all 0.6s ease;   
}

#wrapper.toggled {
    padding-left: 200px;
}

#sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    left: 100%;
    top: 86px;
    width: 0;
    height: 100%;
    margin-left: -240px;
    overflow-y: auto;
    background-color:#e6e6e6!Important;
    overflow : auto;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled #sidebar-wrapper {
    width: 0;
}

#page-content-wrapper {
    width: 100%;
    position: absolute;
    padding: 10px;
}

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-left:-250px;
}

/* Sidebar Styles */

.sidebar-nav {
    position: absolute;
    top: 0;
    right:20px;
    width: 300px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.sidebar-nav li {
    text-indent: 20px;
    line-height: 40px;
}

.sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #999999;
}

.sidebar-nav li a:hover {
    text-decoration: none;
    color: #fff;
    background: #fff;
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
    text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
    height: 65px;
    font-size: 18px;
    line-height: 60px;
}

.sidebar-nav > .sidebar-brand a {
    color: #999999;
}

.sidebar-nav > .sidebar-brand a:hover {
    color: #fff;
    background: none;
}

@media(min-width:768px) {
    #wrapper {
        padding-left: 220px;
    }

    #wrapper.toggled {
        padding-left: 0;
    }

    #sidebar-wrapper {
        width: 300px;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 40px;
        
        
    }

#wrapper.toggled span {
        visibility:hidden;
        
    }
  #wrapper.toggled   i {
 float:right;
 } 

    #page-content-wrapper {
        padding: 20px;
        position: relative;
    }

    #wrapper.toggled #page-content-wrapper {
        position: relative;
        margin-right: 0;
    }
}


@media(max-width:414px) {

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right:60px;
}

#wrapper.toggled {
    padding-right: 60px;
}

 #wrapper {
        padding-left: 20px;
    }

    #wrapper.toggled {
        padding-left: 0;
    }

    #sidebar-wrapper {
        width: 50px;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 140px;
        
        
    }
    
    #wrapper.toggled span {
        visibility:visible;
        position:relative;
        left:70px;
        bottom:13px;
        
    }

#wrapper span {
        visibility:hidden;
        
    }
  #wrapper.toggled   i {
 float:right;
 } 
 
  #wrapper   i {
 float:right;
 } 

    #page-content-wrapper {
        padding: 5px;
        position: relative;
    }

    #wrapper.toggled #page-content-wrapper {
        position: relative;
        margin-right: 0;
    }

}



   .parsley-required, .parsley-errors-list li{
     color: red;   
     font-size: 0.8em;
    }

    .errors{

        color:red;
    }

.benefits {

    padding: 50px ;
    text-align: center;
    height: 300px;
    margin-bottom: 0px;
    
}



.business{
    background-size: cover;
    color: #fff;

    height: 500px;
    width: 100%;

}

#overlay {

position: relative;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 10;
  background-color: rgba(0,0,0,0.9); /*dim the background*/

}


.title{
    clear: both;
    width: 100%;
    float: left;
    padding-left: 2.08333%;
    padding-right: 2.08333%;
    padding-top: 4.16667%;
    padding-bottom: 4.16667%;
}

#carouselButtons {
    margin-left: 100px;
    position: absolute;
    bottom: 0px;
}

 /* jssor slider arrow navigator skin 11 css */
                /*
                .jssora11l                  (normal)
                .jssora11r                  (normal)
                .jssora11l:hover            (normal mouseover)
                .jssora11r:hover            (normal mouseover)
                .jssora11l.jssora11ldn      (mousedown)
                .jssora11r.jssora11rdn      (mousedown)
                */
                .jssora11l, .jssora11r {
                    display: block;
                    position: absolute;
                    /* size of arrow element */
                    width: 37px;
                    height: 37px;
                    cursor: pointer;
                    background: url(../image/image6.png) no-repeat;
                    overflow: hidden;
                }
                .jssora11l { background-position: -11px -41px; }
                .jssora11r { background-position: -71px -41px; }
                .jssora11l:hover { background-position: -131px -41px; }
                .jssora11r:hover { background-position: -191px -41px; }
                .jssora11l.jssora11ldn { background-position: -251px -41px; }
                .jssora11r.jssora11rdn { background-position: -311px -41px; }



/* jssor slider bullet navigator skin 05 css */
                /*
                .jssorb05 div           (normal)
                .jssorb05 div:hover     (normal mouseover)
                .jssorb05 .av           (active)
                .jssorb05 .av:hover     (active mouseover)
                .jssorb05 .dn           (mousedown)
                */
.jssorb05 {
                    position: absolute;
                }
.jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
                    position: absolute;
                    /* size of bullet elment */
                    width: 16px;
                    height: 16px;
                    background: url(../image/image5.png) no-repeat;
                    overflow: hidden;
                    cursor: pointer;
                }
.jssorb05 div { background-position: -7px -7px; }
.jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
.jssorb05 .av { background-position: -67px -7px; }
.jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

.carousel-caption {
    position: absolute;
    z-index: 10000;
    display:table;
    width:100%;
    height:100%;
}

.absolute-div {
    position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
}

.carousel-caption h2, .carousel-caption h3, .carousel-caption h1{
    display: table-cell;
    vertical-align: middle;
    text-align:left;
    color: #fff;
}

 .carousel-caption h4 {
     right: 200px !important;
    vertical-align: bottom;
    text-align:left;
    color: #fff;
}


.slider {
  height: 18px;
  font-size: 16px;
  overflow: hidden;
  background-color: lightgrey;
}

.slider div, .slider div p {
  margin: 0;
  padding: 0;
}

.slider div {
  animation: slide 10s 2s infinite;
}

@keyframes slide {
  0% { margin-top: 0; }
  25% { margin-top: -18px; }
  50% { margin-top: -36px; }
  75% { margin-top: -54px; }
  100% { margin-top: 0; }
}

.homeblock{

    width: 11.10%;
    float: left;
    text-align: center;
    font-size: 16px;
    min-height: 150px;
    vertical-align: middle;
    padding: 15px;
    background: #fff;
    -webkit-box-shadow: 7px 14px 42px 3px rgba(163, 174, 184, 0.4);
    -moz-box-shadow: 7px 14px 42px 3px rgba(163, 174, 184, 0.4);
    -ms-box-shadow: 7px 14px 42px 3px rgba(163, 174, 184, 0.4);
    -o-box-shadow: 7px 14px 42px 3px rgba(163, 174, 184, 0.4);
    box-shadow: 7px 14px 42px 3px rgba(163, 174, 184, 0.4);
    z-index: 7;
    flex-grow: 1;
    background-size: cover;
    position: relative;
    backgroun-repeat: no-repeat;
}

.overlaybus {
background: linear-gradient(
                     rgba(20,20,20, .5), 
                     rgba(20,20,20, .5));
}

.margin{

    margin: 10px;
}

.main-slider{
    visibility: visible;
    position: relative;
    margin: 0px auto;
    max-width: 100%;
    height: 431.298px;
    overflow: hidden;
}

.input{
  height: 25px !important;
  margin-top: 8px;
    -moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow:         inset 0 0 40px #000000;
}


.input::-webkit-input-placeholder {
    font-size: 0.8em;
    line-height: 3;
}

.fill {
    width: 100%;
    height: 100%;
    background-position: center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
}

.image{

     max-width: 100%;
     background-position: bottom ;
}

.business-image {
max-width: 100%;
position: relative; 


}

.img-overlay {
    position: relative;
    max-width: 100%;
}

.project-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.9);
    color: #fff;
    padding: 50%;
    padding: 50%;
}

.slider-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.1);
    color: #fff;
    padding: 50%;
    padding: 50%;
}

#item{

   position: absolute; 
   top: 50px; 
   text-align: center;
   width: 100%; 
   color: #fff;
   z-index: 1000;


}
.img-overlay h2{

 position: absolute; 
   top: 50px; 
   text-align: center;
   width: 100%; 
   color: #fff;
   z-index: 1000;

}


.img-overlay p{

   position: absolute; 
   top: 130px; 
   text-align: justify;
   width: 100%; 
   color: #fff;
   z-index: 10000;
   margin: 0 auto;
   padding: 30px;

}

.ghost-btn {

    background: transparent;
    color: #F2F2F2;
    /* CSS Transition */
    -webkit-transition: background .2s ease-in-out, border .2s ease-in-out;
    -moz-transition: background .2s ease-in-out, border .2s ease-in-out;
    -ms-transition: background .2s ease-in-out, border .2s ease-in-out;
    -o-transition: background .2s ease-in-out, border .2s ease-in-out;
     transition: background .2s ease-in-out, border .2s ease-in-out;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
     border-radius:  0;
     z-index: 10000;

}
/* Menu buttons hover */
 .ghost-btn:hover {
    -webkit-transition: 0.2s ease;
    -moz-transition: 0.2s ease;
    -o-transition: 0.2s ease;
    transition: 0.2s ease;
    background-color: #A94442;
    color: #ffffff;
}
.ghost-btn:focus {
    outline: none;
}

#carouselButtons {
    margin-left: 100px;
    position: absolute;
    bottom: 0px;
    z-index: 1000
}

#box:hover{

background-color: #f1f1f1;
}



.logo-con{

    width:100px;
    height:80px;
    position: relative;
    right: 80px;
    margin-left: 75px;
    margin-top: 5px
}

.logo-con img {

  position: absolute;
  right: 0;
  bottom: -7px;
}

.icon-ben {

 width: 150px !important;

}

.glyphicon-ring {
  width: 120px;
  height: 120px;
  border-radius: 50%;
  border: 4px solid white;
   border-width: 5px;
  color: white;
  display: inline-table;
  text-align: center;
  margin: 0 auto !important;
}
/**CSS FOR ICON WITH NO BACKGROUND COLOR**/

.glyphicon-ring .glyphicon-bordered {
  font-size: 100px;
  vertical-align: middle;
  display: table-cell;
}
/**WITH AN ADDED BACKGROUND COLOR**/

.glyphicon-white {
  background: #f5f5f5;
  color: black;
  border: 7px solid #FF8C00;
   margin: 0 auto !important;
}
.glyphicon-teal {
  background: teal;
  color: orange;
}

.inner-icon{
    margin-top: 20%;
    width: 60% !important;

}

.product{

background: #e5e5e5;;

}

.justify{

    text-align: justify;
}


</style>

        <!--For Plugins external css-->
        <!--<link rel="stylesheet" href="assets/css/plugins.css" />-->

        <!--Theme custom css -->
        <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
        <!--<link rel="stylesheet" href="assets/css/colors/maron.css">-->

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="{!! asset('css/responsive.css') !!}" />

        <script src="{!! asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') !!}"></script>
