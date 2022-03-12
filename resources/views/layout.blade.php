<!DOCTYPE html>
<html lang="ru">
@include('inc.head')
<body id="body">
   <div class="wrapper">
      @include('inc.header')
      @yield('content')
      @include('inc.footer')
   </div>
   @include('inc.popup')
</body>

</html>