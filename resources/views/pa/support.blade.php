@extends('layouts.app')

@section('content')
    <div class="maincontent">

        <div class="container containersize1200">

            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Главная /</a></li>
                        <li><a href="#">личный кабинет /</a></li>
                        <li><span>поддержка</span></li>
                    </ul>
                </div>
            </div>

            <div class="row">

                @include('pa.leftMenu')

                <div class="col-xs-12 col-md-9 col-lg-10">

                    <div class="titlecontent">поддержка</div>
                    <div class="resalt_order">Обратиться в поддержку</div>




                    <div class="wrap_group_input">

                        <form id=" ">
                            <div class="wrap_group_inlmidd">
                                <div class="form_label lab_size_block">Номер заказа:</div>
                                <div class="block_formitem">
                                    <input type="text" class="input_content">
                                </div>
                            </div>

                            <div class="wrap_group_inlmidd">
                                <div class="form_label lab_size_block">id платежа:</div>
                                <div class="block_formitem">
                                    <input type="text" class="input_content">
                                </div>
                            </div>
                            <div class="wrap_group_inlmidd wr_btn_heig2">
                                <input type="submit" class="btn_type14" value="Проверка платежа">
                            </div>

                        </form>

                    </div><!--wrap_group_input-->


                    <div class="wrap_group_input">

                        <div class="titlecontent">мои обращения</div>

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
                        </div>



                        <div class="wrap_block_table">

                            <div class="table_cont table_type1">
                                <div class="tabrow">
                                    <div class="tabtd">Дата создания</div>
                                    <div class="tabtd"># Тикета</div>
                                    <div class="tabtd">Статус</div>
                                </div>
                                <div class="tabrow">
                                    <div class="tabtd">01.03.2017</div>
                                    <div class="tabtd">№123456/ID654321</div>
                                    <div class="tabtd">Ожидается ответ поддержки</div>
                                </div>
                                <div class="tabrow">
                                    <div class="tabtd">01.03.2017</div>
                                    <div class="tabtd">№123456/ID654321</div>
                                    <div class="tabtd">Получен ответ от клиента</div>
                                </div>
                                <div class="tabrow">
                                    <div class="tabtd">01.03.2017</div>
                                    <div class="tabtd">№123456/ID654321</div>
                                    <div class="tabtd">Закрыт</div>
                                </div>
                                <div class="tabrow">
                                    <div class="tabtd">01.03.2017</div>
                                    <div class="tabtd">№123456/ID654321</div>
                                    <div class="tabtd">Ожидается ответ поддержки</div>
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
