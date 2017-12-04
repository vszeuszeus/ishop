<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>source</title>
    <link rel="shortcut icon" href="{{secure_asset('favicon.ico')}}" type="image/x-icon">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{secure_asset('css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{secure_asset('slick/slick.css')}}" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{secure_asset('slick/slick-theme.css')}}" type="text/css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="{{secure_asset('css/stylem.css')}}">
    <link rel="stylesheet" type="text/css" href="{{secure_asset('css/font-awesome.min.css')}}">
    <!--[if IE 9]>
    <link rel="stylesheet" type="text/css" href="{{secure_asset('css/ie9.css')}}">
    <script type="text/javascript" src="{{secure_asset('js/placeholder.js')}}"></script>
    <![endif]-->
    <!-- Styles -->

</head>
<body>
<div id="wrapper">
    <div class="wrapper">
        <header class="header header_m">

            <div class="container containersize1200">
                <div class="row">
                    <div class="col-xs-4">
                        <div class="logo_top">
                            <a href="{{route('mainPage')}}"><img src="{{secure_asset('images/logo.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xs-8">
                        @guest()
                            <div class="user_log">
                                <div class="title_user_log">Личный кабинет</div>
                                <form id="form" method="POST" action="{{route('login')}}">
                                    {{ csrf_field() }}
                                    <input class="input" value="{{ old('login') }}" name="login" type="text" placeholder="Логин">
                                    @if ($errors->has('login'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('login') }}</strong>
                                    </span>
                                    @endif
                                    <input class="input" name="password" type="password" placeholder="Пароль">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                    <input type="submit" class="send_button" value="Войти">
                                    <a style="cursor: pointer;" class="send_button" href="{{route('register')}}">Регистрация</a>
                                </form>
                            </div>
                        @else
                            <div class="autoris_login">
                                <div class="name_user_aut">Здравствуйте, {{Auth::user()->name}}</div>
                                <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn_user">Выйти</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        @endguest
                    </div>
                    <div class="col-xs-12">
                        <div class="menu_center_group">
                            <div class="main_menu">
                                <ul>
                                    <li><a href="{{route('catalog')}}">Каталог</a></li>
                                    <li><a href="{{route('checkOrder')}}">Проверка заказов</a></li>
                                    <li><a href="{{route('howBuy')}}">Как купить</a></li>
                                    <li><a href="{{route('reviews')}}">Отзывы</a></li>
                                    <li><a href="{{route('news')}}">Новости</a></li>
                                    @guest()
                                        <li><a href="{{route('support')}}">Поддержка</a></li>
                                    @else
                                         <li><a href="{{route('supportLc')}}">Поддержка</a></li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')

        <div class="footer">

            <div class="container containersize1200">

                <div class="row">

                    <div class="col-xs-12 col-md-4 col-lg-6">

                        <a href="#" class="logo_foot"><img src="{{secure_asset('images/logo_foot.png')}}" alt=""></a>

                        <div class="copy">(c) Название 2017</div>

                    </div><!--col-xs-12-->

                    <div class="col-xs-12 col-md-8 col-lg-6">

                        <div class="footmenu_wr">

                            <ul class="foot_menu">

                                <li><a href="#">Vkontakte</a></li>

                                <li><a href="#">Skype</a></li>

                                <li><a href="#">Whatsapp</a></li>

                                <li><a href="#">Viber</a></li>

                                <li><a href="#">Мой Мир @Mail.ru</a></li>

                                <li><a href="#">Telegram</a></li>

                                <li><a href="#">Одноклассники</a></li>

                                <li><a href="#">ICQ</a></li>

                                <li><a href="#">Jabber</a></li>

                            </ul>

                        </div>

                    </div><!--col-xs-12-->

                </div>

            </div>

        </div><!--footer-->
    </div>
</div>
<script src="{{secure_asset('js/app.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{secure_asset('slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{secure_asset('js/raty/jquery.raty.min.js')}}"></script>
<script type="text/javascript" src="{{secure_asset('js/jscharts.js')}}"></script>
<script type="text/javascript" src="{{secure_asset('js/init.js')}}"></script>
</body>
</html>
