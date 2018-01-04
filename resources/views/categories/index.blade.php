<!DOCTYPE html>
<html lang="en">
  @include('layout.header')
  @include('layout.sidebar')
<style>

</style>
  <body class="no-skin">
          <div class="main-container" id="main-container">
            <script type="text/javascript">
              try{ace.settings.check('main-container' , 'fixed')}catch(e){}
            </script>
              <div class="page-content">
                <div class="page-content-area">
                  <div class="page-header">
                    <h1>
                      Category List
                      <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                     </small>
                    </h1>
                    <!--  <div class="col-xs-offset-9">
                      <a href="{{route('categories.create')}}">
                        <input class="btn btn-info" type="button" name="add" value="Add New">
                      </a>
                    </div> -->
                  </div><!-- /.page-header -->


         <div class="row">
              <div class="col-xs-4">

              <h3>Add New Category</h3>
              <hr>
          {{-- Using the Laravel HTML Form Collective to create our form --}}
              {{ Form::open(array('route' => 'categories.store')) }}

              <div class="form-group">
                   <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                      <label name="name">Category Name</label>
                        <input type="text" name="name" class="form-control">
                              @if ($errors->has('name'))
                                              <span class="help-block">
                                                  <strong>{{ $errors->first('name') }}</strong>
                                              </span>
                             @endif
                             <span>The name is how it appears on your site.</span>
                   </div>

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                      <label name="name">Slug</label>
                        <input readonly type="text" name="slug" class="form-control">
                             
                             <span>The “slug” is the URL-friendly version of the name.it is genrating automatically</span>
                   </div>


                      <label name="name">Description</label>
                <textarea cols="10" rows="10" type="text" name="description" class="form-control"></textarea>
                <span>The description is not prominent by default; however, some themes may show it.</span>
                   </div>
                  
                  <input type="submit" value="Save" class="btn btn-success pull-right">
                  
                  {{ Form::close() }}
             
                    </div>
                    <div class="col-xs-8 pull-right" style="margin-top:80px">
                       <form method="post" action="{{ route('comments.action')}}">
                            {{csrf_field()}}
                            <div class="row">
                          
                              <div>
                                  <select name="select">
                                    <option  >Bulk Actions</option>
                                    <option value="approved">Approved</option>
                                    <option value="unapproved">Unapproved</option>
                                    <option value="trash">Move To Trash</option>
                                  </select>
                                  <input type="submit" id="doaction" class="button action" value="Apply">
                              </div>
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
                              <th>Description</th>
                               <th>slug</th>
                               <th>Created By</th>
                               <th>Selected With</th>
                               <th></th>
                             </tr>
                        </thead>

                        <tbody>
                          @foreach ($category as $cate)
                            <tr>
                                
                              <td class="center">
                                <label class="position-relative">
                                  
                                  <input type="checkbox" class="ace" value="" name="input[]" />
                                  <span class="lbl"></span>
                                  
                                </label>
                              </td>

                            <td>{{ $cate->name }}</td>
                             <td>{{$cate->description}}</td>
                             <td>{{$cate->slug}}</td>
                             <td>{{$cate->created_by}}</td>
                             <td>{{$cate->post_id}}</td>
                             <td></td>
                           
                        </tr>
                          @endforeach
                      </tbody>

                      </table>


                       
                  </div>
                  </div><!-- /.span -->
                </form>
   
           <!--  <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-default">
                   
                    @foreach ($category as $cate)
                        <div class="panel-body">
                          <ul style="position:relative;">
                            <li style="margin:5px;list-style-type:none;display:inline-block;padding:10px;width:100px;">
                                <a href=""><b>{{ $cate->name }}</b><br>
                              </a>
                            
                            <div style="padding:0px;display:none;position:absolute;min-width:50px;max-width:300px;">
                              <a href="{{ route('categories.edit', $cate->id)}}">Edit</a><a style="margin-left: 10px;" href="#">Del</a>
                            </div>
                            </li>
                          </ul>
                        </div>
                    @endforeach
                    </div>
                    <div class="text-center">
                        
                    </div>
                </div> -->
            
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.page-content-area -->
              </div><!-- /.page-content -->
            </div><!-- /.main-content -->

@include('layout.footer')

    <script src="{{ asset('/') }}public/aceadmin/assets/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('/') }}public/aceadmin/assets/js/jquery.dataTables.bootstrap.js"></script>
<script>
 $('ul li').mouseenter(function(){
  var pos = $(this).position();
  $(this).find('div').css('top', (pos.top)+50 + 'px').fadeIn();
}).mouseleave(function(){
  $(this).find('div').fadeOut();
}); 


 jQuery(function($) {
        var oTable1 = 
        $('#sample-table-2')
        //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
        .dataTable( {
          bAutoWidth: false,
          "aoColumns": [
            { "bSortable": false },
            null, null,null, null, null,
            { "bSortable": false }
          ],
          "aaSorting": [],
         
          });
});
</script>
  </body>
</html>

