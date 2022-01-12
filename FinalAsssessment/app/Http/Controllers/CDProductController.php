<?php

namespace App\Http\Controllers;

use App\Models\CDProduct;
use App\Http\Requests\StoreCDProductRequest;
use App\Http\Requests\UpdateCDProductRequest;

class CDProductController extends Controller
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
     * @param  \App\Http\Requests\StoreCDProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCDProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CDProduct  $cDProduct
     * @return \Illuminate\Http\Response
     */
    public function show(CDProduct $cDProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CDProduct  $cDProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(CDProduct $cDProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCDProductRequest  $request
     * @param  \App\Models\CDProduct  $cDProduct
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCDProductRequest $request, CDProduct $cDProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CDProduct  $cDProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(CDProduct $cDProduct)
    {
        //
    }
}
