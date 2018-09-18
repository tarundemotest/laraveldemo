<?php

namespace App\Http\Controllers;

use App\Films;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;

class FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth',['except' => ['index','indexdetails']]);
    }
    public function index()
    {

        $allfilms = Films::all();

        return View::make('home',array('films'=>$allfilms));
    }

    public function indexdetails($slug)
    {

        $film = Films::where('slug','=',$slug)->first();

        return View::make('films.show',array('film'=>$film));
    }

    public function indexadmin()
    {
        $allfilms = Films::all();

        return View::make('films.index',array('films'=>$allfilms));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('films.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input=$request->all();



        $imageName = Auth::id().'_'.time().'.'.$request->file('photo')->getClientOriginalExtension();
        $request->file('photo')->move(base_path().'/public/filmimg/',$imageName);


        $films = new Films;

        $films->name = $input['name'];

        $films->slug = self::slugify($input['name']);
        $films->description = $input['description'];
        $films->realease_date = $input['realease_date'];
        $films->rating = $input['rating'];
        $films->ticket_Price = $input['ticket_price'];
        $films->country = $input['country'];
        $films->genre = $input['genre'];
        $films->photo = $imageName;

        $films->save();

        return redirect('films')->with('success', 'New Film is added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Films  $films
     * @return \Illuminate\Http\Response
     */
    public function show(Films $films)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Films  $films
     * @return \Illuminate\Http\Response
     */
    public function edit(Films $films)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Films  $films
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Films $films)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Films  $films
     * @return \Illuminate\Http\Response
     */
    public function destroy(Films $films)
    {
        //
    }

    public static function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }
}
