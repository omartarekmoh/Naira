<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatble" content="IE-edge">
        <title>Event</title>
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
                <h1 class="text-light text-center ">Events List </h1>

                <div class="btn-group pt-2 ">
                    <ul class="list">
                        <a href="{{ route('index') }}">
                            <li>Home /</li>
                        </a>

                        <a class="px-3 text-info" href="{{ route('event') }}">
                            <li>Event</li>
                        </a>
                    </ul><!--list-->

                </div>
        </header><!-- navv -->

        <section class="title">
            <div class="container">
                <div class="row">
                    <div class="all">
                        <div class="col-md-6">
                            <a href="#"><img src="images/img-1.jpg" alt=""></a>
                            <div class="meta">
                                <span class="date" itemprop="datePublished">05 February 2022</span>
                                <span class="category">Constanta, Romania</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="content">
                                <a href="#"><h3>summer camp for kids</h3></a>
                                <p>Always looking forward to the newest and best solutions for your problems, we are
                                    proud to say that our program has been the leading learning platform online in the
                                    last 3 years. Always looking forward to the newest and best solutions for your
                                    problems, we are proud to say that our program has been the leading learning
                                    platform online in the last 3 years. ...</p>
                                <button type="button" class="check">check details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="all">
                        <div class="col-md-6">
                            <a href="#"><img src="images/img-2.jpg" alt=""></a>
                            <div class="meta">
                                <span class="date" itemprop="datePublished">05 February 2022</span>
                                <span class="category">Constanta, Romania</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="content">
                                <a href="#"><h3>global warming awarness</h3></a>
                                <p>Always looking forward to the newest and best solutions for your problems, we are
                                    proud to say that our program has been the leading learning platform online in the
                                    last 3 years. Always looking forward to the newest and best solutions for your
                                    problems, we are proud to say that our program has been the leading learning
                                    platform online in the last 3 years. ...</p>
                                <button type="button" class="check">check details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="all">
                        <div class="col-md-6">
                            <a href="#"><img src="images/img-3.jpg" alt=""></a>
                            <div class="meta">
                                <span class="date" itemprop="datePublished">05 February 2022</span>
                                <span class="category">Constanta, Romania</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="content">
                                <a href="#"><h3>public speaking development</h3></a>
                                <p>Always looking forward to the newest and best solutions for your problems, we are
                                    proud to say that our program has been the leading learning platform online in the
                                    last 3 years. Always looking forward to the newest and best solutions for your
                                    problems, we are proud to say that our program has been the leading learning
                                    platform online in the last 3 years. ...</p>
                                <button type="button" class="check">check details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="all">
                        <div class="col-md-6">
                            <a href="#"><img src="images/img-4.jpg" alt=""></a>
                            <div class="meta">
                                <span class="date" itemprop="datePublished">05 February 2022</span>
                                <span class="category">Constanta, Romania</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="content">
                                <a href="#"><h3>couples and parenting meeting</h3></a>
                                <p>Always looking forward to the newest and best solutions for your problems, we are
                                    proud to say that our program has been the leading learning platform online in the
                                    last 3 years. Always looking forward to the newest and best solutions for your
                                    problems, we are proud to say that our program has been the leading learning
                                    platform online in the last 3 years. ...</p>
                                <button type="button" class="check">check details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="all">
                        <div class="col-md-6">
                            <a href="#"><img src="images/img-5.jpg" alt=""></a>
                            <div class="meta">
                                <span class="date" itemprop="datePublished">05 February 2022</span>
                                <span class="category">Constanta, Romania</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="content">
                                <a href="#"><h3>digital skills camp</h3></a>
                                <p>Always looking forward to the newest and best solutions for your problems, we are
                                    proud to say that our program has been the leading learning platform online in the
                                    last 3 years. Always looking forward to the newest and best solutions for your
                                    problems, we are proud to say that our program has been the leading learning
                                    platform online in the last 3 years. ...</p>
                                <button type="button" class="check">check details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="all">
                        <div class="col-md-6">
                            <a href="#"><img src="images/img-6.jpg" alt=""></a>
                            <div class="meta">
                                <span class="date" itemprop="datePublished">05 February 2022</span>
                                <span class="category">Constanta, Romania</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="content">
                                <a href="#"><h3>guitar lessons for beginners</h3></a>
                                <p>Always looking forward to the newest and best solutions for your problems, we are
                                    proud to say that our program has been the leading learning platform online in the
                                    last 3 years. Always looking forward to the newest and best solutions for your
                                    problems, we are proud to say that our program has been the leading learning
                                    platform online in the last 3 years. ...</p>
                                <button type="button" class="check">check details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- events -->
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
        <script src="{{ asset('asset/js/script.js') }}"></script>
        <script src="{{ asset('asset/js/bootstrap.bundle.min.js.js') }}"></script>
        <script src="{{ asset('asset/js/wow.min.js.js') }}"></script>
        <script>
            new WOW().init();
        </script>
    </body>
</html>
