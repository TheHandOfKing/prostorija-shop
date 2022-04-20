{{-- Single post article on Blog page (not Single Page Post) --}}

<div href="{{ get_permalink($post->ID) }}" class="single-post">
  <div class="post-text">
    <h2>
      {{ Posts::getExcerptForPostTitle($post->post_title, 18) }}
    </h2>
    <div class="author-holder">
      @php echo get_avatar($post->post_author) @endphp
      <span class="auhtor-name">@php echo get_the_author() @endphp</span>
      <svg width="2" height="18" viewBox="0 0 2 18" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 0.5V17.5" stroke="white" />
      </svg>
      <span class="date">@php echo get_the_date() @endphp</span>
    </div>
    <p class="post-description">
      @php echo Posts::getExcerptForPostContent($post->post_content, 150) @endphp
    </p>
    <div class="bottom-button">
      <a href="">Read more</a>
      {{-- <svg class="line" width="401" height="2" viewBox="0 0 401 2" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 1L401 1.00004" stroke="#525252" />
      </svg> --}}
      <img class="line" src="@asset('images/blog/read-more-line.svg')" alt="line" />
    </div>
  </div>
  <div class="post-featured-image">
    @if (has_post_thumbnail($post->ID))
    <?=get_the_post_thumbnail($post->ID, 'full')?>
    @else
    <img class="post-thumbnail" src="@asset('images/blog/default.png')" alt="Post image" />
    @endif
  </div>
</div>
