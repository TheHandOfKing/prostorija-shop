{{--
  Template Name: Blog
--}}

@extends('layouts.app')

@section('content')
@if(have_posts())
@while(have_posts()) @php the_post() @endphp
@php

$pressID = get_cat_ID('Press');

// Get Posts by page
$postsPerPage = 6;
$paginationPage = 'blog';
// Total number of pages
$totalPages = Posts::pagination(6, $pressID);

$res = Posts::getCurrentPage($_GET['pageNumber'], $totalPages);
$currentPage = $res->currentPage;
$is404 = $res->is404;

// Get posts per page
$posts = Posts::getPostsByPage(6, $currentPage, $pressID);
@endphp

{{-- If user requested page that doesn't exist return 404 --}}
@if ($is404)
@include('404')
@php return; @endphp
@endif

{{-- Display Posts --}}
<div class="blog-container">
  <div class="blog-hero">
    <div class="text">
      <h1>
        {!! App::title() !!}
      </h1>
    </div>
  </div>
  <div class="post-container">
    @component('components.posts.post-list' , ['posts' => $posts]) @endcomponent
    @component('components.blog.blog-pagination' , ['currentPage' => $currentPage , 'counted' => $totalPages, 'page' => $paginationPage]) @endcomponent
  </div>
</div>

@endwhile

{{-- If there are no posts, display this message --}}
@else
<p>@php _e('Sorry, no posts matched your criteria.'); @endphp</p>
@endif

@endsection
