<!DOCTYPE html>
<html lang="en">
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
                      Create New Post
                      
                    </h1>
                  </div><!-- /.page-header -->
                  <div class="row">
                    <div class="col-xs-12">


         <div class="row">
              <div class="col-md-8 col-md-offset-2">

              <h1>Create New Post</h1>
              <hr>

          {{-- Using the Laravel HTML Form Collective to create our form --}}
              {{ Form::open(array('route' => 'posts.store')) }}

              <div class="form-group">
                  {{ Form::label('title', 'Title') }}
                  {{ Form::text('title', null, array('class' => 'form-control')) }}
                  <br>

                  {{ Form::label('body', 'Post Body') }}
                  {{ Form::textarea('body', null, array('class' => 'form-control')) }}
                  <br>

                  {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block')) }}
                  {{ Form::close() }}
              </div>
              </div>
          </div>
      
  </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.page-content-area -->
              </div><!-- /.page-content -->
            </div><!-- /.main-content -->

@include('layout.footer')
  </body>
</html>



