<!DOCTYPE html>
<html>
@include('frontend.layout.header')
<!-- Profile Card -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.css">

<link rel="stylesheet" type="text/css" href="{{ asset('/') }}public/frontend/css/new-style.css">
<link rel="stylesheet" type="text/css" href="{{ asset('/') }}public/frontend/css/survey.css">
<br><br><br><br>
<section>
  <div class="container">

    <div class="row">
      <div class="col m4">
        <div class="card">
                <div class="card-image ">
                 @foreach($profile as $value)
                  <img src="{{asset('/')}}storage/app/{{$value->avatar}}" style="height: 350px">
              @endforeach
                </div>
                <div class="card-action green lighten-2 ">
                   <span style="font-size: 20px"><strong>{{auth::user()->name}}</strong> </span><br>

                </div>

<!-- <p>please complete your profile to<strong style="background-color:#000000bd;color:red">60%</strong> to publish petition</p> -->
               
            </div>
            <div class="progress" style="height: 20px;">
  <div class="progress-bar progress-bar-striped active" id="percentage">
    0% completed
  </div>
</div>

      </div>
      <div class="col m8">
           @if (session('message'))
                         <div class="alert alert-success" style="color:#0012ff;background-color: #ff000094;;">
                         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>{{ session('message') }}</strong>
                         </div>
                      @endif

                        @if (session('profile'))
                         <div class="alert alert-success" style="color:#000;background-color:green;">
                         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>{{ session('profile') }}</strong>
                         </div>
                      @endif
                        @if($prfl['recordfound']>0)
                  @foreach($profile as $profile)

        <div class="card hoverable">
            <div class="card-content">
              <div class="right">
                    <a href="{{route('edit')}}" class="btn-floating btn tooltipped waves-effect waves-light green lighten-2 black-text" data-position="top" data-delay="50" data-tooltip="edit"><i class="material-icons black-text">edit</i></a>
                  </div>
              <span class="card-title black-text"><strong>About</strong> </span>
              <label class="about-label ">Postion :</label>
              <label class="about-label black-text" id="job">{{$profile->occupation}}</label><br>
                  <label class="about-label ">Email :</label>
                  <label class="about-label-info black-text">{{auth::user()->email}}</label><br>
                  <label class="about-label"><strong>Call :</strong></label>
                  <label id="phone" class="about-label-info black-text">{{$profile->phone}}</label><br>
                  <label id="company" class="about-label"><strong>Company | Org :</strong></label>
                  <label class="about-label-info black-text">{{$profile->company}}</label><br>
                  <label class="about-label"><strong>Address :</strong></label>
                  <label class="about-label-info black-text">{{$profile->city}}, {{$profile->province}}, {{$profile->country}}</label>
            </div>
          </div>
          <div class="card hoverable">
            <div class="card-content">
              <span class="card-title black-text"><strong>Intrests</strong> </span>
                <div class="chip green lighten-2 hoverable black-text">{{$profile->interest}}</div>
            </div>
          </div>
          <div class="card hoverable">
            <div class="card-content">
              <a class="waves-effect #3b5999 waves-light btn-floating social google" 
              style="background-color: #dd4b39">
              <i class="fa fa-google"></i></a>
              <a class="waves-effect waves-light btn-floating social twitter" 
              style="background-color: #55acee">
              <i class="fa fa-twitter"></i></a>
              <a class="waves-effect waves-light btn-floating social facebook" 
              style="background-color: #3b5999">
              <i class="fa fa-facebook"></i></a>
              <a class="waves-effect waves-light btn-floating social instagram" 
              style="background-color: #bc2a8d">
              <i class="fa fa-instagram"></i></a>
              </div>
            </div>
          </div>

              @endforeach
              @else
               <div class="alert alert-danger">

            <div class="card-content red-text">
                  <span><strong>Alert!</strong> Please Upgrade your profile ! it seems you didn't updated yet.</span>
                      </div>
            
          </div>
              <ul class="collapsible popout" data-collapsible="accordion" >
                
              <li >
                <div class="collapsible-header active" style="background-color: #ff0000ab;">
                  <i class="material-icons">face</i>About</div>

                <div class="collapsible-body">

                  <label class="about-label">Bussniceman</label><br>
                  <label class="about-label">Email :</label>
                  <label class="about-label-info"></label><br>
                   
                    <label class="about-label">Cell :</label>
                  <label class="about-label-info"><span style="color:red">* Required</span></label><br>
                  <label class="about-label">Company | Org :</label>
                  <label class="about-label-info"><span style="color:red">* Required</span></label><br>
                  <label class="about-label">Address :</label>
                  <label class="about-label-info"><span style="color:red">* Required</span></label>
                   <div class="right">
                    <a href="{{route('edit')}}" class="btn-floating btn tooltipped waves-effect waves-light green lighten-2 black-text" data-position="top" data-delay="50" data-tooltip="edit"><i class="material-icons black-text">edit</i></a>
                  </div>
                </div>
              </li>
              <li>
                <div class="collapsible-header active"><i class="material-icons">nature_people</i>Intrests</div>
                <div class="collapsible-body">
                  <div class="chip green lighten-2"></div>
                  
                </div>
              </li>
              <li>
                <div class="collapsible-header active" >
                  <i class="material-icons">language</i>Social Accounts</div>
                <div class="collapsible-body">
                  <a class="waves-effect #3b5999 waves-light btn-floating social google" style="background-color: #dd4b39">
                      <i class="fa fa-google"></i></a>
                      <a class="waves-effect waves-light btn-floating social twitter" style="background-color: #55acee">
                      <i class="fa fa-twitter"></i></a>
                      <a class="waves-effect waves-light btn-floating social facebook" style="background-color: #3b5999">
                      <i class="fa fa-facebook"></i></a>
                      <a class="waves-effect waves-light btn-floating social instagram" style="background-color: #bc2a8d">
                      <i class="fa fa-instagram"></i></a>
                      </div>

              </li>

             
             
          </ul>

               <span style="margin-left: 25px;background-color: #ff0000ab"><a href="{{route('edit')}}" style="color:black;"><i class="fa fa-pencil" aria-hidden="true"></i> Please update Your Profile</a></span>
            </div>
     @endif
      </div>

    </div>
  </div>
</section>
<!-- End of Profile Card -->
<!-- Section 2nd / Data-section -->
<section>
  <div class="container">
    <div class="row" style="position: relative;">
    <div class="col s12">
      <ul class="tabs green lighten-2">
        <li class="tab col s3"><a href="#test1" class="black-text">Petitions</a></li>
        <li class="tab col s3"><a href="#test2" class="black-text">Survey</a></li>
        <li class="tab col s3"><a href="#test3" class="black-text">Blog</a></li>
        <li class="tab col s3">

          <a href="#test4" class="black-text">Analysis</a>

        </li>
      </ul>
    </div>
   
      <div id="test1" class="col s12">
        <div class="section">
          <div class="row-cards">
            <div class="row s12">
               <div class="center">
                <h4><b>Your <b class="green-text">Petitions</b></b></h4>
                <p>View & Edit all of your yetition form here</p>
                <br>
              </div>
              <!-- column 1 -->
     @foreach($petitions as $key => $petition)
    
         <div class="card horizontal hoverable" style="height: 200px;">
                <div class="card-image">
                  <img src="{{asset('/')}}storage/app/{{$petition->avatar}}" style="height: 200px; width: 160px">
                </div>
                <div class="card-stacked">
                  <div class="card-content"> <a href="{{route('petition.show', $petition->id)}}" class="green-text">
                    <p style="font-size: 18px;"><strong>{{$petition->title}}</strong></p></a>
                    <p style="height: 40px">{{$petition->message}}</p>
                    <br>
                    <br>
                    <div class="chip green lighten-2 hoverable black-text">
                      <i class="fa fa-thumbs-up black-text" aria-hidden="true"></i>
                      0
                    </div>
                    <div class="chip green lighten-2 hoverable black-text">
                      <i class="fa fa-comments black-text" aria-hidden="true"></i>
                       {{count($petition->comments)}}
                    </div>
                   <div class="chip green lighten-2 hoverable black-text" ">
                      <i class="fa fa-handshake-o black-text" aria-hidden="true"></i>
                      {{count($petition->signPetition)}}
                    </div>
                  </div>
                  <div class="card-action" style="position: relative;top:-30px;left:580px">
                    <a href="{{route('petition.show', $petition->id)}}" class="green-text">View Article</a>
                  </div>
                </div>
              </div>
           
            @endforeach

      </div>
          </div>
        </div>
        {{ $petitions->links('vendor.pagination.custom') }}
    </div>


    
          
    <div id="test2" class="col s12">

      <table id="table_id" class="display">
    <thead>
        <tr>
            <th>Title</th>
            <th>Modified</th>
            <th>Responce</th>
            <th>Collect</th>
            <th>Analyze</th>
            <th>Share</th>
        </tr>
    </thead>
    <tbody>
      @foreach($petitions as $key => $pet)
      @if($pet->survey->first()['petition_id'] !=  $pet->id)
      
        @else
         <tr class="td">
            <td style="padding: 24px 16px;font-size: 13px;border-bottom: 2px solid #f4f5f5;"><a href="#">{{$pet->survey->first()['title']}}</a></td>
            <td>{{ \Carbon\Carbon::parse($pet->survey->first()['created_at'])->format('d/m/Y')}}</td>
            <td><a href="#"> {{count($pet->surveyResult->first()['option_id'])}}</a></td>
            <td><a href="#"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a></td>
            <td><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i></a></td>
            <td><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></td>
        </tr>
        @endif
        @endforeach
         
    </tbody>
</table>



    </div>
    <div id="test3" class="col s12">Testw</div>

    <div id="test4" class="col s12" name="analysis">
      <div id="content" class="user_profile">

    <div class=>
<ul class="pet_list" style="display: block;">

  @foreach($petitions->slice(0, 5) as $pet)
          <li>
        <a href="/petition/dont-give-up">
          <img src="https://www.ipetitions.com/assets/v4/images/default/petitionsThumbs/11.jpg" width="100" alt="don't give up">
         
          <b>{{$pet->title}}</b>
          <i>{{count($pet->signPetitions)}}</i><br>
        </a>
      </li>
      @endforeach
         
        </ul>
      </div>
    </div>
    </div>

  </div>
  </div>
</section>
<!-- End of Section 2nd / Data-section -->
@include('frontend.layout.footer')

<script type="text/javascript">
 $(document).ready(function(){
 var cell =  $('#phone').text();
 var job =  $('#company').text();
        
        var cntvals = 0;
        var plus = 0;
        var up = 0;

       $('#phone').each(function(i, val) {
                  if($('#phone').text().length == 1){
                    
                      cntvals = 0;
                    }else {
                         cntvals = 20;
                    }
                 
        });
         $('#company').each(function(i, val) {
            if($('#company').text().length == 1)
                  {  plus = 0;
                  }else {
                    plus = 20;
                  }         
        });

          $('#job').each(function(i, val) {
           if($('#job').text().length == 1)
                  { up = 0;
                  }else {
                    up = 20;
                  } 
        });
      
        var subtotal = Number(cntvals)+Number(plus)+Number(up);
      
        $('#percentage').empty();
       
      
        $('#percentage').append(subtotal+'% completed');
        $('#percentage').width( subtotal*2 );


 
 });
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
    $('#table_id').DataTable({
     "pageLength": 6
    });
} );
</script>
</body>
</html>