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
                     <h1><i class='fa fa-key'></i> Add Permission</h1>
                     
                    </h1>
                  </div><!-- /.page-header -->
                  <div class="row">
                    <div class="col-xs-12">

   
            <div class='col-lg-4 col-lg-offset-4'>

              <h1><i class='fa fa-key'></i> Add Permission</h1>
              <br>

              {{ Form::open(array('url' => 'permissions')) }}

              <div class="form-group">
                   <div class="{{ $errors->has('name') ? ' has-error' : '' }}">
                      <label name="name"></label>
                      <input type="text" name="name" id="name" class="form-control" >
                       @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                      @endif
                    </div>                      
                 
              </div><br>
              @if(!$roles->isEmpty()) //If no roles exist yet
                  <h4>Assign Permission to Roles</h4>

                  @foreach ($roles as $role) 
                      {{ Form::checkbox('roles[]',  $role->id ) }}
                      {{ Form::label($role->name, ucfirst($role->name)) }}<br>

                  @endforeach
              @endif
              <br>
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

