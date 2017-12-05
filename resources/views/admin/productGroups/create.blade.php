@extends('layouts.app')

@section('content')
    <div class="maincontent contentbord">

        <div class="container containersize1200">

            <div class="row">

                @include('admin.leftMenu')


                <div class="col-xs-12 col-md-9 col-lg-10">
                    <a href="{{route('products')}}" class="a_back">&lt; Назад к товарам</a>

                    <div class="titlecontent">новая группа</div>
                    <form enctype="multipart/form-data" id="" method="POST" action="{{route('productGroup.store')}}">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-xs-12 col-md-12 col-lg-6">

                                <div class="wrap_group50">

                                    <div class="wrap_group_l">
                                        <div class="form_label lab_size_block">Название:</div>
                                        <div class="block_formitem">
                                            <input name="name" type="text" class="input_content"
                                                   value="{{old('name')}}">
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div><!--wrap_group-->
                                    <br>
                                    <div class="wrap_group_1">
                                        <div class="form_label lab_size_block">Категория:</div>
                                        <div class="wrap-select block_formitem  selectsizeb">
                                            <select name="category_id" id="" class="select"
                                                    title="Выберите родительскую категорию">
                                                <option disabled value="">Выберите родительскую категорию</option>
                                                @foreach($categories as $category)
                                                    @php $old_category = old('category_id'); @endphp
                                                    <option @if($category->id == $old_category) selected
                                                            @endif value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('category_id'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('category_id') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-12 col-lg-6">
                                            <div class="wrap_group_l">
                                                <div class="form_label lab_size_block">теги:</div>
                                                <div class="block_formitem">
                                                    <input name="tags" type="text" class="input_content"
                                                           value="{{old('tags')}}">
                                                    @if ($errors->has('tags'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('tags')}}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div><!--wrap_group-->
                                        </div>
                                        <div class="col-xs-12 col-md-12 col-lg-6">
                                            <div class="wrap_group_l">
                                                <div class="form_label lab_size_block">Цена:</div>
                                                <div class="block_formitem">
                                                    <input name="price" type="text" class="input_content"
                                                           value="{{old('price')}}">
                                                    @if ($errors->has('price'))
                                                        <span class="help-block">
                                                        <strong>{{ $errors->first('price') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div><!--wrap_group-->
                                        </div>
                                    </div>

                                    <div class="wrap_group_l">
                                        <div class="text_form_bot">Введите значение цены в рублях!</div>
                                    </div><!--wrap_group-->

                                </div>

                            </div>
                            <div class="col-xs-12 col-md-12 col-lg-6">

                                <div class="wrap_group_foto50">
                                    <div class="block_fotoupl">
                                        <div class="img_fotoupl"><img src="{{secure_asset('images/foto-def.jpg')}}"
                                                                      alt="base photo"></div>
                                    </div>
                                    <div class="block_fotoupl">
                                        <div class="form_label lab_size_block">Добавьте фото:</div>
                                        <input type="file" name="photo_path" class="btn_type14">
                                        @if ($errors->has('photo_path'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('photo_path') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div><!--wrap_group_input-->


                                <div class="wrap_group_in6">
                                    <div class="form_label">Зарплата менеджера:</div>
                                    <div class="wr_input_c">
                                        <input name="manager_pay" type="text" class="input_content"
                                               value="{{old('manager_pay')}}">
                                        @if ($errors->has('manager_pay'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('manager_pay') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="wrap-select">
                                        <select name="manager_pay_type_id" id="" class="select">
                                            @php $oldPayType = old('manager_pay_type_id'); @endphp
                                            @foreach($pay_types as $pay_type)
                                                <option @if($pay_type->id == $oldPayType) selected
                                                        @endif value="{{$pay_type->id}}">{{$pay_type->name}}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('manager_pay_type_id'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('manager_pay_type_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div><!--wrap_group_inl2-->


                            </div>
                        </div><!--row-->


                        <div class="wrap_group_input">
                            <div class="form_label lab_size_block">описание на сайте:</div>
                            <div class="block_formitem">
                                <textarea name="description" id="" class="textarea_rev  textarea_t2"
                                          placeholder="Введите описание (не менее 500 символов)">{{old('description')}}</textarea>
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-xs-12 col-md-12 col-lg-12">
                                <div class="title_form_gr">Настройки:</div>
                            </div><!--col-xs-12-->

                            <div class="col-xs-12 col-md-12 col-lg-5 block_50_lab">


                                <div class="form_label lab_size_block">менеджеры:</div>

                                <div class="block_btn_w50">
                                    <a href="#" class="order_btn color_r">Отметить всех</a>
                                    <a href="#" class="order_btn color_w">Снять отметки</a>
                                </div>


                                <div class="wrap_block_table">
                                    <div class="table_cont">
                                        <div class="tabrow">
                                            <div class="tabtd"></div>
                                            <div class="tabtd">Логин:</div>
                                            <div class="tabtd">Регион:</div>
                                        </div>
                                        @php $old_managers = old('managers'); @endphp
                                        @if(is_array($old_managers))
                                            @foreach($managers as $manager)
                                                @php $checkManager = false; @endphp
                                                @foreach($old_managers as $old_manager)
                                                    @if($old_manager == $manager->id)
                                                        @php $checkManager = true; @endphp
                                                    @endif
                                                @endforeach
                                                <div class="tabrow">
                                                    <div class="tabtd">
                                                        <div class=" wr_input_type">
                                                            <input @if($checkManager == true)checked="checked"
                                                                   @endif type="checkbox" name="managers[]"
                                                                   value="{{$manager->id}}" class="input_check">
                                                        </div>
                                                    </div>
                                                    <div class="tabtd">{{$manager->name}}</div>
                                                    <div class="tabtd">Москва</div>
                                                </div>
                                            @endforeach
                                        @else
                                            @foreach($managers as $manager)
                                                <div class="tabrow">
                                                    <div class="tabtd">
                                                        <div class=" wr_input_type">
                                                            <input type="checkbox" name="managers[]"
                                                                   value="{{$manager->id}}" class="input_check">
                                                        </div>
                                                    </div>
                                                    <div class="tabtd">{{$manager->name}}</div>
                                                    <div class="tabtd">Москва</div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    @if ($errors->has('managers'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('managers') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-12 col-lg-5 col-lg-offset-2 col-md-offset-0 block_50_lab">
                                <div class="form_label lab_size_block">Разрешения для менеджеров:</div>
                                <div class="wrap_block_table table_type">
                                    <div class="table_cont">
                                        <div class="tabrow">
                                            <div class="tabtd"></div>
                                            <div class="tabtd">Видеть:</div>
                                            <div class="tabtd">Редактировать:</div>
                                        </div>
                                        <div class="tabrow">
                                            <div class="tabtd">Цена</div>
                                            <div class="tabtd">
                                                <div class="wr_input_type">
                                                    <input @if(old('is_visible_price')) checked="checked"
                                                           @endif name="is_visible_price" type="checkbox"
                                                           class="input_check">
                                                    @if ($errors->has('is_visible_price'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('is_visible_price') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="tabtd">
                                                <div class="wr_input_type">
                                                    <input @if(old('is_change_price')) checked="checked"
                                                           @endif name="is_change_price" type="checkbox"
                                                           class="input_check">
                                                    @if ($errors->has('is_change_price'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('is_change_price') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tabrow">
                                            <div class="tabtd">Фото на сайте</div>
                                            <div class="tabtd">
                                                <div class="wr_input_type">
                                                    <input @if(old('is_visible_photo')) checked="checked"
                                                           @endif name="is_visible_photo" type="checkbox"
                                                           class="input_check">
                                                    @if ($errors->has('is_visible_photo'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('is_visible_photo') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="tabtd">
                                                <div class="wr_input_type">
                                                    <input @if(old('is_change_photo')) checked="checked"
                                                           @endif name="is_change_photo" type="checkbox"
                                                           class="input_check">
                                                    @if ($errors->has('is_change_photo'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('is_change_photo') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tabrow">
                                            <div class="tabtd">Описание на сайте</div>
                                            <div class="tabtd">
                                                <div class="wr_input_type">
                                                    <input @if(old('is_visible_description')) checked="checked"
                                                           @endif name="is_visible_description" type="checkbox"
                                                           class="input_check">
                                                    @if ($errors->has('is_visible_description'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('is_visible_description') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="tabtd">
                                                <div class="wr_input_type">
                                                    <input @if(old('is_change_description')) checked="checked"
                                                           @endif name="is_change_description" type="checkbox"
                                                           class="input_check">
                                                    @if ($errors->has('is_change_description'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('is_change_description') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tabrow">
                                            <div class="tabtd">Теги</div>
                                            <div class="tabtd">
                                                <div class="wr_input_type">
                                                    <input @if(old('is_visible_tags')) checked="checked"
                                                           @endif name="is_visible_tags" type="checkbox"
                                                           class="input_check">
                                                    @if ($errors->has('is_visible_tags'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('is_visible_tags') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="tabtd">
                                                <div class="wr_input_type">
                                                    <input @if(old('is_change_tags')) checked="checked"
                                                           @endif name="is_change_tags" type="checkbox"
                                                           class="input_check">
                                                    @if ($errors->has('is_change_tags'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('is_change_tags') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div><!--col-xs-12-->
                        </div>

                        <div class="wrap_group_input">
                            <div class="form_label lab_size_block">премодерация:</div>
                            <div class="block_formitem wr_input_type">
                                <input @if(old('premodaration')) checked="checked" @endif name="premodaration"
                                       type="checkbox" class="input_check input_check_inl"/>
                                <div class="check_label">Задать премодерацию товаров в этой категории</div>
                                @if ($errors->has('premodaration'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('premodaration') }}</strong>
                                            </span>
                                @endif
                            </div>
                        </div>

                        <div class="wrap_group_input form_grey">
                            <div class="title_form_gr">Seo-настройки:</div>
                            <div class="block_formitem">
                                <div class="form_label">URL:</div>
                                <div class="wr_input_cont">
                                    <input name="url" type="text" class="input_content" value="{{old('url')}}"
                                           placeholder>
                                    @if ($errors->has('url'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('url') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="block_formitem">
                                <div class="form_label">Description:</div>
                                <div class="wr_input_cont">
                                    <input name="header_description" type="text" class="input_content"
                                           value="{{old('header_description')}}" placeholder>
                                    @if ($errors->has('header_description'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('header_description') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="block_formitem">
                                <div class="form_label">Keywords:</div>
                                <div class="wr_input_cont">
                                    <input name="keywords" type="text" class="input_content" value="{{old('keywords')}}"
                                           placeholder>
                                    @if ($errors->has('keywords'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('keywords') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="block_formitem">
                                <div class="form_label">Title:</div>
                                <div class="wr_input_cont">
                                    <input name="title" type="text" class="input_content" value="{{old('title')}}"
                                           placeholder>
                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="block_formitem">
                                <div class="form_label">H1:</div>
                                <div class="wr_input_cont">
                                    <input name="h1" type="text" class="input_content" value="{{old('h1')}}"
                                           placeholder>
                                    @if ($errors->has('h1'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('h1') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="block_formitem">
                                <div class="form_label">Photo alt:</div>
                                <div class="wr_input_cont">
                                    <input name="photo_alt" type="text" class="input_content"
                                           value="{{old('photo_alt')}}"
                                           placeholder>
                                    @if ($errors->has('photo_alt'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('photo_alt') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>

                        </div><!--wrap_group_input-->


                        <div class="wrap_relproduct">

                            <div class="title_form_gr">Похожие товары:</div>
                            <div class="row slider_rtov">
                                <div class="col-xs-6 col-md-4 col-lg-3">
                                    <a href="#" class="item_r_product">
                                        <img src="{{secure_asset('images/rt1.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="col-xs-6 col-md-4 col-lg-3">
                                    <a href="#" class="item_r_product">
                                        <img src="{{secure_asset('images/rt2.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>

                        </div><!--wrap_relproduct-->


                        <div class="wrap_group_l">
                            <input type="submit" class="btn_type14" value="Сохранить">
                        </div>
                    </form>


                </div><!--col-md-9-->
            </div><!--row-->

        </div>

    </div><!--maincontent-->
@endsection
