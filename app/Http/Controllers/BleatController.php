<?php

namespace App\Http\Controllers;

use App\Bleat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;

class BleatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);;
    }

    public function index(Request $request)
    {
        $published = intval($request->get('published'));
        $type = $request->get('type');

        $selector = Bleat::where('published', $published)->orderBy('id','desc');

        if($type == "pictures") {
            $selector = $selector->has('pictures');
        }

        $bleats = $selector->paginate(50);

        return view('bleats.index', ['bleats' => $bleats, 'published' => $published, 'type' => $type]);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show(Bleat $bleat)
    {
        if(!$bleat->published && !Auth::check()) {
            App::abort(404, 'Not found');
        }

        return view('bleats.view', ['bleat' => $bleat]);
    }

    public function edit(Bleat $bleat)
    {
        return view('bleats.edit', ['bleat' => $bleat]);
    }

    public function update(Request $request, Bleat $bleat)
    {
        return redirect("/bleat/" . $bleat->id);
    }

    public function destroy(Bleat $bleat)
    {
        $bleat->published = 0;
        $bleat->save();

        return redirect("/bleat/" . $bleat->id);
    }
}
