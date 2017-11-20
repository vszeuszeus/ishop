@extends('layouts.app')

@section('content')
    <div class="maincontent contentbord">

        <div class="container containersize1200">

            <div class="row">

                @include('admin.leftMenu')


                <div class="col-xs-12 col-md-9 col-lg-10">
                    <a href="#" class="a_back">&lt;Назад к категориям</a>

                    <div class="titlecontent">новая категория</div>
                    <form id=" ">


                        <div class="wrap_group_input">
                            <div class="wrap_group_inl">
                                <div class="form_label lab_size_block">Название:</div>
                                <div class="block_formitem">
                                    <input type="text" class="input_content">
                                </div>
                            </div>

                            <div class="wrap_group_inl">
                                <div class="form_label lab_size_block">Категория:</div>
                                <div class="wrap-select block_formitem  selectsizeb">
                                    <select name="" id="" class="select">
                                        <option value="">Выберите родительскую категорию</option>
                                        <option value="">20</option>
                                        <option value="">30</option>
                                        <option value="">40</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="wrap_group_input">
                            <div class="block_fotoupl">
                                <div class="img_fotoupl"><img src="images/foto-def.jpg" alt=""></div>
                            </div>
                            <div class="block_fotoupl">
                                <div class="form_label lab_size_block">Добавьте фото:</div>
                                <a href="#" class="btn_type14">Добавить фото</a>
                            </div>
                        </div>

                        <div class="wrap_group_input">
                            <div class="form_label lab_size_block">описание на сайте:</div>
                            <div class="block_formitem">
                                <textarea name="" id="" class="textarea_rev  textarea_t2" placeholder="Введите описание"></textarea>
                            </div>
                        </div>

                        <div class="wrap_group_input">
                            <div class="form_label lab_size_block">премодерация:</div>
                            <div class="block_formitem wr_input_type">
                                <input type="checkbox" class="input_check input_check_inl" checked="checked" />
                                <div class="check_label">Задать премодерацию товаров в этой категории</div>
                            </div>
                        </div>



                        <div class="wrap_group_input form_grey">
                            <div class="title_form_gr">Seo-настройки:</div>
                            <div class="block_formitem">
                                <div class="form_label">URL:</div>
                                <div class="wr_input_cont">
                                    <input type="text" class="input_content" placeholder>
                                </div>
                            </div>
                            <div class="block_formitem">
                                <div class="form_label">Description:</div>
                                <div class="wr_input_cont">
                                    <input type="text" class="input_content" placeholder>
                                </div>
                            </div>
                            <div class="block_formitem">
                                <div class="form_label">Keywords:</div>
                                <div class="wr_input_cont">
                                    <input type="text" class="input_content" placeholder>
                                </div>
                            </div>
                            <div class="block_formitem">
                                <div class="form_label">Title:</div>
                                <div class="wr_input_cont">
                                    <input type="text" class="input_content" placeholder>
                                </div>
                            </div>
                            <div class="block_formitem">
                                <div class="form_label">H1:</div>
                                <div class="wr_input_cont">
                                    <input type="text" class="input_content" placeholder>
                                </div>
                            </div>

                        </div><!--wrap_group_input-->


                        <div class="wrap_group">
                            <input type="submit" class="btn_type14" value="Сохранить">
                        </div>
                    </form>


                </div><!--col-md-9-->
            </div><!--row-->

        </div>

    </div><!--maincontent-->
@endsection
