
@extends('layouts.accueil')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="accueil-wrapper">
      <div class="accueil-menu">
        <div class="accueil-menu-item">
          <h1 class="accueil-title">{{ get_bloginfo('name', 'display') }}</h1>
          <h2 class="accueil-subtitle">Le Garage</h2>
        </div>
        <div class="accueil-menu-item">
          <a class="accueil-menu-link" href="#">
            L'accueil <br> en résidence
          </a>
        </div>
        <div class="accueil-menu-item">
          <a class="accueil-menu-link" href="/le-projet">
            Découvrir <br> le projet
          </a>
        </div>
        <div class="accueil-menu-item empty"></div>
        <div class="accueil-menu-item">
          <a class="accueil-menu-link" href="/le-lieu">
            Contact <br> &amp; infos pratiques
          </a>
        </div>
        <div class="accueil-menu-item empty"></div>
        <div class="accueil-menu-item">
          <a class="accueil-menu-link" href="#">
            Partage <br> de répertoire
          </a>
        </div>
        <div class="accueil-menu-item">
          <a class="accueil-menu-link" href="#">
            Le <br> monstre
          </a>
        </div>
        <div class="accueil-menu-item empty"></div>
        <div class="accueil-menu-item">
          <a class="accueil-menu-link" href="/agenda">
            Les<br> évènements
          </a>
        </div>
        <div class="accueil-menu-item empty"></div>
        <div class="accueil-menu-item secondary-menu">
          <ul class="items">
            <li><a href="#">mentions légales</a></li>
            <li><a class="social-link" href="#"><i class="fa fa-facebook"></i> facebook</a></li>
            <li><a class="social-link" href="#"><i class="fa fa-twitter"></i> twitter</a></li>
          </ul>
        </div>
      </div>
    </div>
  @endwhile
@endsection
