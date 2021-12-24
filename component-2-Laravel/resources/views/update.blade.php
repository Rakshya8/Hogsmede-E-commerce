@extends('layouts.app');
@section('content')
    <div class="container-md">
        <div class="row justify-content-center">
            <div class="col-sm-4 bg-info">
                <div class="card border-primary mb-3">
                    <div class="card-body">
                        <h3 class="card-title font-weight-bold">{{$product->getTitle()}}</h3>
                        <form action="/products/{{$product->getId()}}" method="post">
                            @csrf
                            @method("PATCH")
                            <input type="hidden" name="id" value="{{$product->getId()}}">
                            <input class="form-control" type="text" name="title" placeholder="Title"
                                   value="{{$product->getTitle()}}"/><br>
                            <input class="form-control" type="text" name="firstname" placeholder="FirstName (optional)"
                                   value="{{$product-> getFirstName()}}"/><br>
                            <input class="form-control" type="text" name="mainname" placeholder="Surname/Band"
                                   value="{{$product-> getMainName()}}"/><br>
                            <input class="form-control" type="text" name="price" placeholder="Price"
                                   value="{{$product->getPrice()}}"/><br>
                            <input class="form-control" type="number" name="numpages" placeholder="Pages/Playlength"
                                   value="{{method_exists($product, 'getPlayLength') ? $product->getPlayLength() : $product->getNumberOfPages() }}"/><br>

                            <button class="btn btn-dark float-left" type="submit">Update</button>
                        </form>
                        <form action="/products/{{$product->getId()}}" method="post">
                            @method('delete')
                            @csrf
                            <button class="btn btn-dark float-right" type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
