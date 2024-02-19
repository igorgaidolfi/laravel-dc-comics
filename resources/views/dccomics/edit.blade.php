@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">Aggiungi un nuovo fumetto</div>
                <form action="{{route('dccomics.update', $dccomic->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Titolo" 
                        value="{{$dccomic->title}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="URL"
                        value="{{$dccomic->thumb}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" class="form-control"id="price" name="price" placeholder="Prezzo"
                        value="{{$dccomic->price}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descrizione"
                        >{{$dccomic->description}}</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="artists" class="form-label">Disegni</label>
                        <input type="text" class="form-control" id="artists" name="artists" placeholder="Fumettisti"
                        value="{{$dccomic->artists}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="title" class="form-label">Tipo</label>
                        <select name="type" id="type" class="form-control">
                            <option value="">Seleziona il tipo di fumetto</option>
                            <option value="graphic novel" @selected($dccomic->type == 'graphic novel')>Graphic Novel</option>
                            <option value="comic book" @selected($dccomic->type == 'comic book')>Comic Book</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" class="form-control" id="series" name="series" placeholder="Serie"
                        value="{{$dccomic->series}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="sale_date" class="form-label">Data di uscita</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Data"
                        value="{{$dccomic->sale_date}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="writers" class="form-label">Disegni</label>
                        <input type="text" class="form-control" id="writers" name="writers" placeholder="Scrittori"
                        value="{{$dccomic->writers}}">
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-success">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection