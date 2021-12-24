@extends("layouts.app")

@section("title", "Products | Show")

@section("content")
    <ul>
        <a href="products/{{ $product->getId() }}">View</a>
        <li>Title: {{$product->getTitle()}}</li>
        <li>First name: {{$product->getFirstName()}}</li>

        @if(method_exists($product, 'getPlayLength'))
            <li>PlayLength: {{$product->getPlayLength()}}</li>
        @elseif(method_exists($product, 'getNumberOfPages'))
            <li>NumberOfPages: {{$product->getNumberOfPages()}}</li>
        @endif

        <li>Price:{{$product->getPrice()}}</li>

        <form method="post" action="/products/{{$product->getId()}}">
            @csrf
            @method('DELETE')
            <button class="delete-product" value="Delete">Delete</button>
        </form>
    </ul>
@endsection
