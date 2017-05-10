        
              <!-- Sidebar -->

        <div id="sidebar-wrapper" style="float:right !important; clear: both !important; width: 240px;  -webkit-box-shadow: -5px 0px 5px -3px #616161;
    box-shadow: -3px 0px 5px -3px #616161;">

            @if(Session::has('message'))

            <div class="alert alert-success"> 

            {{Session::get('message')}} 

            </div> 

            @endif

            <div class="container" style="width: 100%">
            <h6 style="text-align: center; margin-top: 10px; font-size: 1em">Contact us</h6>
            <p style="font-size: 0.8em">Complete the form below or call us on <b>0823423423</b></p>
            <form id="quoteForm" method="post" action="/quoteForm/post" data-parsley-validate="">
                   {{ csrf_field() }}
            <input type="text" class="form-control input" name="firstName" placeholder="First name *"
            data-parsley-required-message="Please enter First name"
            data-parsley-length="[2, 32]" 
            required="" 
            >
            <div class="errors"> {{ $errors->first('firstName') }} </div>
            <input type="text" class="form-control input" name="surname" placeholder="Surname *" 
            data-parsley-required-message="Please enter Surname"
            data-parsley-length="[2, 32]" 
             required="" >
            <div class="errors"> {{ $errors->first('surname') }} </div>
            <input type="email" class="form-control input" name="email" placeholder="Email *" 
            data-parsley-remote-validator='validate' required=""
            data-parsley-required-message="Please enter Email"
            maxlength ="32"
              >
            <div class="errors"> {{ $errors->first('email') }} </div>
            <input type="text" class="form-control input" name="phoneNumber" placeholder="Phone number *"
            minlength ="10" 
            data-parsley-required-message="Please enter Phonenumber"
             required="" >
            <div class="errors"> {{ $errors->first('phoneNumber') }} </div>
            <input type="text" class="form-control input" name="idNumber" placeholder="ID number *" 
            data-parsley-required-message="Please enter ID number"
             required="" >
            <div class="errors"> {{ $errors->first('IdNumber') }} </div>

            <input type="submit" style="margin-top: 15px; padding: 1px;" class="btn btn-primary btn-sm btn-block" Placeholder="Get Quote"
             required="" >

            </form>
            </div>
     </div>
        <!-- /#sidebar-wrapper 