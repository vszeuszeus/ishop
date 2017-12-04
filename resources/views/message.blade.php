@if (session('message'))
    <!-- Список ошибок формы -->
    <div id="messageDiv" class="alert alert-info alert-dismissable fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Сообщение!</strong> {{session('message')}}
    </div>
    <script type="text/javascript">
        var mesDiv = document.getElementById('messageDiv')
    </script>
@endif
