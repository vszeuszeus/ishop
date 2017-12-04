@extends('layouts.app')

@section('content')
    <div class="maincontent contentbord">

        <div class="container containersize1200">

            <div class="row">

                @include('admin.leftMenu')


                <div class="col-xs-12 col-md-9 col-lg-10">

                    <a href="{{route('productGroup.show', [$productGroup])}}" class="a_back">&lt;Назад к товарам</a>
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-lg-12">
                            <div class="titlecontent">Добавление товаров</div>
                            <div class="resalt_order">Категория: {{$productGroup->category->name}} | Группа: {{$productGroup->name}}</div>
                        </div>
                    </div>
                    <div id="table_create_products" class="wrap_group_input">
                        @include('common.message')
                        @include('common.errors')
                        <div class="wrap_group_inl">
                            <div class="form_label lab_size_block">Количество товара:</div>
                            <div class="block_formitem">
                                <input v-validate="'numeric|max_value:50|min_value:1|required'" type="text"
                                       :class="{'input': true, 'is-danger': errors.has('product_counts')}" data-vv-as="'количество товара'" name="product_counts" v-model="product_counts"
                                       class="input_content">
                                <span v-show="errors.has('product_counts')" class="help is-danger">@{{ errors.first('product_counts') }}</span>
                            </div>
                        </div>
                        <div class="wrap_group_inl">
                            <div class="form_label lab_size_block">Действия:</div>
                            <div class="block_formitem">
                                <input type="checkbox" class="" v-model="isChecked">
                                <div class="check_label">Отметить все черновиками</div>
                            </div>
                        </div>
                        <form @submit.prevent="validateBeforeSubmit" action="{{route('product.store')}}" id="formProducts" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="productGroup_id" value="{{$productGroup->id}}">
                            <table class="table table-striped" style=" width:90%; padding:10px;">
                                <template v-for="item in arrProducts">
                                    <tr style="border-bottom:solid 2px black;">
                                        <td style=" text-align:center; font-size:3em; color:#e82828; border-right: 2px solid black;">
                                            @{{ item + 1 }}
                                        </td>
                                        <td>
                                            <div style="margin-left:20px;">
                                                <div class="wrap_group_input">
                                                    <div class="form_label lab_size_block">данные товара:</div>
                                                    <div class="block_formitem">
                                                        <textarea v-validate="'max:300'"
                                                                  maxlength="300"
                                                                  v-bind:name="'descriptions[' + item + ']'" id=""
                                                                  rows="3" class="textarea_rev  textarea_t2"
                                                                  placeholder="Введите описание товара: это описание клиент увидит, коглда оплатит товар"></textarea>

                                                    </div>
                                                </div>
                                                <div class="block_formitem wr_input_type">
                                                    <input
                                                           v-bind:name="'drafts[' + item + ']'" type="checkbox"
                                                           class="" :checked="isChecked">
                                                    <div class="check_label">Сохранить как черновик</div>
                                                </div>

                                                <div>
                                                    <div class="wrap_group_input">
                                                        <div class="form_label lab_size_block">фото товара:</div>
                                                        <div class="block_formitem">
                                                            <input data-vv-as="'фотографии'" v-validate="'mimes:image/jpeg,image/png,image/jpg|size:5120'"
                                                                   maxlength="3" multiple max="3"
                                                                   v-bind:name="'photos[' + item + '][]'" type="file"
                                                                   class="file"
                                                                   v-on:change="testCount($event)"
                                                            >
                                                            <span v-show="errors.has('photos[' + item + '][]')" class="help is-danger">@{{ errors.first('photos[' + item + '][]') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </template>
                            </table>
                            <div class="wrap_group_input">
                                <div class="block_btn_type2">
                                    {{--<input type="submit" class="order_btn color_r" onclick="sentForm()"value="Сохранить как черновик"/>--}}
                                    <input  type="submit" class="order_btn color_w"
                                           value="Сохранить и отправить на модерацию"/>
                                </div>
                            </div>
                        </form>

                    </div>
                    {{--<form id="formSent" action="{{route('product.store')}}" method="POST">

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
                    </form>--}}


                </div><!--col-md-9-->
            </div><!--row-->

        </div>

    </div><!--maincontent-->
@endsection
