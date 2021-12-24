<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\User;

class ProductController extends Controller
{
    public static function index()
    {
        $file = 'products.json';
        $string = file_get_contents($file);

        $productsJson = json_decode($string, true);

        $books = [];
        $cds = [];
        foreach ($productsJson as $product) {
            switch ($product['type']) {
                case "cd":
                    $cdproduct = new CdProduct($product['id'], $product['title'], $product['firstname'],
                        $product['mainname'], $product['price'], $product['playlength']);
                    $cds[] = $cdproduct;
                    break;
                case "book":
                    $bookproduct = new BookProduct($product['id'], $product['title'], $product['firstname'],
                        $product['mainname'], $product['price'], $product['numpages']);
                    $books[] = $bookproduct;
                    break;
            }
        }
        return view('welcome', ['cds' => $cds, 'books' => $books]);
    }

    public static function destroy(Request $request)
    {

        $file = 'products.json';
        $string = file_get_contents($file);

        $productsJson = json_decode($string, true);

        $products = [];
        foreach ($productsJson as $product) {
            if ($product['id'] != $request->id) {
                $products[] = $product;
            }
        }

        $json = json_encode($products);

        file_put_contents($file, $json);

        return redirect("/");
    }

    public static function show(Request $request)
    {
        $file = 'products.json';
        $string = file_get_contents($file);

        $productsJson = json_decode($string, true);

        $product = "";
        foreach ($productsJson as $product) {
            if ($product['id'] == $request->id) {
                switch ($product['type']) {
                    case "cd":
                        $cdproduct = new CdProduct($product['id'], $product['title'], $product['firstname'],
                            $product['mainname'], $product['price'], $product['playlength']);
                        $product = $cdproduct;
                        break;
                    case "book":
                        $bookproduct = new BookProduct($product['id'], $product['title'], $product['firstname'],
                            $product['mainname'], $product['price'], $product['numpages']);
                        $product = $bookproduct;
                        break;
                }
                break;
            }
        }

        return view("products", ['product' => $product]);
    }

    public static function store(Request $request)
    {

        $file = 'products.json';
        $string = file_get_contents($file);

        $productsJson = json_decode($string, true);

        $ids = [];
        foreach ($productsJson as $product) {
            $ids[] = $product['id'];
        }
        rsort($ids);
        $newId = $ids[0] + 1;

        $products = [];

        foreach ($productsJson as $product) {
            $products[] = $product;
        }

        $newProduct = [];
        $newProduct['id'] = $newId;
        $newProduct['type'] = $request->type;
        $newProduct['title'] = $request->title;
        $newProduct['firstname'] = $request->firstname;
        $newProduct['mainname'] = $request->mainname;
        $newProduct['price'] = $request->price;

        if ($request->type == 'cd') $newProduct['playlength'] = $request->numpages;
        if ($request->type == 'book') $newProduct['numpages'] = $request->numpages;

        $products[] = $newProduct;

        $json = json_encode($products);
        file_put_contents($file, $json);
        return redirect('/');

    }


    public static function create()
    {
        //TODO: show add new product form.
    }

    public static function edit(Request $request)
    {
        $file = 'products.json';
        $string = file_get_contents($file);

        $productsJson = json_decode($string, true);

        $product = "";
        foreach ($productsJson as $product) {
            if ($product['id'] == $request->id) {
                switch ($product['type']) {
                    case "cd":
                        $cdproduct = new CdProduct($product['id'], $product['title'], $product['firstname'],
                            $product['mainname'], $product['price'], $product['playlength']);
                        $product = $cdproduct;
                        break;
                    case "book":
                        $bookproduct = new BookProduct($product['id'], $product['title'], $product['firstname'],
                            $product['mainname'], $product['price'], $product['numpages']);
                        $product = $bookproduct;
                        break;
                }
                break;
            }
        }

        return view("update", ["product" => $product]);

    }

    public static function update(Request $request)
    {

        $file = 'products.json';
        $string = file_get_contents($file);
        $products = [];
        $productsJson = json_decode($string, true);

        foreach ($productsJson as $product) {
            if ($product['id'] == $request->id) {
                $product['title'] = $request->title;
                $product['firstname'] = $request->firstname;
                $product['mainname'] = $request->mainname;
                $product['price'] = $request->price;
                if ($product['type'] == 'cd') $product['playlength'] = $request->numpages;
                if ($product['type'] == 'book') $product['numpages'] = $request->numpages;
            }
            $products[] = $product;
        }

        $json = json_encode($products);
        file_put_contents($file, $json);

        return redirect("/");

    }
}
