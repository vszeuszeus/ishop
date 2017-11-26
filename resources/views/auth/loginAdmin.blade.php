@extends('layouts.app')

@section('content')
    <div class="maincontent">

        <div class="container containersize1200">
            <div class="row">
                <div class="col-xs-12 col-md-9 col-lg-9 col-offset-lg-1  col-offset-md-0">
                    <div class="wrap_account">
                        <div class="titlecontent">Администрация</div>
                        <form action="{{route('login')}}" method="POST" >
                            {{ csrf_field() }}
                            <div class="wrap_group_input account_input_block">
                                <input type="text" name="login" value="{{ old('login') }}" class="input_content {{ $errors->has('login') ? ' has-error' : '' }}" placeholder="Логин">
                                @if ($errors->has('login'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('login') }}</strong>
                                    </span>
                                @endif
                                <input type="password" name="password" class="input_content {{ $errors->has('password') ? ' has-error' : '' }}" placeholder="Пароль">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <div class="block_btn_type3 row">
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
