@extends('layouts.app')

@section('content')
    <div class="maincontent contentbord">

        <div class="container containersize1200">

            <div class="row">

                @include('admin.leftMenu')


                <div class="col-xs-12 col-md-9 col-lg-10">

                    <a href="{{route('productGroup.show', [$product->group])}}" class="a_back">&lt; Назад к товарам</a>
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-lg-12">
                            <div class="titlecontent">Редактирование товара № {{$product->id}}</div>
                            <div class="resalt_order">Категория: {{$product->group->category->name}} |
                                Группа: {{$product->group->name}}</div>
                        </div>
                        {{--<div class="col-xs-12 col-md-12 col-lg-6">
                            <div class="right_s">
                                <div class="form_label">Изменить статус товара</div>
                                <!--  <div class="wr_input_c">  -->
                                <div class="wrap-select selectsizeb">
                                    <select name="" id="" class="select">
                                        <option value="">Черновик</option>
                                        <option value="">Зарезервирован</option>
                                        <option value="">Ожидает модерации</option>
                                        <option value="">40</option>
                                    </select>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>--}}

                    </div>
                    @include('common.message')
                    @include('common.errors')
                    <form enctype="multipart/form-data" id="formSent" action="{{route('product.update',[$product])}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        <div class="wrap_group_input">
                            <div class="form_label lab_size_block">данные товара:</div>
                            <div class="block_formitem">
                                <textarea name="description" id="" class="textarea_rev  textarea_t2"
                                          placeholder="Введите описание товара: это описание клиент увидит, когда оплатит товар">{{old('description', $product->description)}}</textarea>
                            </div>
                        </div>

                        <div class="wrap_group_input">
                            <div class="form_label lab_size_block">фото товара:</div>
                            <div class="block_formitem">
                                <input multiple name="photos[]" type="file" class="file">
                            </div>
                        </div>
                        <div class="wrap_group_input">
                            <div class="block_formitem wr_input_type">
                                <input @if(old('draft')) checked="checked" @endif type="checkbox" name="draft" class="input_check input_check_inl" />
                                <div class="check_label">сохранить как черновик</div>
                                @if ($errors->has('draft'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('draft') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="wrap_group_input">
                            <div class="block_formitem wr_input_type">
                                <input @if(old('setActive')) checked="checked" @endif type="checkbox" name="setActive" class="input_check input_check_inl" />
                                <div class="check_label">выставить на продажу (Активен)</div>
                                @if ($errors->has('setActive'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('setActive') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="wrap_group_input">
                            <div class="block_btn_type2">
                                <input type="submit" class="order_btn color_w"
                                       value="Сохранить"/>
                            </div>
                        </div>
                    </form>

                    <script type="text/javascript">
                        function sentForm() {
                            var form = document.getElementById('formSent');
                            var input = document.getElementById('type_product_id');
                            input.value = 2;
                            form.submit();
                        }
                    </script>


                </div><!--col-md-9-->
            </div><!--row-->

        </div>

    </div><!--maincontent-->
@endsection
