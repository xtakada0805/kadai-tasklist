@extends('layouts.app')

@section('content')
    <h1>詳細</h1>
    <h2>{{ $task->content }}</h2>
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>状態</th>
            <td>{{ $task->status }}</td>
        </tr>
        <tr>
            <th>やること</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    {!! link_to_route('tasks.edit', '編集', ['task' => $task->id], ['class' => 'btn btn-light']) !!}
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection