@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">Aggiungi un nuovo fumetto</div>
                {{-- TENTATIVO BONUS DAY 2  --}}
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('dccomics.store')}}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Titolo"
                            required value="{{old('title')}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="URL"
                            required value="{{old('thumb')}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" class="form-control"id="price" name="price" placeholder="Prezzo"
                            required value="{{old('price')}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descrizione"
                            >{{old('description')}}</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="artists" class="form-label">Disegni</label>
                        <input type="text" class="form-control" id="artists" name="artists" placeholder="Fumettisti"
                            required value="{{old('artists')}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="title" class="form-label">Tipo</label>
                        <select name="type" id="type" class="form-control">
                            <option value="">Seleziona il tipo di fumetto</option>
                            <option value="graphic novel" @selected(old('type') == 'graphic novel')>Graphic Novel</option>
                            <option value="comic book" @selected(old('type') == 'comic book') >Comic Book</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" class="form-control" id="series" name="series" placeholder="Serie"
                            required value="{{old('series')}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="sale_date" class="form-label">Data di uscita</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Data"
                            required value="{{old('sale_date')}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="writers" class="form-label">Disegni</label>
                        <input type="text" class="form-control" id="writers" name="writers" placeholder="Scrittori"
                            required value="{{old('writers')}}">
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-success">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection