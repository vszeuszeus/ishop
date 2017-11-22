@extends('layouts.app')

@section('content')
    <div class="maincontent">

        <div class="container containersize1200">

            <div class="row">
                <div class="col-xs-12">

                    <ul class="breadcrumb">
                        <li><a href="{{route('mainPage')}}">Главная /</a></li>
                        <li><span>Отзывы</span></li>
                    </ul>

                    <div class="hcontent">Отзывы</div>

                </div><!--col-xs-12-->
            </div><!--row-->


            <div class="row">
                <div class="col-xs-12 col-md-8">

                    <div class="wrap_block_reviw">

                        <div class="block_reviw">
                            <div class="reviw_foto_block">
                                <div class="img_reviw"><img src="images/foto1.png" alt=""></div>
                                <div class="name_reviw"><span>Таня</span><span>Сибелиус</span></div>
                            </div>
                            <div class="body_reviw">
                                <div class="reit_reviw">
                                    <i class="icon_star active"></i>
                                    <i class="icon_star active"></i>
                                    <i class="icon_star active"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <div class="text_reviw">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
                                        onsectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
                                        Lorem ipsum dolor sit amet,
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="block_reviw">
                            <div class="reviw_foto_block">
                                <div class="img_reviw"><img src="images/foto2.png" alt=""></div>
                                <div class="name_reviw"><span>Таня</span><span>Сибелиус</span></div>
                            </div>
                            <div class="body_reviw">
                                <div class="reit_reviw">
                                    <i class="icon_star active"></i>
                                    <i class="icon_star active"></i>
                                    <i class="icon_star active"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <div class="text_reviw">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
                                        onsectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
                                        Lorem ipsum dolor sit amet,
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="block_reviw">
                            <div class="reviw_foto_block">
                                <div class="img_reviw"><img src="images/foto3.png" alt=""></div>
                                <div class="name_reviw"><span>Таня</span><span>Сибелиус</span></div>
                            </div>
                            <div class="body_reviw">
                                <div class="reit_reviw">
                                    <i class="icon_star active"></i>
                                    <i class="icon_star active"></i>
                                    <i class="icon_star active"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <div class="text_reviw">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
                                        onsectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
                                        Lorem ipsum dolor sit amet,
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div><!--wrap_block_reviw-->
                </div><!--col-md-8-->

                <div class="col-xs-12 col-md-4">
                    <div class="wrap_form_reviw">
                        <form id="" >
                            <div class="title_textarea">Оставьте ваш отзыв:</div>
                            <textarea name="" id="" class="textarea_rev textarea_t1"></textarea>
                            <div class="title_shop">Оцените магазин:</div>
                            <div class="reit_shop"></div>
                            <input type="submit" class="btn_b" value="ОТПРАВИТЬ">
                        </form>
                    </div>
                </div><!--col-md-8-->
            </div><!--row-->

        </div>

    </div><!--maincontent-->
@endsection
