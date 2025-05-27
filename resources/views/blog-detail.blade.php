@include('common.header')
<section class="blog-inner-banner" style="background: url('assets/images/blog-details-bg.png')#fff;background-size: cover;background-repeat: no-repeat;background-position: bottom center;">
    <div class="container">
        <div class="inner-page-headding">
            <h1>Blog Details</h1>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>Blog</li>
            </ul>
        </div>
    </div>
</section>

<section class="blog-details-main">
    <div class="container">
        <div class="blog-main-image">
            <img src="{{ asset('storage/' . $blog->image) }}" alt="" class="img-fluid">
        </div>
        <div class="blog-date">
            <ul>
                <li><i class="fas fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($blog->created_at)->format('j F, Y') }}
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-8 col-lg-9 border-right">
                <div class="blog-title">
                    <h2>{{ $blog->title }}</h2>
                </div>
                <div class="blog-details">
                    {!! $blog->content !!}
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
            <div class="admisiion-open-form">
                <form method="POST" action="{{ url('/popup-submit') }}" >
                @csrf
                    <div class="mb-3">
                        <label for="exampleInputname" class="form-label">Name <span>*</span></label>
                        <input type="text" placeholder="Student Name" class="form-control" name="name" require>
                        <input type="hidden" value="{{ url()->current() }}" class="form-control" name="page_url">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email Address <span>*</span></label>
                        <input type="email" placeholder="Email" class="form-control" name="email" aria-describedby="emailHelp" require>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputphone" class="form-label">Phone No.<span>*</span></label>
                        <input type="text" placeholder="Phone No." class="form-control" name="phone" require>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Seeking Admission in Class<span>*</span></label>
                        <select class="form-select" aria-label="Default select example" name="class" require>
                            <option value="">— Select Class —</option>
                            <option value="Class : KG">Class : KG</option>
                            <option value="Class : I">Class : I</option>
                            <option value="Class : II">Class : II</option>
                            <option value="Class : III">Class : III</option>
                            <option value="Class : IV">Class : IV</option>
                            <option value="Class : V">Class : V</option>
                            <option value="Class : VI">Class : VI</option>
                            <option value="Class : VII">Class : VII</option>
                            <option value="Class : VIII">Class : VIII</option>
                            <option value="Class : IX">Class : IX</option>
                            <option value="Class : XI">Class : XI</option>
                            </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
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

@include('common.footer')