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
                      All Posts
                      <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}
                      </small>
                    </h1>
                  </div><!-- /.page-header -->
                  <div class="row">
                    <div class="col-xs-12">

   
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Your All Posts</h3></div>
                    <div class="panel-heading">Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</div>
                    @foreach ($posts as $post)
                        <div class="panel-body">
                            <li style="list-style-type:disc">
                                <a href="{{ route('posts.show', $post->slug ) }}"><b>{{ $post->title }}</b><br>
                                    <p class="teaser">
                                       {{  str_limit($post->body, 100) }} {{-- Limit teaser to 100 characters --}}
                                    </p>
                                </a>
                            </li>
                        </div>
                    @endforeach
                    </div>
                    <div class="text-center">
                        {!! $posts->links() !!}
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

