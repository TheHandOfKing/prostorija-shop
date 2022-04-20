<?php
  $tags = get_the_tags();
  $categories =  get_the_category();
  $category = $categories[0];
?>

<section class="blog-post-slider">
  <div class="content">
    <div class="content-text">
      <h3>
        The Most Popular {{$category->name}}
      </h3>
      <p>
        let your skin tell you the most beautiful stories
      </p>
    </div>
    <a href="#">
      View all {{$category->name}}
    </a>
  </div>
  <div class="holder">
    <div class="posts-holder">
      @foreach ($posts as $post)
        @component('components.posts.single-post', ['post' => $post]) @endcomponent
      @endforeach
    </div>
  </div>
</section>
