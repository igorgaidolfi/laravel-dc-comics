@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 my-3">
                <a href="{{route('dccomics.create')}}" class="btn btn-primary">Aggiungi fumetto</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($DcComics as $comic)
                <div class="col-2">
                    <a href="{{route('dccomics.show', ['dccomic' => $comic->id])}}">
                        <div class="card">
                            <div class="card-img-top">
                                <img src="{{$comic->thumb}}" alt="" class="img-fluid    ">
                            </div>
                            <div class="card-body">
                                <div class="card-title">{{$comic->title}}</div>
                                <p class="card-text">Prezzo: {{$comic->price}}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection