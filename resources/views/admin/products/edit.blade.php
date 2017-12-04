@extends('layouts.app')

@section('content')
    <div class="maincontent contentbord">

        <div class="container containersize1200">

            <div class="row">

                @include('admin.leftMenu')


                <div class="col-xs-12 col-md-9 col-lg-10">

                    <a href="{{route('productGroup.show', [$productGroup])}}" class="a_back">&lt; Назад к группам товаров</a>
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-lg-6">
                            <div class="titlecontent">Новый товар</div>
                            <div class="resalt_order">Категория: {{$productGroup->category->name}} | Группа: {{$productGroup->name}}</div>
                        </div>
                        <div class="col-xs-12 col-md-12 col-lg-6">
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
                        </div>
                    </div>

                    <form id="formSent" action="{{route('product.store')}}" method="POST">
                        {{csrf_field()}}
                        <input type="hidden" name="productGroup_id" value="{{$productGroup->id}}">
                        <input type="hidden" name="type_product_id" id="type_product_id" value="1">
                        @if ($errors->has('photo_path'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('photo_path') }}</strong>
                                    </span>
                        @endif
                        <div class="wrap_group_input">
                            <div class="form_label lab_size_block">данные товара:</div>
                            <div class="block_formitem">
                                <textarea name="description" id="" class="textarea_rev  textarea_t2" placeholder="Введите описание товара: это описание клиент увидит, коглда оплатит товар"></textarea>
                            </div>
                        </div>

                        <div class="wrap_group_input">
                            <div class="form_label lab_size_block">фото товара:</div>
                            <div class="block_formitem">
                                <input multiple name="photos" type="file" class="file">
                            </div>
                        </div>

                        <div class="wrap_group_input">
                            <div class="block_btn_type2">
                                <input type="submit" class="order_btn color_r" onclick="sentForm()"value="Сохранить как черновик"/>
                                <input type="submit" class="order_btn color_w" value="Сохранить и отправить на модерацию"/>
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
