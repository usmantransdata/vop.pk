<!DOCTYPE html>
<html>
<head>
  

 @include('frontend.layout.header')
  <link rel="stylesheet" href="{{ asset('/') }}public/dist/css/main.css">
<!--PARALAX SECTION-->
<br>


@if (session('message'))
        <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('message') }}
        </div>
    @endif
     @if($prfl['recordfound']>0)
@foreach($profile as $profile)
<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

    <form method="post" enctype="multipart/form-data" class="user-edit-form" files="true" action="{{route('frontend-profile-update', $profile->user_id)}}">
      {{csrf_field()}}
     <div class="container">
          <div class="row">
            <div class="col m12 ">
              <h4><b>Account <b class="green-text">Setting</b></b></h4>
            </div>
          </div>
        </div>
        <!-- tabs section -->
        <br><br>
        <section>
        <div class="container">
          <div class="row" style="position: relative;">
          <div class="col s12">
            <ul class="tabs">

              <li class="tab col s3"><a href="#test1" class="black-text">Edit Profile</a></li>
              <li class="tab col s3"><a href="#test2" class="black-text">Change Password</a></li>
              <li class="tab col s3"><a href="#test3" class="black-text">Privacy</a></li>
            </ul>
          </div>
          <div id="test1" class="col s12">
            <br>
            <div class="row">
              <div class="col m4">
                <h5><b>Edit <b class="green-text">Profile</b></b></h5>
              </div>

               <div class="col m4" style="margin-left: 150px;height:200px;width:280px;border: 1px solid">
                 <img alt="" style="margin-left: -13px;height: 200px;width: 280px;" id="test" src="{{asset('/')}}storage/app/{{$profile->avatar}}" />

                <input id="profile-img" onchange="readURL(this);" type="file" name="avatar" accept="image/*">
              </div>
            </div>
            <br>
            <div class="row">
                <div class="input-field col m5">
                  <input id="icon_prefix" type="text" required readonly value="{{auth::user()->name}}" class="validate">
                  <label for="icon_prefix ">Name</label>
                </div>
                <div class="input-field offset col m5">
                  <input id="icon_prefix" type="text" name="nick_name" value="{{$profile->nick_name}}" class="validate">
                  <label for="icon_prefix">Profile Name</label>
                </div>
                <div class="input-field col m5">
                  <input id="icon_prefix" type="text" name="email" readonly value="{{auth::user()->email}}" class="validate">
                  <label for="icon_prefix">Email Address</label>
                </div>
                <div class="input-field col m5">
                  <input id="icon_prefix" type="text" name="phone" value="{{$profile->phone}}" required="required" class="validate">
                  <label for="icon_prefix">Phone No</label>
                </div>
                <div class="input-field col m5">
                  <input id="icon_prefix" type="text" value="{{$profile->occupation}}" name="occupation" required="required" class="validate">
                  <label for="icon_prefix">Profession</label>
                </div>
                 
                <div class="input-field col m5">
                  <input id="icon_prefix" type="text" value="" name="web_site" class="validate">
                  <label for="icon_prefix">Website</label>
                </div>
                <div class="input-field col m5">
                  <input id="icon_prefix" type="text" value="{{$profile->company}}" name="company" required="required" class="validate">
                  <label for="icon_prefix">Company / Org</label>
                </div>
                <div class="input-field col m5">
                  <input id="icon_prefix" type="text" value="{{$profile->country}}" name="country" required="required" class="validate">
                  <label for="icon_prefix">Country</label>
                </div>
                <div class="input-field col m3">
                  <input type="text" name="dob" value="{{$profile->dob}}" required="required" class="datepicker">
                  <label for="icon_prefix">Date of Birth</label>
                </div>
                <div class="input-field col m4">
                  <input id="icon_prefix" value="{{$profile->city}}" name="city" type="text" required="required" class="validate">
                  <label for="icon_prefix">City</label>
                </div>
                <div class="input-field col m3">
                  <input id="icon_prefix" value="{{$profile->province}}" name="state" type="text" required="required" class="validate">
                  <label for="icon_prefix">State</label>
                </div>
                <div class="input-field col m5">
                  <input id="icon_prefix" type="text" value="{{$profile->education}}" name="education" class="validate">
                  <label for="icon_prefix">Qualification</label>
                </div>
                <div class="input-field col m5">
                  <input id="icon_prefix" value="{{$profile->intrests}}" type="text" name="intrests" class="validate">
                  <label for="icon_prefix">Hobbies</label>
                </div>
                <div class="input-field col s10">
                    <textarea id="textarea1" value="{{$profile->about}}" name="description" class="materialize-textarea" data-length="120"></textarea>
                    <label for="textarea1">About</label>
                  </div>
              </div>
              <div class="row">
                <button class="waves-effect waves-green btn-flat N/A transparent black-text" style="border:2px solid #4CAF50;">Save</button>
              </div>
          </div>
          <div id="test2" class="col s12">
            <br>
            <div class="row">
              <div class="col m4">
                <h5><b>Reset <b class="red-text">Password</b></b></h5>
                <span>work in progress<b class="red-text">...</b></span>
              </div>

            </div>
            <br>
            <div class="row">
              <div class="input-field col m5">
                  <input id="icon_prefix" type="text" class="validate">
                  <label for="icon_prefix ">Password</label>
                </div>
            </div>
            <div class="row">
              <div class="input-field col m5">
                  <input id="icon_prefix" type="text" class="validate">
                  <label for="icon_prefix ">Repeat Password</label>
                </div>
            </div>
            <div class="row">
                <button class="waves-effect waves-green btn-flat N/A transparent black-text" style="border:2px solid #4CAF50;">Save</button>
              </div>
          </div>
          <div id="test3" class="col s12">
            <br>
            <div class="row">
              <div class="col m4">
                <h5><b>Change <b class="green-text">Privacy</b></b></h5>
              </div>
            </div>
            <br>
            <div class="row">
              <form action="#">
                <p>
                  <input type="checkbox" id="one"/>
                  <label for="one" class="black-text">Show my Petitions To Everyone (Publish to Public)</label>
                </p>
                <p>
                  <input type="checkbox" id="two"/>
                  <label for="two" class="black-text">Enable Notification Emails</label>
                </p>
                <p>
                  <input type="checkbox" id="three"/>
                  <label for="three" class="black-text">Enable Public Comments</label>
                </p>
              </form>
            </div>
            <br>
            <div class="row">
                <button class="waves-effect waves-green btn-flat N/A transparent black-text" style="border:2px solid #4CAF50;">Save</button>
              </div>
          </div>
        </div>
        </div>
      </section>
        <!-- end tabs section -->




      <style>
      [type="checkbox"]:checked + label:before{
            border-right: 2px solid #4CAF50;
            border-bottom: 2px solid #4CAF50;
      }
      textarea.materialize-textarea:focus:not([readonly]){
        border-bottom: 1px solid;
          box-shadow: 0 1px 0 0 ;
      }
      textarea.materialize-textarea:focus:not([readonly])+label{
        color: black;
      }
      /*input[type=text].valid{
      border-bottom: 1px solid #4CAF50;
          box-shadow: 0 1px 0 0 #4CAF50;
      }*/
      .input-field .prefix.active{
        color: black ;
      }

      .input-field input[type=text]:focus + label
      {
          color: black;
      }
      .input-field input[type=text]:focus
      {
          border-bottom: 1px solid;
          box-shadow: 0 1px 0 0 ;
      }

      .picker__date-display{
        background-color: #4CAF50;
      }
      .picker__weekday-display{
        background-color: #4CAF50;
      }
      .picker__year-display{
        background-color: #4CAF50;
      }
      .picker__day--selected, .picker__day--selected:hover, .picker--focused .picker__day--selected{
        background-color: #4CAF50;
      }
      html{
          font-family: 'Raleway', sans-serif;
          font-weight: 400;
      }

      .about-label-info{
        font-size: 17px;
      }
      .tabs .indicator{
        background-color: black;
      }
      </style>
  </form>
                        @endforeach
                        @else
                         
                        </div>
                        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
 <form method="post" action="{{route('frontend-profile-add')}}">
                        {{csrf_field()}}
     <div class="container">
          <div class="row">
            <div class="col m12 ">
              <h4><b>Account <b class="green-text">Setting</b></b></h4>
            </div>
          </div>
        </div>
        <!-- tabs section -->
        <br><br>
        <section>
        <div class="container">
          <div class="row" style="position: relative;">
          <div class="col s12">
            <ul class="tabs">
              <li class="tab col s3"><a href="#test1" class="black-text">Edit Profile</a></li>
              <li class="tab col s3"><a href="#test2" class="black-text">Change Password</a></li>
              <li class="tab col s3"><a href="#test3" class="black-text">Privacy</a></li>
            </ul>
          </div>
          <div id="test1" class="col s12">
            <br>
            <div class="row">
              <div class="col m4">
                <h5><b>Edit <b class="green-text">Profile</b></b></h5>
              </div>
                 <div class="col m4" style="margin-left: 150px;height:200px;width:280px;border: 1px solid">
                   <img alt="" style="margin-left: -13px;height: 200px;width: 280px;" id="test" src="" />

                  <input id="profile-img" onchange="readURL(this);" type="file" name="avatar" accept="image/*">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="input-field col m5">
                  <input id="icon_prefix" type="text" required readonly value="{{auth::user()->name}}" class="validate">
                  <label for="icon_prefix ">Name</label>
                </div>
                <div class="input-field offset col m5">
                  <input id="icon_prefix" type="text" name="nick_name" class="validate">
                  <label for="icon_prefix">Profile Name</label>
                </div>
                <div class="input-field col m5">
                  <input id="icon_prefix" type="text" name="email" readonly value="{{auth::user()->email}}" class="validate">
                  <label for="icon_prefix">Email Address</label>
                </div>
                <div class="input-field col m5">
                  <input id="icon_prefix" type="text" name="phone" required="required" class="validate">
                  <label for="icon_prefix">Phone No</label>
                </div>
                <div class="input-field col m5">
                  <input id="icon_prefix" type="text" name="occupation" required="required" class="validate">
                  <label for="icon_prefix">Profession</label>
                </div>
                 
                <div class="input-field col m5">
                  <input id="icon_prefix" type="text" name="web_site" class="validate">
                  <label for="icon_prefix">Website</label>
                </div>
                <div class="input-field col m5">
                  <input id="icon_prefix" type="text" name="company" required="required" class="validate">
                  <label for="icon_prefix">Company / Org</label>
                </div>
                <div class="input-field col m5">
                  <input id="icon_prefix" type="text" name="country" required="required" class="validate">
                  <label for="icon_prefix">Country</label>
                </div>
                <div class="input-field col m3">
                  <input type="text" name="dob" required="required" class="datepicker">
                  <label for="icon_prefix">Date of Birth</label>
                </div>
                <div class="input-field col m4">
                  <input id="icon_prefix" name="city" type="text" required="required" class="validate">
                  <label for="icon_prefix">City</label>
                </div>
                <div class="input-field col m3">
                  <input id="icon_prefix" name="state" type="text" required="required" class="validate">
                  <label for="icon_prefix">State</label>
                </div>
                <div class="input-field col m5">
                  <input id="icon_prefix" type="text" name="education" class="validate">
                  <label for="icon_prefix">Qualification</label>
                </div>
                <div class="input-field col m5">
                  <input id="icon_prefix" type="text" name="intrests" class="validate">
                  <label for="icon_prefix">Hobbies</label>
                </div>
                <div class="input-field col s10">
                    <textarea id="textarea1" name="description" class="materialize-textarea" data-length="120"></textarea>
                    <label for="textarea1">About</label>
                  </div>
              </div>
              <div class="row">
                <button class="waves-effect waves-green btn-flat N/A transparent black-text" style="border:2px solid #4CAF50;">Save</button>
              </div>
          </div>
          <div id="test2" class="col s12">
            <br>
            <div class="row">
              <div class="col m4">
                <h5><b>Reset <b class="red-text">Password</b></b></h5>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="input-field col m5">
                  <input id="icon_prefix" type="text" class="validate">
                  <label for="icon_prefix ">Password</label>
                </div>
            </div>
            <div class="row">
              <div class="input-field col m5">
                  <input id="icon_prefix" type="text" class="validate">
                  <label for="icon_prefix ">Repeat Password</label>
                </div>
            </div>
            <div class="row">
                <button class="waves-effect waves-green btn-flat N/A transparent black-text" style="border:2px solid #4CAF50;">Save</button>
              </div>
          </div>
          <div id="test3" class="col s12">
            <br>
            <div class="row">
              <div class="col m4">
                <h5><b>Change <b class="green-text">Privacy</b></b></h5>
              </div>
            </div>
            <br>
            <div class="row">
              <form action="#">
                <p>
                  <input type="checkbox" id="one"/>
                  <label for="one" class="black-text">Show my Petitions To Everyone (Publish to Public)</label>
                </p>
                <p>
                  <input type="checkbox" id="two"/>
                  <label for="two" class="black-text">Enable Notification Emails</label>
                </p>
                <p>
                  <input type="checkbox" id="three"/>
                  <label for="three" class="black-text">Enable Public Comments</label>
                </p>
              </form>
            </div>
            <br>
            <div class="row">
                <button class="waves-effect waves-green btn-flat N/A transparent black-text" style="border:2px solid #4CAF50;">Save</button>
              </div>
          </div>
        </div>
        </div>
      </section>
        <!-- end tabs section -->




      <style>
      [type="checkbox"]:checked + label:before{
            border-right: 2px solid #4CAF50;
            border-bottom: 2px solid #4CAF50;
      }
      textarea.materialize-textarea:focus:not([readonly]){
        border-bottom: 1px solid;
          box-shadow: 0 1px 0 0 ;
      }
      textarea.materialize-textarea:focus:not([readonly])+label{
        color: black;
      }
      /*input[type=text].valid{
      border-bottom: 1px solid #4CAF50;
          box-shadow: 0 1px 0 0 #4CAF50;
      }*/
      .input-field .prefix.active{
        color: black ;
      }

      .input-field input[type=text]:focus + label
      {
          color: black;
      }
      .input-field input[type=text]:focus
      {
          border-bottom: 1px solid;
          box-shadow: 0 1px 0 0 ;
      }

      .picker__date-display{
        background-color: #4CAF50;
      }
      .picker__weekday-display{
        background-color: #4CAF50;
      }
      .picker__year-display{
        background-color: #4CAF50;
      }
      .picker__day--selected, .picker__day--selected:hover, .picker--focused .picker__day--selected{
        background-color: #4CAF50;
      }
      html{
          font-family: 'Raleway', sans-serif;
          font-weight: 400;
      }

      .about-label-info{
        font-size: 17px;
      }
      .tabs .indicator{
        background-color: black;
      }
      </style>
                           
                            </form>
                         @endif
                    </div>
                  
                  </div>
              </div>
            </div>

<!--FOOTER-->
<!-- footer -->
@include('frontend.layout.footer')

<script type="text/javascript">
   function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
        $('#test').attr('src', e.target.result);
       }
        reader.readAsDataURL(input.files[0]);
       }
    }
</script>
<script>
  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });
</script>
</body>
</html>