@extends('layouts.app')

@section('content')
    <div class="maincontent contentbord">

        <div class="container containersize1200">

            <div class="row">

                @include('admin.leftMenu')


                <div class="col-xs-12 col-md-9 col-lg-10">
                    <a href="{{route('products')}}" class="a_back">&lt;Назад к категориям</a>

                    <div class="titlecontent">Новая категория</div>
                    <form id="" method="POST" action="{{route('category.store')}}">
                        {{csrf_field()}}

                        <div class="wrap_group_input">
                            <div class="wrap_group_inl">
                                <div class="form_label lab_size_block">Название:</div>
                                <div class="block_formitem">
                                    <input type="text" name="name" value="{{old('name')}}" class="input_content">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="wrap_group_inl">
                                <div class="form_label lab_size_block">Категория:</div>
                                <div class="wrap-select block_formitem  selectsizeb">
                                    <select name="" id="" class="select" title="Выберите родительскую категорию">
                                        <option value="0">Выберите родительскую категорию</option>
                                        {{--@foreach($categories as $category)
                                            <option @if($category = old('category_id') @endifvalue="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach--}}
                                    </select>
                                    @if ($errors->has('category_id'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                                    @endif
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
                                @if ($errors->has('photo_path'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('photo_path') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>

                        <div class="wrap_group_input">
                            <div class="form_label lab_size_block">описание на сайте:</div>
                            <div class="block_formitem">
                                <textarea name="" id="" class="textarea_rev  textarea_t2" placeholder="Введите описание"></textarea>
                                @if ($errors->has('login'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('login') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>

                        <div class="wrap_group_input">
                            <div class="form_label lab_size_block">премодерация:</div>
                            <div class="block_formitem wr_input_type">
                                <input type="checkbox" class="input_check input_check_inl" checked="checked" />
                                <div class="check_label">Задать премодерацию товаров в этой категории</div>
                                @if ($errors->has('login'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('login') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>



                        <div class="wrap_group_input form_grey">
                            <div class="title_form_gr">Seo-настройки:</div>
                            <div class="block_formitem">
                                <div class="form_label">URL:</div>
                                <div class="wr_input_cont">
                                    <input type="text" class="input_content" placeholder>
                                    @if ($errors->has('login'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('login') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="block_formitem">
                                <div class="form_label">Description:</div>
                                <div class="wr_input_cont">
                                    <input type="text" class="input_content" placeholder>
                                    @if ($errors->has('login'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('login') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="block_formitem">
                                <div class="form_label">Keywords:</div>
                                <div class="wr_input_cont">
                                    <input type="text" class="input_content" placeholder>
                                    @if ($errors->has('login'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('login') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="block_formitem">
                                <div class="form_label">Title:</div>
                                <div class="wr_input_cont">
                                    <input type="text" class="input_content" placeholder>
                                    @if ($errors->has('login'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('login') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="block_formitem">
                                <div class="form_label">H1:</div>
                                <div class="wr_input_cont">
                                    <input type="text" class="input_content" placeholder>
                                    @if ($errors->has('login'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('login') }}</strong>
                                    </span>
                                    @endif
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
