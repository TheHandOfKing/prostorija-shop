{{-- Single post article on Blog page (not Single Page Post) --}}

<article class="single-post">
  <div class="post-content-wrapper container">

    <div class="post-title-wrapper">
      <h2>
        <a class="post-title" href="{{$post->link}}">
          {{ Posts::getExcerptForPostTitle($post->post_title) }}
        </a>
      </h2>
    </div>

    <div class="entry-content">
      <a class="post-image-link" href="{{ $post->link }}">
        @if($post->photo == "")
          <img class="post-thumbnail" src="@asset('images/blog/post-image-holder-min.png')" alt="no-thumbnail-set">
        @else
          <img class="post-thumbnail" src="{{ $post->photo }} " alt="{{ $post->post_title }}">
        @endif
      </a>

      {{-- TODO: Change use of post_content because it may load images (needs testing) --}}
      <div class="post-desc-div">
        <p class="post-description">
          @php echo Posts::getExcerptForPostContent($post->link , $post->post_content) @endphp
        </p>
        {{-- Read More button --}}
        <a class="read-more-btn" href="{{$post->link}}">Read More</a>
      </div>
    </div>

    {{-- @php var_dump($post); @endphp --}}
  </div>
</article>
