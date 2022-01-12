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
            <button class="btn" id="admin-btn">
            <a href="{{ route('admin.users.create')}}" style="color:white">                
                <i class="fa fa-plus" aria-hidden="true"></i> Add User</button>
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
                <h3 class="card-title">List of Users</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                  </tr>
                  </thead>
                  <tbody>
                      <!-- Loop through user passed as array in user controller-->
                      @foreach($users as $user)

                  <tr>
                    <td>{{ $user->id}}</td>                    
                    <td>{{$user -> name}}</td>
                    <td> {{$user -> email}}</td>
                    <td>X
                    <a href="{{ route('admin.users.edit', $user->id)}}" style="color:black"><i class="fa fa-pencil-square-o" style="float:right; margin-left:8px" aria-hidden="true"></a></i>
                    <a href="javascript:{}" style="color:black" onclick="document.getElementById('delete-user-form-{{$user->id}}').submit()"><i class="fa fa-trash" style="float:right" aria-hidden="true"></i></a>
                    <form id="delete-user-form-{{$user->id}}" action  ="{{route('admin.users.destroy',$user->id)}}" method="POST" style="display:none">
                    @csrf
                    @method("DELETE") 
                    
                </form>
                    </td>
                  </tr>            
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                  </tr>
                  </tfoot>
                </table>
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
<script src="{{URL::asset('css/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('css/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('css/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('css/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('css/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('css/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('css/jszip/jszip.min.js')}}"></script>
<script src="{{URL::asset('css/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('css/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('css/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('css/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('css/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</html>