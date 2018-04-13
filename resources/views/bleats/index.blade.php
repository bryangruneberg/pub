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
            <div class="col-4 align-self-center">
                <div class="card mb-3">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                @foreach($bleat->pictures as $pic)
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{ $pic->uri }}">
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
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="card-body">
                        @foreach($bleat->)
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                    <div class="card-footer text-muted">
                        {{ $bleat->created_at }}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection