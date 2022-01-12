<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@yield('pageTitle')</title>
    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-light">
                    <div class="card-header">Products</div>
                    <div class="card-deck">
                        @foreach($products as $product)

                            <div class="col-sm p-2">
                                <div class="card border-primary mb-3" style="width: 20rem; text-align:center;">
                                    <div class="card-header "><h3>{{ $product->category }}</h3></div>
                                    <div class="card-body text-primary">

                                        <h5 class="card-title">{{ $product->name }}</h5>                                        
                                            <div style="font-size:1rem;" class="d-flex justify-content-between">
                                                <a href="{{ route('Product.edit', $product->id) }}"
                                                   class="text-decoration-none">
                                                    <button
                                                        type="button" class="btn btn-dark">Edit / Show
                                                    </button>
                                                </a>
                                                <form action="{{ route('Product.destroy', $product) }}"
                                                      method="POST">
                                                    @method("DELETE")
                                                    @csrf
                                                    <input value="Delete" type="submit" class="btn btn-danger">
                                                </form>
                                            </div>                                                                   
                                    </div>

                                </div>
                            </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div><br>
    {{ $products->links() }}
    <div class="p-5"></div>
