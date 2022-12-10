@extends('layouts.layout')
@section('title', 'Home Page')

@section('content')
    <!-- Contenido -->
    <section class="container-fluid content">
        <!-- Categorías -->
        <div class="row justify-content-center">
            <div class="col-10 col-md-12">
                <nav class="text-center mt-3 mb-5">
                    <a href="{{ route('home') }}" class="mx-3 pb-3 link-category d-block d-md-inline {{ (isset($categoryIdSelected) && 'events' ==$categoryIdSelected)? 'selected-category':'' }}" >
                        Events
                    </a>
                    <a href="{{ route('series') }}" class="mx-3 pb-3 link-category d-block d-md-inline {{ (isset($categoryIdSelected) && 'series' ==$categoryIdSelected)? 'selected-category':'' }}" >
                        Series
                    </a>
                    <a href="{{ route('characters') }}" class="mx-3 pb-3 link-category d-block d-md-inline {{ (isset($categoryIdSelected) && 'characters' ==$categoryIdSelected)? 'selected-category':'' }}" >
                        Characters
                    </a>
                </nav>
            </div>
        </div>
        {{--Categorias END--}}

        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    @foreach($results as $result)
                        <div class="col-md-4 col-12 justify-content-center mb-5">
                            <div class="card m-auto" style="width: 18rem;">
                                <img class="card-img-top" style="width: 100%; height: 250px" src="{{ $result['thumbnail']['path'].".".$result['thumbnail']['extension'] }}" alt="{{ $result['title'] }}">
                                <div class="card-body">
                                    <small class="card-txt-category">Category: Events</small>
                                    <h5 class="card-title my-2">{{ $result['title'] }}</h5>
                                    <div class="d-card-text">
                                        {{ Str::limit($result['description'], 150, '...') }}
                                    </div>
                                    <a href="{{ $result['urls'][0]['url'] }}" target="_blank" class="post-link"><b>Leer más</b></a>
                                    <hr>
                                    <div class="row">
                                        <div class="col-6 text-left">
                                            <span class="card-txt-author">
                                                @php
                                                    $i = 0;
                                                    $creators = $result['creators']['items'];
                                                    foreach ($creators as $creator){
                                                        if ($i < 1){
                                                            echo $creator['name'];
                                                        }
                                                        $i ++;
                                                    }
                                                @endphp
                                            </span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="card-txt-date">{{ $result['modified'] }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    {{--Contenido END--}}
@endsection
