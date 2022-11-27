<div class="entry-meta">
  <p class="byline author vcard">
    @php echo get_avatar($searchitem->ID) @endphp
    <a rel="author" class="fn">
      @php echo get_the_author_meta('display_name', $searchitem->post_author); @endphp
    </a>
  </p>
  <time class="updated" datetime="{{ get_post_time('c', true, $searchitem->ID) }}">{{ get_the_date('j F Y', $searchitem->ID) }}</time>
</div>
