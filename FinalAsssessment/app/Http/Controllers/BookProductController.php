<?php

namespace App\Http\Controllers;

use App\Models\BookProduct;
use App\Http\Requests\StoreBookProductRequest;
use App\Http\Requests\UpdateBookProductRequest;

class BookProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookProduct  $bookProduct
     * @return \Illuminate\Http\Response
     */
    public function show(BookProduct $bookProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookProduct  $bookProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(BookProduct $bookProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookProductRequest  $request
     * @param  \App\Models\BookProduct  $bookProduct
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookProductRequest $request, BookProduct $bookProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookProduct  $bookProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookProduct $bookProduct)
    {
        //
    }
}
