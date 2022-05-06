<!DOCTYPE html>
<html lang="@lang('main.set_lang')">
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