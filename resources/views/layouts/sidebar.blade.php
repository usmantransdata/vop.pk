
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()-> name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Admin</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active">
              <a href="{{ route('permissions.index')}}"><i class="fa fa-circle-o">
                
              </i> Permissions</a>
            </li>
            <li>
              <a href="{{route('roles.index')}}"><i class="fa fa-circle-o">
                
              </i>User Roles</a>
            </li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Posts</span>
             <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('posts.create')}}"><i class="fa fa-circle-o"></i> Create New Posts</a></li>
            <li><a href="{{ route('posts.index')}}"><i class="fa fa-circle-o"></i>All Posts</a></li>
         
          </ul>
        </li>
        <li class="treeview">
          <a href="">
            <i class="fa fa-th"></i> <span>Email Templates</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
           <ul class="treeview-menu">
            <li><a href="{{ route('create-email-template')}}"><i class="fa fa-circle-o"></i> Create New Email Template</a></li>
            <li><a href="{{ route('email-template.get')}}"><i class="fa fa-circle-o"></i>All Templates</a></li>
            <li><a href="{{ route('template-assign')}}"><i class="fa fa-circle-o"></i>Assign Templates</a></li>
         
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        
       
          </ul>
    </section>
    <!-- /.sidebar -->
  </aside>