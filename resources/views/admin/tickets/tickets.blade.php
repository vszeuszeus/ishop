@extends('layouts.app')

@section('content')
    <div class="maincontent contentbord">

        <div class="container containersize1200">

            <div class="row">
                @include('admin.leftMenu')

                <div class="col-xs-12 col-md-9 col-lg-10">

                    <div class="titlecontent">Тикеты</div>

                    <div class="wrap_block_ticket_select">

                        <form id=" ">
                            <div class="wrap_group_inl">
                                <div class="form_label lab_size_inl">Статус:</div>
                                <!--  <div class="wr_input_c">  -->
                                <div class="wrap-select selectsizeb">
                                    <select name="" id="" class="select">
                                        <option value="">10</option>
                                        <option value="">20</option>
                                        <option value="">30</option>
                                        <option value="">40</option>
                                    </select>
                                </div>
                                <!-- </div> -->
                            </div>

                            <div class="wrap_group_inl">
                                <div class="form_label lab_size_inl">Менеджер:</div>
                                <!--  <div class="wr_input_c">  -->
                                <div class="wrap-select selectsizeb">
                                    <select name="" id="" class="select">
                                        <option value="">10</option>
                                        <option value="">20</option>
                                        <option value="">30</option>
                                        <option value="">40</option>
                                    </select>
                                </div>
                                <!--   </div> -->
                            </div>
                        </form>

                    </div>



                    <div class="wrap_block_table">
                        <div class="table_cont table_cont_m">
                            <div class="tabrow">
                                <div class="tabtd">Дата создания</div>
                                <div class="tabtd">№ Тикета</div>
                                <div class="tabtd">Статус</div>
                                <div class="tabtd">Менеджер</div>
                            </div>
                            <div class="tabrow">
                                <div class="tabtd">01.03.2017</div>
                                <div class="tabtd"><a href="#">№123456/ID654321</a></div>
                                <div class="tabtd">Ожидается ответ поддержки</div>
                                <div class="tabtd"><a href="#">Менеджер 1</a></div>
                            </div>
                            <div class="tabrow">
                                <div class="tabtd">01.03.2017</div>
                                <div class="tabtd"><a href="#">№123456/ID654321</a></div>
                                <div class="tabtd">Получен ответ от клиента</div>
                                <div class="tabtd"><a href="#">Менеджер 1</a></div>
                            </div>
                            <div class="tabrow">
                                <div class="tabtd">01.03.2017</div>
                                <div class="tabtd"><a href="#">№123456/ID654321</a></div>
                                <div class="tabtd">Закрыт</div>
                                <div class="tabtd"><a href="#">Менеджер 1</a></div>
                            </div>
                            <div class="tabrow">
                                <div class="tabtd">01.03.2017</div>
                                <div class="tabtd"><a href="#">№123456/ID654321</a></div>
                                <div class="tabtd">Закрыт</div>
                                <div class="tabtd"><a href="#">Менеджер 1</a></div>
                            </div>
                        </div>
                    </div><!--wrap_block_table-->

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
