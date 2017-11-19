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
                        <div class="titlecontent">Регистрация</div>
                        <form action="{{route('register')}}" method="POST" >
                            {{ csrf_field() }}
                            <div class="wrap_group_input account_input_block">
                                <input type="text" name="name" value="{{ old('name') }}" class="input_content {{ $errors->has('name') ? ' has-error' : '' }}" placeholder="Имя">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                <input type="text" name="login" value="{{ old('login') }}" class="input_content {{ $errors->has('login') ? ' has-error' : '' }}" placeholder="Login">
                                @if ($errors->has('login'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('login') }}</strong>
                                    </span>
                                @endif
                                <input type="text" name="email" value="{{ old('email') }}" class="input_content {{ $errors->has('email') ? ' has-error' : '' }}" placeholder="Почтовый адрес">
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

                                <input type="password" name="password_confirmation" class="input_content {{ $errors->has('password') ? ' has-error' : '' }}" placeholder="Повторите пароль">
                                <div class="block_btn_type3 row">
                                    <div class="wrap_order_btn col-xs-12 col-md-6">
                                        <input type="submit" class="order_btn color_r" value="Зарегистрироваться">
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
