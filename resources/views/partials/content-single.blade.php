<article @php post_class() @endphp>
  <div class="post-hero">
    <div class="text">
      <div class="entry-title">
        <h1>{!! get_the_title() !!}</h1>
        <img class="tape-heading" src="@asset('images/blog/post-tape.png')" alt="Tape">
      </div>
      <p class="short-desc">
        @php echo Posts::getExcerptForPostContent($post->post_content, 150) @endphp
      </p>
      <div class="author-holder">
        @php echo get_avatar($post->post_author) @endphp
        <span class="auhtor-name">@php echo get_the_author() @endphp</span>
        <svg width="2" height="18" viewBox="0 0 2 18" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 0.5V17.5" stroke="white" />
        </svg>
        <span class="date">@php echo get_the_date() @endphp</span>
      </div>
    </div>
    <div class="img-holder">
      <img class="tape-bl" src="@asset('images/blog/tape-bl.png')" alt="Tape">
      <img class="tape-tr" src="@asset('images/blog/tape-tr.png')" alt="Tape">
      @if(has_post_thumbnail($posts[0]->ID))
      <?= get_the_post_thumbnail($posts[0]->ID); ?>
      @else
      <img src="@asset('images/blog/default.png')" alt="Blog post picture" class="wp-post-image" />
      @endif
    </div>
  </div>
  <div class="post-content">
    <div class="holder">
      <div class="entry-content">
        <div class="content-holder">
          @php the_content() @endphp
        </div>
      </div>
      @component('components.blog.blog-aside' , ['posts' => $posts]) @endcomponent
    </div>
  </div>
</article>
