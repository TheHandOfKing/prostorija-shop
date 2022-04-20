{{-- List of Posts --}}

<ul class="post-list">
  @foreach ($posts as $post)
    @component('components.posts.single-post', ['post' => $post]) @endcomponent
  @endforeach
</ul>