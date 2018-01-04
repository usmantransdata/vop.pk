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
                      Comments
                    </h1>
                  </div><!-- /.page-header -->
                    <div class="main-content">
            <div class="page-content">
              <div class="page-content-area">
               

                    <div class="row">
                      <div class="col-xs-12">
                         <form method="post" action="{{ route('comments.action')}}">
                            {{csrf_field()}}
                            <div class="row">
                                @if (auth()->check())
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
@endif
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

                              <th>Author</th>
                              <th>Comments</th>
                               <th>Status</th>
                              <th>In Responce To</th>
                              <th>Submited On</th>
                              <th></th>
                             

                             <!-- <th></th> -->
                            </tr>
                        </thead>

                        <tbody>
                             @foreach($comments as $comment)

                            <tr>

                              <td class="center">
                                <label class="position-relative">
                                  
                                  <input type="checkbox" class="ace" value="{{$comment->id}}" name="input[]" />
                                  <span class="lbl"></span>
                                  
                                </label>
                              </td>

                              <td>        
                              @if($comment->comments_type == 'Trash')                        
                                     <a href="#" >
                                       <p style="color:red;font-weight: bolder;">
                                 {{$comment->user['name']}}
                                     </p>
                                   </a>
                                    <a href="">
                                      <p style="color:red;font-weight: bolder;">{{$comment->user_email}}</p> 
                                    </a>
                                    @else
                                     <a href="#" >
                                       <p style="color:#008000c7;font-weight: bolder;">
                                {{$comment->user['name']}}
                                     </p>
                                   </a>
                                    <a href="">
                                      <p>{{$comment->user_email}}</p> 
                                    </a>
                                    @endif
                              </td>
                         
                            <td>{{$comment->comment}}</td>
                             <td class="hidden-480">
                               @if ($comment->comments_approved == 1)
                                  <span class="label label-sm label-success">Approved</span>
                                @else 
                                <span class="label label-sm label-warning">Unapprove</span>
                              @endif 
                              @if($comment->comments_type == 'Trash')    
                               <span class="label label-sm label-danger">Trash</span>
                               @endif
                            </td>

                            <td ><a href="{{route('posts.show', $comment->post['id'])}}"><strong>{{$comment->post['title']}}</strong></a></td>
                            <td>{{$comment->comments_date_time}}</td>

                         <td></td>
                  
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

