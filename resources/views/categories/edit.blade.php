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
                      Create New Category
                    </h1>
                  </div><!-- /.page-header -->
                  <div class="row">
                    <div class="col-xs-12">


         <div class="row">
              <div class="col-md-8 col-md-offset-2">

              <h1>Create New Category</h1>
              <hr>

          {{-- Using the Laravel HTML Form Collective to create our form --}}
             
               {{ Form::model($categories, array('route' => array('categories.update', $categories->id), 'method' => 'PUT')) }}

              <div class="form-group">
                   <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <label name="name">Category Name</label>
                  <input type="text" name="name" class="form-control" value="{{$categories->name}}">
                        @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                       @endif
                </div>
                  
                  <input type="submit" value="Save" class="btn btn-success pull-right">
                  
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



