<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>Product</title>
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
            <h1>Products</h1>
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
                <h3 class="card-title">Add Product</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form id="quickForm" method="POST" action="{{route('Product.store')}}">
              @include('Product/Partials/form' , ['create'=>true ])
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

    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif


    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-white bg-info mb-3">
                    <div class="card-header">Add Shop Product</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('Product.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="category">Product Type</label>
                                <select class="form-control" id="category" name="category">
                                    <option value="cd">CD</option>
                                    <option value="book">Book</option>
                                    <option value="game">Game</option>
                                </select>
                                @error('productType')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="firstName">Author / Artist</label>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="first_name" id="first_name"
                                       placeholder="First Name" value="{{ old('firstName') }}">
                                @error('firstName')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="last_name" id="last_name"
                                       placeholder="Main Name / Surname / Console" value="{{ old('last_name') }}">
                                @error('mainName')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="name"
                                       value="{{ old('name') }}">
                                @error('title')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="uniqueField" id="uniqueField"
                                       placeholder="Pages / Duration / PEGI" value="{{ old('uniqueField') }}">
                                @error('uniqueField')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="price" id="price" placeholder="Price"
                                       value="{{ old('price') }}">
                                @error('price')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group d-flex justify-content-between">
                                <button type="submit" class="add-product btn btn-dark">Submit</button>
                                <a href="{{ route('Product.index') }}" class="add-product btn btn-dark">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-5"></div>
