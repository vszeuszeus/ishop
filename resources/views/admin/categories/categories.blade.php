@extends('layouts.app')

@section('content')
    <div class="maincontent contentbord">

        <div class="container containersize1200">

            <div class="row">
                @include('admin.leftMenu')
                <div class="col-xs-12 col-md-9 col-lg-10">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="title_block mb50">
                                <div class="titlecontent">Товары</div>
                                <a href="#" class="btn_type14">Добавить группу</a>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-12 col-lg-3">
                            <div class="block_aside_ins">

                                <div class="form_label lab_size_block">категории</div>

                                <div class="block_formitem">
                                    <ul  class="aside_ul">
                                        @foreach($categories as $oneCategory)
                                            <li><a href="{{route('category.show', $oneCategory)}}">{{$oneCategory->name}}</a>
                                                <div class="hover_td">
                                                    <a href="{{route('category.edit', $oneCategory)}}" class="icon_td chan"></a><a href="{{route('category.delete', $oneCategory)}}" class="icon_td delete"></a>
                                                </div>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                                <div class="block_formitem">
                                    <a href="{{route('category.create')}}" class="btn_type14">Добавить категорию</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-12 col-lg-9">
                            <div class="form_label lab_size_block">Категория: {{$category->name}}</div>

                            <div class="wrap_block_table">

                                <div class="table_cont">
                                    <div class="tabrow">
                                        <div class="tabtd">Группа  товаров:</div>
                                        <div class="tabtd">Стоимость:</div>
                                        <div class="tabtd">Товаров добавлено</div>
                                        <div class="tabtd">Товаров осталось</div>
                                        <div class="tabtd">Активность</div>
                                        <div class="tabtd">Товаров  на подерации</div>
                                        <div class="tabtd">Действия</div>
                                    </div>
                                    <div class="tabrow">
                                        <div class="tabtd"><a href="#">6-тизначный</a></div>
                                        <div class="tabtd">100</div>
                                        <div class="tabtd">10</div>
                                        <div class="tabtd">1</div>
                                        <div class="tabtd">
                                            <a href="#" class="icon_td watch_noactiv"></a>
                                        </div>
                                        <div class="tabtd">Статус</div>
                                        <div class="tabtd">
                                            <a href="#" class="icon_td chan"></a>
                                            <a href="#" class="icon_td delete"></a>
                                        </div>
                                    </div>
                                    <div class="tabrow">
                                        <div class="tabtd"><a href="#">7-тизначный</a></div>
                                        <div class="tabtd">100</div>
                                        <div class="tabtd">10</div>
                                        <div class="tabtd">2</div>
                                        <div class="tabtd">
                                            <a href="#" class="icon_td watch"></a>
                                        </div>
                                        <div class="tabtd">Статус</div>
                                        <div class="tabtd">
                                            <a href="#" class="icon_td chan"></a>
                                            <a href="#" class="icon_td delete"></a>
                                        </div>
                                    </div>
                                    <div class="tabrow">
                                        <div class="tabtd"><a href="#">8-тизначный</a></div>
                                        <div class="tabtd">100</div>
                                        <div class="tabtd">10</div>
                                        <div class="tabtd">3</div>
                                        <div class="tabtd">
                                            <a href="#" class="icon_td watch"></a>
                                        </div>
                                        <div class="tabtd">Статус</div>
                                        <div class="tabtd">
                                            <a href="#" class="icon_td chan"></a>
                                            <a href="#" class="icon_td delete"></a>
                                        </div>
                                    </div>
                                    <div class="tabrow">
                                        <div class="tabtd"><a href="#">Группа 5</a></div>
                                        <div class="tabtd">100</div>
                                        <div class="tabtd">10</div>
                                        <div class="tabtd">4</div>
                                        <div class="tabtd">
                                            <a href="#" class="icon_td watch"></a>
                                        </div>
                                        <div class="tabtd">Статус</div>
                                        <div class="tabtd">
                                            <a href="#" class="icon_td chan"></a>
                                            <a href="#" class="icon_td delete"></a>
                                        </div>
                                    </div>
                                    <div class="tabrow">
                                        <div class="tabtd"><a href="#">Группа 4</a></div>
                                        <div class="tabtd">1000</div>
                                        <div class="tabtd">10</div>
                                        <div class="tabtd">1</div>
                                        <div class="tabtd">
                                            <a href="#" class="icon_td watch"></a>
                                        </div>
                                        <div class="tabtd">Статус</div>
                                        <div class="tabtd">
                                            <a href="#" class="icon_td chan"></a>
                                            <a href="#" class="icon_td delete"></a>
                                        </div>
                                    </div>
                                    <div class="tabrow">
                                        <div class="tabtd"><a href="#">Группа 3</a></div>
                                        <div class="tabtd">100</div>
                                        <div class="tabtd">10</div>
                                        <div class="tabtd">2</div>
                                        <div class="tabtd">
                                            <a href="#" class="icon_td watch"></a>
                                        </div>
                                        <div class="tabtd">Статус</div>
                                        <div class="tabtd">
                                            <a href="#" class="icon_td chan"></a>
                                            <a href="#" class="icon_td delete"></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!--wrap_block_table-->

                            <div class="pagination">
                                <div class="count_list">
                                    <div class="label_count">Показывать по: </div>
                                    <div class="wrap-select">
                                        <form method="GET" action="{{route('category.show', $category)}}">
                                            <select name="pagination" id="" class="select" onchange="submit">
                                                <option value="">10</option>
                                                <option value="">20</option>
                                                <option value="">30</option>
                                                <option value="">40</option>
                                            </select>
                                        </form>
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
                        </div>





                    </div><!--row-->
                </div><!--col-md-9-->
            </div><!--row-->

        </div>

    </div><!--maincontent-->
@endsection
