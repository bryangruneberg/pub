@extends('layout')

@section('page-title','Laragoon')

@section('content')
    <div class="row justify-content-center pt-3" id="laragoon">
        <div class="col-12 align-self-center">
            <div class="card border-success">
                <div class="card-header">/bryangruneberg/laragoon/ $</div>
                <div class="card-body">
                    <h4 class="card-title">Laragoon</h4>
                    <p class="card-text">
                        We're (<a href="http://github.com/bomoko/">http://github.com/bomoko/</a>) building a package that helps make it easy to run Laravel apps on amazee.io's Lagoon.
                    </p>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="http://github.com/bryangruneberg/laragoon">GitHub</a>
                            <span class="badge badge-pill">
                                        <a href="http://github.com/bryangruneberg/laragoon" target="_new">
                                            <img src="/images/GitHub-Mark-Light-32px.png">
                                        </a>
                                    </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
