<!DOCTYPE html>
<html lang="ru">
@include('inc.head')
<body id="body">
   <div class="wrapper">
      @include('inc.header')
         <main class="page">
            @yield('content')
         </main>
      @include('inc.footer')
   </div>
   @include('inc.scroll_top')
   @include('inc.popup')
</body>

</html>