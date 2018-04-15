@extends('layout')

@section('page-title',"Bleat")

@section('content')
    <div class="row justify-content-center pt-3">
        <div class="col-5 align-self-center">
            @include('bleats.bleat', ['bleat' => $bleat])
        </div>
    </div>
@endsection