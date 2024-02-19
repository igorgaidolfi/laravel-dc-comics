@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">Aggiungi un nuovo fumetto</div>
                <form action="{{route('dccomics.store')}}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Titolo">
                    </div>
                    <div class="form-group mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="URL">
                    </div>
                    <div class="form-group mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" class="form-control"id="price" name="price" placeholder="Prezzo">
                    </div>
                    <div class="form-group mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descrizione"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="artists" class="form-label">Disegni</label>
                        <input type="text" class="form-control" id="artists" name="artists" placeholder="Fumettisti">
                    </div>
                    <div class="form-group mb-3">
                        <label for="title" class="form-label">Tipo</label>
                        <select name="type" id="type" class="form-control">
                            <option value="">Seleziona il tipo di fumetto</option>
                            <option value="graphic novel">Graphic Novel</option>
                            <option value="comic book">Comic Book</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" class="form-control" id="series" name="series" placeholder="Serie">
                    </div>
                    <div class="form-group mb-3">
                        <label for="sale_date" class="form-label">Data di uscita</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Data">
                    </div>
                    <div class="form-group mb-3">
                        <label for="writers" class="form-label">Disegni</label>
                        <input type="text" class="form-control" id="writers" name="writers" placeholder="Scrittori">
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-success">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection