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
                   <h1>{{ $post->title }}</h1>
                   
                  </div><!-- /.page-header -->
                  <div class="row">
                    <div class="col-xs-12">
          <div class="container">

              <h1>{{ $post->title }}</h1>
              <hr>
              <p class="lead">{{ $post->body }} </p>
              <hr>
              {!! Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post->id] ]) !!}
              <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
              @can('Edit Post')
              <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
              @endcan
              @can('Delete Post')
              <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i>
              </button>
              @endcan
              {!! Form::close() !!}
          </div>
   </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.page-content-area -->
              </div><!-- /.page-content -->
            </div><!-- /.main-content -->

@include('layout.footer')
  </body>
</html>
