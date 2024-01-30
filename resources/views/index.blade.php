<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Metas -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="JohnnyxCode-Portfolio" />
    <meta name="description" content="JohnnyxCode" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>JohnnyxCode</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet" />

    <!-- Plugins -->
    <link rel="stylesheet" href="css/plugins.css" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- CSRF -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <!-- =====================================
    ==== Start Loading -->

    <div class="loading">
        <div class="gooey">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <!-- End Loading ====
    ======================================= -->

    <!-- =====================================
    ==== Start Navbar -->

    <nav class="navbar navbar-expand-lg navbar-expand-sm navbar-expand-md">

        <div class="container">
            <!-- Logo -->
            <a class="logo" href="#">
                <img src="img/logo-light.png" alt="logo" />
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" data-scroll-nav="0">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="1">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="2">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="3">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="5">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- End Navbar ====
    ======================================= -->

    <!-- =====================================
    ==== Start Header -->

    <header class="header valign bg-img" data-scroll-index="0" data-overlay-dark="4"
        data-background="{{ asset('img/bg.jpg') }}" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="full-width text-center caption mt-50">
                    <h2>Welcome!</h2>
                    <h1 class="cd-headline push">
                        <span class="blc">I am</span>
                        <p class="cd-words-wrapper">
                            <b class="is-visible" style="font-size: 30px">John Ayodele</b>
                            <b style="font-size: 30px"> A Web Developer</b>
                            <b style="font-size: 30px"> Into UI/UX Design</b>
                            <b style="font-size: 30px"> Into Cyber Security</b>
                        </p>
                    </h1>
                    <a href="#0" class="butn butn-bord mt-30" data-scroll-nav="3">
                        <span>View Work</span>
                    </a>
                    <a href="#0" class="butn butn-light mt-30" data-scroll-nav="5">
                        <span>Hire Me!</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- End Header ====
    ======================================= -->

    <!-- =====================================
        ==== Start About -->

    <section class="about" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 valign">
                    <div class="skills">
                        <div class="section-head">
                            <h4>About Me</h4>
                        </div>

                        <div class="skill-item mb-30">
                            <h6>Web Design</h6>
                            <div class="skill-progress">
                                <div class="progres" data-value="90%"></div>
                            </div>
                        </div>
                        <div class="skill-item mb-30">
                            <h6>UI/UX Design</h6>
                            <div class="skill-progress">
                                <div class="progres" data-value="75%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <h6>Development</h6>
                            <div class="skill-progress">
                                <div class="progres" data-value="80%"></div>
                            </div>
                        </div>
                        <br><br>

                        <div class="skill-item">
                            <h6>Cyber Security</h6>
                            <div class="skill-progress">
                                <div class="progres" data-value="20%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 hero-img bg-img" data-background="img/hero.jpg"></div>

                <div class="col-lg-4">
                    <div class="content">
                        <h6>Who am i</h6>
                        <h4>John Ayodele</h4>
                        <h5>Professional Web developer</h5>
                        <p class="mb-10">
                            I am a web developer driven by a passion for continuous learning and innovation.
                            Proficient
                            in Laravel for backend development, I specialize in crafting seamless, user-friendly
                            interfaces that blend responsive design with robust functionality. My journey extends to
                            UI/UX design, where I prioritize creating impactful online experiences. Additionally, I
                            thrive on incorporating cybersecurity measures into my solutions, ensuring a secure and
                            resilient digital landscape.
                        </p>
                        <p>
                            I aim to deliver compelling and
                            user-friendly interfaces. Committed to innovation, I also integrate cybersecurity practices,
                            prioritizing the creation of secure and resilient digital experiences.
                        </p>

                        <div class="social mt-40">
                            <span>Follow Me :</span>
                            <a href="https://www.facebook.com/profile.php?id=100087399052695&mibextid=ZbWKwL"><i
                                    class="icofont icofont-social-facebook"></i></a>
                            <a href="https://x.com/JohnAyodeleMir1?t=g3FyMc07MbNAFtgBHefpJg&s=09"><i
                                    class="icofont icofont-social-twitter"></i></a>
                            <a href="https://www.instagram.com/johnnyxcode?utm_source=qr&igsh=MXE3eGplbnpucXpjMg=="><i
                                    class="icofont icofont-social-instagram"></i></a>
                            <a href="https://wa.me/message/KGUEVKOX2NS2G1"><i
                                    class="icofont icofont-social-whatsapp"></i></a>
                            <a href="https://github.com/Johnnyxcode"><i class="icofont icofont-social-github"></i></a>
                            {{-- <a href="#0"><i class="icofont icofont-brand-linkedin"></i></a>
                            <a href="#0"><i class="icofont icofont-social-behance"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End About ====
        ======================================= -->

    <!-- =====================================
        ==== Start Services -->

    <section class="services section-padding bg-dark" data-scroll-index="2">
        <div class="container">
            <div class="row">
                <div class="section-head text-center col-md-12">
                    <h4>Services</h4>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="item mb-md50">
                        <i class="icon icofont icofont-paint"></i>
                        <h6>Web Developer</h6>
                        <p>

                            Enhance your digital presence with dynamic websites and scalable applications, delivering
                            seamless user experiences that exceed expectations. Transform ideas into sophisticated
                            digital realities.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="item mb-md50">
                        <i class="icon icofont icofont-ui-fire-wall"></i>
                        <h6>Cyber Security</h6>
                        <p>
                            Fortify your web applications with cutting-edge cybersecurity measures. Our relentless
                            commitment to digital safety ensures robust protection for your online assets, prioritizing
                            data integrity and user trust.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="item mb-sm50">
                        <i class="icon icofont icofont-instrument"></i>
                        <h6>UI/UX Design</h6>
                        <p>
                            Experience a new dimension of user engagement with our innovative UI/UX design. We craft
                            visually appealing interfaces that captivate your audience, ensuring your brand stands out
                            in the digital landscape. </p>
                    </div>
                </div>

                <!-- <div class="col-lg-3 col-md-6">
                    <div class="item">
                        <i class="icon icofont icofont-chart-histogram-alt"></i>
                        <h6>Marketing</h6>
                            <p>
                                Nulla metus metus ullamcorper vel tincidunt sed
                                euismod nibh Quisque volutpat
                            </p> -->
            </div>
        </div>
        </div>
        </div>
    </section>

    <!-- End Services ====
        ======================================= -->

    <!-- =====================================
        ==== Start Portfolio -->

    <section class="portfolio section-padding" data-scroll-index="3">
        <div class="container">
            <div class="row">
                <div class="section-head text-center col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <h4>Portfolio</h4>
                </div>

                <!-- filter links -->
                <div class="filtering text-center col-sm-12">
                    <span data-filter="*" class="active">All</span>
                    <span data-filter=".brand">Brand</span>
                    <span data-filter=".web">Design</span>

                </div>

                <div class="clearfix"></div>

                <!-- gallery -->
                <div class="gallery text-center full-width">
                    <!-- gallery item -->


                    <!-- gallery item -->
                    <div class="items web">
                        <div class="item-img">
                            <img src="img/portfolio/2.jpg" alt="image" />
                            <div class="item-img-overlay valign">
                                <div class="overlay-info full-width vertical-center">
                                    <h6>Creative Design</h6>
                                    <p>Work description here</p>
                                </div>
                                <a href="img/portfolio/2.jpg" class="popimg">
                                    <i class="icofont icofont-image"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->


                    <!-- gallery item -->
                    <div class="items width2 brand">
                        <div class="item-img">
                            <img src="img/portfolio/4.jpg" alt="image" />
                            <div class="item-img-overlay valign">
                                <div class="overlay-info full-width vertical-center">
                                    <h6>Creative Design</h6>
                                    <p>Work description here</p>
                                </div>
                                <a href="img/portfolio/4.jpg" class="popimg">
                                    <i class="icofont icofont-image"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="items brand">
                        <div class="item-img">
                            <img src="img/portfolio/5.jpg" alt="image" />
                            <div class="item-img-overlay valign">
                                <div class="overlay-info full-width vertical-center">
                                    <h6>Creative Design</h6>
                                    <p>Work description here</p>
                                </div>
                                <a href="img/portfolio/5.jpg" class="popimg">
                                    <i class="icofont icofont-image"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="items web">
                        <div class="item-img">
                            <img src="img/portfolio/6.jpg" alt="image" />
                            <div class="item-img-overlay valign">
                                <div class="overlay-info full-width vertical-center">
                                    <h6>Creative Design</h6>
                                    <p>Work description here</p>
                                </div>
                                <a href="img/portfolio/6.jpg" class="popimg">
                                    <i class="icofont icofont-image"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="items brand">
                        <div class="item-img">
                            <img src="img/portfolio/7.jpg" alt="image" />
                            <div class="item-img-overlay valign">
                                <div class="overlay-info full-width vertical-center">
                                    <h6>Creative Design</h6>
                                    <p>Work description here</p>
                                </div>
                                <a href="img/portfolio/7.jpg" class="popimg">
                                    <i class="icofont icofont-image"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Portfolio ====
        ======================================= -->

    <!-- =====================================
        ==== Start Blog -->



    <!-- End Blog ====
        ======================================= -->

    <!-- =====================================
        ==== Start Contact -->

    <section class="contact section-padding" data-scroll-index="5">
        <div class="container">
            <div class="row">
                <div class="section-head text-center col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <h4>Contact Us</h4>
                </div>

                <div class="col-lg-5">
                    <div class="info bg-img mb-md50" data-background="img/map.png">
                        <div class="item">
                            <div class="cont">
                                <h6>Phone :</h6>
                                <p>+234 81 772 481 09</p>
                                <p>+234 70 522 071 06</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cont">
                                <h6>Address :</h6>
                                <p>
                                    27th Ken Osasuwa lane, Guobadia,<br />
                                    Benin City, Edo State.
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cont">
                                <h6>Email :</h6>
                                <p>johnnyjamz150@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>


                @if (session('success'))
                    <div id="notification" class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    <script>
                        // Reload the page after 2 seconds (adjust the delay as needed)
                        setTimeout(function() {
                            location.reload();
                        }, 2000);
                    </script>
                @endif

                <div class="col-lg-7">
                    <form class="form" id="contact-form" method="post" action="/submit-form">
                        @csrf
                        <div class="messages"></div>

                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <input id="form_name" type="text" name="name" placeholder="Name"
                                            required="required" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_email" type="email" name="email" placeholder="Email"
                                            required="required" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input id="form_subject" type="text" name="subject"
                                            placeholder="Subject" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea id="form_message" name="message" placeholder="Message" rows="4" required="required"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12 text-center">
                                    <button type="button" onclick="submitForm()" class="butn butn-bg">
                                        <span>Send Message</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- End Contact ====
        ======================================= -->

    <!-- =====================================
        ==== Start Footer -->

    <footer class="text-center bg-dark">
        <div class="container">
            <!-- Logo -->
            <a class="logo" href="#">
                <img src="img/logo-light.png" alt="logo" />
            </a>

            <div class="social">
                <a href="https://www.facebook.com/profile.php?id=100087399052695&mibextid=ZbWKwL"><i
                        class="icofont icofont-social-facebook"></i></a>
                <a href="https://x.com/JohnAyodeleMir1?t=g3FyMc07MbNAFtgBHefpJg&s=09"><i
                        class="icofont icofont-social-twitter"></i></a>
                <a href="https://www.instagram.com/johnnyxcode?utm_source=qr&igsh=MXE3eGplbnpucXpjMg=="><i
                        class="icofont icofont-social-instagram"></i></a>
                {{-- <a href="#0"><i class="icofont icofont-brand-linkedin"></i></a> --}}
                <a href="https://wa.me/message/KGUEVKOX2NS2G1"><i class="icofont icofont-social-whatsapp"></i></a>
                <a href="https://github.com/Johnnyxcode"><i class="icofont icofont-social-github"></i></a>
            </div>=

            <p>&copy; 2023 JohnnyxCode. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- End Footer ====
        ======================================= -->

    <!-- submit Form-->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>



    <script>
        function submitForm() {
            console.log('Submitting form...');

            $.ajax({
                type: 'POST',
                url: '/submit-form',
                data: $('#contact-form').serialize(),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                dataType: 'json',
                success: function(response) {
                    console.log('Form submission successful:', response);
                    // Reset the form
                    $('#contact-form')[0].reset();
                    // Show success notification
                    $('#notification').html(response.message).fadeIn().delay(2000).fadeOut();
                    // Reload the page after 2 seconds 
                    setTimeout(function() {
                        location.reload();
                    }, 2000);
                },
                error: function(error) {
                    console.error('Error submitting form:', error);
                }
            });
        }
    </script>




    <!--jQuery-->

    <script src="js/jquery-migrate-3.0.0.min.</script>

                                                                            <!-- popper.min -->
                                                                            <script src=" js/popper.min.js"></script>

    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>

    <!-- scrollIt -->
    <script src="js/scrollIt.min.js"></script>

    <!-- animated.headline -->
    <script src="js/animated.headline.js"></script>

    <!-- jquery.magnific-popup js -->
    <script src="js/jquery.magnific-popup.min.js"></script>

    <!-- stellar js -->
    <script src="js/jquery.stellar.min.js"></script>

    <!-- isotope.pkgd.min js -->
    <script src="js/isotope.pkgd.min.js"></script>

    <!-- validator js -->
    <script src="js/validator.js"></script>

    <!-- custom scripts -->
    <script src="js/scripts.js"></script>
</body>


</html>
