<!DOCTYPE html>
<html>
<head>
@include('frontend.layout.header')
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      
<section>
  <img src="{{asset('/')}}public/frontend/images/graph-5.jpg" style="width: 100%; height: 350px;"> 
  <!-- filter: blur(3px); -->
  <h2 class="white-text" style="background-color:#00000099;opacity: 0.8; position: absolute; top:180px; left: 0; width:100%; text-align: center;"><strong>Dashboard</strong></h2>
</section>
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
<!-- Dashboard section -->
<div class="container">
  <div class="row">
    <div class="col m8">
      <!-- card start -->
      @foreach($petition as $pet)

     <div class="card">
            <div class="card-image">
              <img src="{{asset('/')}}/storage/app/{{$pet->avatar}}" style="height: 300px;">
              <span class="card-title blue-grey darken-4" style="width: 100%">
                <label class="white-text" style="font-size: 17px">{{$pet->title}}</label> &nbsp;&nbsp;
                <label class="white-text" style="font-size: 17px"><i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp;{{ Carbon\Carbon::parse($pet->created_at)->diffForHumans() }}</label>
              </span>
            </div>
            <div class="card-action">
              <a href="" class="red-text">
                <i class="fa fa-google"></i>
              </a>
              <a href="" class="indigo-text">
                <i class="fa fa-facebook"></i></a>
              <a href="" class="blue-text">
                <i class="fa fa-twitter"></i>
              </a>
                <span class="signatures-itself"><span style="color: #4CAF50;">Signatures:</span> {{count($pet->signPetition)}}</span>
              <a href="{{route('petition.show', $pet->id)}}" class="right green-text">View</a>
              <a href="{{ route('petition.edit', $pet->id)}}" class="right green-text">Manage</a>
            </div>
          </div>
   @endforeach
  <!-- card end -->
      <!-- card start -->
      <div class="col m8">
        {{ $petition->links('vendor.pagination.custom') }}
      </div>
    </div>

    <div class="col m4">
      <!-- Profile Image Card  -->
      <div class="card hoverable">
        <div class="card-image">
          <img src="{{asset('/')}}/storage/app/{{$user->avatar}}">
          <span class="card-title blue-grey darken-4" style="width: 100%"><strong>{{auth::user()->name}}</strong></span>
          <a href="{{route('frontend-profile')}}" class="btn-floating halfway-fab waves-effect waves-light blue-grey darken-3 pulse"><i class="material-icons">edit</i></a>
        </div>
        <div class="card-content">
          <p style="font-size: 17px">Blogger | Content Writer</p>
        </div>
      </div>
      <!-- End Profile image card -->

      <!-- Activity Card -->
      <h5 class="center"><strong>Activities</strong></h5>
      <div class="card hoverable">
            <div class="card-content black-text">
              <span class="card-title">Created Blog</span>
              <p>Population controll program in pakistan</p>
              <br>
              <label><i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp;24 / Dec /2017</label>
            </div>
            <div class="card-action">
              <label>
                <a href="#" class="green-text">View</a>
              </label>
            </div>
          </div>
          <!-- activity 2nd -->
          <div class="card hoverable">
            <div class="card-content black-text">
              <span class="card-title">Signed a Petition</span>
              <p>Raise your hand against women abuse</p>
              <br>
              <label><i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp;27 / Dec /2017</label>
            </div>
            <div class="card-action">
              <label>
                <a href="#" class="green-text">View</a>
              </label>
            </div>
          </div>
      <!-- End Activity Card -->
    </div>
  </div>
</div>
<!--FOOTER-->
@include('frontend.layout.footer')
</body>
</html>