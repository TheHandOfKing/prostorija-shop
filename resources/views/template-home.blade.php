{{--
  Template Name: Homepage Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('pages.home.home-hero-section')
    @include('pages.home.home-merch1-section')
    @include('pages.home.home-merch2-section')
  @endwhile
@endsection
