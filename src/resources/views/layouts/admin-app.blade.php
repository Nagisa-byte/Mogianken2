<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>勤怠管理システム</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                <img class="header__logo--img" src="{{ asset('images/coachtech.jpg') }}" alt="COACHTECH">
            </a>
            @if(Auth::check() && Auth::user()->admin_status)
            <form action="/admin/logout" method="post">
                @csrf
                <div class="inner__group">
                    <a class="inner__group--item" href="/admin/attendance/list">勤怠一覧</a>
                    <a class="inner__group--item" href="/admin/staff/list">スタッフ一覧</a>
                    <a class="inner__group--item" href="/stamp_correction_request/list">申請一覧</a>
                    <button class="inner__group--item logout-button">
                        ログアウト
                    </button>
                </div>
            </form>
            @endif
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>

</html>