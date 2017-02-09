<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        body,html{
            width: 100%;
            height: 100%;
            background-color: #fafafa;
        }
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .navbar-nav.navbar-right li a{
            color: #262737;
        }
        .navbar-nav.navbar-right li a:hover{
            background-color: transparent;
            text-decoration: underline;
        }
    </style>
    @yield('css')

</head>
<body id="app-layout">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header" style="background-color: #f5f5f5;">
            <div class="mdl-layout__header-row">
                <a class="mdl-layout-title" href="{{ url('/') }}" style="color: #262737;text-decoration: none;">albos</a>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href=" {{ url('/music') }} " style="color: #262737;">Music一覧</a>
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">ログイン</a></li>
                            <li><a href="{{ url('/register') }}">新規登録</a></li>
                        @else
                            <style>
                                .dropdown-toggle{
                                    color: #E4E5E8;
                                }
                            </style>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->user_id }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/mypage') }}" style="color: black;"><i class="fa fa-btn fa-sign-out"></i>マイページ</a></li>
                                    <li><a href="{{ url('/logout') }}" style="color: black;"><i class="fa fa-btn fa-sign-out"></i>ログアウト</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </header>

    @yield('content')

    </div>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script defer src="/assets/js/material.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="/assets/js/vue.min.js"></script>
    @yield('javascript')

</body>
</html>
