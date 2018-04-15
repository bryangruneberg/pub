@extends('layout')

@section('page-title',"Bleat")

@section('content')
    <div class="row justify-content-center pt-3">
        <div class="col-5 align-self-center">
            <div class="card mb-3">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            @foreach($bleat->pictures as $pic)
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ $pic->uri }}">
                                    @if($pic->caption && $pic->location)
                                        <div class="carousel-caption d-none d-md-block"
                                             style="background-color: rgba(0, 0, 0, 0.4);">
                                            @if($pic->caption)
                                                <h5>{{ $pic->caption }}</h5>
                                            @endif
                                            @if($pic->caption)
                                                <p><span class="oi oi-map-marker"></span> {{ $pic->location }}</p>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        {{ $bleat->bleat }}
                    </p>
                </div>
                @if($bleat->link)
                    <div class="card-body">
                        <a href="{{ $bleat->link }}" class="card-link">{{ $bleat->link }}</a>
                    </div>
                @endif
                <div class="card-footer text-muted">
                    {{ $bleat->created_at }}
                    <div class="float-right">
                        <a href="/bleats/{{ $bleat->id }}" target="_new" class="text-primary"><span class="oi oi-external-link"></span></a>
                        @auth
                            <a href="/bleats/{{ $bleat->id }}/edit" class="text-primary"><span class="oi oi-wrench"></span></a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection