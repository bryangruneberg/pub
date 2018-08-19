@extends('layout')

@section('page-title',"Bleat")

@section('content')
    <div class="row justify-content-center pt-3">
        <div class="col-5 align-self-center">
            <form action="{{action('BleatController@store')}}" method="post">
                @csrf
                <fieldset>
                    <legend>New Bleat</legend>
                    <div class="form-group">
                        <label for="bleat">Bleat</label>
                        <textarea class="form-control @if($errors->has("bleat")) is-invalid @endif" id="bleat" rows="3"
                                  name="bleat">{{ old('bleat') }}</textarea>
                        @if($errors->has('bleat') == 1)
                            <div class="invalid-feedback">{{ $errors->first('bleat') }}</div>
                        @endif
                    </div>
                    <div class="form-group has-success">
                        <label class="form-control-label" for="link">Link (optional)</label>
                        <input type="text" class="form-control @if($errors->has("link")) is-invalid @endif" id="link"
                               name="link" value="{{ old('link') }}">
                        @if($errors->has('link') == 1)
                            <div class="invalid-feedback">{{ $errors->first('link') }}</div>
                        @endif
                    </div>
                    @if(count($unattachedPictures) > 0)
                        <fieldset class="form-group">
                            <legend>Attach Pictures</legend>
                            @foreach($unattachedPictures as $picture)
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="{{ $picture->id }}"
                                               name="pictures[{{ $picture->id }}]" @if(old('pictures.' . $picture->id)) checked @endif>
                                        {{ $picture->title }}
                                        <img src="{{ $picture->uri }}" class="img-thumbnail">
                                    </label>
                                    <hr>
                                </div>
                            @endforeach
                        </fieldset>
                        <hr>
                        <fieldset class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="1" name="published"
                                           @if(old('published')) checked @endif>
                                    Publish
                                </label>
                            </div>
                        </fieldset>
                    @endif
                    <button type="submit" class="btn btn-primary">Submit</button>
                </fieldset>
            </form>
        </div>
    </div>
@endsection