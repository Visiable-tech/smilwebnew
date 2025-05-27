@include('common.header')

<!-- start of hero -->
<section class="inner-banner-section " style="background: url(/assets/image/about-banner.jpg);background-size: cover; background-position: center center;background-repeat:no-repeat;">
    <div class="container">
        <h1>Blog</h1>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li>Blog</li>
        </ul>
    </div>
</section>
<!-- end of hero slider -->


<section class="inner-page-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10 ">
                <div class="row">
                @foreach($recentBlogs as $blog)
                    <div class="col-md-6 mb-3 wow slideInUp" data-wow-duration="1.5s">
                        <div class="single-blog-content">
                            <div class="post-date"><i class="fas fa-calendar-alt"></i>{{ \Carbon\Carbon::parse($blog->blog_date)->format('j F, Y') }}</div>
                            <h3><a href="/{{ $blog->slug }}">{{ $blog->title }}</a></h3>
                            <p class="text">{{ $blog->expert }} ...</p>
                            <a href="/{{ $blog->slug }}" class="btn btn-tc">Keep Reading <i class="fas fa-angle-right"></i></a>

                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
        
        {{-- Laravel pagination links --}}
        <div class="pagination">
            @php
                $currentPage = $recentBlogs->currentPage();
                $lastPage = $recentBlogs->lastPage();
                $pageRange = 5; // show 5 pages before the dots
            @endphp
            
            <nav>
              <ul class="pagination">
            
                {{-- Previous Page Link --}}
                @if ($currentPage > 1)
                  <li class="page-item">
                    <a class="page-link" href="{{ url('/blog/page/' . ($currentPage - 1)) }}" rel="prev">« Prev</a>
                  </li>
                @else
                  <li class="page-item disabled"><span class="page-link">« Prev</span></li>
                @endif
            
                {{-- Page 1 --}}
                <li class="page-item {{ $currentPage == 1 ? 'active' : '' }}">
                  <a class="page-link" href="{{ url('/blog/page/1') }}">1</a>
                </li>
            
                {{-- Pages 2 - $pageRange --}}
                @for ($i = 2; $i <= $pageRange && $i < $lastPage; $i++)
                  <li class="page-item {{ $currentPage == $i ? 'active' : '' }}">
                    <a class="page-link" href="{{ url('/blog/page/' . $i) }}">{{ $i }}</a>
                  </li>
                @endfor
            
                {{-- Dots and Last Page --}}
                @if ($lastPage > $pageRange + 1)
                  <li class="page-item disabled"><span class="page-link">...</span></li>
                  <li class="page-item {{ $currentPage == $lastPage ? 'active' : '' }}">
                    <a class="page-link" href="{{ url('/blog/page/' . $lastPage) }}">{{ $lastPage }}</a>
                  </li>
                @endif
            
                {{-- Next Page Link --}}
                @if ($currentPage < $lastPage)
                  <li class="page-item">
                    <a class="page-link" href="{{ url('/blog/page/' . ($currentPage + 1)) }}" rel="next">Next »</a>
                  </li>
                @else
                  <li class="page-item disabled"><span class="page-link">Next »</span></li>
                @endif
            
              </ul>
            </nav>

        </div>
    </div>
</section>

@include('common.footer')