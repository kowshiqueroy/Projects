<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
   
    <!-- jvectormap -->
    <!-- Daterange picker -->
    <!-- Theme style -->
    <link href="dist/css/dashboard.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
   

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo"><b>Store</b>Man</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="">
                <a href="#"  data-toggle="dropdown">
                
                  <span class="">Email</span>   <span class="">|</span> <span class="">UserType</span><span class="">|</span> <span class="">Log Out</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
              
                    <div class="pull">
                      <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            
            <div class="pull-left info">
              <p>Email</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
        
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="dashboardadmin.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
              </a>
             
            </li>

            <li class="treeview">
              <a href="dashboardadmin.php">
                <i class="fa fa-dashboard"></i> <span>Stock</span> 
              </a>
             
            </li>

            
            <li class="treeview">
              <a href="dashboardadmin.php">
                <i class="fa fa-dashboard"></i> <span>Stock In</span> 
              </a>
             
            </li>

            <li class="treeview">
              <a href="dashboardadmin.php">
                <i class="fa fa-dashboard"></i> <span>Stock Out</span> 
              </a>
             
            </li>


            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Item Name</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i>Add Item Name</a></li>
                <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>View Item Name</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Add Category Name</a></li>
                <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i>View Category Name</a></li>
              </ul>
            </li>
            <li>




            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Work Order</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i>Add Work Order</a></li>
                <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>View Work Order</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Modify Work Order</a></li>
              </ul>
            </li>
            <li>


            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Floor Order</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i>Add Floor Order</a></li>
                <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>View Floor Order</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Modify Floor Order</a></li>
              </ul>
            </li>
            <li>


            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Production Set</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i>Add Production Set</a></li>
                <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>View Production Set</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Modify Production Set</a></li>
              </ul>
            </li>
            <li>



            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Requision Order</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i>Add Requisition</a></li>
                <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>View Requisition</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Modify Requisition</a></li>
              </ul>
            </li>
            <li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Purchase Order</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i>Add Purchase Order</a></li>
                <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>View Purchase Order</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Modify Purchase Order</a></li>

                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Submit Purchase</a></li>
              </ul>
            </li>
            <li>

            <li class="treeview">
              <a href="dashboardadmin.php">
                <i class="fa fa-dashboard"></i> <span>QC Approval</span> 
              </a>
             
            </li>



            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Report</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i>Add Purchase Order</a></li>
                <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>View Purchase Order</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Modify Purchase Order</a></li>

                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Submit Purchase</a></li>
              </ul>
            </li>
            <li>


            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Distribution</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i>Product In</a></li>
                <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>Product Out</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Product Stock</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Product Data</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Add Product Name</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>In From</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Out To</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>In Report</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Out Report</a></li>
              </ul>
            </li>
            <li>


            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Sales</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i>Product In</a></li>
                <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>Product Out</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Product Stock</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Product Data</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Add Product Name</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>In From</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Out To</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Daily Report</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Monthly Report</a></li>
              </ul>
            </li>
            <li>



            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Transport</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i>Item In</a></li>
                <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>Item Out</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Item Stock</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Item Data</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Add Item Name</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>In From</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Out To</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>In Report</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Out Report</a></li>
              </ul>
            </li>
            <li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>HR</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i>Add Employee</a></li>
                <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>View Employees</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Modify Emplyee</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Generate ID</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Job Post</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>View Job Post</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Modify Job Post</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Job Post Apllications</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Add Notice</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>View Notice</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Modify Notice</a></li>
              </ul>
            </li>
            <li>


            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Users</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i>Add User</a></li>
                <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>View Users</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Modify User</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>User Types</a></li>
                            </ul>
            </li>
            <li>


            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Settings</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i>Change Password</a></li>
                <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>Forget Password</a></li>
                            </ul>
            </li>
           
           
           
          
          
          
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Version 2.0</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          








        </section><!-- /.content -->



      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2023- <a href="mailto:kowshiqueroy@gmail.com">Kowshique Roy</a>.</strong> All rights reserved.
      </footer>

    </div>
  
 
   
  </body>
</html>