@extends('layouts.app')

@section('content')
    <div class="maincontent contentbord">

        <div class="container containersize1200">

            <div class="row">

                @include('admin.leftMenu')

                <div class="col-xs-12 col-md-9 col-lg-10">

                    <a href="{{route('category.show', [$productGroup->category])}}" class="a_back">&lt;Назад к категориям</a>

                    <div class="titlecontent">Товары</div>
                    <div class="resalt_order">Категория: {{$productGroup->category->name}} | Группа: {{$productGroup->name}}</div>

                    <div class="row">

                        <div class="col-xs-12 col-md-6 col-lg-6">

                            <div class="wrap_group_input">
                                <div class="wrap-select block_formitem  selectsizeb">
                                    <select name="" id="" class="select">
                                        <option value="">Только активные</option>
                                        <option value="">20</option>
                                        <option value="">30</option>
                                        <option value="">40</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-6">
                            <div class="wrap_group_input wr_btn_heig">
                                <a href="{{route('product.create', [$productGroup])}}" class="btn_type14 ">Добавить товары в группу</a>
                            </div>
                        </div>

                    </div><!--row-->



                    <!-- <div class="wrap_group_input"> -->
                    {{--<div class="form_label lab_size_block">Категория: {{$productGroup->category->name}}</div>--}}
                    @include('common.errors')
                    @include('common.message')
                    <div class="wrap_block_table">
                        <div class="table_cont table_type1">
                            <div class="tabrow">
                                <div class="tabtd">ID товара</div>
                                <div class="tabtd">Дата добавления</div>
                                <div class="tabtd">Тип</div>
                                <div class="tabtd">Статус</div>
                                <div class="tabtd">Действия</div>
                                <div class="tabtd">Менеджер</div>
                            </div>
                            @foreach($productGroup->products as $product)
                                <div class="tabrow">
                                    <div class="tabtd">{{$product->id}}</div>
                                    <div class="tabtd">{{$product->created_at}}</div>
                                    <div class="tabtd">{{$product->type->name}}</div>
                                    <div class="tabtd">{{$product->status->name}}</div>
                                    <div class="tabtd">
                                        @if($product->type->id == 2)
                                            <a href="{{route('product.setGood', [$product])}}" title="Одобрить" style="color:green;" class="faLink"><i class="fa fa-check-square-o"></i></a>
                                            <a href="{{route('product.setNoGood', [$product])}}" title="Отклонить" style="color:red;" class="faLink"><i class="fa fa-times"></i></a>
                                        @elseif($product->type->id == 3)
                                            <a href="{{route('product.setNoGood', [$product])}}" title="Отклонить" style="color:red;" class="faLink"><i class="fa fa-times"></i></a>
                                        @elseif($product->type->id == 4)
                                            <a href="{{route('product.setGood', [$product])}}" title="Одобрить" style="color:green;" class="faLink"><i class="fa fa-check-square-o"></i></a>
                                        @endif
                                        @if($product->status->id == 1 || $product->status->id == 4)
                                            <a href="{{route('product.setActive', [$product])}}" title="Установить активным" class="faLink"><i class="fa fa-eye"></i></a>
                                        @elseif($product->status->id == 2 || $product->status->id == 3)
                                            <a href="{{route('product.setDisActive', [$product])}}" title="Установить неактивным" class="faLink clBlue"><i class="fa fa-eye"></i></a>
                                        @endif
                                        <a href="{{route('product.edit', [$product])}}" class="faLink"><i class="fa fa-edit"></i></a>
                                        <a href="{{route('product.delete', [$product])}}" class="faLink"><i class="fa fa-trash"></i></a>
                                    </div>
                                    <div class="tabtd"><a href="{{'manager', [$product->manager]}}">{{$product->manager->name}}</a></div>
                                </div>
                            @endforeach
                        </div>
                    </div><!--wrap_block_table-->
                    <!-- </div> -->

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
