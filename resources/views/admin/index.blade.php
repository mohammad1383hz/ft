<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>پنل مدیریت | داشبورد اول</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href={{asset("css/adminlte.min.css")}}>
  <!-- iCheck -->

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- bootstrap rtl -->
  <link rel="stylesheet" href={{asset("css/bootstrap-rtl.min.css")}}>
  <!-- template rtl version -->
  <link rel="stylesheet" href={{asset("css/custom-style.css")}}>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->


    <!-- SEARCH FORM -->


    <!-- Right navbar links -->

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->


    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
      <div style="direction: rtl">
        <!-- Sidebar user panel (optional) -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->


            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-edit"></i>
                <p>
                  dashbord

                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>

            </li>
            <li class="nav-item has-treeview">
                <a href="{{route('admin.user.index')}}" class="nav-link">
                  <i class="nav-icon fa fa-edit"></i>
                  <p>
                    user

                    <i class="fa fa-angle-left right"></i>
                  </p>
                </a>

              </li>
              <li class="nav-item has-treeview">
                <a href="{{route('admin.category.index')}}" class="nav-link">
                  <i class="nav-icon fa fa-edit"></i>
                  <p>
                    category

                    <i class="fa fa-angle-left right"></i>
                  </p>
                </a>

              </li>
              <li class="nav-item has-treeview">
                <a href="{{route('admin.product.index')}}" class="nav-link">
                  <i class="nav-icon fa fa-edit"></i>
                  <p>
                    product

                    <i class="fa fa-angle-left right"></i>
                  </p>
                </a>

              </li>



          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>

    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  {{-- @yield('content') --}}

  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        @yield('content')
      </div>
    </section>
    </div>





  <!-- /.content-wrapper -->

  <!-- /.control-sidebar -->
<!-- ./wrapper -->

<!-- jQuery -->

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->

</body>
</html>
