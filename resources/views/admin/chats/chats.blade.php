@extends('layouts.app')

@section('content')
    <div class="maincontent contentbord">

        <div class="container containersize1200">

            <div class="row">

                @include('admin.leftMenu')
                <div class="col-xs-12 col-md-9 col-lg-10">

                    <div class="title_block">
                        <div class="titlecontent">Чаты</div>
                        <a href="{{route('createChat')}}" class="btn_type14">Создать чат</a>
                        <div class="clearfix"></div>
                    </div>

                    <div class="wrap_chat_block">
                        <a href="#" class="chat_block_admin clearfix">
                            <div class="block_icon">A</div>
                            <div class="chat_body">
                                <div class="chat_title">
                                    <div class="chat_name">Администратор Admin</div>
                                    <div class="chat_date"></div>
                                </div>
                                <div class="chat_text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum
                                        laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.
                                        Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis
                                        parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra
                                        vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="chat_block_admin clearfix">
                            <div class="block_icon">G</div>
                            <div class="chat_body">
                                <div class="chat_title">
                                    <div class="chat_name">Группа Group (Manager 1, Admin, Superadmin)</div>
                                    <div class="chat_date">31.03.2017</div>
                                </div>
                                <div class="chat_text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum
                                        laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.
                                        Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis
                                        parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra
                                        vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="chat_block_admin clearfix">
                            <div class="block_icon">M</div>
                            <div class="chat_body">
                                <div class="chat_title">
                                    <div class="chat_name">Manager 1</div>
                                    <div class="chat_date">31.03.2017</div>
                                </div>
                                <div class="chat_text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum
                                        laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.
                                        Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis
                                        parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra
                                        vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="chat_block_admin clearfix">
                            <div class="block_icon">S</div>
                            <div class="chat_body">
                                <div class="chat_title">
                                    <div class="chat_title">
                                        <div class="chat_name">Администратор Superadmin</div>
                                        <div class="chat_date">31.03.2017</div>
                                    </div>
                                </div>
                                <div class="chat_text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum
                                        laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.
                                        Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis
                                        parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra
                                        vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="chat_block_admin clearfix">
                            <div class="block_icon">A</div>
                            <div class="chat_body">
                                <div class="chat_title">
                                    <div class="chat_name">Администратор Admin</div>
                                    <div class="chat_date">31.03.2017</div>
                                </div>
                                <div class="chat_text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum
                                        laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.
                                        Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis
                                        parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra
                                        vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="chat_block_admin clearfix">
                            <div class="block_icon">S</div>
                            <div class="chat_body">
                                <div class="chat_title">
                                    <div class="chat_name">Администратор Superadmin</div>
                                    <div class="chat_date">31.03.2017</div>
                                </div>
                                <div class="chat_text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum
                                        laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.
                                        Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis
                                        parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra
                                        vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="chat_block_admin clearfix">
                            <div class="block_icon">G</div>
                            <div class="chat_body">
                                <div class="chat_title">
                                    <div class="chat_name">Группа Group (Manager 1, Admin, Superadmin)</div>
                                    <div class="chat_date">31.03.2017</div>
                                </div>
                                <div class="chat_text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum
                                        laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.
                                        Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis
                                        parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra
                                        vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="chat_block_admin clearfix">
                            <div class="block_icon">M</div>
                            <div class="chat_body">
                                <div class="chat_title">
                                    <div class="chat_name">Manager 1</div>
                                    <div class="chat_date">31.03.2017</div>
                                </div>
                                <div class="chat_text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum
                                        laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.
                                        Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis
                                        parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra
                                        vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="chat_block_admin clearfix">
                            <div class="block_icon">S</div>
                            <div class="chat_body">
                                <div class="chat_title">
                                    <div class="chat_name">Администратор Superadmin</div>
                                    <div class="chat_date">31.03.2017</div>
                                </div>
                                <div class="chat_text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum
                                        laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.
                                        Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis
                                        parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra
                                        vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="chat_block_admin clearfix">
                            <div class="block_icon">S</div>
                            <div class="chat_body">
                                <div class="chat_title">
                                    <div class="chat_name">Администратор Superadmin</div>
                                    <div class="chat_date">31.03.2017</div>
                                </div>
                                <div class="chat_text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum
                                        laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.
                                        Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis
                                        parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra
                                        vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.
                                    </p>
                                </div>
                            </div>
                        </a>


                    </div>


                    <div class="pagination">
                        <div class="count_list">
                            <div class="label_count">Показывать по:</div>
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
