{{--
  ./resources/views/template/index.blade.php
--}}
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('template.partials._head')
  </head>
  <body>
    <!-- Navigation -->
  @include('template.partials._nav')
    <!-- CONTENU -->
  @include('template.partials._main')
    <!-- Footer -->
  @include('template.partials._footer')
    <!-- Bootstrap core JavaScript -->
  @include('template.partials._scripts')
  </body>
</html>
