@extends('layouts.app')


@section('content')
    <div class="text-center">
        <h1>ログイン</h1>
    </div>
    
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            {!! Form::open(['route' => 'login.post']) !!}
            
                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::text('email', old('email'), ['class' => 'form-control', 'placeholder' => 'メールアドレスを入力']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::text('password', old('Password'), ['class' => 'form-control', 'placeholder' => 'パスワードを入力']) !!}
                </div>
                
                {!! Form::submit('ログイン', ['class' => 'btn btn-primary btn-block']) !!}
                
            {!! Form::close() !!}
            
            <!--ユーザー登録ページ-->
            <p class="mt-2">新規登録はこちら {!! link_to_route('signup.get', '登録') !!}</p>
            
        </div>
        
    </div>

@endsection
