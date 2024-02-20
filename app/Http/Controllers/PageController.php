<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DcComic;
use Illuminate\Support\Facades\Validator;
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
        $form_data = $this->validation($request->all());
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
        $dccomic = DcComic::find($id);
        return view('dccomics.edit', compact ('dccomic'));
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
        // $request->validate([
        //     'title' => 'required|max:100',
        //     'description' => 'required|min:5',
        //     'thumb' => 'min:5',
        //     'price' => 'required|max:10',
        //     'series' => 'required|max:100',
        //     'date' => 'required|date',
        //     'type' => 'required|max:20',
        //     'writers' => 'required|min:5',
        //     'artists' => 'required'
            
        // ]);

        $form_data = $this->validation($request->all());
        $dccomic = DcComic::find($id);
        $dccomic->title = $form_data['title'];
        $dccomic->thumb = $form_data['thumb'];
        $dccomic->price = $form_data['price'];
        $dccomic->description = $form_data['description'];
        $dccomic->series = $form_data['series'];
        $dccomic->writers = $form_data['writers'];
        $dccomic->artists = $form_data['artists'];
        $dccomic->sale_date = $form_data['sale_date'];
        $dccomic->type = $form_data['type'];
        $dccomic->update();

        return redirect()->route('dccomics.show', ['dccomic'=> $dccomic]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dccomic = DcComic::find($id);
        $dccomic->delete();
        return redirect()->route('dccomics.index');
    }

    private function validation($data)
    {
        $validator = Validator::make(
            $data, 
            [
            'title' => 'required|max:100',
            'description' => 'required|min:5',
            'thumb' => 'min:5',
            'price' => 'required|max:10',
            'series' => 'required|max:100',
            'sale_date' => 'required|date',
            'type' => 'required|max:20',
            'writers' => 'required|min:5',
            'artists' => 'required'
            ],
            [
                'title.required' => 'Il titolo e\' obbligatorio',
                'title.max' => 'Il titolo puo\' contenere al massimo 100 caratteri',
                'description.required' => 'La descrizione e\' obbligatoria',
                'description.min' => 'La descrizione deve contenere minimo 5 caratteri',
                'thumb.min' => 'Il link deve contenere minimo 5 caratteri',
                'price.required' => 'Il prezzo e\' obbligatorio',
                'price.max' => 'Il prezzo puo\' contenere al massimo 10 caratteri',
                'series.required' => 'La serie e\' obbligatoria',
                'series.max' => 'La serie puo\' contenere al massimo 100 caratteri',
                'sale_date.required' => 'La data e\' obbligatoria',
                'sale_date.date' => 'La data e\' da inserire nel formato AAAA-mm-GG',
                'type.required' => 'Il tipo e\' obbligatorio',
                'type.max' => 'Il tipo puo\' contenere al massimo 20 caratteri',
                'artists.required' => 'Un fumettista e\' obbligatorio',
                'writers.required' => 'Un autore e\' obbligatorio',
                'writers.min' => 'L\'autore deve contenere minimo 5 caratteri',
            ]
        )->validate();
        
        return $validator;
    }
}
