@extends('layouts.app')

@section('content')
    <div class="maincontent contentbord">

        <div class="container containersize1200">

            <div class="row">

                @include('admin.leftMenu')

                <div class="col-xs-12 col-md-9 col-lg-10">

                    <div class="titlecontent">Менеджеры</div>

                    <div class="wrap_group_input">

                        <div class="wrap_block_table">

                            <div class="table_cont table_type2">
                                <div class="tabrow">
                                    <div class="tabtd">Менеджеры</div>
                                    <div class="tabtd">Дата регистрации</div>
                                    <div class="tabtd">Заказы всего</div>
                                    <div class="tabtd">Заказов доставленно</div>
                                    <div class="tabtd">Текущий залог</div>
                                    <div class="tabtd">Открыто тикетов</div>
                                </div>
                                @foreach($managers as $manager)
                                    <div class="tabrow">
                                        <div class="tabtd"><a href="#">{{$manager->name}}</a></div>
                                        <div class="tabtd">{{$manager->created_at}}</div>
                                        <div class="tabtd"><a href="#">{{count($manager->orders)}}</a></div>
                                        <div class="tabtd"><a href="#">{{$manager->orders_count}}</a></div>
                                        <div class="tabtd"><span class="strtd">{{$manager->deposit or 0}}</span></div>
                                        <div class="tabtd"><span class="strtd">{{$manager->tickets_count}}</span></div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>


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
