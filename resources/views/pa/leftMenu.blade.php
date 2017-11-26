<div class="col-xs-12 col-md-3 col-lg-2">
<a href="#" id="menu-toggle">Меню</a>
<div id="aside">
    <a href="#" class="closas" id="closas">jjjj</a>
    <div class="asides">
        <ul class="ul_asid">
            <li><a href="{{route('orderHistory')}}">История заказов</a></li>
            @auth
                <li><a href="{{route('supportLc')}}">Поддержка</a></li>
            @else
                <li><a href="{{route('support')}}">Поддержка</a></li>
            @endauth
            <li><a href="{{route('personalData')}}">Личные данные</a></li>
            <li><a href="{{route('checkOrder')}}">Проверка заказов</a></li>
        </ul>
    </div>
</div>
</div>

