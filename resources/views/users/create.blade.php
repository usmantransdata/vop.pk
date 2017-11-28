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
                      Add Users
                      <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Add Users &amp; Asign Permisions
                      </small>
                    </h1>
                  </div><!-- /.page-header -->
                  <div class="row">
                    <div class="col-xs-12">

            <div class='col-lg-4 col-lg-offset-4'>

              <h1><i class='fa fa-user-plus'></i> Add User</h1>
                        <hr>

                        {{ Form::open(array('url' => 'users')) }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                              <i class="ace-icon fa fa-envelope"></i>
                            </span>
                          </label>
                          </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                               <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                           
                              <i class="ace-icon fa fa-user"></i>
                            </span>
                          </label>
                           </div>

                        <div class='form-group'>

                    @foreach ($roles as $role)
                   <!--  {{ Form::radio('roles[]',  $role->id , array('id' => 'numb')) }}
                     {{ Form::label($role->name, ucfirst($role->name)) }}<br>
                   -->
         <div class="form-group{{ $errors->has('roles') ? ' has-error' : '' }}">       
            <div class="radio">
               <label class="form-check-inline">
     <input type="radio" name="roles[]" id="roles" value="{{$role->id}}" {{ (is_array(old('roles')) && in_array(2, old('roles'))) ? ' checked' : '' }} />{{$role->name, ucfirst($role->name)}}</label>
            </div>
             </div>
          @endforeach
             <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}"> 
                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                             <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                              <i class="ace-icon fa fa-lock"></i>
                            </span>
                          </label>
                          </div>

                         <div class="form-group">
                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                              <i class="ace-icon fa fa-retweet"></i>
                            </span>
                          </label>
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

