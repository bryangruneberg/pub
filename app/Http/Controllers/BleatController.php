<?php

namespace App\Http\Controllers;

use App\Bleat;
use Illuminate\Http\Request;

class BleatController extends Controller
{
    public function index()
    {
        $bleats = Bleat::where('published',1)->orderBy('id','desc')->paginate(50);
        return view('bleats.index', ['bleats' => $bleats]);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(Bleat $bleat)
    {
    }

    public function edit(Bleat $bleat)
    {
    }

    public function update(Request $request, Bleat $bleat)
    {
    }

    public function destroy(Bleat $bleat)
    {
    }
}
