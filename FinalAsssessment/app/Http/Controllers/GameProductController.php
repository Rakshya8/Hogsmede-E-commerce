<?php

namespace App\Http\Controllers;

use App\Models\GameProduct;
use App\Http\Requests\StoreGameProductRequest;
use App\Http\Requests\UpdateGameProductRequest;

class GameProductController extends Controller
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
     * @param  \App\Http\Requests\StoreGameProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGameProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GameProduct  $gameProduct
     * @return \Illuminate\Http\Response
     */
    public function show(GameProduct $gameProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GameProduct  $gameProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(GameProduct $gameProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGameProductRequest  $request
     * @param  \App\Models\GameProduct  $gameProduct
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGameProductRequest $request, GameProduct $gameProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GameProduct  $gameProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(GameProduct $gameProduct)
    {
        //
    }
}
