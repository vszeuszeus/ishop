@extends('layouts.app')

@section('content')
    <div class="maincontent contentbord">

        <div class="container containersize1200">

            <div class="row">

                @include('admin.leftMenu')


                <div class="col-xs-12 col-md-9 col-lg-10">

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
                                <div class="form_label">Телефон:</div>
                                <div class="wr_input_cont">
                                    <input type="text" class="input_content" placeholder="+79089045566">
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

                            <div class="title_form">Платежные данные:</div>

                            <div class="wrap_group">
                                <div class="form_label">WebMoney:</div>
                                <div class="wr_input_cont">
                                    <input type="text" class="input_content" placeholder="Татьяна">
                                </div>
                            </div>
                            <div class="wrap_group">
                                <div class="form_label">Qiwi:</div>
                                <div class="wr_input_cont">
                                    <input type="text" class="input_content" placeholder="email@mail.ru">
                                </div>
                            </div>
                            <div class="wrap_group">
                                <div class="form_label">Яндекс деньги</div>
                                <div class="wr_input_cont">
                                    <input type="text" class="input_content" placeholder="+79089045566">
                                </div>
                            </div>
                            <div class="wrap_group">
                                <div class="form_label">Bitcoin:</div>
                                <div class="wr_input_cont">
                                    <input type="text" class="input_content" placeholder="*********">
                                </div>
                            </div>

                            <input type="submit" class="send" value="Сохранить">

                        </form>

                    </div><!--wrap_block_form-->

                </div><!--col-md-9-->
            </div><!--row-->

        </div>

    </div><!--maincontent-->

@endsection
