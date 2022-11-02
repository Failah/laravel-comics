@extends('layouts.dc-layout')

@section('main-content')
    <div class="dark-bg">
        <div class="container comics-container-main">
            <div>
                <h3>CURRENT SERIES</h3>
            </div>

            @foreach ($comics as $comic)
                <div class="comics-card">

                    <img class="comic-card-img" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">

                    <p>{{ $comic['series'] }}</p>
                </div>
            @endforeach

            <button>LOAD MORE</button>
        </div>
    </div>
    <div class="shop-banner">
        <div class="container">
            <div class="card">
                <div>
                    <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="" />
                </div>

                <span>DIGITAL COMICS</span>
            </div>
            <div class="card">
                <div>
                    <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="" />
                </div>

                <span>DC MERCHANDISE</span>
            </div>
            <div class="card">
                <div>
                    <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="" />
                </div>

                <span>SUBSCRIPTION</span>
            </div>
            <div class="card">
                <div>
                    <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="" />
                </div>

                <span>COMIC SHOP LOCATOR</span>
            </div>
            <div class="card">
                <div>
                    <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="" />
                </div>

                <span>DC POWER VISA</span>
            </div>
        </div>
    </div>
@endsection
