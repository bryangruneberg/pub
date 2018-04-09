@extends('layout')

@section('content')
    <div class="row justify-content-center pt-3">
        <div class="col-12 align-self-center">
            <div class="card border-success">
                <div class="card-header">/bryangruneberg/patreon/ $</div>
                <div class="card-body">
                    <h4 class="card-title">Proud on <a href="https://www.patreon.com/" target="_new">patreon</a></h4>
                    <p class="card-text">
                        Patreon allows <a href="https://www.patreon.com/" target="_new">makers</a> to get paid by
                        running a membership business for their fans. I benefit
                        greatly from the work done by these people.
                    </p>
                    <div class="row">
                        <div class="col">
                            <div class="card bg-light mb-3" style="max-width: 20rem;">
                                <div class="card-header">Taylor Otwell</div>
                                <div class="card-body">
                                    <p class="card-text justify-content-around">
                                        <img src="/images/taylor.png" class="img-thumbnail float-left mr-2">
                                        <a href="https://www.patreon.com/taylorotwell/overview" target="_new">Taylor</a>
                                        is creating Laravel. I also use Forge and
                                        Envoyer. Taylor pours his heart into his work,
                                        and the result is a solid & professional under the hood, and simple, elegant,
                                        beauty for developers.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card bg-light mb-3" style="max-width: 20rem;">
                                <div class="card-header">Nuno Maduro</div>
                                <div class="card-body">
                                    <p class="card-text justify-content-around">
                                        <img src="/images/nuno.jpeg" class="img-thumbnail float-left mr-2">
                                        <a hre="https://www.patreon.com/nunomaduro/overview">Nuno</a> is the creator and
                                        maintainer of tools such as Laravel Zero, and Collision.
                                        His work helps me create my own
                                        CLI tools which empowers my life. His code is clean, crisp, and complete.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card bg-light mb-3" style="max-width: 20rem;">
                                <div class="card-header">Evan You</div>
                                <div class="card-body">
                                    <p class="card-text justify-content-around">
                                        <img src="/images/evan.jpeg" class="img-thumbnail float-left mr-2">
                                        <a href="https://www.patreon.com/evanyou/overview">Evan</a> is building Vue.js -
                                        Linked closely in spirit and kind to Laravel, Evan
                                        lives his work.
                                        Not that there is anything wrong with React, but I like to support the underdog.
                                        Freedom is choice.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection