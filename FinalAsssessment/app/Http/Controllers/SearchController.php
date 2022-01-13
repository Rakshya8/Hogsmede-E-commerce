<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Request;

class SearchController extends Controller
{
    public function index(){   
        $products=new Product();
        if(Request::get('sort')=="price_asc"){      
            $products=Product::orderBy('price', 'asc');
        }
        else if(Request::get('sort')=="price_desc")             {
            $products=Product::orderBy('price', 'desc');
        }
        else if (Request::get('sort')=="newest")             {
            $products=Product::latest();
        }
        if(Request::get('cat')=="book"){      
            $products=Product::where('category', 'book');
        }
        else if(Request::get('cat')=="cd"){      
            $products=Product::where('category', 'cd');
        }
        else if(Request::get('cat')=="game"){      
            $products=Product::where('category', 'game');
        }
            return view('search',['product'=>$products->paginate(6)]);
    }
}
