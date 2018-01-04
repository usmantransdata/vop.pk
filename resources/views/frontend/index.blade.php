<!DOCTYPE html>
@include('frontend.layout.header')
<!--END OF NAVBAR-->
<!-- slider -->
<div class="slider">
    <ul class="slides">
      <li>
        <img src="{{ asset('/') }}public/frontend/images/protest-ready.png" style="opacity: 0.4"> <!-- random image -->
        <div class="caption center-align">
            <br><br>
          <h4>Free Online Petition</h4>
          <h5 class="light grey-text text-lighten-3">Create a powerful online petition in just a few minutes. No technical knowledge is needed to start your online petition.</h5>
          <br>
          <a href="{{route('petition.index')}}">
            <button class="waves-effect waves-light btn-flat black white-text">Start Petition</button>
          </a>
          
        </div>
      </li>
      <li>
        <img src="{{ asset('/') }}public/frontend/images/protest-ready.png" style="opacity: 0.4">
        <div class="caption left-align">
          <h4>Easily Create, Send And Analyze Surveys</h4>
          <h5 class="light grey-text text-lighten-3">Create Different Types of Surveys We've got templates for all types of questions</h5>
          <br><a href="{{route('petition.index')}}"><button class="waves-effect waves-light btn-flat black white-text">Start Petition</button></a> 
        </div>
      </li>
      <li>
        <img src="{{ asset('/') }}public/frontend/images/protest-ready.png" style="opacity: 0.4">
        <div class="caption right-align">
          <h4>Right Aligned Caption</h4>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          <br><a href="{{route('petition.index')}}"> <button class="waves-effect waves-light btn-flat black white-text">Start Petition</button></a>
        </div>
      </li>
    </ul>
  </div>
  <!-- end Slider -->


<!--RANDOM CONTENT-->
<div class="container content">
  <div class="section">
    <div class="row ">
      <div class="col s12 center">
        <h4>We like The Way You Think</h4>
        <p style="font-size: 17px">Finally, it's important to remember that you've got one of the most powerful activism tools ever invented- the Internet- at your disposal. You may wonder if your voice will ever be heard. But online petitions are special precisely because they allow everyone to have a voice.</p>
      </div>
    </div>
    <center>
      <a href="{{route('petition.index')}}">
        <button class="waves-effect waves-green btn-flat N/A transparent black-text" style="border:2px solid black;">Start Petition</button>
      </a>
      </center>
  </div>
</div>
<!--END OF CONTENT-->
<div class="container content">
  <div class="section">
    <div class="row">
      <div class="col s12 center">
        <h4>See People's Choice On <strong>Voice Of</strong><strong class="green-text"> Pakistan</strong></h4>
        
      </div>
    </div>
  </div>
</div>
<!-- Random Section- for Blogs -->
<div class="container">
  <div class="row">
    <!--Card-blog 1 -->
    <div class="col m12">
      <div class="card horizontal hide-on-med-and-down hoverable">
        <div class="card-image"> 
          <img src="{{ asset('/') }}public/frontend/images/job-03.jpg" style="opacity: 0.6">
          <div class="text-block" style="position: absolute;bottom: 283px;">
            <i class="material-icons medium red-text">bookmark</i>
          </div>
          <div class="card-title" style="background-color: #263238 ; width: 100%;">Save Cancer Patients</div>
        </div>
        <div class="card-content">
          <a href=""><span class="card-title black-text">Umemployment ! Why </span></a>
          <p>For decades, labor economists have grappled with the problem of explaining unemployment rates at the national, regional and local levels. Aside from the business cycle, what causes unemployment rates to vary over time?</p><a href="" class="red-text">View Article</a>
          <p>
            <label>Category: </label><div class="chip">Job</div><br>
          <a class="waves-effect #3b5999 waves-light btn-floating social google" style="background-color: #dd4b39">
            <i class="fa fa-google"></i></a>
            <a class="waves-effect waves-light btn-floating social twitter" style="background-color: #55acee">
            <i class="fa fa-twitter"></i></a>
            <a class="waves-effect waves-light btn-floating social facebook" style="background-color: #3b5999">
            <i class="fa fa-facebook"></i></a>
            <a class="waves-effect waves-light btn-floating social instagram" style="background-color: #bc2a8d">
            <i class="fa fa-instagram"></i></a>
          </p>
        </div>
      </div>
    </div>
    <!-- End Card-blog 1 -->
  </div>
</div>

<!-- RANDOM CONTECT -->
<div class="container">
  <div class="section">
    <div class="row-cards">
      <div class="row s12">
        <!-- column 1 -->
        
           @foreach($petitions->slice(0, 6) as $key => $petition)

            @if($key>=0)
           <div class="col s12 m12">
            <h4 class="header">{{$petition->title}}</h4>
            <div class="card horizontal">
              <div class="card-image">
                <img style="width: 150px;height:200px" src="{{asset('/')}}storage/app/{{$petition->avatar}}">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <p style="font-size: 20px">{{$petition->message}}</p>
                </div>
                <div class="card-action">
                   <a href="{{route('petition.show', $petition->id)}}" class="green-text">View Article</a>
                </div>
              </div>
            </div>
          </div>
            <!--  <div class="col m4" >
          <a href="">
          <div class="card blue-grey darken-2 hoverable" >
            <div class="card-image">
              <img src="{{asset('/')}}storage/app/{{$petition->avatar}}" style="height: 150px">
              <a class="btn-floating halfway-fab blue-grey darken-4">
                <i class="material-icons white-text">edit</i></a>
            </div>
            
            <div class="card-content">
             
              <a href=""><span class="card-title white-text">{{$petition->title}}</span></a>
              <p class="white-text">{{$petition->message}}</p>
              <a href="{{route('petition.show', $petition->id)}}" class="green-text">View Article</a>
            
            </div>
          
          </div>
          </a>
        </div> -->
          @endif
           @if($key==1)
            <div class="col s12 m12">
            <h4 class="header">{{$petition->title}}</h4>
            <div class="card horizontal">
              <div class="card-image">
                <img style="width: 150px;height:200px"  src="{{asset('/')}}storage/app/{{$petition->avatar}}">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <p style="font-size: 20px">{{$petition->message}}</p>
                </div>
                <div class="card-action">
                   <a href="{{route('petition.show', $petition->id)}}" class="green-text">View Article</a>
                </div>
              </div>
            </div>
          </div>
       <!-- <div class="col m4" >
          <a href="">
          <div class="card blue-grey darken-2 hoverable" >
            <div class="card-image">
              <img src="{{asset('/')}}/storage/app/{{$petition->avatar}}" style="height: 150px">
              <a class="btn-floating halfway-fab blue-grey darken-4">
                <i class="material-icons white-text">edit</i></a>
            </div>
            <div class="card-content">
              <a href=""><span class="card-title white-text">{{$petition->title}}</span></a>
              <p class="white-text">{{$petition->message}}</p><a href="{{route('petition.show', $petition->id)}}" class="green-text">View Article</a>
              
            </div>
          </div>
          </a>
         </div> -->
          @endif
          <!--   @if($key >= 3)
       <div class="col m4">
          <a href="">
          <div class="card blue-grey darken-2 hoverable">
            <div class="card-image">
              <img src="{{asset('/')}}/storage/app/{{$petition->avatar}}" style="height: 150px">
              <a class="btn-floating halfway-fab blue-grey darken-4">
                <i class="material-icons white-text">edit</i></a>
            </div>
            <div class="card-content">
              <a href=""><span class="card-title white-text">{{$petition->title}}</span></a>
              <p class="white-text">{{$petition->message}}</p><a href="{{route('petition.show', $petition->id)}}" class="green-text">View Article</a>
             
            </div>
          </div>
          </a>
         </div>
          @endif -->
            @endforeach
          
        </div>
        <!-- end column 1 -->
        <!-- end of #rd coulmn -->
      </div>
    </div>
  </div>
</div>

<!-- END RANDOM CONTECT -->
<div class="container">
  <div class="row">
    <div class="col m12 center">
      <a href="all-petitions.html">
        <button class="waves-effect waves-green btn-flat N/A transparent black-text" style="border:2px solid black;">View More</button>
      </a>
    </div>
  </div>
</div>

<!-- End Random Section- for Blogs -->

<div class="container content">
  <div class="section">
    <div class="row">
      <div class="col s12 center">
        <h4>Featured blogs On <strong>Voice Of</strong><strong class="green-text"> Pakistan</strong></h4>
      </div>
    </div>
  </div>
</div>
<br>

<!-- blog Carsol setions -->
<div class="container">
  <section>
    <div class="row">
      <div class="col m8">
        <div class="slider">
          <ul class="slides">
            <li>
              <img src="{{ asset('/') }}public/frontend/images/doc-11.jpg" style="opacity: 0.9; position: relative; 
              width: 100%;">
              <a href="">
                <h5 class="white-text" style="position: absolute;top:310px;left: 0;width: 100%;background-color:#00000099; opacity: 0.7;">Save Asthma Patients | Wakeup !<br/>
                  <label class="white-text" style="font-size: 16px;"> By :</label>
                  <label class="white-text" style="font-size: 16px;">Jane Doe ||</label>
                  <label class="white-text" style="font-size: 16px;">21 / Dec /2016</label>
                </h5>
              </a>
            </li>
            <li>
              <img src="{{ asset('/') }}public/frontend/images/tree-01.jpg" style="opacity: 0.9; position: relative; 
              width: 100%;">
              <a href="">
                <h5 class="white-text" style="position: absolute;top:310px;left: 0;width: 100%;background-color:#00000099; opacity: 0.7;">Forest Killers | Save "Changa Manga"<br/>
                  <label class="white-text" style="font-size: 16px;"> By :</label>
                  <label class="white-text" style="font-size: 16px;">Jane Doe ||</label>
                  <label class="white-text" style="font-size: 16px;">21 / Dec /2016</label>
                </h5>
              </a>
            </li>
            <li>
              <img src="{{ asset('/') }}public/frontend/images/women-01.jpg" style="opacity: 0.9; position: relative; 
              width: 100%;">
              <a href="">
                <h5 class="white-text" style="position: absolute;top:310px;left: 0;width: 100%;background-color:#00000099; opacity: 0.7;">Women Awareness | Freedom<br/>
                  <label class="white-text" style="font-size: 16px;"> By :</label>
                  <label class="white-text" style="font-size: 16px;">Jane Doe ||</label>
                  <label class="white-text" style="font-size: 16px;">21 / Dec /2016</label>
                </h5>
              </a>
            </li>
            <li>
              <img src="{{ asset('/') }}public/frontend/images/child-01.jpg" style="opacity: 0.9; position: relative; 
              width: 100%;">
              <a href="">
                <h5 class="white-text" style="position: absolute;top:310px;left: 0;width: 100%;background-color:#00000099; opacity: 0.7;">Human Rights | Threat to Poor People<br/>
                  <label class="white-text" style="font-size: 16px;"> By :</label>
                  <label class="white-text" style="font-size: 16px;">Jane Doe ||</label>
                  <label class="white-text" style="font-size: 16px;">21 / Dec /2016</label>
                </h5>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col m4">
        <div class="row">
          <div class="col s12 grey lighten-5" style="border-top: 3px solid #4CAF50; border-radius: 2%;">
            <h5><b class="green-text">People's</b> Choice</h5>
          </div>
        </div>
        <a href="">
          <div class="card N/A transparent hoverable">
            <div class="card-image">
              <img src="{{ asset('/') }}public/frontend/images/child-02.jpg" style="height: 150px">
              <a class="btn-floating halfway-fab blue-grey darken-1">
                <i class="material-icons white-text">edit</i></a>
            </div>
            <div class="card-content">
              <a href=""><span class="card-title black-text">Child Labour</span></a>
              <p>Many Organizations using children as slaves to work for them.</p>
                <div class="chip N/A transparent hoverable">
                  <img src="{{ asset('/') }}public/frontend/images/profile-img.jpg" alt="Contact Person">
                  Ali Raza
                </div>
            </div>
          </div>
          </a>
      </div>
    </div>
    <div class="row">
      <div class="col m8">
        <!-- carousel here -->
          <div class="carousel">
            <div class="row">
              <div class="col s12 grey lighten-5" style="border-top: 3px solid #4CAF50; border-radius: 2%;">
                <h5><b class="green-text">All</b> Latest</h5>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card hoverable">
                <div class="card-image">
                  <img src="{{ asset('/') }}public/frontend/images/child-02.jpg" style="height: 150px">
                </div>
                <div class="card-content">
                  <a href=""><span class="card-title black-text">Child Labour</span></a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card hoverable">
                <div class="card-image">
                  <img src="{{ asset('/') }}public/frontend/images/child-02.jpg" style="height: 150px">
                </div>
                <div class="card-content">
                  <a href=""><span class="card-title black-text">Child Labour</span></a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card hoverable">
                <div class="card-image">
                  <img src="images/child-02.jpg" style="height: 150px">
                </div>
                <div class="card-content">
                  <a href=""><span class="card-title black-text">Child Labour</span></a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card hoverable">
                <div class="card-image">
                  <img src="images/child-02.jpg" style="height: 150px">
                </div>
                <div class="card-content">
                  <a href=""><span class="card-title black-text">Child Labour</span></a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card hoverable">
                <div class="card-image">
                  <img src="{{ asset('/') }}public/frontend/images/child-02.jpg" style="height: 150px">
                </div>
                <div class="card-content">
                  <a href=""><span class="card-title black-text">Child Labour</span></a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card hoverable">
                <div class="card-image">
                  <img src="images/child-02.jpg" style="height: 150px">
                </div>
                <div class="card-content">
                  <a href=""><span class="card-title black-text">Child Labour</span></a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card hoverable">
                <div class="card-image">
                  <img src="{{ asset('/') }}public/frontend/images/child-02.jpg" style="height: 150px">
                </div>
                <div class="card-content">
                  <a href=""><span class="card-title black-text">Child Labour</span></a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card hoverable">
                <div class="card-image">
                  <img src="{{ asset('/') }}public/frontend/images/child-02.jpg" style="height: 150px">
                </div>
                <div class="card-content">
                  <a href=""><span class="card-title black-text">Child Labour</span></a>
                </div>
              </div>
            </div>
          </div>
        <!-- carousel ends -->
      </div>
      <div class="col m4">
        <div class="row">
          <div class="col s12 grey lighten-5" style="border-top: 3px solid #4CAF50; border-radius: 2%;">
            <h5><b class="green-text">Top</b> Categories</h5>
          </div>
        </div>
        <div class="col s12">
          <div class="card hoverable">
            <div class="card-action">
              <a href="#" class="black-text">Human Rights</a>
            </div>
          </div>
          <div class="card hoverable">
            <div class="card-action">
              <a href="#" class="black-text">Culture of Pakistan</a>
            </div>
          </div>

          <div class="card hoverable">
            <div class="card-action">
              <a href="#" class="black-text">Child Labour</a>
            </div>
          </div>

          <div class="card hoverable">
            <div class="card-action">
              <a href="#" class="black-text">Kashmir | Freedom</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- end carsol  -->

<!-- blog Section -original blogs -->

<div class="container">
  <div class="row ">
    <div class="col m6" style="height: 400px;">
      <img src="{{ asset('/') }}public/frontend/images/map-needed.png" style="height: 400px;">
    </div>
    <div class="col m6" style="height: 400px; margin-top: 100px;">
      <h4 style="text-align: center;">Free Online Petition</h4>
      <h5 style="text-align: center;">Every day, people like you make real change on issues they care about.Create a powerful online petition in just a few minutes. No technical knowledge is needed to start your online petition.Join <a href="#" class="green-text"><strong class="green-text">Voice Of Pakistan</strong></a></h5>
    </div>
  </div>
</div>


@include('frontend.layout.footer')

<!--footer-->
</body>
</html>