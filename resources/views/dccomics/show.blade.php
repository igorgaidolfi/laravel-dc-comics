@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-10">
            <img src="{{$dccomic['thumb']}}" alt="{{$dccomic['title']}}">
        </div>
        <div class="col-7">
            <h3>{{$dccomic['title']}}</h3>
            <p>U.S Price: {{$dccomic['price']}}</p>
            <p>{{$dccomic['description']}}</p>
        </div>
        <div class="col-3">
            <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="ad">
        </div>
        <div class="col-10">
            <h5>Specs</h5>
            <p>Series: {{$dccomic['series']}}</p>
            <p>U.S Price: {{$dccomic['price']}}</p>
            <p>On Sale Date: {{$dccomic['sale_date']}}</p>
        </div>
    </div>
</div>
@endsection
