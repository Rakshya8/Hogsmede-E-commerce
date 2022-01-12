<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(){                
            return view('search',['product'=>Product::latest()->filter(request(['search', 'category']))->get()]);
    }
}
