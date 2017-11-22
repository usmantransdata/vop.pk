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
                      <h1><i class='fa fa-key'></i> Edit Permissions</h1>
                     
                    </h1>
                  </div><!-- /.page-header -->
                  <div class="row">
                    <div class="col-xs-12">


      <div class='col-lg-4 col-lg-offset-4'>

           <h1><i class='fa fa-key'></i> Edit {{$permission->name}}</h1>
          <br>
          {{ Form::model($permission, array('route' => array('permissions.update', $permission->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with permission data --}}

          <div class="form-group">
              {{ Form::label('name', 'Permission Name') }}
              {{ Form::text('name', null, array('class' => 'form-control')) }}
          </div>
          <br>
          {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

          {{ Form::close() }}

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

