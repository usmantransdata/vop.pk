
<!DOCTYPE html>
<html>
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
                      <h1><i class='fa fa-key'></i> Available Permissions</h1>
                      <small>
                         <a href="{{ url()->previous() }}"><i class="fa fa-backward" aria-hidden="true"></i>Back</a>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Available &amp; Permissions

                      </small>


                    </h1>

                  </div><!-- /.page-header -->
                  
                  <div class="row">

                    <div class="col-xs-12">
    
            <div class="col-lg-10 col-lg-offset-1">
                <h1><i class="fa fa-key"></i>Available Permissions

                <a href="{{ route('users.index') }}" class="btn btn-default pull-right">Users</a>
                <a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Roles</a></h1>
                <hr>
                <div class="table-responsive">
                    <table style=background-color:#ccc; class="table table-bordered table-striped">

                        <thead>
                            <tr>
                                <th>Permissions</th>
                                <th>Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permissions as $permission)
                            <tr>
                                <td>{{ $permission->name }}</td> 
                                <td>
                                <a href="{{ URL::to('permissions/'.$permission->id.'/edit') }}" class="btn btn-info" >Edit</a>

                        {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}
                          {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                          {!! Form::close() !!}
                               
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <a href="{{ URL::to('permissions/create') }}" class="btn btn-success">Add Permission</a>

            </div>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.page-content-area -->
  </div><!-- /.page-content -->
</div><!-- /.main-content -->

   
@include('layout.footer')
</body>
</html>



