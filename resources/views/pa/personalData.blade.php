@extends('layouts.app')

@section('content')
    <div class="maincontent">

        <div class="container containersize1200">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Главная /</a></li>
                        <li><span>личный данные</span></li>
                    </ul>
                </div>
            </div>

            <div class="row">

                @include('pa.leftMenu')


                <div class="col-xs-12 col-md-9 col-lg-9 col-offset-lg-10">


                    <div class="titlecontent">Личные данные</div>



                    <div class="wrap_block_form">

                        <form id=" ">
                            <div class="wrap_group">
                                <div class="form_label">Имя:</div>
                                <div class="wr_input_cont">
                                    <input type="text" class="input_content" placeholder="Татьяна">
                                </div>
                            </div>
                            <div class="wrap_group">
                                <div class="form_label">E-mail:</div>
                                <div class="wr_input_cont">
                                    <input type="text" class="input_content" placeholder="email@mail.ru">
                                </div>
                            </div>

                            <div class="wrap_group">
                                <div class="form_label">Пароль:</div>
                                <div class="wr_input_cont">
                                    <input type="password" class="input_content" placeholder="Пароль">
                                </div>
                            </div>
                            <div class="wrap_group">
                                <div class="form_label">Повтор пароля:</div>
                                <div class="wr_input_cont">
                                    <input type="password" class="input_content" placeholder="Пароль">
                                </div>
                            </div>
                            <input type="submit" class="send" value="Сохранить">

                        </form>

                    </div>



                </div><!--col-md-9-->
            </div><!--row-->

        </div>

    </div><!--maincontent-->

@endsection
