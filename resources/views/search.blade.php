@extends('layouts.app')

@section('content')
@include('partials.page-header')

@if (!have_posts())
<div class="alert-holder">
  <div class="alert alert-warning">
    {{ __('Sorry, no results were found.', 'sage') }}
  </div>
</div>
@endif
<div class="content">
  <div class="search-articles-holder">
    @while(have_posts()) @php the_post() @endphp
    @include('partials.content-search')
    @endwhile
  </div>
</div>
{!! get_the_posts_navigation() !!}
@endsection
