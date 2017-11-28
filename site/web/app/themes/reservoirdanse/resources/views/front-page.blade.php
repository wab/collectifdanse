
@extends('layouts.accueil')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="accueil-wrapper">
      <div class="accueil-menu">
        <div class="accueil-menu-item">
          <a class="accueil-menu-link" href="#">
            L'accueil <br> en résidence
            <hr>
          </a>
        </div>
        <div class="accueil-menu-item">
          <a class="accueil-menu-link" href="/le-projet">
            Découvrir <br> le projet
            <hr>
          </a>
        </div>
        <div class="accueil-menu-item">
          <a class="accueil-menu-link" href="/le-lieu">
            Contact <br> &amp; infos pratiques
            <hr>
          </a>
        </div>
        <div class="accueil-menu-item">
          <a class="accueil-menu-link" href="#">
            Partage <br> de répertoire
            <hr>
          </a>
        </div>
        <div class="accueil-menu-item">
          <a class="accueil-menu-link" href="#">
            Le <br> monstre
            <hr>
          </a>
        </div>
        <div class="accueil-menu-item">
          <a class="accueil-menu-link" href="/agenda">
            Tous les<br> évènements
            <hr>
          </a>
        </div>
      </div>
    </div>
  @endwhile
@endsection
