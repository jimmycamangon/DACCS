<!doctype html>
<html>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DACCS</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="main/css/header.css">
    <link rel="stylesheet" href="main/css/how.css">
    <link rel="stylesheet" href="main/css/feature.css">
    <link rel="stylesheet" href="main/css/about.css">
    <link rel="stylesheet" href="main/css/contact.css">
    <link rel="stylesheet" href="main/css/footer.css">
</head>

<body>
    <a id="button" href="#home" style="text-decoration: none;"></a>
    <article>
        <header class="masthead">
            <div class="masthead-inner">
                <nav class="navigation-bar">
                    <div class="left-links">
                        <img src="main/assets/LOGO.png" id="logo" alt="Logo">
                        <a href="#how" id="link" class="multilang" lang="en">How?</a>
                        <a href="#how" id="link" class="multilang" lang="tl">Paano?</a>
                        <a href="#feature-page" id="link1">Features</a>
                        <a href="#about-page" id="link2">About</a>
                        <a href="#contact-page" id="link3">Contact</a>
                    </div>
                    <div class="right-links">
                        <button class="senior-button">Senior? <i class="fa-solid fa-person-cane"></i> </button>
                        <button class="youth-button" hidden="hidden">Youth? <i
                                class="fa-solid fa-child"></i></button><br>
                        <!-- Tagalog Lang-->
                        <a href="?lang=tl" id="link4" lang="en" class="multilang"> <i class="fa fa-globe"
                                id="globe">&nbsp;</i>Tagalog</a>
                        <!-- English Lang-->
                        <a href="?lang=en" id="link4" lang="tl" class="multilang"> <i class="fa fa-globe"
                                id="globe">&nbsp;</i>English</a>

                        <button id="link5" onclick="location.href='main/resident/login.php'">
                            Sign in
                        </button>
                    </div>
                </nav>
            </div>
            <marquee width="60%" direction="right" height="50px">
                Opening and Closing Time || 8:00 am to 5:00 pm
            </marquee>
            <!-- Mobile Nav -->
            <div class="navbar">
                <div class="container nav-container">
                    <div id="logo">
                        <!-- Logo-->
                        <img src="main/assets/LOGO.png" alt="LOGO" class="dark-logo">
                    </div>
                    <input class="checkbox" type="checkbox" name="" id="" />
                    <!-- Navigation Menu -->
                    <div class="hamburger-lines">
                        <span class="line line1"></span>
                        <span class="line line2"></span>
                        <span class="line line3"></span>
                    </div>
                    <div class="menu-items">
                        <li><a href="#">HOME</a></li>
                        <li><a href="#how" class="multilang" lang="en">HOW IT WORKS?</a></li>
                        <li><a href="#how" class="multilang" lang="tl">Paano?</a></li>
                        <li><a href="#feature-page">FEATURES</a></li>
                        <li><a href="#about-page">ABOUT</a></li>
                        <li><a href="#contact-page">CONTACT</a></li>

                        <li>
                            <!-- Tagalog Lang-->
                            <a href="?lang=tl" id="link4" lang="en" class="multilang">Tagalog</a>
                            <!-- English Lang-->
                            <a href="?lang=en" id="link4" lang="tl" class="multilang">English</a>
                        </li>
                        <li>
                            <a href="">
                                <button id="link5" style="font-size: 2rem;"
                                    onclick="location.href='main/resident/login.php'">
                                    Sign in
                                </button>
                            </a>
                        </li>
                    </div>
                </div>
            </div>
        </header>
        <!-- Hero (Home Page) -->
        <div class="hero-content" id="home">
            <div class="left-panel">
                <h1 id="en-text" class="logo multilang" lang="tl"> Mag Request na Online!</h1>
                <p id="en-text" class="multilang" lang="tl">
                    Maligayang pagdating sa Digital application of Clearance and Certification system kung saan maaari
                    kang humiling ng iyong mga dokumento sa
                    barangay gamit online.</p>

                <h1 id="tl-text" class="multilang" lang="en"> Request Now Online!</h1>
                <p id="en-text" class="multilang" lang="en">
                    Welcome to A Digital application of Clearance and Certification System where you
                    can request your barangay
                    documents online.</p>

                <center>
                    <div class="scroll-down-button">
                        <a id="scroll-btn" href="#how">
                            <div class="down_arrow">
                                <i class="arrow down"></i>
                            </div>
                        </a>
                    </div>
                </center>
            </div>
            <div class="hero-img">
                <img src="main/assets/hero-image.png" alt="">
            </div>

            <div class="right-hero-panel">

                <div class="accomodation">
                    <div class="accomodation-header">
                        <center>List of claiming</center>
                    </div>
                    <div class="accomodation-container">
                        <!-- Clearance -->
                        <div class="accomodation-box clearance active">
                            <div class="clearance-header">Clearance</div>
                            <br>
                            <div class="clearance-container">
                                <div id="clearance_list"></div>
                            </div>
                        </div>

                        <!-- Barangay ID -->
                        <div class="accomodation-box barangay-id">
                            <div class="barangay-id-header">Barangay ID</div>
                            <br>
                            <div class="barangay-id-container">
                                <div id="barangay-id_list"></div>
                            </div>
                        </div>

                        <!-- Residency -->
                        <div class="accomodation-box residency">
                            <div class="residency-header">Residency</div>
                            <br>
                            <div class="residency-container">
                                <div id="residency_list"></div>
                            </div>
                        </div>

                        <!-- Indigency -->
                        <div class="accomodation-box indigency">
                            <div class="indigency-header">Indigency</div>
                            <br>
                            <div class="indigency-container">
                                <div id="indigency_list"></div>
                            </div>
                        </div>

                        <!-- Cedula -->
                        <div class="accomodation-box cedula">
                            <div class="cedula-header">Cedula</div>
                            <br>
                            <div class="cedula-container">
                                <div id="cedula_list"></div>
                            </div>
                        </div>
                        <div class="accomodation-buttons">
                            <span class="fa-solid fa-circle-chevron-left" id="prev" style="font-size: 3rem;"></span>
                            <span class="fa-solid fa-circle-chevron-right" id="next" style="font-size: 3rem;"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Wave -->
    <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 400" xmlns="http://www.w3.org/2000/svg"
        class="transition duration-300 ease-in-out delay-150">
        <defs>
            <linearGradient id="gradient" x1="0%" y1="50%" x2="100%" y2="50%">
                <stop offset="5%" stop-color="#bc78ec"></stop>
                <stop offset="95%" stop-color="#bc78ec"></stop>
            </linearGradient>
        </defs>
        <path
            d="M 0,400 C 0,400 0,100 0,100 C 93.07142857142858,113.96428571428572 186.14285714285717,127.92857142857143 318,126 C 449.85714285714283,124.07142857142857 620.4999999999999,106.25000000000001 742,100 C 863.5000000000001,93.74999999999999 935.8571428571429,99.07142857142857 1044,101 C 1152.142857142857,102.92857142857143 1296.0714285714284,101.46428571428572 1440,100 C 1440,100 1440,400 1440,400 Z"
            stroke="none" stroke-width="0" fill="url(#gradient)" fill-opacity="0.4"
            class="transition-all duration-300 ease-in-out delay-150 path-0" transform="rotate(-180 720 200)"></path>
        <defs>
            <linearGradient id="gradient" x1="0%" y1="50%" x2="100%" y2="50%">
                <stop offset="5%" stop-color="#bc78ec"></stop>
                <stop offset="95%" stop-color="#bc78ec"></stop>
            </linearGradient>
        </defs>
        <path
            d="M 0,400 C 0,400 0,200 0,200 C 142.78571428571428,199.35714285714286 285.57142857142856,198.71428571428572 412,200 C 538.4285714285714,201.28571428571428 648.5,204.50000000000003 767,207 C 885.5,209.49999999999997 1012.4285714285713,211.28571428571428 1126,210 C 1239.5714285714287,208.71428571428572 1339.7857142857142,204.35714285714286 1440,200 C 1440,200 1440,400 1440,400 Z"
            stroke="none" stroke-width="0" fill="url(#gradient)" fill-opacity="0.53"
            class="transition-all duration-300 ease-in-out delay-150 path-1" transform="rotate(-180 720 200)"></path>
        <defs>
            <linearGradient id="gradient" x1="0%" y1="50%" x2="100%" y2="50%">
                <stop offset="5%" stop-color="#bc78ec"></stop>
                <stop offset="95%" stop-color="#bc78ec"></stop>
            </linearGradient>
        </defs>
        <path
            d="M 0,400 C 0,400 0,300 0,300 C 86.10714285714286,297.6071428571429 172.21428571428572,295.2142857142857 303,286 C 433.7857142857143,276.7857142857143 609.2499999999999,260.75 742,262 C 874.7500000000001,263.25 964.7857142857142,281.7857142857143 1074,291 C 1183.2142857142858,300.2142857142857 1311.607142857143,300.1071428571429 1440,300 C 1440,300 1440,400 1440,400 Z"
            stroke="none" stroke-width="0" fill="url(#gradient)" fill-opacity="1"
            class="transition-all duration-300 ease-in-out delay-150 path-2" transform="rotate(-180 720 200)"></path>
    </svg>



    <!-- How it works Page -->
    <main id="how">
        <h1 id="en-text" class="logo multilang" lang="en">
            <center>How it works </center>
        </h1>
        <h1 id="en-text" class="logo multilang" lang="tl">
            <center>Paano ito nagana </center>
        </h1>


        <!-- Login Process -->
        <div class="main-first-process">
            <div class="left-panel"><img src="main/assets/steps/login.jpg" alt="Video"></div>
            <div class="right-panel">
                <div class="right-panel-head">
                    <h1 id="en-text" class="logo multilang" lang="en">
                        Login
                    </h1>
                    <h1 id="en-text" class="logo multilang" lang="tl">
                        Mag Log In
                    </h1>
                </div>
                <div class="under-line"></div>
                <div class="right-panel-desc">
                    <p id="en-text" class="multilang" lang="en">You can sign in using your Email account by entering
                        your name, password, and any further personal information necessary to meet the requirements.
                    </p>
                    <p id="tl-text" class="multilang" lang="tl"> Maaari kang mag-sign in gamit ang iyong Email account
                        sa pamamagitan ng paglalagay ng iyong pangalan, password, at anumang karagdagang personal na
                        impormasyon upang matugunan ang mga kinakailangan sa log in section.
                    </p>
                </div>
            </div>
        </div>

        <center>
            <div class="vertifcal-line"></div>
        </center>

        <!-- Verify Process -->
        <div class="main-second-process">
            <div class="right-panel">
                <div class="right-panel-head">
                    <h1 id="en-text" class="logo multilang" lang="en">
                        Verify
                    </h1>
                    <h1 id="en-text" class="logo multilang" lang="tl">
                        Mag Verify
                    </h1>
                </div>
                <div class="under-line"></div>
                <div class="right-panel-desc">
                    <p id="en-text" class="multilang" lang="en">
                        Before we proceed to request documentation, a user
                        must first be verified by staff using this system after logging in and valid id's are used for
                        verification.
                    </p>
                    <p id="tl-text" class="multilang" lang="tl">
                        Bago tayo magpatuloy Upang kunin ang ating ni-request na dokumento, dapat munang magpa-verify sa
                        staff gamit ang system pagkatapos mag-log in at mga valid id lamang ang gagamitin para sa pag
                        verify.
                    </p>
                </div>
            </div>
            <div class="left-panel"><img src="main/assets/steps/verify.jpg" alt="Video"></div>
        </div>

        <center>
            <div class="vertifcal-line"></div>
        </center>

        <!-- Choose Process -->
        <div class="main-third-process">
            <div class="left-panel"><img src="main/assets/steps/choose.jpg" alt="Video"></div>
            <div class="right-panel">
                <div class="right-panel-head">
                    <h1 id="en-text" class="logo multilang" lang="en">
                        Choose
                    </h1>
                    <h1 id="en-text" class="logo multilang" lang="tl">
                        Mamili
                    </h1>
                </div>
                <div class="under-line"></div>
                <div class="right-panel-desc">
                    <p id="en-text" class="multilang" lang="en">
                        It has the option that residents can select the forms and documents that they need from this
                        part, including IDs and other papers.
                    </p>
                    <p id="tl-text" class="multilang" lang="tl">
                        Mayroon itong opsyon na maaaring piliin ng mga residente ang mga form at dokumento na
                        kailangan nila mula sa bahaging ito, kabilang ang mga ID at iba pang papeles.
                    </p>
                </div>
            </div>
        </div>

        <center>
            <div class="vertifcal-line"></div>
        </center>

        <!-- Fill Up Process -->
        <div class="main-fourth-process">
            <div class="right-panel">
                <div class="right-panel-head">
                    <h1 id="en-text" class="logo multilang" lang="en">
                        Fill Up
                    </h1>
                    <h1 id="en-text" class="logo multilang" lang="tl">
                        Mag Fill Up
                    </h1>
                </div>
                <div class="under-line"></div>
                <div class="right-panel-desc">
                    <p id="en-text" class="multilang" lang="en">
                        We can now enter the necessary information based on the document we want to retrieve.
                    </p>
                    <p id="tl-text" class="multilang" lang="tl">
                        Maari na nating ilagay ang mga kailangan na impormasyon base sa nais nating kunin na dokumento.
                    </p>
                </div>
            </div>
            <div class="left-panel"><img src="main/assets/steps/fill_up.jpg" alt="Video"></div>
        </div>



        <center>
            <div class="vertifcal-line"></div>
        </center>

        <!-- Payment Process -->
        <div class="main-fifth-process">
            <div class="left-panel"><img src="main/assets/steps/payment.jpg" alt="Video"></div>
            <div class="right-panel">
                <div class="right-panel-head">
                    <div class="right-panel-head">
                        <h1 id="en-text" class="logo multilang" lang="en">
                            Payment
                        </h1>
                        <h1 id="en-text" class="logo multilang" lang="tl">
                            Pagbabayad
                        </h1>
                    </div>
                    <div class="under-line"></div>
                    <div class="right-panel-desc">
                        <p id="en-text" class="multilang" lang="en">
                            Users can choose whether to make an online or physical payment in the payment section using
                            Gcash Reference or by walking in.
                        </p>
                        <p id="tl-text" class="multilang" lang="tl">
                            Maaaring piliin ng mga user kung magsasagawa sila online o pisikal na pagbabayad, sa payment
                            section maaari nilang gamitin ang gcash o pwede din silang magbayad sa brgy office.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <center>
            <div class="vertifcal-line"></div>
        </center>

        <!-- Preview Process -->
        <div class="main-sixth-process">
            <div class="right-panel">
                <div class="right-panel-head">
                    <h1 id="en-text" class="logo multilang" lang="en">
                        Preview
                    </h1>
                    <h1 id="en-text" class="logo multilang" lang="tl">
                        Iview ang Form
                    </h1>
                </div>
                <div class="under-line"></div>
                <div class="right-panel-desc">
                    <p id="en-text" class="multilang" lang="en">
                        After payment this section will provide the sample document or papers that they requested.
                    </p>
                    <p id="tl-text" class="multilang" lang="tl">
                        Pagkatapos ng pagbabayad, ibibigay ng seksyong ito ang sample na dokumento o mga papeles na
                        kanilang hiniling.
                    </p>
                </div>
            </div>
            <div class="left-panel"><img src="main/assets/steps/preview.jpg" alt="Video"></div>
        </div>

        <center>
            <div class="vertifcal-line"></div>
        </center>

        <!-- Track Process -->
        <div class="main-seventh-process">
            <div class="left-panel"><img src="main/assets/steps/track.jpg" alt="Video"></div>
            <div class="right-panel">
                <div class="right-panel-head">
                    <h1 id="en-text" class="logo multilang" lang="en">
                        Track your Request
                    </h1>
                    <h1 id="en-text" class="logo multilang" lang="tl">
                        Subaybayan ang iyong nirequest na form
                    </h1>
                </div>
                <div class="under-line"></div>
                <div class="right-panel-desc">
                    <p id="en-text" class="multilang" lang="en">
                        The resident can keep track of the documents they have requested in this section.
                    </p>
                    <p id="tl-text" class="multilang" lang="tl">
                        Binibigyang-daan ng tracking section na masubaybayan at makita ng mga residente ang dokumentong
                        kanilang hiniling.
                    </p>
                </div>
            </div>
        </div>
    </main>


    <!-- Feature Page -->
    <section id="feature-page">
        <h1 id="en-text" class="logo multilang" lang="en">
            <center>Features </center>
        </h1>
        <h1 id="en-text" class="logo multilang" lang="tl">
            <center>Mga Nilalaman </center>
        </h1>
        <!-- Card View -->
        <div class="feature-container">
            <div class="feature-card">
                <div class="feature-icon"><img src="main/assets/illustrations/senior_friendly.png" alt=""></div>
                <div class="feature-title">
                    <br>
                    <h1>Senior Friendly</h1>
                </div>
                <div class="feature-desc">
                    <p id="en-text" class="multilang" lang="en">
                        This website offers senior-friendly navigation, text that can be modified to accommodate their
                        needs, and system tutorials that explain how it functions.
                    </p>
                    <p id="tl-text" class="multilang" lang="tl">
                        Nag-aalok ang website na ito ng nabigasyon para sa mga senior citizen, text na maaaring baguhin
                        upang matugunan ang kanilang mga pangangailangan, at mga tutorial ng system na nagpapaliwanag
                        kung paano ito gumagana.
                    </p>

                </div>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><img src="main/assets/illustrations/SMS.png" alt=""></div>
                <div class="feature-content">
                    <div class="feature-title">
                        <br>
                        <h1>SMS Notification</h1>
                    </div>
                    <div class="feature-desc">
                        <p id="en-text" class="multilang" lang="en">
                            If the request is in progress, the staff can send the resident a supported SMS to let them
                            know.
                        </p>
                        <p id="tl-text" class="multilang" lang="tl">
                            Kung ang ni-request na documents ay nagpa-process na, ang staff ay maaaring magpadala sa
                            residente ng isang SMS message upang ipaalam sa kanila.
                        </p>
                    </div>
                </div>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><img src="main/assets/illustrations/Preview.png" alt=""></div>
                <div class="feature-content">
                    <div class="feature-title">
                        <br>
                        <h1>Preview</h1>
                    </div>
                    <div class="feature-desc">
                        <p id="en-text" class="multilang" lang="en">
                            Users will be able to see the preview, sample form, or printed version of their request
                            documents in this section.
                        </p>
                        <p id="tl-text" class="multilang" lang="tl">
                            Makikita ng mga user ang preview, sample form, o naka-print na bersyon ng kanilang mga
                            dokumento
                            ng kahilingan sa seksyong ito.
                        </p>

                    </div>
                </div>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><img src="main/assets/illustrations/tracking_feature.png" alt=""></div>
                <div class="feature-content">
                    <div class="feature-title">
                        <br>
                        <h1>Tracking Feature</h1>
                    </div>
                    <div class="feature-desc">
                        <p id="en-text" class="multilang" lang="en">
                            The system has a tracking feature on which it helps the user navigate their request via
                            online.
                        </p>
                        <p id="tl-text" class="multilang" lang="tl">
                            Ang system ay may feature na pagsubaybay kung saan tinutulungan nito ang user na i-navigate
                            ang
                            kanilang request sa pamamagitan ng online.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- About Page -->

    <section id="about-page">
        <h1 id="en-text" class="logo multilang" lang="en">
            <center>About Us </center>
        </h1>
        <h1 id="en-text" class="logo multilang" lang="tl">
            <center>Tungkol sa Amin </center>
        </h1>
        <div class="about-container">
            <div class="about-content">
                <div class="about-left">
                    <img src="main/assets/about-page-img.png" alt="">
                </div>
                <div class="about-right">
                    <div class="about-right-header">
                        <h1>Barangay Caingin</h1>
                    </div>
                    <div class="about-right-desc">
                        <p id="en-text" class="multilang" lang="en">
                            We as a team made the decision to work on a system that will make the process of acquiring
                            papers more effective, quick, and easy because it takes time to obtain some necessary
                            documents and forms manually, whether they are for a school or other establishment. With the
                            use of this technology, the citizens of Brgy Caingin Sta. Rosa Laguna will have a reliable
                            method for seeking documents and ensuring the brgy city hall provides excellent service.
                        </p>
                        <p id="tl-text" class="multilang" lang="tl">
                            Kami ay nagpasya na gumawa ng isang system na gagawing mas epektibo, mabilis, at madali ang
                            proseso ng pagkuha ng mga dokumento o papeles sapagkat nangangailangan ng oras upang
                            makakuha ng ilang kinakailangang mga dokumento at mga form sa pamamagitan manual process
                            kung ito man ay para sa isang paaralan o iba pang establisimyento. Sa paggamit ng
                            teknolohiyang ito, ang mga mamamayan ng Brgy Caingin Sta. Rosa Laguna ay magkakaroon ng
                            maaasahang paraan sa paghahanap o pagkuha ng mga dokumento at pagtiyak na ang brgy city hall
                            ay makapagbibigay ng mahusay at magandang serbisyo.
                        </p>
                        <br>
                        <br>
                        <button onclick="location.href='http://www.example.com'" type="button">
                            Read more</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Page -->

    <section id="contact-page">
        <div class="contact-container">
            <div class="contact-container-left">
                <div class="contact-container-left-logo">
                    <img src="main/assets/LOGO.png" alt="">
                </div>
                <div class="contact-container-left-content">
                    <h1 id="en-text" class="logo multilang" lang="tl"> Mag Request na Online!</h1>
                    <p id="en-text" class="multilang" lang="tl">
                        Maligayang pagdating sa Digital application of Clearance and Certification system kung saan
                        maaari
                        kang humiling ng iyong mga dokumento sa
                        barangay gamit online.</p>

                    <h1 id="tl-text" class="multilang" lang="en"> Request Now Online!</h1>
                    <p id="en-text" class="multilang" lang="en">
                        Welcome to A Digital application of Clearance and Certification System where you
                        can request your barangay
                        documents online.</p>

                </div>
            </div>
            <div class="contact-container-right">
                <div class="contact-container-right-links">
                    <div class="contact-container-right-links">
                        <div class="social-media-links-header">
                            Social Media Links and Contacts
                        </div>
                        <div class="social-media-links-content">
                            <a href="https://www.facebook.com/barangay.caingin.santa.rosa.laguna" class="links"> <i
                                    class="fa-brands fa-facebook"></i>&nbsp;&nbsp;Facebook</a> <br><br>
                            <i class="fa-brands fa-google"></i>&nbsp;&nbsp;Gmail: brgy.caingin1@gmail.com <br><br>
                            <i class="fa-solid fa-phone"></i>&nbsp;&nbsp;Contact: 566-6657(049)<br><br>
                            <i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;Address: Purok 6 Barangay Caingin City
                            of Santa Rosa Laguna
                        </div>
                    </div>
                </div>
                &nbsp;
                <div class="contact-container-right-documents">
                    <div class="contact-container-right-documents-header">
                        Documents We Offers
                    </div>
                    <div class="contact-container-right-documents-container">
                        <i class="fa-solid fa-scroll"></i>&nbsp;&nbsp;Barangay Clearance<br><br>
                        <i class="fa-solid fa-id-card"></i>&nbsp;&nbsp;Barangay ID<br><br>
                        <i class="fa-regular fa-newspaper"></i>&nbsp;&nbsp;Cedula<br><br>
                        <i class="fa-regular fa-note-sticky"></i>&nbsp;&nbsp;Barangay Indigency<br><br>
                        <i class="fa-solid fa-file-circle-exclamation"></i>&nbsp;&nbsp;Barangay Residency
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="footer-inner">
                <div class="footer-line"></div>
                <center> @CSC All Rights Reserved 2023 </center>
            </div>
        </footer>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.5.2/socket.io.min.js"></script>
    <script src="main/js/jquery.multilang.min.js"></script>
    <script src="main/js/live_landpage.js"></script>
    <script src="main/js/script.js"></script>
    <script src="main/js/jquery.timeago.js"></script>

</body>

</html>