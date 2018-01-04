<!DOCTYPE html>
<html>
@include('frontend.layout.header')
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/ui-lightness/jquery-ui.css" />
   
<!--END OF NAVBAR-->
<!-- full page blog section -->
<style type="text/css">
.hide{
    display:none;
}  
</style>
<br>
<br>
<div class="container">
  <div class="row">
       <center>
        <div class="row">
          <label>Petition To: </label>

      @if (!empty($dm))
          @foreach($dm as $dm)
               <span class="red-text" style="font-weight: bolder;">{{$dm->company}}<b>,</b></span>
           @endforeach
      @endif
      <br>
     
        @if(empty($petition->categories_id))
         <label><strong class="blak-text">Category</strong></label> 
         <span class="green-text" style="font-weight: bolder;">{{$petition->category_id}}<b>,</b></span>
       
         @endif


          <h4>{{$petition->title}}</h4>
          @if($user != '')
          <h5 class="gray-text">Writer : {{$user->nick_name}}</h5>
          <img src="{{asset('/')}}/storage/app/{{$user->avatar}}" style="height: 50px; width: 50px; border-radius: 50%;">
          @else
          <div class="alert alert-danger">

            <div class="card-content red-text">
                  <span><strong>Alert!</strong> Please Upgrade your profile ! it seems you didn't updated yet.</span>
                      </div>
            
          </div>
          @endif
        </div>
      </center>

    <div class="col m8">
    <!-- card petition -->
        <div class="card">
            <div class="card-image">
              <img src="{{asset('/')}}/storage/app/{{$petition->avatar}}" style="height: 400px;">
              <span class="card-title blue-grey darken-4" style="width: 100%">
           {{ Carbon\Carbon::parse($petition->created_at)->diffForHumans() }}
              </span>
            </div>
            <div class="card-content">
              <p>{{$petition->message}}</p>
            </div>
           <hr>
               <strong>People Sign this Petition</strong>
              <i class="fa fa-hand-o-down" aria-hidden="true"></i>
               <div class="card-action" style="overflow: auto;height: auto;">

    @foreach($petition->signPetition as $p)
   
    @if($loop->index < 8)
  
    <div class="chip blue-grey darken-1 white-text" style="height:30px;width:90px">
      <ul>
         <li style="margin-top: -15px;">
           @if ($p != '')
         <i class="fa fa-user-o" aria-hidden="true"> {{$p->user_name}}</i>
          @endif
        </li>
     
        </ul> 
     </div>   
     @endif
     @if($loop->index > 7)
    
     <div class="after chip blue-grey darken-1 white-text" style="height:30px;width:90px">
      <ul >
         <li style="margin-top: -15px;">
           @if ($p != '')
         <i class="fa fa-user-o" aria-hidden="true"> {{$p->user_name}}</i>
          @endif
        </li>
     
        </ul> 
     </div>   
        @endif
  @endforeach 
 
    <div style="position:relative;right:10px;top: 10px;right:20px;">
    <a class="load_more pull-right" style="cursor: pointer" id="seemore">See More</a>
    </div>
   </div>
  </div>
          <!-- card ends -->
          <!-- comments Section -->

          <section>
            <div class="row">
              <div class="col m12">.
              
                <ul class="collapsible" data-collapsible="accordion">
                  <li>
                     @foreach($comments as $commnt)
@if ($commnt->comments_approved == 1)
                    <div class="collapsible-header active">
                      <div class="chip blue-grey darken-1 white-text">
                        @if($user != '')
                        <img src="{{asset('/')}}/storage/app/{{$user->avatar}}">
                           @endif
                      {{auth::user()->name}}

                      </div>
                       <span>
                         {{ Carbon\Carbon::parse($commnt->created_at)->diffForHumans() }}
                     
                    </span>
                      <br>
                      <span class="center blak-text">{{$commnt->comment}} </span>
                      <i class="material-icons right">thumb_up</i>
                    </div>
                     @endif      
        @endforeach
                  </li>
                
                </ul>
               
              </div>
            </div>
              <form action="{{ route('frontendComments.comment', $petition->id) }}" method="POST">
               {{ csrf_field() }}
                  
                 


            <div class="input-field col s10 offset-m1">
              <input required="required" name="comments" id="first_name" type="text" class="validate">
              <label for="first_name" class="blak-text" style="font-size: 16px">Leave Comment</label>
            </div>
            <br>
            <div class="col s12 offset-m1">
              <button type="submit" class="btn btn-flat waves-effect waves-light black-text orange accent-2">
                Post
              </button>


            </div>
          </form>
          </section>
          <!--  end comments Section -->
    </div>
   
    <div class="col m4">
       @if(!$signpetition['recordfound']>0)
      <div class="card blue-grey darken-4">
         <form id="submissions-form" action="{{route('sign.create', $petition->id)}}" method="post">   
               {{csrf_field()}}
            <div class="card-content white-text">
              <span class="card-title"><strong>Sign<strong class="green-text"> Petition</strong></strong></span>
              <textarea id="textarea1" name="answer" class="materialize-textarea" data-length="120"></textarea>
            </div>
            <div class="card-action">
              <!-- <a href="#" class="green-text">Submit</a> -->
              <a href="#">
            <button class="waves-effect waves-green btn-flat N/A transparent white-text" style="border:2px solid white;">Sign</button>
          </a>
            </div>
          </form>
          </div>
          @else
           <div class="card blue-grey darken-4">
         
            <div class="card-content white-text">
              <span class="card-title"><strong>You Sign This<strong class="green-text"> Petition</strong></strong></span>
              <span>Goal: 1000</span> <br>
              <span> Total Signature {{count($petition->signPetition)}}</span>
            </div>
         </div>
         @endif
         @if($survey->option1 == 'short')
            <form action="{{route('survey-result')}}" method="POST">
        {{csrf_field()}}
            <div class="card blue-grey darken-4">
                  <div class="card-content white-text">
                    <span class="card-title green-text"><strong>{{$survey->title}}</strong></span>
                    <span class="card-title"><strong>{{$survey->question}}</strong></span>

                    <input name="radio" type="text" id="radio-1"/>
                    <label for="radio-1" class="white-text">Short Answer</label><br>
                  </div>
                  <div class="card-action">
                    <!-- <a href="#" class="green-text">Submit</a> -->
                    <a href="#">
                  <button class="waves-effect waves-green btn-flat N/A transparent white-text" style="border:2px solid white;">Submit</button>
                </a>
                  </div>
             </div>
       </form> 
         @endif
         @if($survey->option1 == 'paragraph')
            <form action="{{route('survey-result')}}" method="POST">
        {{csrf_field()}}
            <div class="card blue-grey darken-4">
                  <div class="card-content white-text">
                    <span class="card-title green-text"><strong>{{$survey->title}}</strong></span>
                    <span class="card-title"><strong>{{$survey->question}}</strong></span>

                    <input name="radio" type="text" id="radio-1"/>
                    <label for="radio-1" class="white-text">Long Text Answer</label><br>
                  </div>
                  <div class="card-action">
                    <!-- <a href="#" class="green-text">Submit</a> -->
                    <a href="#">
                  <button class="waves-effect waves-green btn-flat N/A transparent white-text" style="border:2px solid white;">Submit</button>
                </a>
                  </div>
             </div>
       </form> 
       @else
       <?php $options = unserialize($survey->option1);

       ?>
       <form action="{{route('survey-result')}}" method="POST">
        {{csrf_field()}}
            <div class="card blue-grey darken-4">
                  <div class="card-content white-text">
                    <span class="card-title green-text"><strong>{{$survey->title}}</strong></span>
                    <span class="card-title"><strong>{{$survey->question}}</strong></span>
                      @foreach($options as $option)
                    <input name="radio" type="radio" id="{{$option}}" value="option[]" />
                    <label for="{{$option}}" class="white-text">{{$option}}<br></label>
                      @endforeach
                    <br>
                  </div>
                  <div class="card-action">
                    <!-- <a href="#" class="green-text">Submit</a> -->
                    <a href="#">
                  <button class="waves-effect waves-green btn-flat N/A transparent white-text" style="border:2px solid white;">Submit</button>
                </a>
                  </div>
             </div>
       </form> 
         @endif
    </div>

  </div>
</div>            <!-- Modal -->


<style>
    .pb-cmnt-container {
        font-family: Lato;
        margin-top: 100px;
    }

    .pb-cmnt-textarea {
        resize: none;
        padding: 20px;
        height: 130px;
        width: 100%;
        border: 1px solid;
    }
</style>

<!--model end -->
      <div class="modal-body">
        ...
      </div>
      
    </div>
  </div>
</div>

<!-- end full page blog section -->
@include('frontend.layout.footer')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js" type="text/javascript"></script>


<script>
$('.after').css('display', 'none')
$( "#seemore" ).click(function(){
     $('.after').css('display', 'block');
}); 
</script>

<script type="text/javascript">

$(document).ready(function() {
$('div#thedialog').dialog({ 
  autoOpen: false,
  height: 300,
  width:400,

})
$('#thelink').click(function(){ $('div#thedialog').dialog('open'); });
})
    </script>

  <!--   <script type="text/JavaScript">
      setTimeout("location.href = 'http://localhost/vop/index.php/frontend-profile';",10500);
 </script> -->
</body>
</html>