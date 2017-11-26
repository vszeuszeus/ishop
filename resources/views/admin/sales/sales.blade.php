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
                        <div class="statist_body">
                            <div class="block_graf">
                                <div class="form_label lab_size_block">Заказы:</div>
                                <div class="img_graff">
                                    <!--  <img src="images/gr1.jpg" alt=""> -->
                                    <div id="chartcontainer" class="chartcontainer">hhh</div>
                                </div>
                            </div>
                            <div class="block_graf">
                                <div class="form_label lab_size_block">оборот:</div>
                                <div class="img_graff">
                                    <img src="images/gr2.jpg" alt="">
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div><!--statist_block-->



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
                                    <div class="tabtd">Зарплата</div>
                                    <div class="tabtd">Статус</div>
                                    <div class="tabtd">Начисленно на счет</div>
                                    <div class="tabtd">Менеджер</div>
                                </div>
                                <div class="tabrow">
                                    <div class="tabtd">01.01.2001</div>
                                    <div class="tabtd"><a href="#" >№123456</a></div>
                                    <div class="tabtd">ID654321</div>
                                    <div class="tabtd">ICQ</div>
                                    <div class="tabtd"><a href="#" >123456</a></div>
                                    <div class="tabtd"><span class="tdred">100</span></div>
                                    <div class="tabtd">
                                        <a href="#" class="statustd stat_t1">новый</a>
                                    </div>
                                    <div class="tabtd">осталось  2 дня..</div>
                                    <div class="tabtd"><a href="#">Менеджер 1</a></div>
                                </div>

                                <div class="tabrow">
                                    <div class="tabtd">01.01.2001</div>
                                    <div class="tabtd"><a href="#" >№123456</a></div>
                                    <div class="tabtd">ID654321</div>
                                    <div class="tabtd">ICQ</div>
                                    <div class="tabtd"><a href="#" >123456</a></div>
                                    <div class="tabtd"><span class="tdred">200</span></div>
                                    <div class="tabtd">
                                        <a href="#" class="statustd stat_t2">Оплачен</a>
                                    </div>
                                    <div class="tabtd">100p.</div>
                                    <div class="tabtd"><a href="#">Менеджер</a></div>
                                </div>

                                <div class="tabrow">
                                    <div class="tabtd">01.01.2001</div>
                                    <div class="tabtd"><a href="#" >№123456</a></div>
                                    <div class="tabtd">ID654321</div>
                                    <div class="tabtd">ICQ</div>
                                    <div class="tabtd"><a href="#" >123456</a></div>
                                    <div class="tabtd"><span class="tdred">300</span></div>
                                    <div class="tabtd">
                                        <a href="#" class="statustd stat_t1">не оплачен</a>
                                    </div>
                                    <div class="tabtd">-</div>
                                    <div class="tabtd"><a href="#">Менеджер</a></div>
                                </div>

                                <div class="tabrow">
                                    <div class="tabtd">01.01.2001</div>
                                    <div class="tabtd"><a href="#" >№123456</a></div>
                                    <div class="tabtd">ID654321</div>
                                    <div class="tabtd">ICQ</div>
                                    <div class="tabtd"><a href="#" >123456</a></div>
                                    <div class="tabtd"><span class="tdred">100</span></div>
                                    <div class="tabtd">
                                        <a href="#" class="statustd stat_t3">Проблемный</a>
                                    </div>
                                    <div class="tabtd">-</div>
                                    <div class="tabtd"><a href="#">Менеджер</a></div>
                                </div>

                                <div class="tabrow">
                                    <div class="tabtd">01.01.2001</div>
                                    <div class="tabtd"><a href="#" >№123456</a></div>
                                    <div class="tabtd">ID654321</div>
                                    <div class="tabtd">ICQ</div>
                                    <div class="tabtd"><a href="#" >123456</a></div>
                                    <div class="tabtd"><span class="tdred">100</span></div>
                                    <div class="tabtd">
                                        <a href="#" class="statustd stat_t1">Оплачен не полностью</a>
                                    </div>
                                    <div class="tabtd">-</div>
                                    <div class="tabtd"><a href="#">Менеджер</a></div>
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
