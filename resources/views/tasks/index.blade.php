@extends('layouts.app')

@section('content')
    <h1>タスク一覧</h1>
    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>状態</th>
                    <th>やること</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection