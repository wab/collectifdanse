{{--
  Template Name: Page agenda
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
    <div id="agenda"></div>
  @endwhile
@endsection
