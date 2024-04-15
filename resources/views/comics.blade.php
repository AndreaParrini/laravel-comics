@extends('layouts.app')

@section('content')
<section id="section_main">
    <section class="jumbotron">

    </section>
    <div class="container">
        <div class="title badge-primary">
            Current Series
        </div>
        <div class="comics">
            <div class="row">
                @foreach ($comics as $comic )
                <div class="col-2">
                    <div class="card">
                        <div class="logo">
                            <img src="{{$comic['thumb']}}" alt="" srcset="">
                        </div>
                        <div class="name_comics">
                            {{$comic['series']}}
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <section class="load-more ">
        <button class="badge-primary">load more</button>
    </section>
    <section class="section-digitalcomics">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="icon">
                        <img src="{{Vite::asset('resources/images/buy-comics-digital-comics.png')}}" alt="Digital Comics">
                        <div>
                            Digital Comics
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="icon">
                        <img src="{{Vite::asset('resources/images/buy-comics-merchandise.png')}}" alt="DC Merchandise">
                        <div>
                            DC Merchandise
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="icon">
                        <img src="{{Vite::asset('resources/images/buy-comics-subscriptions.png')}}" alt="Subscription">
                        <div>
                            Subscription
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="icon">
                        <img src="{{Vite::asset('resources/images/buy-comics-shop-locator.png')}}" alt="Shop Locator">
                        <div>
                            Comic Shop Locator
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="icon">
                        <img src="{{Vite::asset('resources/images/buy-dc-power-visa.svg')}}" alt="DC Power Visa">
                        <div>
                            DC Power Visa
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>



@endsection