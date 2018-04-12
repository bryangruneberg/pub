@extends('layout')

@section('page-title','JIRACat')

@section('content')
    <div class="row justify-content-center pt-3" id="jiracat">
        <div class="col-12 align-self-center">
            <div class="card border-success">
                <div class="card-header">/bryangruneberg/jiracat/ $</div>
                <div class="card-body">
                    <h4 class="card-title">JIRACat</h4>
                    <p class="card-text">
                        We're (<a href="http://github.com/bomoko/">http://github.com/bomoko/</a>) building an opensource CLI
                        tool to access JIRA in a Unix-inspired way.
                    </p>
                    <code>
                        jiracat PRJ-123 | grep url | awk '{print $2}' | open
                    </code>
                    <hr>
                    <code>
                        jiracat ls
                    </code>
                    <hr>
                    <code>
                        jiracat logwork PRJ-123 "1h 23m"
                    </code>
                    <hr>
                    <p class="card-text">
                        If any of the above interests you, hopefully our tool will too.
                    </p>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="http://github.com/bryangruneberg/jiracat">GitHub</a>
                            <span class="badge badge-pill">
                                        <a href="http://github.com/bryangruneberg/jiracat" target="_new">
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