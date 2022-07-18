<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> <?php echo $admin_name ?></p>
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
        <li class="">
          <a href="index.php?dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
        
        </li>
       
        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-tags"></i>
            <span>Product</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?product-insert"><i class="glyphicon glyphicon-tags"></i> Product Insert</a></li>
            <li><a href="index.php?product-view"><i class="glyphicon glyphicon-tags"></i> Product View</a></li>
           
          </ul>
          
        </li>
        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-book"></i>
            <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>

          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?insert_cat"><i class="glyphicon glyphicon-book"></i> Category Insert</a></li>
            <li><a href="index.php?view_cats"><i class="glyphicon glyphicon-book"></i> Category Show</a></li>

          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-edit"></i> <span>Products Categories</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?insert_p_cat"><i class="fa fa-fw fa-edit"></i> Insert Product Category</a></li>
            <li><a href="index.php?view_p_cats"><i class="fa fa-fw fa-edit"></i> View Product Category</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-gear"></i> Slides
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?insert_slide"><i class="fa fa-fw fa-gear"></i> Insert Slide</a></li>
            <li><a href="index.php?view_slides"><i class="fa fa-fw fa-gear"></i>  View Slides</a></li>
          </ul>
        </li>
        <li>
          <a href="index.php?view_customers">
            <i class="fa fa-fw fa-users"></i> View Customers
            
          </a>
        </li>
        <li>
          <a href="index.php?view_orders">
           <i class="fa fa-fw fa-book"></i> <span>View Orders</span>
            
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span> Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?insert_user"> <i class="fa fa-fw fa-users"></i> Insert User</a></li>
            <li><a href="index.php?view_users"> <i class="fa fa-fw fa-users"></i> View Users </a></li>
            <li><a href="index.php?user_profile=<?php echo $admin_id; ?>"> <i class="fa fa-fw fa-users"></i> Edit User Profile </a></li>
            
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
           <i class="fa fa-fw fa-dropbox"></i> Boxes
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?insert_box"> <i class="fa fa-fw fa-users"></i> Insert Box</a></li>
            <li><a href="index.php?view_boxes"> <i class="fa fa-fw fa-users"></i> View Box </a></li>
          
          </ul>
        </li>
          
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
        <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> <span>Logout</span></a></li>
      
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

