@extends('layouts.app')

@section('content')
    <div class="container" ng-controller="userController">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>{{ $document->title }}</h2>
                </div>

                <div class="panel-body">
                    <div class="container-fluid">
                        <div> {{ $document->body }}</div>
                        <hr />
                        <ul>
                            <tbody>
                            @foreach($document->adjustments as $user)
                                <li>
                                    {{ $user->email }} on {{ $user->pivot->updated_at->diffForHumans() }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection