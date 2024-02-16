@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($DcComics as $comic)
                <div class="col-2">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="{{$comic->thumb}}" alt="" class="img-fluid    ">
                        </div>
                        <div class="card-body">
                            <div class="card-title">{{$comic->title}}</div>
                            <p class="card-text">Prezzo: {{$comic->price}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection