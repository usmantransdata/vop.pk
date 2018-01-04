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
                      All People
                      <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        overview &amp; stats
                      </small>
                    </h1>
                  </div><!-- /.page-header -->
                    <div class="main-content">
            <div class="page-content">
              <div class="page-content-area">
               

                    <div class="row">
                      <div class="col-xs-12">
                         <form method="post" action="">
                            {{csrf_field()}}
                            <div class="row">
              <!--                    @if (auth()->check())
       @if (auth()->user()->isAdmin())
                              <div>
                                  <select name="select">
                                    <option  >Bulk Actions</option>
                                    <option value="approved">Approved</option>
                                    <option value="unapproved">Unapproved</option>
                                    <option value="trash">Move To Trash</option>
                                  </select>
                                  <input type="submit" id="doaction" class="button action" value="Apply">
                              </div>
                                @endif 

@endif-->
                       <div>

                         <table id="sample-table-2" class="table table-striped table-bordered table-hover">

                        <thead>
                          <tr>

                              <th class="center">
                                <label class="position-relative">
                                   
                                  <input type="checkbox" class="ace" name="checkbox-top" />

                                  <span class="lbl"></span> 
                                 
                                </label>
                              </th>
                            <th>Name</th>
                             <th>Phone</th>
                             <th>City</th>
                             <th>Province</th>
                             <th>Country</th>
                              <th>Date of Birth</th>
                              <th>Education</th>
                              <th>Ocupation</th>
                              <th>About</th>
                              <th>Intrests</th>
                             

                             <!-- <th></th> -->
                            </tr>
                        </thead>

                        <tbody>
                             @foreach($profilePpls as $ppls)
                            <tr>

                              <td class="center">
                                <label class="position-relative">
                                  
                                  <input type="checkbox" class="ace" value="" name="input[]" />
                                  <span class="lbl"></span>
                                  
                                </label>
                              </td>

                            <td><a href="#">{{ $ppls->nick_name }}</a></td>
                            <td><a href="#">{{ $ppls->phone }}</a></td>
                            <td>{{ $ppls->city }}</td>
                            <td>{{$ppls->province}}</td>
                             <td>{{$ppls->country}}</td>
                             <td>{{$ppls->dob}}</td>
                             <td>{{$ppls->education}}</td>
                             <td>{{$ppls->occupation}}</td>
                             <td><a href="#">{{$ppls->about}}</a></td>
                             <td><a href="#">{{$ppls->interest}}</a></td>
                        	
                        </tr>
                         @endforeach    
                      </tbody>

                      </table>


                       
                  </div>
                  </div><!-- /.span -->
                </form>
                </div><!-- /.row -->

              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.page-content-area -->
        </div><!-- /.page-content -->
      </div><!-- /.main-content -->
      



                </div><!-- /.page-content-area -->
              </div><!-- /.page-content -->
            </div><!-- /.main-content -->

@include('layout.footer')

 <script src="{{ asset('/') }}public/aceadmin/assets/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('/') }}public/aceadmin/assets/js/jquery.dataTables.bootstrap.js"></script>

<script >
   jQuery(function($) {
        var oTable1 = 
        $('#sample-table-2').dataTable();
});
  $(document).on('click', 'th input:checkbox' , function(){
          var that = this;
          $(this).closest('table').find('tr > td:first-child input:checkbox')
          .each(function(){
            this.checked = that.checked;
            $(this).closest('tr').toggleClass('selected');
          });
        });
</script>
  </body>
</html>

