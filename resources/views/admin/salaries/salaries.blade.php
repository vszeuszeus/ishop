@extends('layouts.app')

@section('content')
    <div class="maincontent contentbord">

        <div class="container containersize1200">

            <div class="row">

                @include('admin.leftMenu')




                <div class="col-xs-12 col-md-9 col-lg-10">

                    <div class="titlecontent">продажи</div>

                    <div class="statist_block">
                        <div class="statist_head">
                            <div class="statist_title">Статистика за:</div>
                            <div class="statist_time">
                                <a href="#">Сегодня</a>
                                <a href="#">Неделю</a>
                                <a href="#" class="activ">Месяц</a>
                                <a href="#">Квартал</a>
                                <a href="#">Сегодня</a>
                                <a href="#">Выбрать период</a>
                            </div>
                        </div>
                        <div class="statist_body statist_body_type2">
                            <div class="block_graf">
                                <div class="form_label lab_size">Баланс:3000 р.</div>
                                <a href="#" class="btn_inl">Вывести средства</a>
                            </div>
                            <div class="block_graf">
                                <div class="form_label lab_size">Требуется залог:3000 р.</div>
                                <a href="#" class="btn_inl">Оплатить залог</a>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                        <div class="img_graff">
                            <img src="images/gr3.jpg" alt="">
                        </div>
                    </div><!--statist_block-->


                    <div class="statist_block">
                        <div class="statist_head">
                            <div class="statist_title">История движения средств за:</div>
                            <div class="statist_time">
                                <a href="#">Сегодня</a>
                                <a href="#">Неделю</a>
                                <a href="#" class="activ">Месяц</a>
                                <a href="#">Квартал</a>
                                <a href="#">Сегодня</a>
                                <a href="#">Выбрать период</a>
                            </div>
                        </div>

                    </div><!--statist_block-->



                    <div class="wrap_block_ticket_select">
                        <div class="wrap_group_inl">
                            <div class="form_label lab_size_inl">тип операции:</div>

                            <div class="wrap-select selectsizeb">
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
                                    <div class="tabtd">Начисленно на счет</div>
                                    <div class="tabtd">Списано  со счета</div>
                                </div>
                                <div class="tabrow">
                                    <div class="tabtd">01.01.2001</div>
                                    <div class="tabtd"><a href="#" >№123456</a></div>
                                    <div class="tabtd">123456 р.</div>
                                    <div class="tabtd"></div>
                                </div>

                                <div class="tabrow">
                                    <div class="tabtd">01.01.2001</div>
                                    <div class="tabtd">Вывод средств</div>
                                    <div class="tabtd"></div>
                                    <div class="tabtd">3000 р.</div>
                                </div>

                                <div class="tabrow">
                                    <div class="tabtd">01.01.2001</div>
                                    <div class="tabtd">Внесен залог</div>
                                    <div class="tabtd">123456 р.</div>
                                    <div class="tabtd"></div>
                                </div>

                                <div class="tabrow">
                                    <div class="tabtd">01.01.2001</div>
                                    <div class="tabtd">Внесен залог</div>
                                    <div class="tabtd">123456 р.</div>
                                    <div class="tabtd"></div>
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
