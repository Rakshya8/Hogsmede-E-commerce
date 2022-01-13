<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ "AdminLTE Dashboard" }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    
    <link rel="stylesheet" href="{{URL::asset('css/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('css/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
  <link rel="stylesheet" href="{{URL::asset('css/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
</head>
<body>
<div class="wrapper">

    <!-- Header -->
    @include('admin/header')

    <!-- Sidebar -->
    @include('admin/sidebar')

    <!-- Content Wrapper. Contains page content -->
        <section class="content">
            <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <button class="btn" id="admin-btn-back">
            <a href="{{ url()->previous() }}" style="color:red">                
            <i class="fas fa-times" aria-hidden="true" style="margin-right:5px"></i> Cancel</button>
            </a>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Add User</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form id="quickForm" method="POST" action="{{route('admin.users.store')}}">
                  @include('admin/Partials/form' , ['create'=>true ])
              </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /
            @yield('content')
        </section>
        -- /.content -->
    </div><!-- /.content-wrapper -->
    @include('./flash-message')

    <!-- Footer -->
    @include('admin/footer')

</div><!-- ./wrapper -->

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience -->
</body>
</html>