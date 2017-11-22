@extends('layouts.app')

@section('content')
    <div class="maincontent">

        <div class="container containersize1200">

            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb">
                        <li><a href="{{route('mainPage')}}">Главная /</a></li>
                        <li><span>проверка заказа</span></li>
                    </ul>
                </div>
            </div>

            <div class="row">

                @include('pa.leftMenu')

                <div class="col-xs-12 col-md-8 col-lg-7">

                    <div class="titlecontent">Проверка заказа</div>


                    <div class="wrap_block_form">
                        <form action="">

                            <div class="wrap_group_l">
                                <div class="form_label lab_size_block">Номер заказа:</div>
                                <div class="block_formitem">
                                    <input type="text" class="input_content">
                                </div>
                            </div><!--wrap_group-->
                            <div class="wrap_group_l">
                                <div class="form_label lab_size_block">Id платежа:</div>
                                <div class="block_formitem">
                                    <input type="text" class="input_content">
                                </div>
                            </div><!--wrap_group-->

                            <input type="submit" class="send" value="Проверить заказ">
                        </form>

                    </div>

                </div><!--col-md-9-->
            </div><!--row-->

        </div>

    </div><!--maincontent-->

    <div class="resalt_content">
        <div class="container containersize1200">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-lg-7 col-lg-offset-2 col-md-offset-3 col-xs-offset-0">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-6">
                            <div class="item_res item_res_type1">
                                <div class="title_res_order"> Заказ №654321 ID123456:</div>
                                <div class="status_res_order">Заказ не оплачен</div>
                                <div class="text_res_order">
                                    Заказа с данными реквизитами не оплачен. Пожалуйста, оплатите заказ.
                                </div>
                                <div class="wrap_btn_res_order">
                                    <a href="#" class="btn_res">Оплатить</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-6">
                            <div class="item_res item_res_type2">
                                <div class="title_res_order"> Заказ №654321 ID123456:</div>
                                <div class="status_res_order">Заказ оплачен</div>
                                <div class="text_res_order">
                                    Нажмите на кнопку ниже, чтобы получить заказ:
                                </div>
                                <div class="wrap_btn_res_order">
                                    <a href="#" class="btn_res">Получить заказ</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-6">
                            <div class="item_res item_res_type1">
                                <div class="title_res_order">Заказ №654321 ID123456:</div>
                                <div class="status_res_order status_res_order_dec">Заказ оплачен не полностью</div>
                                <div class="text_res_order">
                                    Вы внесли 3500р., внесите остаток 1200р. удобным для вас способом оплаты.
                                </div>
                                <div class="wrap_btn_res_order">
                                    <a href="#" class="btn_res">Оплатить</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
