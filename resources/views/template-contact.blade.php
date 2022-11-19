{{--
  Template Name: Contact Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('pages.contact.contact-hero-section')
    @include('pages.contact.contact-body-section')
  @endwhile
@endsection
