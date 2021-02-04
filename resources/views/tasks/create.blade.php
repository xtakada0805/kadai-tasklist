@extends('layouts.app')

@section('content')
    <h1>新規作成</h1>
    <table class="row">
        <div class="col-6">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
                <div class="form-group">
                    {!! Form::label('status', '状態:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('content', 'やること:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('追加', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </table>
@endsection