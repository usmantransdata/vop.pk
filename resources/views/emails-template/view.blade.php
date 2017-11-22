<html>
@include('layouts.header')
  <!-- Content Wrapper. Contains page content -->

<head>

	<title>Email Template</title>

    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
    <!-- include summernote css/js-->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">

</head>


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Email Templates
        <small>Add new Templates</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

   <div class="container">
    <div class="row" style="margin-top: 50px">
       	<form action="{{ route('email-tmeplate-update', $template->id)}}" method="post" class="form" role="form">
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
    </div>
</div>

</form>

</div>
 

@include('layouts.footer')
</html>
