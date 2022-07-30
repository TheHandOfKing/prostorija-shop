{{--
  Template Name: O Nama Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('pages.onama.onama-hero-section')
    @include('pages.onama.onama-text-section')
    @include('pages.onama.onama-slide-section')
  @endwhile
@endsection
