<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if(isset($metaElements))
    <title>{{ $metaElements->meta->seo_title }}</title>
    <meta name="description" content="{{ $metaElements->meta->description }}" />
    @endif
    <link rel="icon" href="{{ asset('assets/image/logo-icon.png') }}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Special+Gothic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Delius&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="{{ asset('assets/css/main-style.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">



</head>

<body>

    <header class="header" id="header">
        <a href="#" class="elearninglink text-center"><img src="{{ asset('assets/image/elearning-icon.png') }}" alt=""></a>
        <div class="header-bottom">

            <section class="wrapper container-fluid">
                <a href="/" class="brand text-center"><img src="{{ asset('assets/image/logo.png') }}" alt=""></a>
                <div class="burger" id="burger">
                    <span class="burger-line"></span>
                    <span class="burger-line"></span>
                    <span class="burger-line"></span>
                </div>
                <span class="overlay"></span>
                <nav class="navbar" id="navbar">
                    <ul class="menu" id="menu">
                        <li class="menu-item"><a href="/" class="menu-link">Home</a></li>
                        <li class="menu-item menu-dropdown">
                            <span class="menu-link" data-toggle="submenu">About Us<i class="bx bx-chevron-down"></i></span>
                            <ul class="submenu">
                                <li class="submenu-item"><a href="about-us" class="submenu-link">About Us</a></li>
                                <li class="submenu-item"><a href="founder-message" class="submenu-link">Founder Message</a></li>
                                <li class="submenu-item"><a href="mission-vision" class="submenu-link">Mission & Vision</a></li>
                                <li class="submenu-item"><a href="from-the-principals-desk" class="submenu-link">From The Principal’s Desk</a></li>
                                <li class="submenu-item"><a href="our-faculty" class="submenu-link">Our Faculty</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-dropdown">
                            <span class="menu-link" data-toggle="submenu">Admission<i class="bx bx-chevron-down"></i></span>
                            <ul class="submenu">
                                <li class="submenu-item"><a href="admission-procedure" class="submenu-link">Admission Procedure</a></li>
                                <li class="submenu-item"><a href="admission-in-cbse-school" class="submenu-link">Admission Enquiry</a></li>
                                <li class="submenu-item"><a href="e-prospectus" class="submenu-link">E-Prospectus</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-dropdown">
                            <span class="menu-link" data-toggle="submenu">Academics<i class="bx bx-chevron-down"></i></span>
                            <ul class="submenu">
                                <li class="submenu-item"><a href="cbse-curriculum" class="submenu-link">Curriculum</a></li>
                                <li class="submenu-item"><a href="robotics-and-ai" class="submenu-link">Robotics & AI</a></li>
                                <li class="submenu-item"><a href="academic-calendar" class="submenu-link">Academic Calendar</a></li>
                                <li class="submenu-item"><a href="syllabus" class="submenu-link">Syllabus</a></li>
                                <li class="submenu-item"><a href="exam-schedule" class="submenu-link">Exam Schedule</a></li>
                                <li class="submenu-item"><a href="co-curricular-activities" class="submenu-link">Co-Curricular Activities</a></li>
                                <li class="submenu-item"><a href="co-scholastic-activities" class="submenu-link">Co-Scholastic Activities</a></li>
                                <li class="submenu-item"><a href="notice-announcement" class="submenu-link">Notice & Announcement</a></li>
                                <li class="submenu-item"><a href="tc" class="submenu-link">TC</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-dropdown">
                            <span class="menu-link" data-toggle="submenu">Facilities<i class="bx bx-chevron-down"></i></span>
                            <ul class="submenu">
                                <li class="submenu-item"><a href="school-infrastructure" class="submenu-link">School Infrastructure</a></li>
                                <li class="submenu-item"><a href="social-responsibility-activities" class="submenu-link">Social Responsibility (Activities)</a></li>
                                <li class="submenu-item"><a href="transport" class="submenu-link">Transport</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-dropdown">
                            <span class="menu-link" data-toggle="submenu">Achievements & Awards<i class="bx bx-chevron-down"></i></span>
                            <ul class="submenu">
                                <li class="submenu-item"><a href="our-achievers" class="submenu-link">Our Achievers</a></li>
                                <li class="submenu-item"><a href="other-awards-scholarships" class="submenu-link">Other Awards & Scholarships</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-dropdown">
                            <span class="menu-link" data-toggle="submenu">Gallery<i class="bx bx-chevron-down"></i></span>
                            <ul class="submenu">
                                <li class="submenu-item"><a href="#" class="submenu-link">Resources</a></li>
                                <li class="submenu-item"><a href="picture-gallery" class="submenu-link">Photo Gallery</a></li>
                                <li class="submenu-item"><a href="picture-gallery" class="submenu-link">AI & Robotics Labs</a></li>
                            </ul>
                        </li>
                        <li class="menu-item"><a href="contact-details" class="menu-link">Contact Us</a></li>
                        <!-- <li class="menu-item"><a href="#" class="menu-link">Carees</a></li> -->
                    </ul>
                </nav>
                <div class="d-flex">
                    <a class="btn btn-warning btn-alumni text-nowrap" href="#">Alumni</a>
                </div>
            </section>
        </div>
    </header>