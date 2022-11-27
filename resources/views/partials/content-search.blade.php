<article @php post_class() @endphp>
  <div class="article-top">
    <h2 class="entry-title">
      <a>
        {{$searchitem->post_title}}
      </a>
      <img class="tape-heading" src="@asset('images/blog/post-tape.png')" alt="Tape">
    </h2>
    @if ($searchitem->post_type === 'post')
      @include('partials/entry-meta', ['searchitem' => $searchitem])
    @endif
  </div>
  <div class="entry-summary">
    @php echo Posts::getExcerptForPostContent($searchitem->post_content, 250) @endphp
    <a href="{{ get_permalink($searchitem->ID) }}">
      Read more
      <svg class="svg-lines" viewBox="0 0 70 36">
        <path
          d="M6.9739 30.8153H63.0244C65.5269 30.8152 75.5358 -3.68471 35.4998 2.81531C-16.1598 11.2025 0.894099 33.9766 26.9922 34.3153C104.062 35.3153 54.5169 -6.68469 23.489 9.31527" />
      </svg>
    </a>
  </div>
</article>
