@extends('layout')

@section('page-title','Bleats')

@section('content')
    @auth

    @endauth

    <div class="row justify-content-center pt-3">
        <div class="col-12 align-self-center">
            <form method="GET">
                <input type="submit" name="type" value="all" class="btn btn-@if($type == "all" || !$type)primary @else secondary @endif">
                <input type="submit" name="type" value="pictures" class="btn btn-@if($type == "pictures")primary @else secondary @endif">

                <div class="float-right">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="published" value="1" @if($published) checked @endif>
                        Published
                    </label>
                </div>
            </form>
        </div>
    </div>

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
                @include('bleats.bleat', ['bleat' => $bleat])
            </div>
        </div>
    @endforeach
    <div class="row justify-content-center pt-3">
        <div class="col-5 align-self-center">
            {{ $bleats->links() }}
        </div>
    </div>
@endsection