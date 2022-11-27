<?php
$postsPerPage = 8;
$searchQuery = $_GET['s'];
$totalPages = Posts::paginationSearchPage($searchQuery, $postsPerPage);
$res = Posts::getCurrentPage($_GET['pageNumber'], $totalPages);
$currentPage = $res->currentPage;
$searchPosts = Posts::getSearchedItems($postsPerPage, $currentPage, $searchQuery);
?>


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
    @foreach ($searchPosts as $item)
    @component('partials.content-search', ['searchitem' => $item])
    @endcomponent
    @endforeach
  </div>
</div>
@component('components.blog.search-pagination' , ['currentPage' => $currentPage , 'counted' => $totalPages, 'varSearch' => $searchQuery]) @endcomponent
@endsection
