<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@yield('pageTitle')</title>

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-white bg-info mb-3">
                    <div class="card-header">{{ $cardHeader }}</div>
                    <div class="card-body">
                        <form action="{{route('Product.update', $product->id) }}" method="POST">
                        @csrf
                            @method("PATCH")
                            
                            <input type="hidden" name="_id" value="{{ $product->id }}">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="name"
                                       value="{{ $product->name}}">
                            </div>
                            @error('title')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="form-group">
                                <input type="text" class="form-control" name="first_name" placeholder="First Name"
                                       value="{{ $product->first_name }}">
                            </div>
                            @error('first_name')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="form-group">
                                <input type="text" class="form-control" name="last_name"
                                       placeholder="Main Name / Surname / Console" value="{{ $product->last_name }}">
                            </div>
                            @error('last_name')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="form-group">
                                <input type="text" class="form-control" name="price" placeholder="Price"
                                       value="{{ $product->price }}">
                            </div>
                            @error('price')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="form-group">
                                <input type="text" class="form-control" name="uniqueField"
                                       placeholder="Pages / Duration / PEGI" value="{{ $uniqueFieldValue }}">
                            </div>
                            @error('uniqueField')
                            <div class="alert alert-danger" role="alert">
                                {{ "The field Pages / Duration / PEGI is required" }}
                            </div>
                            @enderror
                            <div class="form-group d-flex justify-content-between">
                                <button type="submit" class="btn btn-dark">Update</button>
                                <a href="{{ route('Product.index') }}" class="text-decoration-none">
                                    <button
                                        type="button" class="btn btn-dark">Back
                                    </button>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-5"></div>



