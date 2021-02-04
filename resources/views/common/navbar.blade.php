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
                {{-- メッセージ作成ページへのリンク --}}
                <li class="nav-item">{!! link_to_route('tasks.create', 'やることを追加', [], ['class' => 'nav-link']) !!}</li>
            </ul>
        </div>
    </nav>
</header>