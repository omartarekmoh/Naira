<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Us</title>
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


    <body>

        <header class="navv">
            <div class="container ">
                <div class="row ">
                    <div class=" col-4 col-lg-2 col-md-4 col-sm-4">
                        <a
                            href="https://www.templatemonsterpreview.com/demo/228900.html?_gl=1*xpg7wf*_ga*ODc0NjIxMDc4LjE2NDYzMjI3MTI.*_ga_FTPYEGT5LY*MTY0NjMzNDM3My4yLjEuMTY0NjMzNDQxMy4yMA..&_ga=2.190862954.153322118.1646322713-874621078.1646322712"><img
                                src="{{ asset('asset/images/logo1.jpg') }}" alt="" class="logo"></a>
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
                                        <li class="dropdown nav-item">
                                            <a class="nav-link" data-bs-toggle="dropdown">
                                                Courses
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-dark"
                                                aria-labelledby="dropdownMenuButton2">
                                                <li><a class="dropdown-item " href="{{ route('courses') }}">courese</a>
                                                </li>
                                                <li><a class="dropdown-item" href="{{ route('single-course') }}">single-course </a>
                                                </li>

                                            </ul>
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
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <span>Welcome, {{ Auth::user()->name }}</span>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                @else
                                    <a href="{{ route('login') }}" class="login mx-3">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="login mx-3">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif

                    </div><!-- buttons -->
                </div><!-- row -->


            </div><!-- container -->
            <div class="background">
                <h1 class="text-light text-center ">About Us </h1>

                <div class="btn-group pt-2 ">
                    <ul class="list">
                        <a href="{{ route('index') }}">
                            <li>Home /</li>
                        </a>

                        <a class="px-3 text-info" href="{{ route('about') }}">
                            <li>About Us</li>
                        </a>
                    </ul><!--list-->

                </div>
        </header><!-- navv -->


        <Section id="courses">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-6 left   ">
                        <img src="{{ asset('asset/images/author_img.png') }}" class=img alt="">
                        <p class="leftpr">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore magna aliqua tempora.</p>
                        <h2>Isosceles Kramer Jr.</h2>
                        <h6 class="text-muted  ">Manager and C.E.O</h6>


                    </div>
                    <!--left-->


                    <div class="col-md-6 right ">
                        <h1>Learning Made <span>Simple,</span></h1>
                        <h1>For Your Delight</h1>
                        </h1>
                        <p class="text-muted">Curabitur et pretium velit. Phasellus sed iaculis sem. Aliquam et iaculis
                            elit, varius auctor ante. Sed interdum dictum nulla vitae aliquam. Donec commodo ullamcorper
                            convallis. Aenean a ante metus.
                        </p>
                        <p class="text-muted ">Donec maximus ipsum quis est vehicula dictum. Suspendisse eget ligula vel
                            ante
                            lobortis malesuada. Nullam quis augue id libero viverra dapibus a at felis.</p>

                        <a href="courses.html">
                            <button type="button" class="btn btn-light"> Our Courses</button>
                        </a>


                    </div>
                    <!--right-->

                </div>
                <!--row-->

            </div>
            <!--container-->

        </Section>
        <!--#courses-->


        <section id="Program">
            <div>
                <h1 class="text-light text-center pt-5 ">Our Program Through</h1>
                <h1 class="text-light text-center pb-5 ">The Years. Be A Part Of It</h1>
            </div>
            <!--1-->
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 wow fadeInDownBig ">
                            <img src="{{ asset('asset/images/img_11.png') }}" width="100%" alt="">
                            <h4 class="text-light text-center py-3">01. Something People Do</h4>
                            <p class="text-light"> By Following Our philosophy in every course we provide , we make
                                everything smooth and simple </p>

                        </div>
                        <!--1-->
                        <div class="col-md-3 wow fadeInUpBig">
                            <img src="{{ asset('asset/images/img_22.png') }}" width="100%" alt="">
                            <h4 class="text-light text-center py-3">02. Grop Of People</h4>
                            <p class="text-light"> By Following Our philosophy in every course we provide , we make
                                everything smooth and simple </p>

                        </div>
                        <!--1-->
                        <div class="col-md-3  wow fadeInDownBig">
                            <img src="{{ asset('asset/images/img_33.png') }}" width="100%" alt="">
                            <h4 class="text-light text-center py-3">03. Switch Things Around</h4>
                            <p class="text-light "> By Following Our philosophy in every course we provide , we make
                                everything smooth and simple </p>

                        </div>
                        <!--1-->
                        <div class="col-md-3 wow fadeInUpBig">
                            <img src="{{ asset('asset/images/img_44.png') }}" width="100%" alt="">
                            <h4 class="text-light text-center py-3">04. Learn Art Subtilities</h4>
                            <p class="text-light"> By Following Our philosophy in every course we provide , we make
                                everything smooth and simple </p>

                        </div>
                        <!--1-->
                    </div>
                    <!--container-->

                </div>
                <!--row-->
            </div>

        </section>
        <!--#Program-->


        <section id="create">
            <div class="container">
                <div class="row">
                    <div class="col-md-5  ">
                        <img src="{{ asset('asset/images/left.png') }}" width="100%" class="wow slideInLeft" alt="">

                    </div>
                    <!--1-->
                    <div class="col-md-2">
                        <img src="{{ asset('asset/images/logo2.png') }}" width="100%" alt="">

                    </div>
                    <!--2-->
                    <div class="col-md-5">
                        <img src="{{ asset('asset/images/right.png') }}" width="100%" class="wow slideInRight" alt="">

                    </div>
                    <!--3-->
                </div>
                <!--row-->
                <div>
                    <h1 class="pt-5">Create. Share. Learn. It</h1>
                    <h1>All<span class="hand">Starts</span>Here</h1>

                </div>

            </div>
            <!--container-->

        </section>


        <!--#create-->
        <section id="Theory">

            <div>
                <div class="row">

                    <div class="col-md-1">


                    </div>
                    <!--space-->
                    <div class="col-md-2 mb-5">
                        <img src="{{ asset('asset/images/1.png') }}" width="100%" alt="">
                        <h2>Theory</h2>
                        <p class="text-muted">All you need to know about being able to communicate.</p>

                    </div>
                    <!--1-->

                    <div class="col-md-2 mt-5">
                        <img src="{{ asset('asset/images/2.png') }}" width="100%" alt="">
                        <h2>Analysis</h2>
                        <p class="text-muted">All you need to know about being able to communicate</p>

                    </div>
                    <!--2-->
                    <div class="col-md-2">
                        <img src="{{ asset('asset/images/3.png') }}" width="100%" alt="">
                        <h2>Sourcing</h2>
                        <p class="text-muted">All you need to know about being able to communicate</p>

                    </div>
                    <!--3-->
                    <div class="col-md-2 pt-5">
                        <img src="{{ asset('asset/images/4.png') }}" width="100%" alt="">
                        <h2>Working</h2>
                        <p class="text-muted">All you need to know about being able to communicate.
                        </p>

                    </div>
                    <!--4-->


                    <div class="col-md-2">
                        <img src="{{ asset('asset/images/5.png') }}" width="100%" alt="">
                        <h2>Success</h2>
                        <p class="text-muted">All you need to know about being able to communicate</p>

                    </div>
                    <!--5-->

                    <div class="col-md-1">


                    </div>
                    <!--space-->


                </div>
                <!--row-->

            </div>
            <!--container-->


        </section>
        <!--Theory-->


        <section id="Price">
            <h1 class="text-center  text-light wow fadeInLeft">Pricing Price For Everyone</h1>
            <p class="pt-3">Simple and easy, cancel anytime.</p>
            <p class="pb-4">No funny buisiness, services crafted smoothly.</p>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 Starter">

                        <h2 class="text-center">Regular Starter Plan</h2>
                        <h4><span>1.99$ </span> / month</h4>

                        <div class="Regular">
                            <i class="fas fa-check"></i>
                            <p class="text-dark text-muted">Demo file</p>
                        </div>
                        <div class="Regular">
                            <i class="fas fa-times text-danger"></i>
                            <p class="text-dark text-muted">Update</p>

                        </div>
                        <div class="Regular">
                            <i class="fas fa-check"></i>
                            <p class="text-dark text-muted"> File compressed</p>
                        </div>
                        <div class="Regular">
                            <i class="fas fa-check"></i>
                            <p class="text-dark text-muted">Commercial use</p>
                        </div>
                        <div class="Regular">
                            <i class="fas fa-times text-danger"></i>
                            <p class="text-dark text-muted"> Support</p>
                        </div>
                        <div class="Regular">
                            <i class="fas fa-check"></i>
                            <p class="text-dark text-muted">Documetation</p>
                        </div>

                        <a href="#" class="btn">Select</a>

                    </div>
                    <!--1-->
                    <div class="col-md-4 Student  ">
                        <h2 class="text-center text-light">Advanced Student Plan</h2>
                        <h4><span class="text-light">3.69$ </span> / month</h4>

                        <div class="Advanced">
                            <i class="fas fa-check"></i>
                            <p class="text-dark ">Demo file</p>
                        </div>
                        <div class="Advanced">
                            <i class="fas fa-times text-danger"></i>
                            <p class="text-dark">Update</p>

                        </div>
                        <div class="Advanced">
                            <i class="fas fa-check"></i>
                            <p class="text-dark "> File compressed</p>
                        </div>
                        <div class="Advanced">
                            <i class="fas fa-check"></i>
                            <p class="text-dark ">Commercial use</p>
                        </div>
                        <div class="Advanced">
                            <i class="fas fa-check"></i>
                            <p class="text-dark "> Support</p>
                        </div>
                        <div class="Advanced">
                            <i class="fas fa-times text-danger"></i>
                            <p class="text-dark "> 5 database</p>
                        </div>

                        <a href="#" class="btn">Select</a>

                    </div>
                    <!--2-->
                    <div class="col-md-4  Starter">
                        <h2 class="text-center">Full Learning Plan</h2>
                        <h4><span>5.49$ </span> / month</h4>

                        <div class="Regular">
                            <i class="fas fa-check"></i>
                            <p class="text-dark text-muted">Demo file</p>
                        </div>
                        <div class="Regular">
                            <i class="fas fa-times text-danger"></i>
                            <p class="text-dark text-muted">Update</p>

                        </div>
                        <div class="Regular">
                            <i class="fas fa-check"></i>
                            <p class="text-dark text-muted"> File compressed</p>
                        </div>
                        <div class="Regular">
                            <i class="fas fa-check"></i>
                            <p class="text-dark text-muted">Commercial use</p>
                        </div>
                        <div class="Regular">
                            <i class="fas fa-times text-danger"></i>
                            <p class="text-dark text-muted"> Support</p>
                        </div>
                        <div class="Regular">
                            <i class="fas fa-check"></i>
                            <p class="text-dark text-muted">Documetation</p>
                        </div>

                        <a href="#" class="btn">Select</a>

                    </div>
                    <!--3-->

                </div>
                <!--row-->
            </div>
            <!--container-->
        </section>
        <!--#Price-->


        <section id="Needs">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('asset/images/png_1.png') }}" alt="">

                    </div>
                    <!--1-->
                    <div class="col-md-6 ">
                        <h1>Finding Solutions To<span>Your Needs</span>Is Our Speciality</h1>
                        <p>Curabitur nibh leo, facilisis eu interdum sed, pellentesque eu felis. Suspendisse porttitor
                            aliquet convallis. Nullam cursus viverra massa, et suscipit odio vehicula ac. Mauris ac
                            iaculis
                            sapien. Quisque interdum varius tellus, ac egestas nunc sodales vitae.</p>

                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="Advanced">
                                    <i class="fas fa-check-circle"></i>
                                    <p class="text-dark ">Start learing about the basics
                                    </p>
                                </div>
                                <div class="Advanced">
                                    <i class="fas fa-check-circle"></i>
                                    <p class="text-dark ">All you need to know about things

                                    </p>
                                </div>
                                <div class="Advanced">
                                    <i class="fas fa-check-circle"></i>
                                    <p class="text-dark ">We are capable of many great things
                                    </p>
                                </div>


                            </div>
                            <!--one-->
                            <div class="col-md-6 ">
                                <div class="Advanced">
                                    <i class="fas fa-check-circle"></i>
                                    <p class="text-dark ">Start learing about the basics
                                    </p>
                                </div>
                                <div class="Advanced">
                                    <i class="fas fa-check-circle"></i>
                                    <p class="text-dark ">All you need to know about things

                                    </p>
                                </div>
                                <div class="Advanced">
                                    <i class="fas fa-check-circle"></i>
                                    <p class="text-dark ">We are capable of many great things
                                    </p>
                                </div>


                            </div>
                            <!--two-->

                        </div>
                        <!--row2-->


                    </div>
                    <!--2-->

                </div>
                <!--row-->

            </div>
            <!--container-->

        </section>
        <!--Needs-->


        <section id="Needs">
            <div class="container py-5">
                <div class="row">

                    <div class="col-md-6 ">
                        <h1>All The <span>Numbers</span>Don’t Lie And Neither Do We</h1>
                        <p>Always looking forward to the newest and best solutions for your problems, we are proud to
                            say
                            that our program has been the leading learning platform online in the last 3 years best
                            solutions for your problems, we are proud to say that</p>

                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="Advanced">
                                    <i class="fas fa-check-circle"></i>
                                    <p class="text-dark ">Start learing about the basics
                                    </p>
                                </div>
                                <div class="Advanced">
                                    <i class="fas fa-check-circle"></i>
                                    <p class="text-dark ">All you need to know about things

                                    </p>
                                </div>
                                <div class="Advanced">
                                    <i class="fas fa-check-circle"></i>
                                    <p class="text-dark ">We are capable of many great things
                                    </p>
                                </div>


                            </div>
                            <!--one-->
                            <div class="col-md-6 ">
                                <div class="Advanced">
                                    <i class="fas fa-check-circle"></i>
                                    <p class="text-dark ">Start learing about the basics
                                    </p>
                                </div>
                                <div class="Advanced">
                                    <i class="fas fa-check-circle"></i>
                                    <p class="text-dark ">All you need to know about things

                                    </p>
                                </div>
                                <div class="Advanced">
                                    <i class="fas fa-check-circle"></i>
                                    <p class="text-dark ">We are capable of many great things
                                    </p>
                                </div>


                            </div>
                            <!--two-->

                        </div>
                        <!--row2-->


                    </div>
                    <!--2-->
                    <div class="col-md-6">
                        <img src="{{ asset('asset/images/png_2.png') }}" class="image" alt="">

                    </div>
                    <!--1-->

                </div>
                <!--row-->

            </div>
            <!--container-->

        </section>
        <!--Needs-->


        <footer class="py-5  ">
            <div class="container">
                <div class="row">

                    <div class="col-md-3 mx-2">
                        <img src="{{ asset('asset/images/logo_3.png') }}" alt="">
                        <p class="py-4 text-muted">All you need to know about being able to communicate to large
                            audiences.
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
                        <p class="text-muted py-4">403 Vandelay St., 1st Floor, San Francisco,
                            U.S.A., 40233</p>
                        <p class="text-muted">(+024) 592 71 449</p>

                    </div><!-- col-2 -->

                    <div class="col-md-3 m-2">
                        <h3 class="text-white mb-4">useful skills</h3>
                        <ul class="text-muted">
                            <li>Course</li>
                            <li>Instructor</li>
                            <li>Sign in</li>
                            <li>Sign up</li>
                            <li>Contact</li>
                        </ul>


                    </div><!-- col-3 -->

                    <div class="col-md-2 m-2">
                        <h3 class="text-white">Subscribe To Us</h3>
                        <p class="text-muted py-3">We promise not to spam and only provide quality information.</p>
                        <div class="d-flex email">
                            <i class="fas fa-envelope text-muted"></i>
                            <input type="email" name="email" class="form-control bg-transparent" placeholder=" Email"
                                   required="required">
                            <i class="far fa-paper-plane text-info fa-1x" aria-hidden="true"></i>
                        </div>
                        <hr class="text-secondary ">
                    </div>
                </div><!-- col-2 -->


            </div><!-- row -->


            <p class="text-center ">Copyright Windstripe Themes &copy; 2022. All Rights Reserved</p>
            </div><!-- container -->


        </footer>


        <script src="{{ asset('asset/js/script.js') }}"></script>
        <script src="{{ asset('asset/js/bootstrap.bundle.min.js.js') }}"></script>
        <script src="{{ asset('asset/js/wow.min.js.js') }}"></script>
        <script>
            new WOW().init();
        </script>

    </body>

</html>
