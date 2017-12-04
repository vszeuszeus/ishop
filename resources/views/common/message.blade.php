@if (session('message'))
    <!-- Список ошибок формы -->
    <div id="messageDiv" class="alert alert-info alert-dismissable fade in">
        <strong>Сообщение!</strong> {{session('message')}}
    </div>

@endif
