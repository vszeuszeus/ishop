@extends('layouts.app')

@section('content')
    <div class="maincontent contentbord">

        <div class="container containersize1200">

            <div class="row">

                @include('admin.leftMenu')

                <div class="col-xs-12 col-md-9 col-lg-10">

                    <div class="titlecontent">Новый чат</div>

                    <div class="wrap_chat_block">
                        <a href="#" class="chat_block chat_block_active chat_bord">Менеджер1</a>
                        <a href="#" class="chat_block chat_bord">Менеджер2</a>
                        <a href="#" class="chat_block chat_bord">Менеджер3</a>
                        <a href="#" class="chat_block chat_bord">Менеджер4</a>
                        <a href="#" class="chat_block chat_bord chat_block_active">Менеджер5</a>
                        <a href="#" class="chat_block chat_bord">Менеджер6</a>
                        <a href="#" class="chat_block chat_bord">Менеджер7</a>
                        <a href="#" class="chat_block chat_bord">Менеджер8</a>
                    </div>

                    <div class="wrap_chat_btn">
                        <form method="POST" action="{{route('storeChat')}}">
                            {{csrf_field()}}
                            <input class="btn_chat" type="submit" value="Создать чат">
                        </form>
                    </div>

                </div><!--col-md-9-->
            </div><!--row-->

        </div>

    </div><!--maincontent-->

@endsection
