<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DcComic;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $DcComics = DcComic::all();
        return view('dccomics.index', compact('DcComics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dccomics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $request->all();
        $comic = new DcComic();
        $comic->title = $form_data['title'];
        $comic->thumb = $form_data['thumb'];
        $comic->price = $form_data['price'];
        $comic->description = $form_data['description'];
        $comic->series = $form_data['series'];
        $comic->writers = $form_data['writers'];
        $comic->artists = $form_data['artists'];
        $comic->sale_date = $form_data['sale_date'];
        $comic->type = $form_data['type'];
        $comic->save();

        return redirect()->route('dccomics.show', ['dccomic'=> $comic]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(DcComic $dccomic)
    {
        return view('dccomics.show', compact ('dccomic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
