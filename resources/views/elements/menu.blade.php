<!-- Kiểm tra đăng nhập -->
@if (session()->has('user'))
@include('elements.menu_logined') <!--đã đăng nhập-->
@else
@include('elements.menu_unlogin') <!--chưa đăng nhập-->
@endif