@extends('layouts.app')

@section('content')
    <div class="maincontent contentbord">

        <div class="container containersize1200">

            <div class="row">

                @include('admin.leftMenu')


                <div class="col-xs-12 col-md-9 col-lg-10">
                    <a href="{{route('category.show', $category)}}" class="a_back">&lt;Назад к категориям</a>

                    <div class="titlecontent">Редактирование категории</div>
                    <form id="" method="POST" action="{{route('category.update', $category)}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        <div class="wrap_group_input">
                            <div class="wrap_group_inl">
                                <div class="form_label lab_size_block">Название:</div>
                                <div class="block_formitem">
                                    <input type="text" name="name" value="{{old('name', $category->name)}}"
                                           class="input_content">
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
                                    <select name="category_id" id="" class="select"
                                            title="Выберите родительскую категорию">
                                        <option value="0">Выберите родительскую категорию</option>
                                        @foreach($categories as $oneCategory)
                                            @php $old_category = (old('category_id', $category->category_id)); @endphp
                                            <option @if($oneCategory->id == $old_category) selected
                                                    @endif value="{{$oneCategory->id}}">{{$oneCategory->name}}</option>
                                        @endforeach
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
                                <div class="img_fotoupl"><img src="{{secure_asset($category->photo_path)}}"
                                                              alt="{{old('photo_alt', $category->photo_alt)}}"></div>
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
                        </div>

                        <div class="wrap_group_input">
                            <div class="form_label lab_size_block">описание на сайте:</div>
                            <div class="block_formitem">
                                <textarea name="description" id="" class="textarea_rev  textarea_t2"
                                          placeholder="Введите описание">{{old('description', $category->description)}}</textarea>
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="wrap_group_input">
                            <div class="form_label lab_size_block">премодерация:</div>
                            <div class="block_formitem wr_input_type">
                                <input type="checkbox" name="premodaration" class="input_check input_check_inl"
                                       @if(old('premodaration', $category->premodaration))checked="checked"@endif/>
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
                                    <input type="text" name="url" class="input_content" value="{{old('url', $category->url)}}"
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
                                    <input type="text" name="header_description" class="input_content"
                                           value="{{old('header_description', $category->header_description)}}" placeholder>
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
                                    <input type="text" name="keywords" class="input_content" value="{{old('keywords',$category->keywords)}}"
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
                                    <input type="text" name="title" class="input_content" value="{{old('title', $category->title)}}"
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
                                    <input type="text" name="h1" class="input_content" value="{{old('h1', $category->h1)}}"
                                           placeholder>
                                    @if ($errors->has('h1'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('h1') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="block_formitem">
                                <div class="form_label">Фото alt:</div>
                                <div class="wr_input_cont">
                                    <input type="text" name="photo_alt" class="input_content"
                                           value="{{old('photo_alt', $category->photo_alt)}}" placeholder>
                                    @if ($errors->has('photo_alt'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('photo_alt') }}</strong>
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
