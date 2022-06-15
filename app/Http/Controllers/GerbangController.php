<?php

namespace App\Http\Controllers;

use App\Models\Gerbang;
use Illuminate\Http\Request;

class GerbangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gerbang = Gerbang::all();
        return view('gerbang.index', compact('gerbang'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gerbang  $gerbang
     * @return \Illuminate\Http\Response
     */
    public function show(Gerbang $gerbang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gerbang  $gerbang
     * @return \Illuminate\Http\Response
     */
    public function edit(Gerbang $gerbang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gerbang  $gerbang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gerbang $gerbang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gerbang  $gerbang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gerbang $gerbang)
    {
        //
    }
}
