@extends('layouts.app')

@section('content')
    <div class="maincontent">

        <div class="container containersize1200">

            <div class="row">

                <div class="col-xs-12">

                    <ul class="breadcrumb">
                        <li><a href="{{route('mainPage')}}">Главная /</a></li>
                        <li><span>Новости</span></li>
                    </ul>

                </div><!--col-xs-12-->
            </div><!--row-->




            <div class="row">

                <div class="col-xs-12">

                    <div class="news_main-d">

                        <div class="row">

                            <div class="col-md-2 col-xs-12">

                                <div class="date_d">21.04</div>

                            </div>

                            <div class="col-md-10 col-xs-12">

                                <a href="#" class="news_name_d">В Санкт-Петербурге завели уголовное дело о нападении на участников ЛГБТ-акции</a>

                            </div>

                        </div>

                    </div>

                </div><!--col-xs-12-->

            </div>

            <div class="row block_newses">

                <div class="col-xs-6 col-md-4">

                    <div class="news_items">

                        <a href="#" class="news_tit">Авиакомпания Air Berlin объявила о банкротстве</a>

                        <div class="date_d">17.04</div>

                    </div>

                </div><!--col-xs-6-->

                <div class="col-xs-6 col-md-4">

                    <div class="news_items">

                        <a href="#" class="news_tit">Лидер КНДР пообещал последить «за поведением глупых я...</a>

                        <div class="date_d">12.04</div>

                    </div>

                </div><!--col-xs-6-->

                <div class="col-xs-6 col-md-4">

                    <div class="news_items">

                        <a href="#" class="news_tit">Половину налоговых поступлений в бюджет России обеспечивают...</a>

                        <div class="date_d">11.04</div>

                    </div>

                </div><!--col-xs-6-->

                <div class="col-xs-6 col-md-4">

                    <div class="news_items">

                        <a href="#" class="news_tit">МТС предложила отменить внутрироссийский ро...</a>

                        <div class="date_d">09.04</div>

                    </div>

                </div><!--col-xs-6-->

                <div class="col-xs-6 col-md-4">

                    <div class="news_items">

                        <a href="#" class="news_tit">Билл Гейтс пожертвовал на благотворительность...</a>

                        <div class="date_d">05.04</div>

                    </div>

                </div><!--col-xs-6-->

                <div class="col-xs-6 col-md-4">

                    <div class="news_items">

                        <a href="#" class="news_tit">Закрыто уголовное дело в отношении главы метро Санкт-П...</a>

                        <div class="date_d">02.04</div>

                    </div>

                </div><!--col-xs-6-->

            </div>







        </div>

    </div><!--maincontent-->
@endsection
