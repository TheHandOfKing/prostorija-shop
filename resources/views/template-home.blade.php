{{--
  Template Name: Homepage Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    {{-- @include('pages.home.home-first-section') --}}
    @include('pages.home.home-hero-section')
    @include('pages.home.home-slider-section')
    @include('pages.home.home-about-section')
  @endwhile
@endsection
