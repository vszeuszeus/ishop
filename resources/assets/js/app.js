
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./formstyler/jquery.formstyler.min');

window.Vue = require('vue');
//window.VueV = require('vee-validate');
import ru from 'vee-validate/dist/locale/ru';
import VeeValidate, {Validator} from 'vee-validate';
Validator.localize('ru', ru);
Vue.use(VeeValidate);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const table_products = new Vue({
    el : '#table_create_products',
    data: {
        product_counts : 1,
        isChecked : false
    },
    computed: {
        arrProducts : function () {
            let j = [];
            if( this.product_counts > 50) return j;
            for (let i = 0; i < this.product_counts; i++) {
                j[i] = i ;
            }
            this.$nextTick(function () {
                $('.file, .checkbox').styler();
            });
            return j;
        }
    },
    methods: {
        testCount : function (event) {
            let now = $(event.target);
            console.log(now.prop('files'));
            if(now.prop('files').length > 3)
            {
                alert('Не более 3 фотографий для 1 продукта, выберите файлы заново!');
                now.val('');
            }
        },
        validateBeforeSubmit : function () {
            this.$validator.validateAll().then((result) => {
                if (result) {
                    return document.getElementById('formProducts').submit();
                }else
                {
                    return alert('Откорректируйте ошибки!');
                }
            });
        }
    }
});

