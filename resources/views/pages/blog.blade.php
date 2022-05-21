<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blog</title>

        <link rel="stylesheet" href="{{ asset('asset/css/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/blog.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
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
                                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                        aria-label="Toggle navigation">
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

        </header><!-- navv -->
        <header class="py-5">
            <div class="background">
                <h1 class="text-light text-center ">Blog List</h1>

                <div class="btn-group pt-2 maro text-center">
                    <ul class="list">
                        <li><a href="{{ route('index') }}"> home / </a></a></li>
                        <li><a class="px-lg-1" href="{{ route('blog') }}"> Blog /</a></li>
                        <li><a class="px-3 text-info" href="#important"> The importance of learning</a></li>
                    </ul>

                </div>
            </div>
            <!--background  -->
        </header>

        <section id="learning">
            <div class="py-5">
                <h1 class="text ">The importance of learning</h1>

            </div>
            <div>
                <img src="{{ asset('asset/images/single_1.png') }}" height="500" alt="">


            </div>
            <!--img-->
        </section>
        <!--#learning-->

        <section id="Summary ">
            <div class="container ">
                <div class="row ">
                    <div class="col-md-3 Summary ">
                        <h3 class=" word ">Summary</h3>
                        <ol class="box  ">
                            <li class="py-2">
                                <a href="">Introuduction</a>
                            </li>
                            <li class="py-2">
                                <a href=""> Thesis & Theory</a>
                            </li>
                            <li class="py-2">
                                <a href="">Analyzing Ideas</a>
                            </li>
                            <li class="py-2">
                                <a href="">Actual Work</a>
                            </li>
                        </ol>
                    </div>
                    <!--1-->
                    <div class="col-md-9  first ">
                        <h1 class="text1 pt-5 ">1. First Title Of The Post Spanning Two Rows</h1>
                        <p class="text-muted pt-4">Donec quis rhoncus nisi. Nam id augue et nibh consectetur auctor vel
                            vel
                            quam. Praesent tempus pretium metus, sed posuere arcu commodo ut. Proin scelerisque arcu
                            eget
                            ultrices interdum. Donec accumsan tortor enim, nec ultrices massa dapibus sit amet. Nulla
                            fermentum dignissim elementum. Suspendisse in lorem pretium, aliquet elit id, rhoncus
                            augue</p>
                        <p class="text-muted">Duis nec porttitor dui. Vestibulum suscipit mi eu magna vehicula pharetra
                            ac
                            eget mi. Proin suscipit pulvinar tortor. Duis euismod sit amet felis at fringilla. In
                            porttitor
                            justo lorem, id lacinia urna laoreet finibus. Donec auctor sapien et lectus efficitur, quis
                            laoreet ante volutpat. Quisque feugiat dapibus turpis, nec egestas sem hendrerit
                            pellentesque.
                            Duis ac sollicitudin eros</p>

                        <img src="{{ asset('asset/images/single_2.png') }}" width="100%" alt="">

                        <h1 class="text1 pt-5 ">2. Moving On To The Second Subtitle Of The Post</h1>
                        <p class="text-muted pt-4">Sed eu elementum erat. Mauris molestie et felis vitae maximus. Nullam
                            at
                            mollis ante. Duis a porttitor velit, et vulputate massa. Curabitur nec est rhoncus, blandit
                            magna quis, consequat ante. Nulla malesuada eu nisl a aliquet. Sed lobortis lacus velit, nec
                            feugiat purus varius viverra. Donec sodales in nulla vitae suscipit. Morbi hendrerit metus
                            malesuada urna viverra auctor. Vivamus id dolor cursus, fermentum quam non, rutrum est.</p>
                        <p class="text-muted">In vel malesuada magna, non gravida sem. Ut a condimentum mi. Morbi neque
                            libero, consequat ut efficitur a, cursus ac lorem. Ut varius nisi at libero ultrices</p>

                        <img src="{{ asset('asset/images/piechart.png') }}" width="40%" alt="">
                        <p class="text-muted pt-4">
                            Curabitur nibh leo, facilisis eu interdum sed, pellentesque eu felis. Suspendisse porttitor
                            aliquet convallis. Nullam cursus viverra massa, et suscipit odio vehicula ac. Mauris ac
                            iaculis
                            sapien. Quisque interdum varius tellus, ac egestas nunc sodales vitae. Praesent sed enim id
                            libero pulvinar tristique et pharetra mi. Fusce non erat ac diam dapibus consequat non sit
                            amet
                            augue. Mauris tristique posuere nunc dignissim et</p>
                        <h1 class="text1 pt-5 ">3. The Third Subtitle Of This Post Right Here</h1>
                        <p class="text-muted pt-4">Proin rutrum ac nunc ut ultricies. Nulla at euismod tellus. In
                            imperdiet,
                            purus eget accumsan congue, diam velit interdum erat, vel egestas urna massa eu leo. Ut
                            metus
                            nisi, maximus eu purus condimentum, bibendum tristique mauris. Sed imperdiet in mauris a
                            mollis.
                            Vestibulum massa arcu, pulvinar posuere nisi a, tempor dictum risus. Vestibulum sit amet
                            suscipit urna</p>


                        <img src="{{ asset('asset/images/single_3.png') }}" width="100%" alt="">
                        <p class="text-muted pt-4">
                            Aenean eget imperdiet orci. Aenean sit amet tristique nisl, ut rhoncus eros. Curabitur
                            euismod,
                            ante vitae iaculis consectetur, elit ex pharetra justo, vitae gravida justo ipsum ac nisl.
                            Suspendisse vitae pellentesque dui, quis vestibulum massa. Donec tempus arcu et ornare
                            tempor.
                            Integer ut purus sollicitudin, pulvinar orci non, luctus odio. Suspendisse porttitor aliquet
                            convallis.</p>
                        <p class="text-muted pt-4">
                            Nullam dapibus, magna sit amet tempus efficitur, erat velit dignissim ipsum, quis euismod
                            libero
                            tortor non ipsum. Duis malesuada diam interdum nisi faucibus consequat. Nunc laoreet finibus
                            nulla quis congue. Maecenas bibendum felis quam, cursus porta dolor vehicula non. Sed
                            consectetur mattis sem, non commodo lectus egestas ut. Sed sed sollicitudin ipsum. In hac
                            habitasse platea dictumst. Aliquam eu mauris id massa elementum condimentum id volutpat
                            magna.
                            Nulla fringilla et nisi et maximus. Fusce massa eu ornare turpis, a congue est.</p>
                        <h1 class="text1 pt-5 px-3 ">Trending Articles</h1>
                        <div class="container py-5">
                            <div class="row " id="impotant">
                                <div class="col-md-6 ">
                                    <img src="{{ asset('asset/images/blog_1 (1).jpg') }}" width="100%"
                                         class="pt-2 friends" alt="">
                                    <div class="  trending">

                                        <h3 class="text-center pt-4 space">The importance of learning</h3>
                                        <p class="text-center text-muted pt-3"> Nulla feugiat sem quis tempus imperdiet.
                                            Morbi
                                            aliquam vitae turpis a condimentum. Sed dolor est, lobortis sit amet
                                            hendrerit
                                            quis,
                                            dictum</p>
                                        <div class="d-flex ps-3 pt-2 ">
                                            <div class="d-flex mt-3">
                                                <i class="far fa-user-circle pt-1"></i>
                                                <p class="text-muted ps-1">admin</p>
                                            </div>
                                            <div class="d-flex date ">
                                                <i class="far fa-calendar-alt"></i>
                                                <p class="text-muted ps-1"> 25 January 2022</p>

                                            </div>
                                        </div>

                                    </div>
                                </div><!-- 1 -->


                                <div class="col-md-6 ">
                                    <img src="{{ asset('asset/images/blog_2.jpg') }}" width="100%" class="pt-1" alt="">
                                    <div class="  trending">
                                        <h3 class="text-center pt-3 space">Create the best space</h3>
                                        <p class="text-center text-muted ">Pellentesque mollis, lorem vel auctor
                                            blandit, eros
                                            risus sollicitudin nibh, vitae convallis libero risus non tortor.
                                            Pellentesque
                                            senectus et netus</p>

                                        <div class="d-flex ps-3 pt-2 ">
                                            <div class="d-flex mt-3">
                                                <i class="far fa-user-circle pt-1"></i>
                                                <p class="text-muted ps-1">admin</p>
                                            </div>
                                            <div class="d-flex date ">
                                                <i class="far fa-calendar-alt"></i>
                                                <p class="text-muted ps-1"> 25 January 2022</p>

                                            </div>
                                        </div>

                                    </div>
                                </div><!-- 2 -->


                            </div>
                            <!--row2-->
                        </div>
                        <!--container2-->


                    </div>
                    <!--2-->

                </div>
                <!--row-->


            </div>
            <!--container-->

        </section>
        <!--#Summary-->


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
