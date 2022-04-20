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

<nav class="blog-pagination container" aria-label="Blog page navigation">
  <ul class="pagination list-of-links">
    {{-- Previous link --}}
    @php
      if($currentPage > 1):
        @endphp
          <li class="page-item"><a class="page-link prev-item" href="{{get_site_url()}}/category/{{$slug}}?pageNumber={{$currentPage-1}}"><svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 1L2 8L9 15" stroke="#333333" stroke-width="2" stroke-linecap="round"/>
            </svg>
            </a></li>
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
          <a class="page-link" href="{{get_site_url()}}/category/{{$slug}}?pageNumber={{$i}}">{{ $i }}</a>
        </li>
      @endif
    @endfor
    
    <li class="page-item disabled">
      <a class="page-link" href="{{get_site_url()}}/category/{{$slug}}?pageNumber={{ $currentPage }}">{{ $currentPage }}</a>
    </li>

    {{-- After pages --}}
    @for ($i = $currentPage + 1; $i <= $currentPage + $pagesToShowBeforeAndAfter; $i++)
      @if ($i <= $counted)
        <li class="page-item">
          <a class="page-link" href="{{get_site_url()}}/category/{{$slug}}?pageNumber={{ $i }}">{{ $i }}</a>
        </li>
      @endif
    @endfor
    

    {{-- Next link --}}
    @php
      $newPageNum;
        if ($currentPage < $counted):
          $newPageNum = $currentPage + 1;
    @endphp
          <li class="page-item">
            <a class="page-link next-item" href="{{get_site_url()}}/category/{{$slug}}?pageNumber={{$newPageNum}}">
              <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L8 8L1 15" stroke="#333333" stroke-width="2" stroke-linecap="round"/>
              </svg>                
            </a>
          </li>
    @php
      endif;  
    @endphp
  </ul>
</nav>