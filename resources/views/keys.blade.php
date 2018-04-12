@extends('layout')

@section('page-title','Public Keys')

@section('content')
    <div class="row justify-content-center pt-2">
        <div class="col-12 align-self-center">
            <div class="card border-success">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            /<a href="/">bryangruneberg</a>/keys/id_rsa.pub$
                        </div>
                        <div class="col-1 text-right">
                            <span class="oi oi-key" title="icon name" aria-hidden="true"></span>
                            <span class="oi oi-terminal" title="icon name" aria-hidden="true"></span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Public SSH Key</h4>
                    <div class="row">
                        <div class="col-12">
                            <p class="card-text">
                                <code>
                                ssh-rsa AAAAB3NzaC1yc2EAAAABJQAAAIEAniAmztcoJsq9tZgxJ9yQOXnFsVJ2ob6nODPGBdD0n8mSsIdagnQyG/hdeo5dc7zh//zJY3neLXT/cJq6Zhe+/MzcD3dXH86BbdBZ1Lgj0r4I7ene25XdVQXjpZdNQ0kvKHlIweb3v10Gy2Fsin3JjyuIoGbDb5eeeCm1HKXiQbE=
                                </code>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="row justify-content-center pt-3">
        <div class="col-11 align-self-center">
            <div class="card border-success">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            /<a href="/">bryangruneberg</a>/keys/pgp.pub$
                        </div>
                        <div class="col-1 text-right">
                            <span class="oi oi-key" title="icon name" aria-hidden="true"></span>
                            <span class="oi oi-document" title="icon name" aria-hidden="true"></span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h4 class="card-title">PGP Key</h4>
                    <div class="row">
                        <div class="col-12">
                            <p class="card-text">
                                <code>
                                    TODO
                                </code>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
@endsection