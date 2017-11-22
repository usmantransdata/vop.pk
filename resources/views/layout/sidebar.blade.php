 <!DOCTYPE html>
 <html>
 <body>
 
 </body>
 </html>

 <div id="sidebar" class="sidebar responsive">
  
        <script type="text/javascript">
          try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
        </script>
     <ul class="nav nav-list">
          <li class="active">
            <a href="index.html">
              <i class="menu-icon fa fa-tachometer"></i>
              <span class="menu-text"> Dashboard </span>
            </a>

            <b class="arrow"></b>
          </li>

          <li class="">
            <a href="#" class="dropdown-toggle">
              <i class="menu-icon fa fa-desktop"></i>
              <span class="menu-text"> Admin </span>

              <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b><ul class="submenu"><li class="">
                <a href="#" class="dropdown-toggle">
                  <i class="menu-icon fa fa-caret-right"></i>
                  ACL Permissions
                  <b class="arrow fa fa-angle-down"></b>
                </a>
                <b class="arrow"></b>
                <ul class="submenu">
                  <li class="">
                    <a href="{{ route('permissions.index')}}">
                      <i class="menu-icon fa fa-caret-right"></i>
                      Permissions
                    </a>

                    <b class="arrow"></b>
                  </li>

                  <li class="">
                    <a href="{{route('roles.index')}}">
                      <i class="menu-icon fa fa-caret-right"></i>
                     User Roles
                    </a>

                    <b class="arrow"></b>
                  </li>

                   <li class="">
                    <a href="{{route('users.index')}}">
                      <i class="menu-icon fa fa-caret-right"></i>
                     Users
                    </a>

                    <b class="arrow"></b>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="#" class="dropdown-toggle">
              <i class="menu-icon fa fa-pencil-square-o"></i>
              <span class="menu-text"> Articals </span>
              <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
              <li class="">
                <a href="{{ route('posts.create')}}">
                  <i class="menu-icon fa fa-caret-right"></i>
                  Add New Artical
                </a>
                <b class="arrow"></b>
              </li>

              <li class="">
              <a href="{{ route('posts.index')}}">
                  <i class="menu-icon fa fa-caret-right"></i>
                 Articals
                </a>

                <b class="arrow"></b>
              </li>
            </ul>
          </li>

          <li class="">
            <a href="#" class="dropdown-toggle">
              <i class="menu-icon fa fa-envelope-o"></i>
                    <span class="menu-text">
                      Email Templates
                    </span>
              <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
              <li class="">
               <a href="{{ route('create-email-template')}}">
                  <i class="menu-icon fa fa-caret-right"></i>
                 Add New Template
                </a>
                <b class="arrow"></b>
              </li>
              <li class=""><a href="{{ route('email-template.get')}}">
                  <i class="menu-icon fa fa-caret-right"></i>
                 All Templates
                </a>
                <b class="arrow"></b>
              </li>
              <li class="">
               <a href="{{ route('template-assign')}}">
                  <i class="menu-icon fa fa-caret-right"></i>
                 Assign Templates
                </a>
                <b class="arrow"></b>
              </li>
            </ul>
          </li>
        </ul><!-- /.nav-list -->

        <!-- #section:basics/sidebar.layout.minimize -->
        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
          <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>

        <!-- /section:basics/sidebar.layout.minimize -->
        <script type="text/javascript">
          try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
        </script>
      </div>

      <!-- /section:basics/sidebar -->
      <div class="main-content">
        <!-- #section:basics/content.breadcrumbs -->
        <div class="breadcrumbs" id="breadcrumbs">
          <script type="text/javascript">
            try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
          </script>

          <ul class="breadcrumb">
            <li>
              <i class="ace-icon fa fa-home home-icon"></i>
              <a href="#">Home</a>
            </li>
            <li class="active">Dashboard</li>
          </ul><!-- /.breadcrumb -->

          <!-- #section:basics/content.searchbox -->
          <div class="nav-search" id="nav-search">
            <form class="form-search">
              <span class="input-icon">
                <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                <i class="ace-icon fa fa-search nav-search-icon"></i>
              </span>
            </form>
          </div><!-- /.nav-search -->
          <!-- /section:basics/content.searchbox -->
        </div>

          <div class="main-container" id="main-container">
            <script type="text/javascript">
              try{ace.settings.check('main-container' , 'fixed')}catch(e){}
            </script>
            <!-- #section:basics/sidebar -->
           <!-- /section:basics/content.breadcrumbs -->
              <div class="page-content">
                <!-- #section:settings.box -->
                <div class="ace-settings-container" id="ace-settings-container">
                  <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                    <i class="ace-icon fa fa-cog bigger-150"></i>
                  </div>
                  <div class="ace-settings-box clearfix" id="ace-settings-box">
                    <div class="pull-left width-50">
                      <!-- #section:settings.skins -->
                      <div class="ace-settings-item">
                        <div class="pull-left">
                          <select id="skin-colorpicker" class="hide">
                            <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                            <option data-skin="skin-4" value="#38d6a4">#38d6a4</option>
                            <option data-skin="skin-5" value="#0a06ad">#0a06ad</option>
                            <option data-skin="skin-6" value="#f10b3e">#f10b3e</option>
                          </select>
                        </div>
                        <span>&nbsp; Choose Skin</span>
                      </div>
                      <!-- /section:settings.skins -->
                      <!-- #section:settings.navbar -->
                      <div class="ace-settings-item">
                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
                        <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                      </div>
                      <!-- /section:settings.navbar -->
                      <!-- #section:settings.sidebar -->
                      <div class="ace-settings-item">
                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                        <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                      </div>
                      <!-- /section:settings.sidebar -->
                      <!-- #section:settings.breadcrumbs -->
                      <div class="ace-settings-item">
                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
                        <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                      </div>
                      <!-- /section:settings.breadcrumbs -->

                      <!-- #section:settings.rtl -->
                      <div class="ace-settings-item">
                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                        <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                      </div>

                      <div class="ace-settings-item">
                  <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
                  <label class="lbl" for="ace-settings-add-container">
                    Inside
                    <b>.container</b>
                  </label>
                </div>
</div><!-- /.pull-left -->
  <div class="pull-left width-50">
                <!-- #section:basics/sidebar.options -->
                <div class="ace-settings-item">
                  <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />
                  <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                </div>

                <div class="ace-settings-item">
                  <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />
                  <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                </div>

                <div class="ace-settings-item">
                  <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />
                  <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                </div>

                <!-- /section:basics/sidebar.options -->
              </div><!-- /.pull-left -->
                  
 </div><!-- /.ace-settings-box -->
 </div><!-- /.ace-settings-container -->
</div>