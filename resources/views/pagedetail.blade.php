@include('common.header')
<!-- start of hero -->
 @php
    $str = $details->slug;
    $camelCase = $withSpaces = str_replace('-', ' ', $str);

@endphp    
@if($details->post_type == 1)
<section class="inner-banner-section " style="background: url({{ $details->image }});background-size: cover; background-position: center center;background-repeat:no-repeat;">
    <div class="container">
        <h1>{{ $details->title }}</h1>
        <ul>
            <li><a href="/">Home</a></li>
            <li>{{ ucwords($camelCase) }}</li>
        </ul>
    </div>
</section>
<!-- end of hero slider -->

{!! $details->content !!}

@elseif($details->post_type == 2)

@php
    $slug = request()->path();

    $recentBlogs = \App\Models\Post::with('meta')
        ->where('post_type', 2)
        ->where('status', 1)
        ->where('slug', '!=', $slug)
        ->latest('created_at')
        ->take(4)
        ->get();
@endphp


<section class="blog-inner-banner" style="background: url('assets/image/about-banner.jpg')#fff;background-size: cover;background-repeat: no-repeat;background-position: bottom center;">
    <div class="container">
        <div class="inner-page-headding">
            <h1>Blog Details</h1>
            <ul>
                <li><a href="/">Home</a></li>
                <li>Blog</li>
            </ul>
        </div>
    </div>
</section>

<section class="blog-details-main">
    <div class="container">
        <div class="blog-main-image">
            <img src="{{ asset( $details->image) }}" alt="" class="img-fluid">
        </div>
        <div class="blog-date">
            <ul>
                <li><i class="fas fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($details->blog_date)->format('j F, Y') }}
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-8 col-lg-9 border-right">
                <div class="blog-title">
                    <h2>{{ $details->title }}</h2>
                </div>
                <div class="blog-details">
                    {!! $details->content !!}
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <h3 class="recent-post-title">Recent Posts</h3>
                <ul class="related-blog">
                    @foreach ($recentBlogs as $recent)
                    <li>
                        <a href="#"><img src="{{ asset('storage/' . $recent->small_image	) }}" alt="" class="img-fluid"></a>
                        <div class="sidebarblog-title">
                            <span><i class="fas fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($recent->created_at)->format('j F, Y') }}</span>
                            <a href="{{ $recent->slug }}">{{ $recent->title }}</a>
                            <p>{{ $recent->expert }}</p>
                        </div>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>


    </div>
</section>
@endif;

@include('common.footer')