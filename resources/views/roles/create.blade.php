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
                    Add Role
                      <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Add Role &amp; Assign Permissions
                      </small>
                    </h1>
                  </div><!-- /.page-header -->
                  <div class="row">
                        <div class="col-xs-12">
             <div class='col-lg-4 col-lg-offset-4'>

              <h1><i class='fa fa-key'></i> Add Role</h1>
              <hr>

              {{ Form::open(array('url' => 'roles')) }}

              <div class="form-group">
                  {{ Form::label('name', 'Name') }}
                  {{ Form::text('name', null, array('class' => 'form-control')) }}
              </div>

              <h5><b>Assign Permissions</b></h5>

              <div class='form-group'>
                  @foreach ($permissions as $permission)
                      {{ Form::checkbox('permissions[]',  $permission->id ) }}
                      {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>

                  @endforeach
              </div>

              {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

              {{ Form::close() }}

          </div>

        
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.page-content-area -->
              </div><!-- /.page-content -->
            </div><!-- /.main-content -->

@include('layout.footer')
  </body>
</html>
