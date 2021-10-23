{{--
  Template Name: Blog
--}}

{{-- This template needs to be selected on the Blog page -> Template
It won't work if its selected as the WordPress Posts Page --}}

@extends('layouts.app')

@section('content')

  @if(have_posts())
    @while(have_posts()) @php the_post() @endphp
      @php
        // Get Posts by page
        $postsPerPage = intval(get_option('posts_per_page'));
        // Total number of pages
        $totalPages = Posts::pagination($postsPerPage);

        $res = Posts::getCurrentPage($_GET['pageNumber'], $totalPages);
        $currentPage = $res->currentPage;
        $is404 = $res->is404;

        // Get posts per page
        $posts = Posts::getPostsByPage($postsPerPage, $currentPage);
        // TODO: Get posts by page without refreshing the page - http req
      @endphp

      {{-- If user requested page that doesn't exist return 404 --}}
      @if ($is404)
        @include('404')
        @php return; @endphp
      @endif
       
      {{-- Display Posts --}}
      @component('components.blog.posts.post-list' , ['posts' => $posts]) @endcomponent

    @endwhile

    {{-- Blog Pagination --}}
    @component('components.blog.blog-pagination' , ['currentPage' => $currentPage , 'counted' => $totalPages]) @endcomponent
    

    {{-- If there are no posts, display this message --}}
    @else
      <p>@php _e('Sorry, no posts matched your criteria.'); @endphp</p>
  @endif

@endsection



{{-- <input id="num" type="text" placeholder="Choose number of posts to be displayed">
<button id="submit-btn">Submit</button>

<script>
  let submitBtn = document.querySelector('#submit-btn');

  submitBtn.addEventListener('click', () => {
    let val = parseInt(document.querySelector('#num').value);
    console.log('VAL: ', val);
    
    
    fetch('../wp-content/themes/sage-steroids/resources/file.php', {
      method: 'POST',
      mode: 'cors',
      headers: {
        'Content-Type': 'application/json',
        'Access-Control-Allow-Origin': '*'
      },
      body: JSON.stringify({ val: val })
    })
      .then(res => res.json())
      .then(res => console.log(res))
  });
</script> --}}