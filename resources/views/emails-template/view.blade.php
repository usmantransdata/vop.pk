<!DOCTYPE html>
<html lang="en">
<head>
  <title>Email Template</title>
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
    <!-- include summernote css/js-->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
</head>
  @include('layout.header')
  @include('layout.sidebar')

  <body class="no-skin">
          <div class="main-container" id="main-container">
            <script type="text/javascript">
              try{ace.settings.check('main-container' , 'fixed')}catch(e){}
            </script>
              <div class="page-content">
                <div class="page-content-area">
                  <div class="page-header">
                    <h1>
                      Dashboard
                      <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        overview &amp; stats
                      </small>
                    </h1>
                  </div><!-- /.page-header -->
                  <div class="row">
                  <div class="row" style="margin-top: 50px">
                           	<form action="" method="post" class="form" role="form">
                           		<div class="col-xs-12 col-sm-12 col-md-6">
                                <label>Title</label>
                                <input class="form-control" disabled="disabled" value="{{$template->title}}" name="title" placeholder="Title of the email" type="text" required="required"/>
                            </div>

                       	<div class="col-xs-12 col-sm-12 col-md-6">
                        
                       		<label>Subject</label>
                            <input class="form-control" disabled="disabled" name="subject" value="{{$template->subject}}" placeholder="Subject" type="text" required="required" />
                        </div>
                 

                       <div style="margin-top: 20px" >
                         

                  {{ csrf_field() }}

              	<div class="col-xs-12 col-sm-12 col-md-12">

                      <div class="form-group">

                  <label>Template</label>

                          <textarea readonly class="form-control summernote" name="template">{{$template->template}}</textarea>

                      </div>

                   </div>

                   
                          
                          </div>
                          <div >
                          	<h>
                          <button style="margin-top: 20px; margin-left: 300px;height:50px;width: 600px"	class="btn btn-success" type="submit">
                              Crear Email Template</button>
                           </div>
                          </form>
                      </h>
                 
              
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.page-content-area -->
              </div><!-- /.page-content -->
            </div><!-- /.main-content -->

@include('layout.footer')
  </body>
</html>

