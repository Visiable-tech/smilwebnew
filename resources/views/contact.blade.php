@include('common.header')

<div class="top-slide-contact">
    <a href="javascript:void(0);" id="slidecontactClose"><i class="fa-solid fa-xmark"></i></a>
    <div class="row">
        <div class="col-12">
            <div class="sidebar-right">
                <h3>Contact Us</h3>
                <ul>
                    <li>
                        <i class="fa-solid fa-location-dot "></i>
                        <span>Liluah, Howrah</span>
                    </li>
                </ul>
                <ul>
                    <li>
                        <i class="fa-regular fa-envelope "></i>
                        <span><a href="mailto:thekolkatainternationalschool@gmail.com">thekolkatainternationalschool@gmail.com</a></span>
                    </li>
                    <li>
                        <i class="fa-solid fa-square-phone "></i>
                        <span> <a href="tel:6290110029 ">+91 - 6290110029</a></span>
                    </li>
                </ul>
                <h3>Follow Us On</h3>
                <ul class="slidbar-social-media ">
                    <li><a href="https://www.facebook.com/profile.php?id=61575328153197" target="_blank"><i class="fa-brands fa-facebook-f "></i></i></a></li>
                    <li><a href="https://www.instagram.com/kolkata_international_school" target="_blank"><i class="fa-brands fa-instagram "></i></a></li>
                    <li><a href="https://www.pinterest.com/kolkatainternationalschool/" target="_blank"><i class="fa-brands fa-pinterest-p "></i></a></li>
                    <li><a href="# "><i class="fa-brands fa-linkedin-in " ></i></a></li>
                    <li><a href="https://www.youtube.com/@TheKolkataInternationalschool" target="_blank"><i class="fa-brands fa-youtube "></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-whatsapp "></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--============ sidebar contact details End ================-->

<section class="contact-inner-banner" style="background: url('assets/images/contact-bg.png')#fff;background-size: cover;background-repeat: no-repeat;background-position: bottom center;">
    <div class="container">
        <div class="inner-page-headding">
            <h1>Contact Us</h1>
            <ul>
                <li><a href="/">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</section>
<section class="contact-details">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('assets/images/contact-details-image.png') }}" alt="" class="img-fluid">
                        <h4>Get in touch</h4>
                        <ul>
                            <li>
                                <i class="fa-solid fa-phone "></i>
                                <span> <a href="tel:6290110029 ">+91 - 6290110029</a></span>
                            </li>
                            <li>
                                <i class="fa-regular fa-envelope "></i>
                                <span><a href="mailto:thekolkatainternationalschool@gmail.com">thekolkatainternationalschool@gmail.com</a></span>
                            </li>
                            <li>
                                <i class="fa-solid fa-map-marker-alt "></i>
                                <span> Liluah, Howrah</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-form">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            <form method="POST" action="{{ route('contact.submit') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="nameA" class="form-label">Name <span>*</span></label>
                                    <input type="text" class="form-control" name="name" id="nameA" placeholder="Name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phoneNo" class="form-label">Phone No. <span>*</span></label>
                                    <input type="text" class="form-control" name="phone" id="phoneNo" placeholder="Phone No." required>
                                </div>
                                <div class="mb-3">
                                    <label for="emailId" class="form-label">Email address <span>*</span></label>
                                    <input type="email" class="form-control" name="email" id="emailId" placeholder="Email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="5"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14731.790227048019!2d88.32177890616292!3d22.61843346848581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0277e01d381e59%3A0x50a001ffa49111f8!2sLiluah%2C%20Howrah%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1745924711773!5m2!1sen!2sin"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

@include('common.footer')