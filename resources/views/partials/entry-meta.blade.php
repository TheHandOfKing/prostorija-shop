<div class="entry-meta">
  <p class="byline author vcard">
    @php echo get_avatar('ID') @endphp <a rel="author" class="fn">
      {{ get_the_author() }}
    </a>
  </p>
  <time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
</div>
