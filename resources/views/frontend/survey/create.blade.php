<!DOCTYPE html>
<html>
@include('frontend.layout.header')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet"/>

<!--END OF NAVBAR-->
<!-- slider -->
<div class="slider">
    <ul class="slides">
      <li>
        <img src="{{ asset('/') }}public/frontend/images/banner-1.png" style="opacity: 0.2">
        <div class="caption left-align">
          <h4 class="black-text">Easily Create, Send And Analyze Surveys</h4>
          <h5 class="light black-text text-lighten-3">We've Got Templates For All Types Of Questions</h5>
          <br>
          <a href="#">
            <button class="waves-effect waves-light btn-flat black white-text">Survey</button>
          </a>
          <a href="how-to.html">
            <button class="hide-on-med-and-down waves-effect waves-light btn-flat green white-text">How To</button>
          </a>
        </div>
      </li>
      <li>
        <img src="{{ asset('/') }}public/frontend/images/banner-1.png" style="opacity: 0.2">
        <div class="caption right-align">
          <h4 class="black-text">Easily Create, Send And Analyze Surveys</h4>
          <h5 class="light black-text text-lighten-3">We've Got Templates For All Types Of Questions</h5>
          <br>
          <a href="#">
            <button class="waves-effect waves-light btn-flat black white-text">Templates</button>
          </a>
          <a href="how-to.html">
            <button class="hide-on-med-and-down waves-effect waves-light btn-flat green white-text">How To</button>
          </a>
        </div>
      </li>
      
    </ul>
  </div>
  <!-- end Slider --> 

<!--PARALAX SECTION-->
<br>
<div class="container">
  <div class="row">
    <!-- left section -->
    <div class="col m12">
      <div class="card hoverable">
        <div class="card-content black-text">
          <span class="card-title black-text">Easily Create, Send And Analyze Surveys
          </span>
          <p>Finally, it's important to remember that you've got one of the most powerful activism tools ever invented.<br>Now Easily Create, Send And Analyze Surveys</p>
        </div>
      </div>
      <br><br>

      <!-- form of survey -->
         <form class="col s8" method="POST" action="{{ route('survey-create') }}" enctype="multipart/form-data">
          {{csrf_field()}}
          <input type="hidden" name="petition_last_id" value="{{$last_id}}">
                <div class="col m12">
                  <input type="text" placeholder="Survey Title" name="title" >
                 </div>
                 <div class="col m8">
                  <input type="text" placeholder="Question" name="question" >
                 </div>
                 <div class="col m4" style="margin-top: 20px">
                 <select id="selectBox" class="form-control">
                  <option>Chose Survey</option>
                    <option value="short" data-icon="fa-sort-amount-desc">Short Answer</option>
                     <option value="paragraph" data-icon="fa-paragraph">Paragraph</option>
                     <option value="multi" data-icon="fa-circle">Multi Choice</option>
                    </select>
                 </div>

              <div id="outputArea"></div>
     

      <br>
      <br>

      <!-- end of form of survey -->
    </div>

    <!-- end of left section -->

    <!-- Right section -->
   <!--  <div class="col m4">
      <div class="card hoverable">
        <div class="card-content black-text">
          <span class="card-title black-text">We've Got Templates For All Types Of Questions
          </span>
          <p>Finally, it's important to remember that you've got one of the most powerful activism tools ever invented.<br>Now Easily Create, Send And Analyze Surveys</p>
        </div>
        <div class="card-action">
          <a href="#" class="green-text">View</a>
        </div>
      </div>
    </div> -->
    <!-- End of right section -->
    <br>
    <br>
    <br>
        <div class="col m8 pull-right">
          <a href="#">
            <button type="submit" class="waves-effect waves-green btn-flat N/A transparent black-text" style="border:2px solid black;">Publish</button>
          </a>
        </div>
         </form>
  </div>
 
</div>

<!--FOOTER-->
<!-- footer -->

 @include('frontend.layout.footer')
<!-- js here -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script type="text/javascript">
 $("#selectBox").change(function() {
  var htmlString = "";
  var len = $(this).val();
  if(len == 'short'){
    htmlString += "<input type='text' name='short' readonly class='validate' placeholder='Short answer text'>";
  }
  if(len == 'paragraph'){
    htmlString += "<textarea readonly type='text' name='paragraph' class='materialize-textarea' placeholder='Long answer text'></textarea>";
      }
    if(len == 'multi'){
        htmlString += '<div id="field" class="input_fields_wrap col m8"><input class="input" id="field1" name="option[]" type="text"/></div><div id="field2" class="col m4" style="margin-top:20px"><input type="button" onclick="myFunction()"class="btn add-more"  value="+">';
    }


  $("#outputArea").html(htmlString);
});


$(document).ready(function() {

  function iformat(icon) {
    var originalOption = icon.element;
    return $('<span><i class="fa ' + $(originalOption).data('icon') + '"></i> ' + icon.text + '</span>');
}
  $("#selectBox").select2({
     templateSelection: iformat,
    templateResult: iformat,
    allowHtml: true

  });
});

</script>

<script>
function myFunction() {
   var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add-more"); //Add button ID
    var x = 1;


        if(x < max_fields){ //max input box allowed
            x++; //text box increment
           var num = 0;
           num++;
            $('.input').attr("placeholder", "Option "+num);
            $(wrapper).append('<div class="col m12"><input class="input" type="text" name="option[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box

        }
   
$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })

}
</script>
</body>
</html>