@extends('layouts.app')

@section("title", "Products | Home")

@section("content")

    <div class="container-md bg-info" style="margin-top:40px"><br>
        <div class="row bg-info">
            <div class="col-sm-4">
                <div class="card border-primary mb-3" style="height:auto;">
                    <div class="card-body">
                        <h3 class="card-title font-weight-bold">Books:</h3><br>
                        @foreach($books as $product)
                            <a href="products/{{$product->getId()}}"></a>
                            <h5 class="card-title font-weight-bold">{{$product->getTitle()}}</h5>
                            {{$product->getFirstName()}} {{$product->getMainName()}}<br>
                            £ {{$product->getPrice()}}<br>
                            Number of Pages: {{$product->getNumberOfPages()}}<br><br>
                            <div class="text-right">
                                <a href="products/{{$product->getId()}}/edit" class="btn btn-dark"
                                   type="submit">Select</a>
                            </div>
                            <div>
                                <form method="post" action="products/{{$product->getId()}}">
                                    @csrf
                                </form>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card" style="height:auto;">
                    <div class="card-body">
                        <h3 class="card-title font-weight-bold">CD</h3><br>
                        @foreach($cds as $product)
                            <a href="products/{{$product->getId()}}"></a>
                            <h5 class="card-title font-weight-bold">{{$product->getTitle()}}</h5>
                            {{$product->getFirstName()}} {{$product->getMainName()}}<br>
                            £ {{$product->getPrice()}}<br>
                            Play length: {{$product->getPlayLength()}}<br><br>
                            <div class="text-right">
                                <a href="products/{{$product->getId()}}/edit" class="btn btn-dark"
                                   type="submit">Select</a>
                            </div>
                            <form method="post" action="products/{{$product->getId()}}">
                                @csrf
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-sm-4" style="margin-bottom:20px">
                <div class="card" style="height:auto;">
                    <div class="card-body">
                        <form action="/products" method="post">
                            @csrf
                            <h5><label for="type" class="font-weight-bold">Product Type:</label>

                                <select name="type" id="type">
                                    <option value="cd">CD</option>
                                    <option value="book">BOOK</option>
                                </select></h5>
                            <input type="hidden" name="id" value=""><br>
                            <input class="form-control" type="text" name="title" placeholder="Title"/><br>
                            <input class="form-control" type="text" name="firstname"
                                   placeholder="FirstName (optional)"/><br>
                            <input class="form-control" type="text" name="mainname" placeholder="Surname/Band"/><br>
                            <input class="form-control" type="number" step="0.01" name="price" placeholder="Price"/><br>
                            <input class="form-control" type="number" name="numpages"
                                   placeholder="Pages/Playlength"/><br>
                            <div class="text-right">
                                <button class="btn btn-dark" type="submit">ADD NEW</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



