@include('common.header')
<!-- start of hero -->
@php
    $str = $details->slug;
    $camelCase = $withSpaces = str_replace('-', ' ', $str);

@endphp 
    <!-- start of hero -->
    <section class="inner-banner-section " style="background: url({{ $details->image }});background-size: cover; background-position: center center;background-repeat:no-repeat;">
        <div class="container">
            <h2>{{ $details->title }}</h2>
            <ul>
                <li><a href="/">Home</a></li>
                <li>{{ ucwords($camelCase) }}</li>
            </ul>
        </div>
    </section>
    <!-- end of hero slider -->


    <section class="inner-page-section padding-sm">
        <img class="rotate-image" src="image/dotted-circles.png" alt="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-11 wow slideInUp" data-wow-duration="1.5s">
                    <h1>Admission Open For CBSE School in Howrah</h1>
                    <div class="row">
                        <div class="col-md-8 col-lg-8">
                            {!! $details->content !!}
                        </div>
                        <div class="col-md-4 col-lg-4">
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
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="inner-page-section" style="background: #f0f5ff;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10 ">
                    <h2 class="dark-blue text-center mb-5 wow slideInUp" data-wow-duration="1.5s">Salient Features about School</h2>
                    <div class="owl-carousel owl-theme salient-features-slider">
                        <div class="item wow slideInUp" data-wow-duration="1.5s">
                            <div class="salient-features">
                                <img src="image/sf-1.png" alt="">
                                <p>Ranked among the top CBSE School in Howrah</p>
                            </div>
                        </div>
                        <div class="item wow slideInUp" data-wow-duration="1.7s">
                            <div class="salient-features">
                                <img src="image/sf-2.png" alt="">
                                <p>Ranked among the top CBSE School in Howrah</p>
                            </div>
                        </div>
                        <div class="item wow slideInUp" data-wow-duration="1.9s">
                            <div class="salient-features">
                                <img src="image/sf-3.png" alt="">
                                <p>Ranked among the top CBSE School in Howrah</p>
                            </div>
                        </div>
                        <div class="item wow slideInUp" data-wow-duration="2.0s">
                            <div class="salient-features">
                                <img src="image/sf-4.png" alt="">
                                <p>Ranked among the top CBSE School in Howrah</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="inner-page-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10 ">
                    <h2 class="dark-blue text-center mb-5 wow slideInUp" data-wow-duration="1.5s">FAQ for CBSE School in Howrah</h2>
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-lg-10 wow slideInUp" data-wow-duration="2.0s">
                            <div class="accordion">
                                <div class="accordion-item">
                                    <button id="accordion-button-1" aria-expanded="true">
                                    <span class="accordion-title">When can I collect admission form from English medium schools in Howrah?</span>
                                    <span class="icon" aria-hidden="true"></span>
                                  </button>
                                    <div class="accordion-content">
                                        <p>Admission forms are usually available from the month of August. You may collect it from <b>English medium school in Howrah</b> or may download from the school website online. </p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <button id="accordion-button-2" aria-expanded="false">
                                    <span class="accordion-title">What is the age limit for seeking admission in a CBSE school in Howrah?</span>
                                    <span class="icon" aria-hidden="true"></span>
                                  </button>
                                    <div class="accordion-content">
                                        <p>If you want to get admission in <b>CBSE School in Howrah</b>, then your minimum age must be 5 years and the exceeded limit is up to 7 years of age.</p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <button id="accordion-button-3" aria-expanded="false">
                                    <span class="accordion-title">What is the student-teacher ratio at CBSE schools in Howrah?</span>
                                    <span class="icon" aria-hidden="true"></span>
                                  </button>
                                    <div class="accordion-content">
                                        <p>In <b>CBSE schools in Howrah</b>, the student pupil ratio must be between 35:1.</p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <button id="accordion-button-4" aria-expanded="false">
                                    <span class="accordion-title">What are the disadvantages of English medium school?</span>
                                    <span class="icon" aria-hidden="true"></span>
                                  </button>
                                    <div class="accordion-content">
                                        <p>It is seen that sometimes a student may feel uncomfortable studying in <b>English medium school</b>. Also beginners may face challenges in learning simple learning points, and sometimes students who had lower motivational
                                            skills may get demotivated.</p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <button id="accordion-button-5" aria-expanded="false">
                                    <span class="accordion-title">What is the medium of instruction in CBSE schools?</span>
                                    <span class="icon" aria-hidden="true"></span>
                                  </button>
                                    <div class="accordion-content">
                                        <p>According to the Indian Education System, mostly the medium of instruction in <b>CBSE Schools</b> are Hindi and English. Because, the CBSE board provides the provision of teaching and learning in these languages.</p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <button id="accordion-button-6" aria-expanded="false">
                                    <span class="accordion-title">What are the benefits of studying in English medium school?</span>
                                    <span class="icon" aria-hidden="true"></span>
                                  </button>
                                    <div class="accordion-content">
                                        <p>One advantage is that the students start to think also in English. And you are aware that technologies can be only used with English instruction, and the higher education also mostly emphasizes on the English language.
                                            These are the benefits of studying in <b>English medium school.</b></p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <button id="accordion-button-7" aria-expanded="false">
                                    <span class="accordion-title">Why parents send their child to English medium school?</span>
                                    <span class="icon" aria-hidden="true"></span>
                                  </button>
                                    <div class="accordion-content">
                                        <p>When it comes to education, parents are quite confused and wanted to send their child to <b>English medium school</b> only because a person with English knowledge can survive anywhere they want. And many of the
                                            technologies such as computers or mobiles are made up of English only, so basically English medium schools are the best suited for children.</p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <button id="accordion-button-8" aria-expanded="false">
                                    <span class="accordion-title">Is CBSE an English medium?</span>
                                    <span class="icon" aria-hidden="true"></span>
                                  </button>
                                    <div class="accordion-content">
                                        <p>Although CBSE or Central Board of Secondary Education is an English medium but also provides knowledge of Hindi as a subject too. If in any case students ask for paper in Hindi medium, school can print and provide
                                            them.
                                        </p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <button id="accordion-button-9" aria-expanded="false">
                                    <span class="accordion-title">Which CBSE school is best in Howrah?</span>
                                    <span class="icon" aria-hidden="true"></span>
                                  </button>
                                    <div class="accordion-content">
                                        <p>Sudhir Memorial Institute is the <a href="https://www.sudhirmemorialinstituteliluah.com/">top cbse school in howrah</a> providing the education services and facilities to its students since long years of its existence.</p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <button id="accordion-button-10" aria-expanded="false">
                                    <span class="accordion-title">Which school is best for class 11 in Howrah?</span>
                                    <span class="icon" aria-hidden="true"></span>
                                  </button>
                                    <div class="accordion-content">
                                        <p>Sudhir memorial institute is best for <a href="https://www.sudhirmemorialinstituteliluah.com/toddler-to-class-11th-admission-in-howrah"><b>11<sup>th</sup> class admission in Howrah</b></a>. For 11th online admission,
                                            you may visit the website and collect the form from there or you may visit the school campus.</p>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('common.footer')