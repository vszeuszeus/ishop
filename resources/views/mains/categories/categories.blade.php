@extends('layouts.app')

@section('content')
    <div class="maincontent">

        <div class="container containersize1200">

            <div class="row">

                <div class="col-xs-12">

                    <ul class="breadcrumb">
                        <li><a href="{{route('mainPage')}}">Главная /</a></li>
                        <li><span>каталог</span></li>
                    </ul>

                    <div class="hcontent">Сим-карты</div>

                </div><!--col-xs-12-->

            </div>


            <div class="row wrap_categorys">

                <div class="col-xs-6 col-md-4 col-lg-3">
                    <a href="#" class="item_categorys">
                        <div class="item_categorys"><img src="images/cat1.jpg" alt="#"></div>
                        <div class="body_categorys">
                            <div class="icon_categys_tab">
                                <div class="icon_categys_tc">
                                    <img src="images/iconc1.png" alt="#">
                                </div>
                            </div>
                            <div class="name_categys">Ростов Мтс</div>
                        </div>
                    </a><!--item_categorys-->
                </div><!--col-xs-6-->
                <div class="col-xs-6 col-md-4 col-lg-3">
                    <a href="#" class="item_categorys">
                        <div class="item_categorys"><img src="images/cat2.jpg" alt="#"></div>
                        <div class="body_categorys">
                            <div class="icon_categys_tab">
                                <div class="icon_categys_tc">
                                    <img src="images/iconc2.png" alt="#">
                                </div>
                            </div>
                            <div class="name_categys">Ростов МегаФон</div>
                        </div>
                    </a><!--item_categorys-->
                </div><!--col-xs-6-->
                <div class="col-xs-6 col-md-4 col-lg-3">
                    <a href="#" class="item_categorys">
                        <div class="item_categorys"><img src="images/cat3.jpg" alt="#"></div>
                        <div class="body_categorys">
                            <div class="icon_categys_tab">
                                <div class="icon_categys_tc">
                                    <img src="images/iconc3.png" alt="#">
                                </div>
                            </div>
                            <div class="name_categys">Lorem Ipsum</div>
                        </div>
                    </a><!--item_categorys-->
                </div><!--col-xs-6-->
                <div class="col-xs-6 col-md-4 col-lg-3">
                    <a href="#" class="item_categorys">
                        <div class="item_categorys"><img src="images/cat4.jpg" alt="#"></div>
                        <div class="body_categorys">
                            <div class="icon_categys_tab">
                                <div class="icon_categys_tc">
                                    <img src="images/iconc4.png" alt="#">
                                </div>
                            </div>
                            <div class="name_categys">Lorem Ipsum</div>
                        </div>
                    </a><!--item_categorys-->
                </div><!--col-xs-6-->
                <div class="col-xs-6 col-md-4 col-lg-3">
                    <a href="#" class="item_categorys">
                        <div class="item_categorys"><img src="images/cat5.jpg" alt="#"></div>
                        <div class="body_categorys">
                            <div class="icon_categys_tab">
                                <div class="icon_categys_tc">
                                    <img src="images/iconc3.png" alt="#">
                                </div>
                            </div>
                            <div class="name_categys">Lorem Ipsum</div>
                        </div>
                    </a><!--item_categorys-->
                </div><!--col-xs-6-->
                <div class="col-xs-6 col-md-4 col-lg-3">
                    <a href="#" class="item_categorys">
                        <div class="item_categorys"><img src="images/cat6.jpg" alt="#"></div>
                        <div class="body_categorys">
                            <div class="icon_categys_tab">
                                <div class="icon_categys_tc">
                                    <img src="images/iconc4.png" alt="#">
                                </div>
                            </div>
                            <div class="name_categys">Lorem Ipsum</div>
                        </div>
                    </a><!--item_categorys-->
                </div><!--col-xs-6-->
                <div class="col-xs-6 col-md-4 col-lg-3">
                    <a href="#" class="item_categorys">
                        <div class="item_categorys"><img src="images/cat7.jpg" alt="#"></div>
                        <div class="body_categorys">
                            <div class="icon_categys_tab">
                                <div class="icon_categys_tc">
                                    <img src="images/iconc1.png" alt="#">
                                </div>
                            </div>
                            <div class="name_categys">Ростов Мтс</div>
                        </div>
                    </a><!--item_categorys-->
                </div><!--col-xs-6-->


                <div class="col-xs-6 col-md-4 col-lg-3">
                    <a href="#" class="item_categorys">
                        <div class="item_categorys"><img src="images/cat8.jpg" alt="#"></div>
                        <div class="body_categorys">
                            <div class="icon_categys_tab">
                                <div class="icon_categys_tc">
                                    <img src="images/iconc2.png" alt="#">
                                </div>
                            </div>
                            <div class="name_categys">Ростов МегаФон</div>
                        </div>
                    </a><!--item_categorys-->
                </div><!--col-xs-6-->

            </div><!--wrap_categorys-->


            <div class="row">
                <div class="col-xs-12">
                    <div class="content_title">Заголовок</div>
                    <div class="text_block">
                        <p>
                            Давно выяснено, что при оценке дизайна и композиции читаемый текст
                            мешает сосредоточиться. Lorem Ipsum используют потому, что тот
                            обеспечивает более или менее стандартное заполнение шаблона, а также
                            реальное распределение букв и пробелов в абзацах, которое не получается
                            при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш
                            текст.." Многие программы электронной вёрстки и редакторы HTML используют
                            Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым
                            словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё
                            дожидаются своего настоящего рождения. За прошедшие годы текст Lorem
                            Ipsum получил много версий. Некоторые версии появились по ошибке,
                            некоторые - намеренно (например, юмористические варианты).
                        </p>
                        <p>
                            Есть много вариантов Lorem Ipsum, но большинство из них имеет
                            не всегда приемлемые модификации, например, юмористические вставки
                            или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum
                        </p>
                    </div>

                </div>
            </div><!--row-->

        </div>

    </div><!--maincontent-->
@endsection
