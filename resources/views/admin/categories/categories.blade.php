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
                                <a href="{{route('productGroup.create')}}" class="btn_type14">Добавить группу</a>
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
                                        <div class="tabtd">Товаров осталось (со статусом активен?)</div>
                                        <div class="tabtd">Активность</div>
                                        <div class="tabtd">Товаров  на модерации</div>
                                        <div class="tabtd">Действия</div>
                                    </div>
                                    @foreach($groupProducts as $productGroup)
                                        <div class="tabrow">
                                            <div class="tabtd"><a href="{{route('productGroup.show', [$productGroup])}}">{{$productGroup->name}}</a></div>
                                            <div class="tabtd">{{$productGroup->price}}</div>
                                            <div class="tabtd">{{$productGroup->products->count()}}</div>
                                            <div class="tabtd">{{$productGroup->products->filter(function($item){
                                                return $item->product_status_id == 2;
                                            })->count()}}</div>
                                            <div class="tabtd">
                                                @if($productGroup->active)
                                                    <a href="{{route('productGroup.setDisActive', [$productGroup])}}"   class="icon_td watch"></a>
                                                @else
                                                    <a href="{{route('productGroup.setActive', [$productGroup])}}"   class="icon_td watch_noactiv"></a>
                                                @endif

                                            </div>
                                            <div class="tabtd">{{$productGroup->products->filter(function ($item){
                                                return $item->product_type_id == 2;
                                            })->count()}}</div>
                                            <div class="tabtd">
                                                <a href="{{route('productGroup.edit', [$productGroup])}}" class="icon_td chan"></a>
                                                <a href="{{route('productGroup.delete',[$productGroup])}}" class="icon_td delete"></a>
                                            </div>
                                        </div>
                                    @endforeach
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
