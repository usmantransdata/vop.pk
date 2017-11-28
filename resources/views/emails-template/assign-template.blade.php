<!DOCTYPE html>
<html lang="en">
  @include('layout.header')
  @include('layout.sidebar')
<style type="text/css">
  


.modal {
    display: none; /* Hidden by default */
     position: fixed; /*Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 5px;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
  width: 740px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}


/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.template, select, textarea {
    width: 700px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

.template_submit {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.template_submit:hover {
    background-color: #45a049;
}

</style>
  <!-- Content Wrapper. Contains page content -->
  <body class="no-skin">
          <div class="main-container" id="main-container">
            <script type="text/javascript">
              try{ace.settings.check('main-container' , 'fixed')}catch(e){}
            </script>
              <div class="page-content">
                <div class="page-content-area">
                  <div class="page-header">
                    <h1>
                      Assign Email Template
                      <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Email &amp; Template
                      </small>
                    </h1>
                  </div><!-- /.page-header -->
                  <div class="row">
                    <div class="col-xs-12">
            <div class="content-wrapper">
             
              <div id="myModal" class="modal">
          		  <!-- Modal content -->
          		  <div class="modal-content">
          		    <div class="modal-header">
          		      <span class="close">&times;</span>
          		      <h2>Add New Template</h2>
          		    </div>
          		    <div class="modal-body">
          		<form action="{{route('asign-template')}}">


                <div class="field"> 
          		    <label for="name">Name</label>
          		    <input type="text" id="input" class="template" id="name" name="name" placeholder="Template">
                 </span>
                 </div>   
          		    <label for="template">Template</label>
          		    <select id="tmeplate" class="template" name="template">
          		    	@foreach($temps as $temp)
          		      	<option value="{{$temp->id}}">{{$temp->title}}</option>
          		      	@endforeach
          		    </select>	
              
          	</div>

		    <div class="modal-footer actions">
		      <input style="float:right;background-color:#000;" id="start_button"  type="submit" class="template_submit" value="Submit">
      		  </form>
      		    </div>
      		  </div>
      	</div>

      <div style="margin-top: 50px">     
      	<button id="myBtn">Add New</button>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Name</th>
              <th>Title</th>
             
            </tr>
          </thead>
          <tbody>
          	@foreach($temps as $temp)
            <tr>
            <td>{{$temp->name}}</td>
            <td>{{$temp->title}}</td>
           
            </tr>
           	@endforeach
          </tbody>
        </table>
      </div>
         </div>
      <!-- /.row (main row) -->
   
    <!-- /.content -->

                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.page-content-area -->
              </div><!-- /.page-content -->
            </div><!-- /.main-content -->

@include('layout.footer')
 
<script>

var $input = $('#input');
var $button = $('#start_button');

setInterval(function(){
    if($input.val().length > 4){
      
        $button.attr('disabled', false);
    }else{
        $button.attr('disabled', true);
    }
}, 100);

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
