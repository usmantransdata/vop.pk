<!DOCTYPE html>
<html>
@include('frontend.layout.header')
<!--END OF NAVBAR-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
 

<!--PARALAX SECTION-->
<br>
<div class="container" style="padding-top: 120px">

  <div class="row">
      <div class="row">
        <div class="col s12">
          <h3>Create a Petition</h3>
          <p>Create a powerful online petition in just minutes. Our system is flexible, customizable, and easy to use. Best of all, it's free!
          Start by filling out this form, and in a few minutes you'll be ready to collect thousands of signatures.</p>
        </div>
      </div>
    <form class="col s12" method="POST" action="{{ route('petition.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
          <div class="row">
              <div class="input-field col s6">
                <i class="material-icons prefix">mode_edit</i>
                <input name="title" required="required" placeholder="Something catchy and not too long" id="icon_prefix" type="text" class="validate">
                <label for="icon_prefix" style="font-size: 17px">Petition Title</label>
              </div>
            </div>

             <div class="row">
              <div class="input-field col s6">
                <i class="material-icons prefix">description</i>
               
                 <textarea name="description" id="textarea1" class="materialize-textarea validate"></textarea>
                <label for="textarea1" style="font-size: 17px">Description</label>
              </div>
            </div>

          <div class="row">
              <div class="input-field col s1">
                <i class="material-icons prefix">wc</i>
              </div>
                 <div class="input-field col s5" style="position: relative;right: 20px">
                <select class="selectpicker" style="outline: none" id="tag_list" name="tag_list[]" multiple></select> 
                 </div>
            </div>
            <br>
             <div class="row" style="width:450px;overflow: auto;">
              <div class="input-field col s6" >
                <i class="material-icons prefix">filter_list</i>

                 @foreach($category as $cat)
            
                <input type="checkbox" id="test{{$cat->id}}" name="category[]" value="{{$cat->name}}" />
                <label for="test{{$cat->id}}">{{$cat->name}}</label>
           
               @endforeach
              </div>

            </div>
            <br>
            <br>
            <br>

          <div class="row">
              <div class="input-field col s6">
                <i class="material-icons prefix">sentiment_very_dissatisfied</i>
                  <textarea name="message" required="required" placeholder="Describe the people involved and the problem they are facing" id="textarea1 icon_prefix" class="materialize-textarea validate wysiwyg"></textarea>
                <label for="icon_prefix" style="font-size: 17px">Explain The Problem You Want To Solve</label>
              </div>
            </div>
            <div class = "row">
              <div class="col s6">
                 <label style="font-size: 17px">Upload Relevent Image</label>
                 <div class = "file-field input-field">
                    <div class = "btn-flat waves-effect waves-light green lighten-2 black-text">
                       <span>Browse</span>
                       <input name="avatar" type = "file" />
                    </div>
                    
                    <div class = "file-path-wrapper">
                       <input class = "file-path validate" type = "text"
                          placeholder = "Upload Image / Video" />
                    </div>
                 </div>
              </div>
            </div>
            <div class="row">
              <div class="col s4">
                <button type="submit" class="btn-flat waves-effect waves-light green lighten-2 black-text" name="petition">Create Petition</button>
              </div>

               <div class="col s4">
                <button type="submit" class="btn-flat waves-effect waves-light green lighten-2 black-text" name="petition_survey">Create Petition & Survey</button>
              </div>
            </div>

    </form>
  </div>
</div>

<!--FOOTER-->
<!-- footer -->
 @include('frontend.layout.footer')
<!-- js here -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.6/jquery.tagsinput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
  <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script> -->
<!--  <script type="text/javascript">
  $( document ).ready(function() {
    
    $('#autocomplete-input').keypress(function() {
       var dataCountry = {};
      var name = $('.input').val();

           $.ajax({
            url: '{{route("/find")}}',
            dataType: "json",
            type: "GET",
           data: {q:name},

           success: function (response) {
           
            for(var i=0;i<response.length;i++){
              //alert(myArray[0].text);
                window.dataCountry = response[i].id; //countryArray
                //alert(response[i].id);
            }
        }
       });       
   });
     $('#autocomplete-input').material_chip({
           autocompleteOptions: {
      data: window.dataCountry
    }
              });
   });

</script> -->
</script>
<!-- <script type="text/javascript">
    $('#autocomplete-input').autocomplete({
      source : '{{route("/find")}}',
      minlenght:1,
      autoFocus:true,
      select:function(e,ui){
        alert(ui);
      }
    });
</script> -->
 <script type="text/javascript">
  $('#tag_list').select2({
    tags: true,
    placeholder: "Decision Maker",
    ajax: {
        url: '{{route("/find")}}',
        dataType: 'json',
        data: function (params) {
            return {
                q: $.trim(params.term)
            };
        },
        processResults: function (data) {
            return {
                results: data
            };
        },
        cache: true
    }
});
</script>

</body>
</html>