@extends('layout')

@section('page-title','Bryan Gruneberg')

@section('content')
    <div class="row justify-content-center pt-3">
        <div class="col-12 align-self-center">
            <div class="card border-success">
                <div class="card-header">/bryangruneberg/$</div>
                <div class="card-body">
                    <h4 class="card-title">I'm Bryan. </h4>
                    <div class="row">
                        <div class="col-2">
                            <img src="/images/bryan.jpg" class="img-fluid">
                        </div>
                        <div class="col-10">
                            <code>I'm the Head of Technology for the Amazee Labs Global Maintenance team.</code>
                            <hr>
                            <p class="card-text">
                                On a day-to-day basis I get to work alongside a team of talented, creative, and
                                committed technologists, developers, desigers, and product owners.
                                Together, we look after a large number of (mostly) Drupal sites that come from the
                                Amazee Labs production teams in Zurich and Austin. Our mission
                                is to make sure that once a beautiful and fresh Drupal site has been launched it
                                continues to be wonderful as time goes by.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center pt-3">
        <div class="col-12 align-self-center">
            <div class="card border-success">
                <div class="card-header">/bryangruneberg/other-projects/$</div>
                <div class="card-body">
                    <h4 class="card-title text-warning">Other Projects</h4>
                    <div class="row">
                        <div class="col">
                            <p class="card-text">
                                Besides my work with Amazee Labs I am also involved in several other ventures where my
                                roles
                                include business ideation, structure, strategy, founder mentoring, coding, and DevOps.
                            </p>
                            <p class="card-text">
                                In development:
                            </p>
                            <div class="list-group">
                                <a href="#crypsonite"
                                   class="list-group-item list-group-item-action flex-column align-items-start"
                                   id="crypsonite">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Crypsonite</h5>
                                        <span class="oi oi-star">
                                          </span></small>
                                    </div>
                                    <p class="mb-1">
                                        My personal foray into investing in traditional markets (equities, commodities,
                                        currency, etc) as well as selected
                                        cryptocurrency markets and blockchain-focused companies.
                                    </p>
                                </a>
                                <a href="#garidev"
                                   class="list-group-item list-group-item-action flex-column align-items-start"
                                   id="garidev">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Garidev</h5>
                                        <span class="oi oi-star">
                                          </span></small>
                                    </div>
                                    <p class="mb-1">
                                        A technology consultancy under active development.
                                    </p>
                                </a>
                                <a href="/jiracat"
                                   class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">JIRACat</h5>
                                        <span class="oi oi-link-intact">
                                          </span></small>
                                    </div>
                                    <p class="mb-1">
                                        A UNIX-style CLI tool designed to make daily life with JIRA more unixy.
                                    </p>
                                </a>
                                <a href="http://www.thriveacademy.co.za/" target="_new"
                                   class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Thrive Academy</h5>
                                        <span class="oi oi-external-link">
                                          </span></small>
                                    </div>
                                    <p class="mb-1">
                                        Thrive Academy is a centre that offers individualised educational opportunities
                                        for primary and secondary school learners, ranging
                                        from one-on-one tutoring and homeschool subject lessons to group tutorials and
                                        workshops.
                                    </p>
                                </a>
                                <a href="http://www.workshoporange.co.uk/" target="_new"
                                   class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Workshop Orange</h5>
                                        <span class="oi oi-external-link">
                                          </span></small>
                                    </div>
                                    <p class="mb-1">
                                        Workshop Orange is a micro-incubator for SAAS projects that I am building with
                                        other coders, designers, and entrepreneurs.
                                        It is self-funded and the project work is artisanal in nature. Labours of love,
                                        through to entrepreneurial opportunities.
                                    </p>
                                </a>
                            </div>
                            <hr>
                            <p class="card-text">
                                Retired, resigned, pivoted
                            </p>
                            <div class="list-group">
                                <a href="http://daddysdeals.co.za" target="_new"
                                   class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Daddy's Deals</h5>
                                        <span class="oi oi-external-link">
                                          </span></small>
                                    </div>
                                    <p class="mb-1">
                                        Daddy's Deals is one of the larger ecommerce stores in South Africa, focused on
                                        selling discount vouchers for both experiences and products.
                                        As the CTO I was responsibile for strategic technical direction as well as
                                        working with the management team to guide the business. I left
                                        Daddy's Deals on good terms in 2017 when I migrated to the UK.
                                    </p>
                                </a>
                                <a href="#nimbledoo"
                                   class="list-group-item list-group-item-action flex-column align-items-start"
                                   id="nimbledoo">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Nimbledoo</h5>
                                        <span class="oi oi-media-stop">
                                          </span></small>
                                    </div>
                                    <p class="mb-1">
                                        Nimbledoo was a Drupal-focused consultancy in Cape Town, South Africa. In 2016
                                        pivoted the venture into Perceptum Digital Solutions
                                        but were unable to gain traction.
                                    </p>
                                </a>
                                <a href="#pds"
                                   class="list-group-item list-group-item-action flex-column align-items-start"
                                   id="pds">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Perceptum Digital Solutions</h5>
                                        <span class="oi oi-media-stop">
                                          </span></small>
                                    </div>
                                    <p class="mb-1">
                                        Out of Nimbledoo came Perceptum Digital Solutions. PDS was an attempt to provide
                                        the South African market with PHP-focused development services.
                                        The venture never worked out and we closed the company in 2016.
                                    </p>
                                </a>
                                <a href="#pts"
                                   class="list-group-item list-group-item-action flex-column align-items-start"
                                   id="pts">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Perceptum Thought Squad</h5>
                                        <span class="oi oi-media-stop">
                                          </span></small>
                                    </div>
                                    <p class="mb-1">
                                        Perceptum Thought Squad was a consultancy service I started while working on my
                                        degree in Political Science and Sociology in 2007.
                                        The company grew into Nimbledoo and later back to Perceptum Digital Solutions.
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection