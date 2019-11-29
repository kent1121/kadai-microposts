@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $user->name }}</h3>
                </div>
                <div class="card-body">
                    <img class="rounded img-fluid" src="{{ Gravatar::src($user->email, 500) }}" alt="">
                </div>
            </div>
        </aside>
        <div class="col-sm-8">
            <ul class="nav nav-tabs nav-justified mb-3">
                <li class="nav-item"><a class="nav-link" href="#">Timeline</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Followings</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Followers</a></li>
            </ul>
        </div>
    </div>
@endsection