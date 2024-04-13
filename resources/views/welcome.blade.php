@extends('layouts.app')

@section('content')
<section id="section_main">
    <div class="jumbotron">

    </div>
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
    <div class="load-more ">
        <button class="badge-primary">load more</button>
    </div>
</section>
    

    
@endsection
