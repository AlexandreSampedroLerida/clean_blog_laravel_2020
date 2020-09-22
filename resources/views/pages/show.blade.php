{{--
  ./resources/views/pages/show.blade.php
  Variable disponible:
  $page: OBJ(titre, sousTitre, texte, titreMenu, image, tri)
--}}


<h1>{{ $page -> titre }}</h1>

<h2>{{ $page -> sousTitre }}</h2>


<div class="">
  {!! $page -> texte !!}
</div>
