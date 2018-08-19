<?php

namespace App\Http\Controllers;

use App\Bleat;
use App\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;

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

    public function create(Request $request)
    {
        $unattachedPictures = Picture::whereNull('bleat_id')->get();

        return view('bleats.create', ['unattachedPictures' => $unattachedPictures]);
    }

    public function store(Request $request)
    {
        $validatedData = Validator::make($request->all(), [
            'bleat' => 'required|max:255',
            'link' => 'nullable|URL',
        ], [
            'link.u_r_l' => 'Link format is invalid',
        ])->validate();

        $bleat = new Bleat;
        $bleat->fill($validatedData);
        $bleat->save();

        $validatedData['published'] = $request->get('published');
        if($request->get('pictures'))
        {
            foreach($request->get('pictures') as $pid)
            {
                $picture = Picture::find($pid);
                $picture->bleat_id = $bleat->id;
                $picture->save();
            }
        }
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
