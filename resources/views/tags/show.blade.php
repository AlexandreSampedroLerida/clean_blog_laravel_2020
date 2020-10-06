{{--
  ./resources/views/tags/show.blade.php
    Variables disponibles: $tag (OBJ TAG(id, nom, posts))
--}}

@extends('template.index')
@section('content')

  <!-- Page Header -->
  <header class="masthead" style="background-image: url( {{asset ('assets/img/home-bg.jpg') }})">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>{{$tag->nom}}</h1>
            <span class="subheading"></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Textes -->
  <div class="container">
    {{-- <h2>Liste des posts du tag : {{$tag->nom}}</h2> --}}
    <ul>
      @foreach ($tag->posts as $postTag)
        <li><a href="{{ route('posts.show', ['post' => $postTag->id , 'slug' => Str::slug($postTag->titre, '-')]) }}">{{$postTag->titre}}</a></li>
      @endforeach
    </ul>
  </div>

@endsection
