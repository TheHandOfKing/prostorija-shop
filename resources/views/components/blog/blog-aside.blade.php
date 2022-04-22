<?php
    $recent_posts = wp_get_recent_posts(array(
      'numberposts' => 5,
      'post_status' => 'publish'
  ));
?>

<div class="blog-aside">
  <h4 class="aside-subtitle">Recent Posts</h4>
  @php
  foreach($recent_posts as $post):
  @endphp
  <a class="recent-post" href="<?php echo get_permalink($post['ID'])?>">
    <?=$post['post_title']?>
  </a>
  @php endforeach @endphp
</div>
