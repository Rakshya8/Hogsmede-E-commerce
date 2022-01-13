<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\CDProduct;
use App\Models\GameProduct;
use App\Models\BookProduct;
use Session;
use App\Cart;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(
            'Product.index',
            ['pageTitle' => 'Shop Products | Home', 'products' => Product::simplePaginate(12)]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Product.create', ['pageTitle' => 'Product | Add Product']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "category" => "required",
            "first_name" => "required",
            "last_name" => "required",
            "name" => "required",
            "uniqueField" => "required",
            "price" => "required",
        ]);


        $product = Product::create([
            "category" => $request->category,
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "name" => $request->name,
            "price" => $request->price
        ]);

        if ($request->category === 'cd') {
            CDProduct::create(["product_id" => $product->id, "play_length" => $request->uniqueField]);
        } else if ($request->category === 'book') {
            BookProduct::create(["product_id" => $product->id, "pages" => $request->uniqueField]);
        } else if ($request->category === 'game') {
            GameProduct::create(["product_id" => $product->id, "rating" => $request->uniqueField]);
        }

        return redirect(route('Product.index'))->with('success', 'Product Store Sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::find($id); 
        $uniqueFieldValue = "";
        switch ($product->category) {
            case 'cd':

                $uniqueFieldValue = CDProduct::where('product_id', $product->id)->first()->play_length;
                break;
            case 'book':

                $uniqueFieldValue = BookProduct::where('product_id', $product->id)->first()->pages;
                break;
            case 'game':

                $uniqueFieldValue = GameProduct::where('product_id', $product->id)->first()->rating;
                break;
        }

        return view('Product.show', ['pageTitle' => 'Shop Products | Show Product', 'product' => $product, 'uniqueFieldValue' => $uniqueFieldValue]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
               
        $cardHeader = "";
        $uniqueFieldValue = "";
        $product=Product::find($id); 
        switch ($product->category) {
            case 'cd':
                $cardHeader = "Edit CD details";
                $uniqueFieldValue = CDProduct::where('product_id', $id)->first()->play_length;
                break;
            case 'book':
                $cardHeader = "Edit Book details";
                $uniqueFieldValue = BookProduct::where('product_id', $id)->first()->pages;
                break;
            case 'game':
                $cardHeader = "Edit Game details";
                $uniqueFieldValue = GameProduct::where('product_id', $id)->first()->rating;
                break;
        }
        return view('Product.edit', ["pageTitle" => "Shop Products | Edit Product", "cardHeader" => $cardHeader, "product" => $product::find($id), "uniqueFieldValue" => $uniqueFieldValue]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product=Product::findOrFail($id);
        
        $this->validate($request, [
            "name" => "required",
            "first_name" => "required",
            "last_name" => "required",
            "uniqueField" => "required",
            "price" => "required",
        ]);
        try{
            $product->update([
                "name" => $request->name,
                "first_name" => $request->first_name,
                "main_name" => $request->main_name,
                "price" => $request->price
            ]);
            session()->flash('success','The product has been updated successfully');
        }
        catch(\Exception $exception){
            dd($exception);

            session()->flash('failure','This product could not be updated');
    
        }
        

        switch ($product->category) {
            case 'cd':
                CdProduct::where('product_id', $product->id)->first()
                    ->update(["play_length" => $request->uniqueField]);
                break;
            case 'book':
                BookProduct::where('product_id', $product->id)->first()
                    ->update(["pages" => $request->uniqueField]);
                break;
            case 'game':
                GameProduct::where('product_id', $product->id)->first()
                    ->update(["rating" => $request->uniqueField]);
                break;
        }

        return redirect()->back()->with('success', 'Product Updated Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            Product::destroy($id);
            
            session()->flash('success','The user has been deleted');
            
        }
        catch(\Exception $exception){
            session()->flash('failure','The user could not be deleted');

            //session()->flash('failure','This email could not be added to our list');
    
        }
        return redirect(route('Product.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $product=Product::findOrFail($id); 
        $uniqueFieldValue = "";
        switch ($product->category) {
            case 'cd':
                $uniqueFieldValue = CDProduct::where('product_id', $id)->first()->play_length;
                break;
            case 'book':
                $uniqueFieldValue = BookProduct::where('product_id', $id)->first()->pages;
                break;
            case 'game':
                $cardHeader = "Edit Game details";
                $uniqueFieldValue = GameProduct::where('product_id', $id)->first()->rating;
                break;
        }

        return view('product-detail', ['product' => $product, 'uniqueFieldValue' => $uniqueFieldValue]);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function cart()
    {
        return view('cart');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function updatecart(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}

    
