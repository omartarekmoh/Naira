<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatble" content="IE-edge">
        <title>Contact</title>
        <!-- Render All Elements Normally -->
        <link rel="stylesheet" href="{{ asset('asset/css/normalize.css') }}">
        <!-- style file css -->
        <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
        <!-- contact file css -->
        <link rel="stylesheet" href="{{ asset('asset/css/contact.css') }}">
        <!-- event file css -->
        <link rel="stylesheet" href="{{ asset('asset/css/event.css') }}">
        <!-- courses file css -->
        <link rel="stylesheet" href="{{ asset('asset/css/courses.css') }}">
        <!-- blog file css -->
        <link rel="stylesheet" href="{{ asset('asset/css/blog.css') }}">
        <!-- bootstrap file -->
        <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
        <!-- fontawseom -->
        <link rel="stylesheet" href="{{ asset('asset/css/all.min.css') }}">
    </head>
    <body>
        <header class="navv">
            <div class="container ">
                <div class="row ">
                    <div class=" col-4 col-lg-2 col-md-4 col-sm-4">
                        <a
                            href="https://www.templatemonsterpreview.com/demo/228900.html?_gl=1*xpg7wf*_ga*ODc0NjIxMDc4LjE2NDYzMjI3MTI.*_ga_FTPYEGT5LY*MTY0NjMzNDM3My4yLjEuMTY0NjMzNDQxMy4yMA..&_ga=2.190862954.153322118.1646322713-874621078.1646322712"><img
                                src="./images/logo1.jpg" alt="" class="logo"></a>
                    </div><!-- logo -->
                    <div class="col-1 col-lg-7 col-md-2 col-sm-2">
                        <nav class="navbar navbar-expand-lg  ">
                            <div class="container-fluid">

                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#navbarNav" aria-controls="navbarNav"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav ">
                                        <li class="nav-item">
                                            <a class="nav-link " aria-current="page"
                                               style="color: #6255A4;" href="{{ route('index') }}">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('about') }}">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('event') }}">Events</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('courses') }}">Courses</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link " href="{{ route('blog') }}">Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="{{ route('contact') }}">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div><!-- menu -->


                    <div class=" col-7 col-lg-3 col-md-6 col-sm-6">
                        <button type="button" class=" login mx-3">Login</button>
                        <button type="button" class="login">Registration</button>

                    </div><!-- buttons -->
                </div><!-- row -->


            </div><!-- container -->
            <div class="background">
                <h1 class="text-light text-center title2 ">Contact </h1>

                <div class="btn-group pt-2 ">
                    <ul class="list ms-5">
                        <a href="./index.html">
                            <li>Home /</li>
                        </a>

                        <a class="px-3 text-info" href="contact.html">
                            <li>contact</li>
                        </a>
                    </ul><!--list-->

                </div>
        </header><!-- navv -->
        <section class="first">
            <div class="container">
                <div class="head">
                    <h2>Contact Us Online Or At Our Headquarters</h2>
                </div>
                <div class="row py-5">
                    <div class="col-md-3">
                        <div class="one">
                            <div class="country">
                                <img src="images/USA.png" alt="">
                                <h3>U.S.A</h3>
                            </div>
                            <p>(+024) 582 91 149</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="two">
                            <div class="country">
                                <img src="images/France.png" alt="">
                                <h3>France</h3>
                            </div>
                            <p>(+054) 292 11 465</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="three">
                            <div class="country">
                                <img src="images/India.png" alt="">
                                <h3>India</h3>
                            </div>
                            <p>(+012) 797 73 551</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="four">
                            <div class="country">
                                <img src="images/Australia.png" alt="">
                                <h3>Australia</h3>
                            </div>
                            <p>(+088) 512 13 439</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="second">
            <div class="container">
                <div class="row">
                    <div class="col-md-5"></div>
                    <div class="col-md-7">
                        <div class="title1">
                            <h1>get in touch</h1>
                        </div>
                        <div class="form">
                            <form action="{{ route('email') }}" method="post" class="contact-form">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input class="form-items" type="text" required="required" placeholder="Name"
                                               name="name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="form-items" type="text" required="required" placeholder="Email"
                                               name="email">
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="form-items" type="text" required="required" placeholder="Phone"
                                               name="phone">
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="form-items" type="text" required="required" placeholder="Subject"
                                               name="subject">
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea class="form-items" placeholder="Message" name="message" rows="5"
                                                  required="required"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="msg">send message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="third">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content1">
                            <h2>Don’t Be Shy! Contact Us</h2>
                            <p>Praesent vulputate porta risus nec bibendum. Class aptent taciti sociosqu ad litora
                                torquent per conubia nostra, per inceptos himenaeos. Maecenas bibendum felis quam.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row3">
                            <div class="col-md-4">
                                <i class="fas fa-phone-volume"></i>
                                <p>(+024) 592 71 449</p>
                            </div>
                            <div class="col-md-4">
                                <i class="fas fa-map-marker-alt"></i>
                                <p>403 Vandelay St., S.F.</p>
                            </div>
                            <div class="col-md-4">
                                <i class="fas fa-envelope"></i>
                                <p>vandelay@site.org</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="fourth">
            <div class="container pb-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="left">
                            <h3>Become An Instructor</h3>
                            <p>Nulla fringilla et nisi et maximus. Sed vel tincidunt nisi, nec blandit nunc. Fusce la
                                nec vulputate urna.</p>
                            <button type="button" class="apply1">apply here</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right">
                            <h3>Apply For Our Programs</h3>
                            <p>Mauris ac iaculis sapien. Quisque interdum varius tellus, ac egestas nunc sodales
                                vitae</p>
                            <button type="button" class="apply2">apply here</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="py-3  ">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 mx-2">
                        <img src="images/logo_3.png" alt="">
                        <p class="py-4">All you need to know about being able to communicate to large audiences.
                            Find out more about how
                            to calm yourself.</p>
                        <div class=" icon justify-content-around ">
                            <a href="#"> <i class="fab fa-facebook fa-1x mx-3 "></i></a>
                            <a href="#"> <i class="fab fa-twitter fa-1x mx-3"></i></a>
                            <a href="#"> <i class="fab fa-instagram fa-1x mx-3"></i></a>
                        </div><!-- icon -->
                    </div><!-- col-1 -->
                    <div class="col-md-3 mx-3">
                        <h3 class="text-white">Contact</h3>
                        <p class="py-4">403 Vandelay St., 1st Floor, San Francisco,
                            U.S.A., 40233</p>
                        <p>(+024) 592 71 449</p>
                    </div><!-- col-2 -->
                    <div class="col-md-3 m-2">
                        <h3 class="text-white  mb-4">useful skills</h3>
                        <ul>
                            <li>Course</li>
                            <li>Instructor</li>
                            <li>Sign in</li>
                            <li>Sign up</li>
                            <li>Contact</li>
                        </ul>
                    </div><!-- col-3 -->
                    <div class="col-md-2 m-2">
                        <h3 class="text-white">Subscribe To Us</h3>
                        <p class="py-3">We promise not to spam and only provide quality information.</p>
                        <div class="d-flex email">
                            <i class="fas fa-envelope"></i>
                            <input type="email" name="email" class="form-control bg-transparent" placeholder=" Email"
                                   required="required">
                            <i class="far fa-paper-plane text-info fa-1x" aria-hidden="true"></i>
                        </div>
                        <hr class="text-secondary ">
                    </div>
                </div><!-- col-2 -->
            </div><!-- row -->
            <div class="copy pt-5">
                <p class=" text-center text-white">Copyright windstripe Themes 2022. All Rights eserved</p>
            </div><!-- copy right -->
            </div><!-- container -->
        </footer>
        <script src="./js/bootstrap.bundle.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
    </body>
</html>
