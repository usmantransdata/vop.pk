<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8"s/>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     
  <link type="text/css" rel="stylesheet" href="{{ asset('/') }}public/dist/css/materialize.css"  media="screen,projection"/>

        <link rel="stylesheet" href="{{ asset('/') }}public/dist/css/main.css">

      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
      <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700" rel="stylesheet">
<!--ipetition-->
      <link rel="stylesheet" href="https://www.ipetitions.com/assets/v3/css/style.css?dashboard" media="all">


</head>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>



<!--NAVBAR NAVBAR NAVBAR -->
<nav class="navbar-fixed green lighten-2" >

        <div class="nav-wrapper">
         <div></div>
          <a href="/vop/index.php/frontend" class="brand-logo center" >
            <strong class="white-text">Voice</strong><strong> Of Pakistan</strong></a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="" class="black-text">Blog</a></li>
            <li><a href="page-petition.html" class="black-text">Petition</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button black-text" href="#!" data-activates="dropdown1">Setting</a></li>
          </ul>
           @if (Auth::check()) 
             @if (auth()->user()->isAdmin())
          <ul class="left hide-on-med-and-down">
            <li><a href="/vop/index.php/backend" class="red-text"> <b>Dashboard</b></a> </li>
          </ul>
           @endif
           @endif
          <ul class="side-nav" id="mobile-demo">
            <li><a href="">Browse</a></li>
            <li><a href="">Profile</a></li>
            <li><a href="">Browse</a></li>
            <li><a href="">Profile</a></li>
          </ul>
          <ul id="dropdown1" class="dropdown-content green lighten-2">
            @if (Auth::check()) 
           

             <li style="margin-top: 10px" class="#f44336 red "><a href="{{route('frontend-logout')}}" class="black-text">Logout</a></li>
             <li class="user-header">
               <a href="{{route('pet')}}">Dashboard</a> 
             </li>
               <li class="user-header">
               <a href="{{route('frontend-profile')}}">profile</a> 
             </li>
            <li class="divider"></li>
             <li class="user-header">
                      <center>{{ Auth::user()-> name }}</center>
                      </p>
             </li>
              <li class="divider"></li>
           
          @else
            <li><a href="{{route('frontend-login')}}" class="black-text">Login</a></li>
            <li><a href="{{route('frontend-signup')}}" class="black-text">Sign up</a></li>
            @endif
          </ul>
      </div>
  </nav>
<!--END OF NAVBAR-->


<!--PARALAX SECTION-->
<br>

<div class="wrapper">
      
<h1 class="pagetitle">{{$petition->title}}</h1>
<a href="{{route('petition.show', $petition->id)}}" class="viewpet" target="blank">View Petition</a>
<a href="{{route('pet')}}" class="viewback">Back to Dashboard</a>

<div id="peteditnav">
  <ul id="my-tab-menu">
    <li class="active">
      <a id="signatures" href="#">Signatures</a>
    </li>
    <li><a id="edit" href="{{route('petEdit', $petition->id)}}">Edit Petition</a></li>
    <li class="petition-share-tab"><a href="#" id="tab-share-for-success">Share for Success!</a></li>
    </ul>
   
</div>

    


<div class="content shares_page" id="my-content" style="display: none">
    <div class="description open">
        <div class="shares-wrapper">
           
            <div class="petition-preview">
                <div class="petitions-headliner clearfix">
                        <div class="preview-title">Preview</div>
                </div>
                <div class="previews-slider">
                    <div class="img-wrapper" style="background-image: url(https://cdn.ipetitions.com/user-images/petitions/dont-give-up/158451587a17e64e29d55032a475fdb5.png);" data-image-id="0" data-image-url="https://www.ipetitions.com/assets/https://cdn.ipetitions.com/user-images/petitions/dont-give-up/158451587a17e64e29d55032a475fdb5.png" data-name="dont-give-up"></div>
                    
                </div>
                <div class="petition-content">
                    <div class="content-title">{{$petition->title}}</div>
                    
                </div>
            </div>
            <div class="share-buttons-block">

                <div class="petition-template-6-social-shares">
                    <div class="narrow-wrapper clearfix subheader-wrapper petition-subheader-block">
                        <div class="share-wrapper">
                            <div class="addthis_inline_share_toolbox edit-petition-share-for-success" data-url="https://www.ipetitions.com/petition/dont-give-up" data-title="don't give up" style="clear: both;">
                                <a class="addthis_button_facebook share_fb_btn" title="Facebook" href="#">
                                    <i class="fa fa-facebook">
                                    </i>
                                    share on facebook
                                </a>
                                <a class="custom_button_email email-dd share_email_modal" data-url="/petition/dont-give-up">
                                    By E-mail
                                </a>
                                <a class="addthis_button_twitter twitter-share at300b" title="Twitter" href="#">
                                  <span class="at-icon-wrapper" style="background-color: rgb(29, 161, 242); line-height: 16px; height: 16px; width: 16px;">
                                   
                                      <title id="at-svg-twitter-1">Twitter</title><g>
                                      </g></svg></span>
                                    Twitter
                                </a>
                           </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {

        var before_tab_id = 0;
        var before_tab_name = null;
        var before_class = null;

        $("ul#my-tab-menu li").each(function(a,b) {
            if($(this).attr("class") == "active") {
                before_tab_name = $(this).children("a").html();
                before_tab_id = a;
                before_class = $("div#my-content:last").attr("class");
            }
        });

        $("#tab-share-for-success").on("click", function() {
            try {
                var classes = [];
                classes = before_class.split(" ");

            } catch(err) {
                console.log('err:', err);
            }

            $(".shares_page").show();
            $("."+classes[1]).hide();
            $("ul#my-tab-menu li:eq("+before_tab_id+")").removeClass("active");
            $('.previews-slider').slick({ });
            update_share_image();

             $('.previews-slider').on('afterChange', function(event, slick, currentSlide){
                 update_share_image();
                 //&utm_medium=social&utm_source=facebook&utm_campaign=share
            });

        });

        try {
            $("ul#my-tab-menu li a").on("click", function() {

                var click_tab_name = $(this).html();
                var classes = before_class.split(" ");

                if(click_tab_name === before_tab_name) {
                    $(".shares_page").hide();
                    $("."+classes[1]).show();
                    return false;
                }
            })
        } catch (err) {
            console.log('error:', err);
        }

    })

</script>


<div class="content" id="my-content">
  <div class="description open" id="submissions-cp">

    <div id="stats">
      <img src="{{asset('/')}}/storage/app/{{$petition->avatar}}" width="100" title="{{$petition->title}}">
    
      <div id="stats-data">
       

        <a href="#" target="_blank">{{$petition->title}}</a>
                <div id="numbers">
          Signatures: <span id="sigs-numbers" rel="1">{{count($petition->signPetition)}}</span> (goal: 1000)<br>
      @if(empty($petition->signPetition))
                   {{ Carbon\Carbon::parse($petition->signPetition->first()->created_at)->diffForHumans() }}
                   @endif
                  </div>
           
      </div>

            <div class="download-btns" id="new-export">
        <input type="hidden" id="pid" name="pid" value="777001">

        <div id="export-csv" class="report">

                      <a id="start-csv" class="generate download start csv white small-button" href="#">Download signatures as a CSV file</a>
          
                  </div>
        <div id="export-pdf" class="report">

                              <a id="start-pdf" class="generate download start pdf white small-button" href="#">Download for print (PDF)</a>
              
                      </div>

        <div class="progress-bar hidden"><div class="sigs-progress"></div></div>
      </div>
            <!-- end download-btns -->
         
    </div>


                <table class="pet_submissions">
        <thead>
          <tr>
            <th class="hl_no">#</th>
            <th class="hl_user">Name</th>
            <th class="hl_content">Comment</th>
            <th class="hl_date">Created On</th>
          </tr>
        </thead>
        <tbody>
          
  @foreach($comments as $key => $commnt)
@if ($commnt->comments_approved == 1)
<tr class="row" id="submission-42661981">

  <td class="hl_no">{{$key}}</td>
  <td class="hl_user"><img src="{{asset('/')}}/storage/app/{{$petition->avatar}}"> {{auth::user()->name}}</td>
  
  <td class="hl_content">{{$commnt->comment}}</td>
  <td class="hl_date">November 10, 2017, 1:25 PM</td>
  @else
  <td></td>
  <td></td>
</tr>
 @endif      
        @endforeach

        </tbody>
      </table>

      
    
    <div id="signature-history">
      <h2>Signature History <!-- <span>Petition rank: 1</span>--></h2>
       <table class="pet_submissions">
        <thead>
          <tr>
            <th class="hl_no">#</th>
            <th class="hl_user">Name</th>
            <th class="hl_content">Message</th>
            <th class="hl_date">Created On</th>
          </tr>
        </thead>
        <tbody>
     
        @foreach($petition->signPetition as $key => $signPetition)
        <tr>
          <td class="hl_no">{{$key}}</td>
            <td>{{$signPetition->user_name}}</td>
            <td>{{$signPetition->answer}}</td>
            <td>{{$signPetition->created_at}}</td>
         </tr> 
        @endforeach
         </tbody>
      </table>
    </div>
    </div>
<!--
    <div id="signature-by-country">
      <h2>Signatures by country</h2>
      <div id="country-chart" data-stats="" style="width:600px; height:300px"></div>
    </div>
-->
  </div>  
    </div>

</div>

<!--FOOTER-->
<!-- footer -->
  <footer class="page-footer green lighten-2">
          <div class="container">
            <div class="row">
              <div class="col s12 m6 l3">
                <h5><a href="header-test.html" class="black-text"><strong>Voice</strong> of <strong>Pakistan</strong></h5></a><br>
                <ul>
                  <li style="cursor:pointer"><a href="#"></a><h6>About Us</h6></li>
                  <li style="cursor:pointer"><a href="#"></a><h6>Career</h6></li>
                  <li style="cursor:pointer"><a href="#"></a><h6>History</h6></li>
                  <li style="cursor:pointer"><a href="#"></a><h6>Team</h6></li>
                </ul>
              </div>
              <div class="col s12 m6 l6">
               <h4>Recent News</h4>
                <p class="text-lighten-4">Every day, people like you make real change on issues they care about.Create a powerful online petition in just a few minutes. No technical knowledge is needed to start your online petition <strong>Voice</strong> of <strong>Pakistan</strong><br>the most flexible online activism tools on the Internet.</p>
              </div>
              <div class="col s12 m6 l3">
                <p class="text-lighten-4">Stay Connected</p>
                <a class="waves-effect #3b5999 waves-light btn-floating social google" style="background-color: #dd4b39">
                <i class="fa fa-google"></i></a>
                <a class="waves-effect waves-light btn-floating social twitter" style="background-color: #55acee">
                <i class="fa fa-twitter"></i></a>
                <a class="waves-effect waves-light btn-floating social facebook" style="background-color: #3b5999">
                <i class="fa fa-facebook"></i></a>
                <a class="waves-effect waves-light btn-floating social instagram" style="background-color: #bc2a8d">
                <i class="fa fa-instagram"></i></a>
                <br>
                <div class="input-field inline">
                  <input id="email" type="email" class="validate" style="border-bottom:1px solid">
                  <label for="email" data-error="wrong" data-success="right" class="black-text">Email</label>
                  <button class="btn-flat waves-effect waves-light black white-text">Subscribe</button>
                </div>
              </div>

            </div>
          </div>
          <div class="footer-copyright black">
            <div class="container">
            © Copyright 2017 <strong>Voice</strong> of <strong>Pakistan</strong> - All Rights Reserved
            <div class="right">Email: VOP@transdata.biz</div>
            </div>
          </div>
        </footer>
      </h5>
    </div>
  </div>
<!--END OF FOOTER-->
<style>
  @import url("https://fonts.googleapis.com/icon?family=Material+Icons");
@import url("https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css");

$bg-color: white;
$bg-font-color: black;
$hamburger-color: black;
$subheader: white;

/*nav {
  background-color: $bg-color;
}*/

nav .brand-logo {
  color: $bg-font-color;
}
html {
    font-family: 'Raleway', sans-serif;
    font-weight: 400;
  }
nav ul a {
  color: $bg-font-color;
}

.parallax-container h5 {
  color: $subheader;
}

.button-collapse {
  color: $hamburger-color;
}

h2 i {
  font-size: inherit!important;
}
p{
  font-size: 17px;
}
.parallax-container {
  height: 400px;
}

.content {
  line-height: 1.5;
}

footer {
  line-height: 1.5;
}
</style>
<!-- js here -->

</script>
<script>
  $(document).ready(function(){
      $('.parallax').parallax();
  $(".button-collapse").sideNav();
  $('.dropdown-button').dropdown('open');
   $('.dropdown-button').dropdown('close');
});
</script>
<script>
  $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrainWidth: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left', // Displays dropdown with edge aligned to the left of button
      stopPropagation: false // Stops event propagation
    }
  );
</script>
</body>
</html>