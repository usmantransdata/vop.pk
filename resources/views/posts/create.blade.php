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
                  <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                  <label name="title">Title</label>
                  <input type="text" name="title" class="form-control">
                        @if ($errors->has('title'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                       @endif
                </div>
                  <br>
                   <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                  <label name="body">Post Body</label>
                  <textarea name="body" id="body" cols="50" rows="10" class="form-control"></textarea>
                    @if ($errors->has('body'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('body') }}</strong>
                                          </span>
                         @endif
                  </div>
                  <br>
                  <input type="submit" name=" Create Post" class="btn btn-success btn-lg btn-block">
                  
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



