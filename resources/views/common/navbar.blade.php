<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <!--トップページのリンク-->
        <a class="navbar-brand" href="/">タスク一覧</a>
        <button type="button" class="navbar-toggler" data-toggler="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if(Auth::check())
                    {{-- メッセージ作成ページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('tasks.create', 'やることを追加', [], ['class' => 'nav-link']) !!}</li>
                    
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-driver"></li>
                            <li class="dropdown-item">{!! link_to_route('logout.get', 'ログアウト') !!}</li>
                        </ul>
                    </li>
                @else
                    <!--ユーザー登録-->
                    <li class="nav-item">{!! link_to_route('signup.get', 'ユーザー登録', [], ['class' => 'nav-link']) !!}</li>
                    
                    <!--ログイン-->
                    <li class="nav-item">{!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
                    
                @endif
            </ul>
        </div>
    </nav>
</header>