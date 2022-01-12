    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('pageTitle')</title>

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
