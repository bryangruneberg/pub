<?php

namespace App\Http\Controllers;

use App\Bleat;
use Illuminate\Http\Request;

class BleatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bleats = Bleat::where('published',1)->paginate(15);
        return view('bleats.index', ['bleats' => $bleats]);
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
     * @param  \App\Bleat  $bleat
     * @return \Illuminate\Http\Response
     */
    public function show(Bleat $bleat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bleat  $bleat
     * @return \Illuminate\Http\Response
     */
    public function edit(Bleat $bleat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bleat  $bleat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bleat $bleat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bleat  $bleat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bleat $bleat)
    {
        //
    }
}
