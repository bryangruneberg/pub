@extends('layout')

@section('page-title','Toots')

@section('content')
    <div class="row justify-content-center pt-3" id="toots">
        <div class="col-12 align-self-center">
            @foreach ($items as $item)
<div class="card mb-3">
    @if($item->get_permalink())
        <div class="card-header">
            <a href="{{ $item->get_permalink() }}" class="card-link">{{ $item->get_permalink() }}</a>
        </div>
    @endif
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-role="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                @foreach($item->get_enclosures() as $enclosure)
                    @if($enclosure->get_link())
                    <div class="carousel-item active">
                        <img class="rounded mx-auto d-block img-fluid" src="{{ $enclosure->get_link() }}">
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="card-body">
        <p class="card-text">
            {!! $item->get_description() !!}
        </p>
    </div>
    <div class="card-footer text-muted">
        {{ $item->get_date('j F Y | g:i a') }}
        <div class="float-right">
            <a href="{{ $item->get_permalink()  }}" target="_new" class="text-primary"><span class="oi oi-external-link"></span></a>
        </div>
    </div>
</div>
            @endforeach
        </div>
    </div>
@endsection