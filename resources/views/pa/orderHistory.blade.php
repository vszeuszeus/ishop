@extends('layouts.app')

@section('content')
    <div class="maincontent">

        <div class="container containersize1200">

            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Главная /</a></li>
                        <li>личный кабинет /</li>
                        <li><span>Поддержка</span></li>
                    </ul>
                </div>
            </div>

            <div class="row">

                @include('pa.leftMenu')



                <div class="col-xs-12 col-md-9 col-lg-10">

                    <div class="title_block mb50">
                        <div class="titlecontent">история заказов</div>
                        <a href="#" class="btn_type14">Проверить заказ</a>
                        <div class="clearfix"></div>
                    </div>


                    <div class="wrap_block_ticket_select">
                        <div class="wrap_group_inl">
                            <div class="form_label_type2 lab_size_inl  form_label_siz20">Статус:</div>

                            <div class="wrap-select selectsizemid">
                                <select name="" id="" class="select">
                                    <option value="">Все</option>
                                    <option value="">20</option>
                                    <option value="">30</option>
                                    <option value="">40</option>
                                </select>
                            </div>

                        </div>

                        <div class="wrap_group_inl">
                            <div class="form_label_type2 lab_size_inl  form_label_siz20">Сервисы:</div>

                            <div class="wrap-select selectsizemid">
                                <select name="" id="" class="select">
                                    <option value="">Все</option>
                                    <option value="">20</option>
                                    <option value="">30</option>
                                    <option value="">40</option>
                                </select>
                            </div>

                        </div>
                    </div>












                    <div class="wrap_group_input">

                        <div class="wrap_block_table">

                            <div class="table_cont table_type1">
                                <div class="tabrow">
                                    <div class="tabtd">Дата</div>
                                    <div class="tabtd">Номер заказа</div>
                                    <div class="tabtd">ID платежа</div>
                                    <div class="tabtd">Категория</div>
                                    <div class="tabtd">Товар</div>
                                    <div class="tabtd">Цена</div>
                                    <div class="tabtd">Статус</div>
                                    <div class="tabtd">Данные заказа</div>
                                </div>
                                <div class="tabrow">
                                    <div class="tabtd">01.01.2001</div>
                                    <div class="tabtd">№123456</div>
                                    <div class="tabtd">ID654321</div>
                                    <div class="tabtd">ICQ</div>
                                    <div class="tabtd">123456</div>
                                    <div class="tabtd"><span class="tdred">100</span></div>
                                    <div class="tabtd">
                                        <a href="#" class="statustd stat_t1">новый</a>
                                    </div>
                                    <div class="tabtd">
                                        <span class="tdblack">-</span>
                                        <!--                       <a href="#" class="icon_td watch_noactiv"></a> -->
                                    </div>
                                </div>

                                <div class="tabrow">
                                    <div class="tabtd">01.01.2001</div>
                                    <div class="tabtd">№123456</div>
                                    <div class="tabtd">ID654321</div>
                                    <div class="tabtd">Jabber</div>
                                    <div class="tabtd">123456</div>
                                    <div class="tabtd"><span class="tdred">200</span></div>
                                    <div class="tabtd">
                                        <a href="#" class="statustd stat_t2">Оплачен</a>
                                    </div>
                                    <div class="tabtd">
                                        <span class="tdblack">-</span>
                                        <!--       <a href="#" class="icon_td watch_noactiv"></a> -->
                                    </div>
                                </div>

                                <div class="tabrow">
                                    <div class="tabtd">01.01.2001</div>
                                    <div class="tabtd">№123456</div>
                                    <div class="tabtd">ID654321</div>
                                    <div class="tabtd">ICQ</div>
                                    <div class="tabtd">123456</div>
                                    <div class="tabtd"><span class="tdred">300</span></div>
                                    <div class="tabtd">
                                        <a href="#" class="statustd stat_t1">не оплачен</a>
                                    </div>
                                    <div class="tabtd">
                                        <!--     <span class="tdblack">-</span> -->
                                        <a href="#" class="icon_td watch"></a>
                                    </div>
                                </div>

                                <div class="tabrow">
                                    <div class="tabtd">01.01.2001</div>
                                    <div class="tabtd">№123456</div>
                                    <div class="tabtd">ID654321</div>
                                    <div class="tabtd">Telegram</div>
                                    <div class="tabtd">123456</div>
                                    <div class="tabtd"><span class="tdred">100</span></div>
                                    <div class="tabtd">
                                        <a href="#" class="statustd stat_t3">Проблемный</a>
                                    </div>
                                    <div class="tabtd">
                                        <span class="tdblack">-</span>
                                        <!--      <a href="#" class="icon_td watch_noactiv"></a> -->
                                    </div>
                                </div>

                                <div class="tabrow">
                                    <div class="tabtd">01.01.2001</div>
                                    <div class="tabtd">№123456</div>
                                    <div class="tabtd">ID654321</div>
                                    <div class="tabtd">Telegram</div>
                                    <div class="tabtd">123456</div>
                                    <div class="tabtd"><span class="tdred">100</span></div>
                                    <div class="tabtd">
                                        <a href="#" class="statustd stat_t1">Оплачен не полностью</a>
                                    </div>
                                    <div class="tabtd">
                                        <span class="tdblack">-</span>
                                        <!--    <a href="#" class="icon_td watch_noactiv"></a> -->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div><!--wrap_group_input-->


                    <div class="pagination">
                        <div class="count_list">
                            <div class="label_count">Показывать по: </div>
                            <div class="wrap-select">
                                <select name="" id="" class="select">
                                    <option value="">10</option>
                                    <option value="">20</option>
                                    <option value="">30</option>
                                    <option value="">40</option>
                                </select>
                            </div>
                        </div>
                        <ul class="pagination_ul">
                            <li>
                                <a href="#" class="active">1</a>
                            </li>
                            <li>
                                <a href="#" class="">2</a>
                            </li>
                            <li>
                                <a href="#" class="">...</a>
                            </li>
                            <li>
                                <a href="#" class="">7</a>
                            </li>
                            <li>
                                <a href="#" class="">8</a>
                            </li>
                        </ul>
                    </div>














                </div><!--col-md-9-->
            </div><!--row-->

        </div>

    </div><!--maincontent-->

@endsection
