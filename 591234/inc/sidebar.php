  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo Session::get('name'); ?></p>
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
        <li class="active">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <?php if (Session::get('level') == '0') { ?>
        <li>
          <a href="registration.php">
            <i class="glyphicon glyphicon-user"></i> <span>User </span>
          </a>
        </li>
        <?php } ?>
        <li>
          <a href="category.php">
            <i class="glyphicon glyphicon-th-list"></i><span>Category</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-clipboard"></i>
            <span>All Post</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="addpost.php"><i class="fa fa-plus-square"></i>Add Post</a></li>
            <li><a href="post_list.php"><i class="fa fa-th-list"></i>Post List</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="menu_list.php">
            <i class="fa fa-bars" aria-hidden="true"></i>
            <span>All Menu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="menu_list.php"><i class="fa fa-plus-square"></i>Add Menu</a></li>
            <li><a href="menu.php"><i class="fa fa-th-list"></i>Menu List</a></li>
          </ul>
        </li>
        <li>
          <a href="populer_list.php">
            <i class="fa fa-bars" aria-hidden="true"></i>
            <span>বাংলা জনপ্রিয় খবরের কাগজ</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        <li>
          <a href="socail.php">
            <!-- <i class="fa fa-car" aria-hidden="true"></i> -->
            <img src="upload/socail/socail.png">
            <span>Socail Media</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        <li>
          <a href="user_list.php">
            <i class="fa fa-bars" aria-hidden="true"></i>
            <span>User List</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
         <li>
          <a href="user-terms-and-conditions-add.php">
            <i class="fa fa-cog" aria-hidden="true"></i>
            <span>User Terms and Conditions</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
    <!-- Down Menu is not working --> 

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>