@extends('layouts.app')

@section('content')
    <div class="maincontent">

        <div class="container containersize1200">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb">
                        <li><a href="{{route('mainPage')}}">Главная /</a></li>
                        <li><span>личный кабинет</span></li>
                    </ul>
                </div>
            </div>

            <div class="row">

                @include('pa.leftMenu')

                <div class="col-xs-12 col-md-9 col-lg-9 col-offset-lg-1  col-offset-md-0">
                    <div class="wrap_account">
                        <div class="titlecontent">Личный кабинет - ВХОД</div>
                        <form action="{{route('login')}}" method="POST" >
                            {{ csrf_field() }}
                            <div class="wrap_group_input account_input_block">
                                <input type="text" name="login" value="{{ old('email') }}" class="input_content {{ $errors->has('email') ? ' has-error' : '' }}" placeholder="Логин">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <input type="password" name="password" class="input_content {{ $errors->has('password') ? ' has-error' : '' }}" placeholder="Пароль">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Забыли пароль?
                                        </a>
                                    </div>
                                </div>
                                <div class="block_btn_type3 row">
                                    <div class="wrap_order_btn col-xs-12 col-md-6">
                                        <a href="{{route('register')}}" class="order_btn color_r">Зарегистрироваться</a>
                                    </div>
                                    <div class="wrap_order_btn col-xs-12 col-md-6">
                                        <input type="submit" class="order_btn color_r" value="Войти">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!--col-md-9-->

            </div><!--row-->
        </div>
    </div><!--maincontent-->
@endsection
