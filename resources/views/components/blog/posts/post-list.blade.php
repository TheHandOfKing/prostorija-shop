{{-- List of Posts --}}

<ul class="post-list">
  @foreach ($posts as $post)
    @component('components.blog.posts.single-post', ['post' => $post]) @endcomponent
  @endforeach
</ul>