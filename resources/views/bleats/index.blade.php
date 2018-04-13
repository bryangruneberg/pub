@extends('layout')

@section('page-title','Bleats')

@section('content')
    @if($bleats->count() == 0)
        <div class="row justify-content-center pt-3">
            <div class="col-12 align-self-center">
                <div class="card border-success">
                    <div class="card-header">/bryangruneberg/bleats$</div>
                    <div class="card-body">
                        <h4 class="card-title">No bleats. </h4>
                        <div class="row">
                            <div class="col-10">
                                <p class="card-text">
                                    Bryan is yet to bleat a bleat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @foreach($bleats as $bleat)
        <div class="row justify-content-center pt-3">
            <div class="col-5 align-self-center">
                <div class="card mb-3">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                @foreach($bleat->pictures as $pic)
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{ $pic->uri }}">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>{{ $pic->caption }}</h5>
                                            <p>{{ $pic->location }}</p>
                                        </div>
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
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection