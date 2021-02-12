@extends('layouts.app')

@section('content')
    @if(Auth::check())
        <h3 class="card-title">ログイン済</h3>
        <div class="col-sm-8">
            @include('tasks.index')
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>ログインはこちら</h1>
            </div>
        </div>
    @endif

@endsection
