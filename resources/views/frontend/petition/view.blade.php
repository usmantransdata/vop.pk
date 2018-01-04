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
<main class="content petition-main clr" role="main">
  

<article class="pet_content">
    <div class="jump_menu">
        <a href="#" class="next icon-down-dir js-next_section" title="next section"></a>
        <a href="#" class="prev icon-up-dir js-prev_section" title="previous section"></a>
    </div>
    <div class="narrow-wrapper border-wrapper heading-wrapper petition-heading-wrapper clearfix">
        <h1 id="description">{{$petition->title}}</h1>
    </div>
    <div class="petition-template-6-social-shares">
        <div class="narrow-wrapper clearfix subheader-wrapper petition-subheader-block">
         <div class="addthis_inline_share_toolbox" data-url="http://ipt.io/2O3MV" data-title="don't give up" data-description="I really care about this important cause at iPetitions. Join me in supporting it!" style="clear: both;">
         </div>
        </div>
    </div>
    <div class="narrow-wrapper clearfix subheader-wrapper petition-subheader-block">

            <div class="pet_author media" >
                <div class="media-left">
                    <img class="avatar" src="https://graph.facebook.com/1727180044021017/picture?type=square" alt="Fourty Seven" itemprop="image">
                </div>
                <div class="media-body">
                    <strong>{{Auth::user()->name}}</strong>
                       <span class="location"></span>
                  <a href="#comments" class="tab_comments comments">
                        <i class="fa fa-comment-o"></i>
                        <span class="count">1</span>
                        <span class="text">Comments</span>
                    </a>
                </div>

                <div class="media-body" style="border: 1px solid">
                    <strong>Decision Maker</strong>
                       <span class="location"></span>
                  <a href="#comments" class="tab_comments comments">
                        <i class="fa fa-comment-o"></i>
                       @foreach($dm as $dm)
                        <span class="text">{{$dm->company}}</span>, 
                        @endforeach
                    </a>
                </div>
               
                <div class="media-right">
                   @if($petition->publish == 0 )
                   <form method="post" action="{{route('publish', $petition->id)}}">
                    {{csrf_field()}}
                  <input style="margin-left: 50px;" type="submit" name="submit" class="btn-primary btn" value="Publish">
                @else
                <span style="margin-left: 50px;"">Your Petition is published</span>

                </form>
                  @endif
                </div>
             
            </div>

    </div>


<div class="narrow-wrapper signature_counter content-signature-counter border-wrapper">
        <div class="progress_meter">
            <div class="progress_line" style="width: 0.1%"></div>
        </div>
        1 Signature        <b>Goal: 1,000</b>
    </div>
    <div class="sections-wrapper clearfix ab_template_6_sections desktop">
        
<section class="pet_description">

    
    <img src="../../storage/app/{{$petition->avatar}}" id="js-petition-image" class="pet_img">
    <p></p>

   <p>{{$petition->message}}</p>
   <p></p>
    </section>        

    <section class="facebook-share-section">
            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <div class="addthis_inline_share_toolbox_uq2r" data-url="http://ipt.io/2O3MV" data-title="don't give up" data-description="I really care about this important cause at iPetitions. Join me in supporting it!" style="clear: both;">
                <div class="custom_images">
                    <a class="addthis_button_facebook" title="Facebook" href="#"><img src="https://www.ipetitions.com/assets/v4/img/facebook_logo_icon.png" width="32" height="32" border="0" alt="Share to Facebook">Share on Facebook</a>
                </div>
           </div>
  </section>
   <div class="row">
    <div class="col-md-8 col-md-offset-0">
      
      @foreach($comments as $commnt)
@if ($commnt->comments_approved == 1)
      <div class="comment" style="border-radius: 0!important;;">
       <p><strong>{{$commnt->user_email}}</strong> </p>
       <p> {{$commnt->comment}}</p>
      </div>
@endif      
        @endforeach
    </div>


  </div>
       
        <!-- COMMENTS -->
              <div id="comment-form" >
              <span>Leave a Reply</span><br>
              @guest
                <input type="button" name="" value="sign in to comment">
              @else
              <span style="color: green">Login as {{ Auth::user()->name}}</span><br>

              <span >
             
              @endguest
           <form action="{{ route('frontendComments.comment', $petition->id) }}" method="POST">
               {{ csrf_field() }}
                  <div>
            <textarea name="comments" id="comments" style="height:100px;width:400px;font-family:sans-serif;font-size:1.2em;"></textarea>
                  </div>
                  <input type="submit" class="btn-primary" value="Submit">
                  </form>
               </div>
<hr>
              

<!-- /COMMENTS -->
<div class="signature">
 

<div class="media-body">
  @foreach($petition->signPetition as $p)
  <div class="name-wrapper">
    <span class="name">{{$p->user_name}}</span>
    <span class="location"></span> 
    </div>
    @endforeach
   </div>

</div>

</article>
<!-- SIGNATURES -->




@if($signpetition['recordfound']>0)



<aside class="sticky-sidebar" role="complementary">
    <div class="sidebar-wrapper" style="position: absolute; top: 100px; height: 279px;">
        <div class="signature_counter">
            <div class="progress_meter">
                <div class="progress_line" style="width: 0.1%"></div>
            </div>
         {{count($petition->signPetition)}} Signature           <b>Goal: 1,000</b>
         <p></p>
        </div>
<style type="text/css">

    .question-container {
        margin-bottom: 0.8em;
    }

    .question-container label{
        font-size: 1em;
    }

    .question-container select{
        color: #6b6b6b;
    }

    .question-options input[type=radio] {
        position: absolute;
        left: 0;
        top: 2px;
        margin: 0;
        width: auto;
        font-size: 1rem;
        vertical-align: text-top;
    }
</style>
      <div class="sign_form already_signed">
            <span class="hecki">You signed this petition</span>
      <span class="close-modal js-close_sign_form"></span>     
      <p>Welcome back <b>{{$p->user_name}}</b>. <i>(if you're not {{$p->user_name}}, <a href="{{route('frontend-logout')}}" >click here</a>)</i></p>
                  <p>Visit your <a href="{{route('pet')}}"> Activity feed</a> to view your activities and profile.
      </p>
    </div>
  
    </div>

</aside>
@else
<aside class="sticky-sidebar" role="complementary">
 <div class="sidebar-wrapper" style="position: absolute; top: 100px; height: 279px;">
  <div class="sticky ab_template_6" >
    <div class="btn-wrapper">
        <a class="btn mobile_only" href="#">Sign Petition</a>
    </div>
</div>
   <!-- SIGN FORM -->
        <div class="sign_form">
            <div class="header"></div>
            <h3>Sign This Petition</h3>
            <span class="close_modal icon-close js-close_sign_form"></span>
            <form id="submissions-form" action="{{route('sign.create', $petition->id)}}" method="post">   
                {{csrf_field()}}
               @if (!auth()->check())
                        <input class="requiredField" placeholder="Name*" name="name" id="Submissions_name" type="text" maxlength="50" value="">  
                        <input class="requiredField" placeholder="Email*" name="email" id="Submissions_email" type="email" maxlength="128" value="">
                        @else
                        <div class="question-container clearfix">
                                <textarea placeholder="Comments" name="answer" id="Answers_dont-give-up_1_value"></textarea>                                </div>
            
                @endif

            
            <button type="submit" class="btn btn-green btn_large btn-simple" id="sign_now">Sign Petition</button>
                           
                        </form>  
           </div>
        <!-- /SIGN FORM -->
  
    </div>

</div>


</aside>

@endif
            </main>

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