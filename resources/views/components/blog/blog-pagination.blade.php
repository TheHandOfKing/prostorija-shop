{{-- Blog Pagination --}}

{{-- If parameters are not passed to this component print the error message --}}
@php
  if (!isset($currentPage)) {
    echo "<script>console.error('currentPage is not defined');</script>";
  }
  if (!isset($counted)) {
    echo "<script>console.error('counted is not defined');</script>";
  }
@endphp

<nav class="blog-pagination" aria-label="Blog page navigation">
  <ul class="pagination list-of-links">
    {{-- Previous link --}}
    @php
      if($currentPage > 1):
        @endphp
          <li class="page-item arrow-controlls"><a class="page-link" href="{{get_site_url()}}/blog/?pageNumber={{$currentPage-1}}">Previous</a></li>
        @php
      endif;    
    @endphp
    
    {{-- 
      
      Pages 
      
    --}}

    {{-- Previous pages --}}
    @php
      $pagesToShowBeforeAndAfter = 5;
      $previousPagesArray = array();
      $start = $currentPage - $pagesToShowBeforeAndAfter;
      
      for($i = $currentPage; $i > $start; $i--) {
        array_push($previousPagesArray , $i);
      }
      $previousPagesArray = array_reverse($previousPagesArray);
    @endphp

    @for ($i = $start; $i < $currentPage; $i++)
      @if ($i > 0)
        <li class="page-item {{ $isDisabled }}">
          <a class="page-link" href="{{get_site_url()}}/blog/?pageNumber={{$i}}">{{ $i }}</a>
        </li>
      @endif
    @endfor
    
    <li class="page-item disabled">
      <a class="page-link" href="{{get_site_url()}}/blog/?pageNumber={{ $currentPage }}">{{ $currentPage }}</a>
    </li>

    {{-- After pages --}}
    @for ($i = $currentPage + 1; $i <= $currentPage + $pagesToShowBeforeAndAfter; $i++)
      @if ($i <= $counted)
        <li class="page-item">
          <a class="page-link" href="{{get_site_url()}}/blog/?pageNumber={{ $i }}">{{ $i }}</a>
        </li>
      @endif
    @endfor
    

    {{-- Next link --}}
    @php
      $newPageNum;
        if ($currentPage < $counted):
          $newPageNum = $currentPage + 1;
    @endphp
          <li class="page-item arrow-controlls"><a class="page-link" href="{{get_site_url()}}/blog/?pageNumber={{$newPageNum}}">Next</a></li>
    @php
      endif;  
    @endphp
  </ul>
</nav>