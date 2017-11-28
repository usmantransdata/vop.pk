 @include('layout.header')
  @include('layout.sidebar')
<head>
   <!-- include summernote css/js-->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
</head>

<body class="no-skin">
          <div class="main-container" id="main-container">
            <script type="text/javascript">
              try{ace.settings.check('main-container' , 'fixed')}catch(e){}
            </script>
              <div class="page-content">
                <div class="page-content-area">
                  <div class="page-header">
                    <h1>
                      Add New Eail Template
                    </h1>
                  </div><!-- /.page-header -->
                  <div class="row">
                    <div class="col-xs-12">
                       <div class="content-wrapper">
                          <!-- Content Header (Page header) -->
                           <h1>
                      New Template
                    </h1>
                          <div class="row">
                             	<form action="{{ route('email-tmeplate.post')}}" method="post" class="form" role="form">
                             		<div class="col-xs-12 col-sm-12 col-md-6">
                                  <label>Title</label>
                                  <input class="form-control" name="title" placeholder="Title of the email" type="text" required="required"/>
                              </div>
                             	<div class="col-xs-12 col-sm-12 col-md-6">
                             		<label>Subject</label>
                                  <input class="form-control" name="subject" placeholder="Subject" type="text" required="required" />
                              </div>
                               <div style="margin-top: 20px" >
                          {{ csrf_field() }}
                    	<div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Email Template</label><br>
                               
                                <textarea class="form-control summernote" id="textarea" name="template"></textarea>
                            </div>

                         </div>
                      </div>
                    		<div>

             <button  style="margin-top: 20px; margin-left: 300px;height:50px;width: 600px" id="start_button" 	class="btn btn-success" type="submit" value="Creat Email Template"><span style="color: red;font-weight: bold">template must be above then 50 words</span></button>
                            </div>
                        </form>
                </div>
            </div>

            </div>
       </div><!-- /.col -->

</div>
</div>
</div>

                 
@include('layout.footer')
<script>
var $input = $('#textarea');
var $button = $('#start_button');

setInterval(function(){
    if($input.val().length > 40){
      
        $button.attr('disabled', false);
        $button.text('Creat Email Template');
        
    }else{
        $button.attr('disabled', true);
        
        
    }
});
  </script>
  </body>

</html>

