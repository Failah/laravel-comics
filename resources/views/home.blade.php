@extends('layouts.dc-layout')

@section('main-content')
    <div class="dark-bg">
        <div class="container comics-container-main">
            <div>
                <h3>CURRENT SERIES</h3>
            </div>

            @foreach ($comics as $comic)
                <div class="comics-card">

                    <img class="comic-card-img" src="{{ $comic['thumb'] }}" alt="">

                    <p>{{ $comic['series'] }}</p>
                </div>
            @endforeach

            <button>LOAD MORE</button>
        </div>
    </div>
@endsection
