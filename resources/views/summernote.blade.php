<!DOCTYPE html>

@include('layouts.header')
<html>

<head>

	<title>Laravel 5 - Summernote Wysiwyg Editor with Image Upload Example</title>

    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />


    <!-- include summernote css/js-->

    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">

    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>

</head>

<body>

<form method="POST" action="{{ route('wysiwyg.post') }}">

    {{ csrf_field() }}

	<div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Details:</strong>

            <textarea class="form-control summernote" name="detail"></textarea>

        </div>

     </div>

     <div class="col-xs-12 col-sm-12 col-md-12 text-center">

        <button type="submit" class="btn btn-primary">Submit</button>

    </div>

</form>

</body>

 @include('layouts.footer')
<script type="text/javascript">

    $(document).ready(function() {

     $('.summernote').summernote({

           height: 300,

      });

   });

</script>

</html>