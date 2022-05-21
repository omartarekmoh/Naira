<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <!-- Render All Elements Normally -->
        <link rel="stylesheet" href="{{ asset('asset/css/normalize.css') }}">
        <!-- style file css -->
        <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
        <!-- contact file css -->
{{--        <link rel="stylesheet" href="{{ asset('asset/css/contact.css') }}">--}}
        <!-- event file css -->
{{--        <link rel="stylesheet" href="{{ asset('asset/css/event.css') }}">--}}
        <!-- courses file css -->
{{--        <link rel="stylesheet" href="{{ asset('asset/css/courses.css') }}">--}}
        <!-- blog file css -->
{{--        <link rel="stylesheet" href="{{ asset('asset/css/blog.css') }}">--}}
        <!-- bootstrap file -->
        <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
        <!-- fontawseom -->
        <link rel="stylesheet" href="{{ asset('asset/css/all.min.css') }}">
        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=League+Gothic&family=Roboto:wght@300;400;500;700&display=swap"
            rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=League+Gothic&family=Roboto:wght@300;400;500;700&display=swap"
            rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=League+Gothic&family=Roboto:wght@300;400;500;700&family=Work+Sans:wght@700&display=swap"
            rel="stylesheet">
        <!-- animation -->
        <link rel="stylesheet" href="{{ asset('asset/css/animate.css.css') }}">
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
                                        data-bs-target="#navbarNav"
                                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                        {{--                        <a  class=" login mx-3" href="{{ route('login') }}">Login</a>--}}
                        {{--                        <a type="button" class="login" href="{{ route('register') }}">Registration</a>--}}

                    </div><!-- buttons -->
                </div><!-- row -->


            </div><!-- container -->
        </header><!-- navv -->

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('Success'))
            <div class="alert alert-success">
                <ul>
                    Video Uploaded
                </ul>
            </div>
        @endif

        @if (session('Error'))
            <div class="alert alert-danger">
                <ul>
                    Please Login First
                </ul>
            </div>
        @endif


        <section class="intro">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-12 mb-2  description">
                        <div class="Title wow fadeInLeft">
                            <h1 class="title1">Learn <span class="text-new">New</span> Skills While Having Fun</h1>
                            <p>It’s never been easier to learn all the skills you wanted <br>
                                to have. Apply for fun; apply to <strong class="text-new">LingoAll!</strong>
                            </p>
                        </div>

                        <div class="btns d-flex  wow fadeIn">
                            <a href="{{ route('event') }}">
                                <button type="button" class="login px-4">Get Started</button>
                            </a>

                            <!-- get started -->

                            <a href="https://www.youtube.com/watch?v=4WT2eO8aM7U" class="play-video d-flex">

                                <div class="videoo">
                                    <i class="fa-solid fa-play " style="color: #6255A4;"></i>
                                </div><!-- videoo -->

                                <p class="pt-2 ps-2"> watch video</p>
                            </a><!-- play-video -->


                        </div><!-- btns -->

                    </div><!-- description -->

                    <div class="col-md-1"></div>
                    <div class="col-md-6 col-sm-12 mb-2">
                        <div class="father">
                            <div class="parent">
                                <img src="{{ asset('asset/images/home-image.png') }}" class="girl" alt="">
                            </div>
                        </div>


                    </div><!-- image -->
                </div><!-- row -->
            </div><!-- container -->
        </section><!-- intro -->

        <section class="second1 mt-5 pt-5 pb-5">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 search1 mb-2">
                        <input type="text" placeholder="What course would you like?" class="search-input">
                        <a href="#">
                            <button type="button" class="btn-search login">Search</button>
                        </a>
                    </div><!-- search -->


                    <div class="col-md-3 teacher  mb-2" style="position:relative;">
                        <input type="text" placeholder="Popular Teachers" class="search-input">

                    </div><!-- teachers -->


                    <div class="col-md-3 courses" style="position:relative;">
                        <input type="text" placeholder="Popular Courses" class="search-input">

                    </div><!-- courses -->
                </div><!-- row 1-->


                <div class=" d-flex mt-5 pt-5">


                    <div class=" commuincation p-4  me-4">
                        <div class="purple">
                            <svg version="1.0" class=" mb-4" style="color: #6255A4;" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 630.000000 630.000000" preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,630.000000) scale(0.100000,-0.100000)"
                                   fill="currentcolor" stroke="none">
                                    <path d="M3635 6286 c-85 -27 -153 -83 -193 -160 -21 -42 -27 -68 -30 -147
              l-4 -95 -197 -12 c-715 -44 -1331 -304 -1851 -783 l-96 -87 -176 -4 c-161 -3
              -179 -5 -205 -24 -38 -28 -45 -100 -12 -130 20 -18 45 -19 708 -24 757 -6 716
              -2 758 -67 17 -25 18 -80 18 -828 0 -748 -1 -803 -18 -828 -32 -50 -52 -55
              -202 -60 -127 -4 -146 -7 -192 -31 -102 -51 -132 -118 -133 -293 0 -68 -3
              -123 -7 -123 -5 0 -136 93 -293 206 -157 113 -301 213 -320 222 -31 14 -92 17
              -480 19 -496 4 -475 1 -512 74 -17 31 -18 91 -18 814 0 723 1 783 18 814 33
              65 55 74 213 80 134 6 142 7 160 30 29 36 22 98 -13 124 -55 41 -299 32 -389
              -13 -53 -27 -104 -80 -137 -143 l-27 -52 0 -840 0 -840 27 -52 c34 -64 84
              -115 141 -145 32 -16 65 -23 137 -26 52 -2 100 -8 106 -13 6 -5 14 -61 17
              -126 4 -65 18 -184 31 -264 105 -619 381 -1155 821 -1594 460 -459 1004 -732
              1659 -832 238 -36 574 -38 806 -5 636 93 1159 343 1628 778 56 53 109 109 118
              126 31 60 -13 128 -83 128 -29 0 -48 -14 -151 -113 -163 -156 -320 -276 -504
              -385 l-87 -51 -144 177 c-159 196 -257 328 -257 348 0 29 65 34 487 34 458 0
              452 -1 534 56 20 14 50 44 67 68 63 87 62 78 62 964 l-1 803 55 83 c74 110
              118 210 152 342 25 96 28 126 28 254 -1 124 -5 159 -28 243 -14 54 -44 135
              -66 180 -22 44 -40 84 -40 88 0 4 46 9 103 11 80 3 111 9 144 26 l43 22 40
              -85 c124 -263 206 -541 246 -840 24 -176 24 -511 1 -689 -56 -416 -191 -791
              -412 -1136 -72 -113 -85 -140 -80 -165 8 -43 42 -75 81 -75 52 0 62 8 123 99
              240 360 392 759 457 1201 85 583 -7 1172 -267 1708 l-60 124 -2 861 -2 862
              -23 45 c-33 63 -96 125 -156 152 l-51 23 -1015 2 c-796 1 -1024 -1 -1055 -11z
              m2052 -183 c20 -9 44 -30 54 -47 18 -30 19 -66 19 -834 l0 -802 -34 -38 -34
              -37 -454 -5 c-437 -5 -454 -6 -493 -26 -22 -12 -163 -110 -314 -218 -150 -109
              -280 -200 -287 -203 -11 -4 -14 19 -14 128 0 151 -11 189 -70 246 -58 56 -90
              66 -252 72 l-148 6 -32 33 -33 32 -5 221 -5 221 -28 24 c-39 33 -81 31 -118
              -6 l-30 -30 3 -227 c3 -213 4 -231 26 -278 13 -27 45 -71 73 -96 l49 -47 -14
              -73 c-32 -163 -93 -270 -209 -367 -203 -169 -492 -176 -734 -18 l-63 40 0 421
              0 421 35 65 c61 115 80 261 54 418 -20 125 -87 284 -161 382 -21 27 -38 51
              -38 53 0 7 193 65 300 90 151 36 384 66 540 69 l135 2 5 -246 c4 -222 7 -249
              24 -267 40 -45 125 -31 146 24 6 15 10 194 10 422 0 370 1 399 19 428 41 67
              -19 64 1064 64 894 0 982 -1 1014 -17z m-3387 -698 c56 -68 127 -216 146 -305
              8 -40 14 -102 12 -138 l-3 -65 -30 25 c-85 71 -145 80 -558 76 -215 -2 -326 0
              -324 7 7 21 158 140 293 231 142 94 387 227 410 222 6 -2 31 -25 54 -53z
              m1628 -1261 c21 -14 22 -21 22 -167 0 -139 2 -157 23 -197 30 -61 76 -90 142
              -90 60 0 69 5 303 174 88 64 164 116 168 116 14 0 -8 -115 -36 -189 -34 -87
              -85 -165 -171 -260 -74 -82 -117 -163 -133 -249 l-12 -67 -555 -5 -554 -5 -52
              -24 c-65 -29 -144 -111 -166 -171 -9 -25 -19 -70 -22 -100 l-6 -55 -67 -34
              c-84 -44 -204 -162 -249 -246 -38 -72 -103 -269 -103 -311 0 -45 40 -84 85
              -84 55 0 79 32 116 151 17 57 45 128 62 158 30 54 133 164 148 159 5 -2 10
              -302 12 -668 2 -613 4 -669 20 -712 25 -63 88 -133 151 -166 47 -24 64 -27
              199 -32 132 -4 150 -7 163 -24 11 -15 14 -57 14 -174 0 -140 2 -158 22 -193
              36 -65 110 -97 177 -79 23 6 123 71 238 154 110 79 211 151 225 160 25 16 25
              16 62 -40 21 -31 103 -138 183 -238 80 -99 150 -186 155 -193 13 -16 -53 -49
              -207 -102 -564 -198 -1179 -210 -1740 -34 -499 156 -928 438 -1274 838 -131
              152 -311 413 -311 451 0 18 161 137 243 180 72 38 147 52 212 40 30 -6 56 -26
              124 -95 126 -127 237 -174 421 -175 107 -1 161 14 274 72 80 42 199 153 222
              208 21 50 5 97 -40 118 -48 23 -81 8 -146 -66 -97 -110 -224 -167 -347 -154
              -114 12 -167 39 -270 138 -111 107 -156 130 -269 136 -133 7 -265 -44 -429
              -168 -44 -33 -83 -60 -86 -60 -8 0 -84 181 -121 290 -43 126 -94 340 -113 468
              -25 174 -34 316 -21 324 6 4 117 8 246 8 208 0 240 -2 270 -18 19 -10 167
              -113 328 -230 182 -131 309 -216 333 -222 72 -20 151 16 183 84 13 27 16 67
              16 188 0 201 -10 191 189 198 136 5 150 7 192 32 142 83 171 166 169 482 -1
              99 1 180 4 179 4 -1 35 -15 69 -31 110 -52 194 -74 313 -79 152 -8 247 12 383
              79 89 44 117 64 190 137 124 124 185 238 222 411 9 47 18 86 18 88 1 1 38 2
              84 2 59 0 89 -5 105 -16z m1401 -43 c103 -148 157 -330 148 -496 -9 -156 -54
              -305 -128 -425 l-29 -48 -68 37 -67 36 -382 3 -383 3 0 27 c1 43 34 105 89
              166 165 182 238 334 261 547 21 192 19 186 43 197 13 7 110 11 248 11 l226 1
              42 -59z m-161 -1091 c18 -11 41 -34 52 -52 19 -32 20 -52 20 -818 0 -728 -1
              -788 -18 -819 -9 -19 -30 -44 -45 -55 -28 -20 -43 -21 -486 -26 l-458 -5 -54
              -36 c-30 -20 -166 -118 -304 -218 -137 -99 -253 -180 -257 -181 -5 0 -8 53 -8
              118 0 169 -21 225 -108 287 -43 29 -47 30 -190 36 -174 6 -203 17 -233 84 -19
              42 -19 71 -17 827 l3 783 24 34 c45 63 -8 60 1066 61 961 0 981 0 1013 -20z"></path>
                                    <path d="M4612 5907 c-19 -21 -22 -34 -22 -119 0 -78 -3 -97 -16 -102 -9 -3
              -126 -6 -260 -6 l-245 0 -24 -25 c-17 -16 -25 -35 -25 -60 0 -25 8 -44 25 -60
              23 -23 31 -25 133 -25 110 0 132 -7 132 -40 0 -77 133 -353 234 -486 21 -27
              -143 -144 -331 -235 -78 -38 -147 -78 -153 -89 -16 -30 -12 -75 11 -104 30
              -38 79 -35 186 13 146 65 276 145 378 234 l39 34 83 -67 c131 -106 388 -240
              460 -240 64 0 104 72 72 131 -6 12 -67 47 -145 84 -139 66 -256 140 -311 197
              l-32 33 48 70 c66 95 135 234 166 336 45 143 28 129 158 129 108 0 115 1 137
              25 31 33 31 87 -1 121 l-22 24 -252 0 c-182 0 -254 3 -263 12 -8 8 -12 46 -12
              103 0 83 -2 94 -23 113 -33 31 -96 30 -125 -1z m245 -412 c15 -41 -147 -375
              -182 -375 -35 0 -196 336 -181 377 4 10 44 13 181 13 149 0 177 -2 182 -15z"></path>
                                    <path d="M3568 2671 c-32 -26 -43 -65 -27 -103 21 -50 51 -58 224 -58 177 0
              210 -9 245 -65 32 -53 35 -88 10 -140 -37 -76 -66 -85 -270 -85 -191 0 -220
              -7 -239 -61 -13 -37 6 -91 37 -108 13 -7 88 -11 192 -11 189 0 219 -7 262 -58
              37 -44 43 -92 19 -147 -29 -67 -66 -85 -171 -85 -143 0 -243 32 -329 104 -31
              26 -52 36 -77 36 -49 0 -84 -37 -84 -89 0 -35 6 -45 53 -87 101 -92 253 -142
              436 -146 120 -2 185 19 254 82 87 79 128 190 108 292 -6 29 -13 63 -17 76 l-6
              22 181 0 181 0 0 -197 c0 -219 4 -238 59 -265 25 -12 39 -14 61 -6 56 19 55 6
              60 487 l5 446 75 6 c90 6 106 13 125 50 22 42 18 67 -14 100 l-29 29 -247 0
              -247 0 -29 -29 c-36 -37 -38 -79 -5 -118 22 -25 31 -28 105 -31 l81 -4 0 -144
              0 -144 -181 0 -181 0 6 23 c21 71 26 125 17 174 -21 109 -91 201 -190 247 -41
              19 -67 21 -236 24 -180 3 -192 2 -217 -17z"></path>
                                    <path d="M1225 4560 c-28 -11 -60 -49 -73 -85 -5 -16 -72 -192 -147 -390 -196
              -517 -265 -704 -265 -716 0 -5 7 -23 15 -38 27 -52 102 -63 140 -21 10 11 35
              65 56 121 21 57 42 106 47 111 4 4 127 8 272 9 l265 1 18 -37 c10 -21 30 -70
              44 -109 14 -39 34 -81 45 -93 63 -69 175 -5 148 84 -8 29 -52 146 -160 428
              -34 88 -70 183 -80 210 -10 28 -46 122 -80 210 -34 88 -69 180 -78 205 -22 65
              -42 91 -79 106 -36 16 -59 17 -88 4z m99 -437 c27 -71 64 -168 83 -218 18 -49
              40 -105 48 -123 9 -18 13 -38 10 -43 -8 -11 -395 -12 -395 -1 0 5 41 116 90
              248 50 131 92 245 95 252 10 27 22 7 69 -115z"></path>
                                </g>
                            </svg>
                        </div>

                        <h5 class="mb-4">Communication Is Key!</h5>
                        <p class="mb-4">From ancient Latin to mythical High Valyrian, master the arts of the human
                            language! You will
                            love our course!</p>
                        <a href="#"> <span>view Details</span>
                            <i class="fa-solid fa-arrow-right-long"></i> </a>
                    </div><!-- 1 -->


                    <div class="commuincation p-4 me-4 ">
                        <div class="pink">
            <span>
              <svg version="1.0" class=" mb-4" style="color: #e84266" ; xmlns="http://www.w3.org/2000/svg"
                   viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="currentcolor"
                   stroke="none">
                  <path d="M450 5101 c-124 -17 -239 -77 -319 -167 -52 -58 -107 -168 -121 -243
          -14 -77 -14 -1513 1 -1583 35 -167 166 -316 335 -380 l59 -23 767 -3 c665 -2
          776 -1 834 13 177 41 327 182 378 354 14 47 16 128 16 566 0 475 -1 513 -18
          528 -32 29 -67 31 -98 4 l-29 -25 -5 -514 c-5 -504 -5 -514 -27 -561 -48 -103
          -126 -170 -234 -201 -50 -15 -141 -16 -810 -14 l-754 3 -66 32 c-79 39 -140
          102 -177 181 l-27 57 0 780 0 780 26 55 c56 118 154 190 285 210 47 7 306 10
          785 8 l714 -3 60 -24 c83 -33 174 -125 203 -204 18 -48 22 -79 22 -182 0 -127
          8 -169 38 -191 25 -20 65 -17 90 6 21 20 22 29 22 169 0 106 -5 163 -16 202
          -49 166 -168 291 -335 351 l-64 23 -740 1 c-407 1 -765 -1 -795 -5z"></path>
                  <path d="M3155 5100 c-139 -17 -295 -122 -368 -247 -15 -27 -36 -77 -47 -112
          -19 -61 -20 -93 -20 -841 0 -747 1 -780 20 -841 38 -125 130 -234 248 -297
          104 -56 152 -62 504 -62 174 0 324 3 333 6 24 10 46 60 39 89 -13 54 -22 55
          -364 55 -349 0 -382 4 -472 62 -53 33 -93 79 -129 148 l-24 45 -3 781 -2 782
          21 58 c30 80 121 171 204 205 l60 24 714 3 c479 2 738 -1 785 -8 131 -20 229
          -92 285 -210 l26 -55 0 -780 0 -780 -27 -57 c-37 -79 -98 -142 -177 -181 l-65
          -32 -319 -5 -319 -5 -19 -24 c-26 -32 -24 -67 6 -97 l26 -25 322 3 c302 4 326
          5 381 26 168 62 300 213 335 380 15 70 15 1506 1 1583 -14 75 -69 185 -121
          243 -55 63 -144 120 -228 148 -66 22 -72 22 -801 24 -404 1 -766 -2 -805 -6z"></path>
                  <path d="M1150 4270 c-18 -18 -20 -33 -20 -154 l0 -134 -141 -4 c-134 -3 -142
          -4 -160 -27 -25 -30 -24 -62 2 -95 20 -26 21 -26 160 -26 l139 0 0 -139 c0
          -139 0 -140 26 -160 30 -24 43 -26 77 -10 39 18 47 50 47 184 l0 125 135 0
          c122 0 137 2 155 20 30 30 27 83 -6 109 -24 19 -40 21 -155 21 l-129 0 0 129
          c0 115 -2 131 -21 155 -26 33 -79 36 -109 6z"></path>
                  <path d="M3547 3960 c-34 -27 -37 -80 -7 -110 19 -19 33 -20 369 -20 l350 0
          20 26 c26 33 27 65 2 95 l-19 24 -344 3 c-337 3 -345 2 -371 -18z"></path>
                  <path d="M415 2410 c-22 -5 -60 -16 -85 -25 -150 -53 -285 -212 -319 -373 -15
          -70 -15 -1506 -1 -1583 14 -75 69 -185 121 -243 57 -65 146 -121 234 -149 67
          -21 85 -22 452 -22 380 0 383 0 404 22 27 27 29 75 4 103 -17 19 -30 20 -359
          20 -190 0 -370 5 -406 11 -125 20 -224 94 -279 209 l-26 55 0 780 0 780 27 57
          c37 79 98 142 177 181 l66 32 754 3 c669 2 760 1 810 -14 113 -32 192 -103
          237 -212 l24 -57 0 -767 c0 -762 0 -768 -22 -825 -30 -80 -121 -171 -203 -203
          -56 -22 -79 -24 -327 -29 -252 -6 -268 -7 -282 -26 -32 -41 -14 -95 38 -115
          34 -13 382 -13 496 0 201 23 369 162 430 359 19 61 20 93 20 841 0 747 -1 780
          -20 841 -38 125 -130 234 -248 297 -116 62 -111 62 -932 61 -410 -1 -763 -5
          -785 -9z"></path>
                  <path d="M3106 2404 c-170 -41 -315 -177 -366 -343 -19 -61 -20 -94 -20 -841
          0 -748 1 -780 20 -841 43 -139 134 -245 265 -310 118 -58 156 -61 977 -57 704
          4 714 4 779 26 84 28 173 85 228 148 52 58 107 168 121 243 14 77 14 1513 -1
          1583 -35 167 -166 316 -335 380 l-59 23 -775 2 c-645 1 -785 -1 -834 -13z
          m1646 -166 c79 -37 142 -98 181 -177 l32 -66 0 -780 0 -780 -26 -55 c-56 -118
          -154 -190 -285 -210 -47 -7 -306 -10 -785 -8 l-714 3 -60 24 c-83 34 -174 125
          -204 205 l-21 58 2 782 3 781 24 45 c54 102 119 159 220 191 52 17 107 18 816
          16 l760 -2 57 -27z"></path>
                  <path d="M3546 1469 c-33 -26 -36 -79 -6 -109 19 -19 33 -20 365 -20 l346 0
          24 25 c14 13 25 36 25 50 0 14 -11 37 -25 50 l-24 25 -339 0 c-328 0 -340 -1
          -366 -21z"></path>
                  <path d="M3540 1190 c-30 -30 -27 -83 7 -110 26 -20 34 -21 371 -18 l344 3 19
          24 c25 30 24 62 -2 95 l-20 26 -350 0 c-336 0 -350 -1 -369 -20z"></path>
                  <path d="M927 1553 c-8 -10 -19 -30 -22 -46 -7 -25 2 -37 89 -125 53 -54 96
          -102 96 -107 0 -5 -43 -53 -96 -107 -87 -88 -96 -100 -89 -125 10 -43 34 -63
          73 -63 31 0 47 12 131 95 l97 95 94 -95 c81 -81 99 -95 127 -95 40 0 73 33 73
          73 0 24 -18 48 -95 126 l-94 96 94 96 c80 80 95 101 95 128 0 41 -31 71 -73
          71 -28 0 -46 -14 -127 -95 l-94 -95 -97 95 c-84 83 -100 95 -131 95 -21 0 -41
          -7 -51 -17z"></path>
                </g>
              </svg>
            </span>
                        </div>


                        <h5 class="mb-4">It’s All Relative!</h5>
                        <p class="mb-5">Come to grasp with the universal laws of the world. Physics, math, chemestry --
                            the real deal!
                        </p>
                        <a href="#"> <span>view Details</span>
                            <i class="fa-solid fa-arrow-right-long"></i> </a>
                    </div><!-- 2 -->


                    <div class="  commuincation p-4 me-4">
                        <div class="yellow">
            <span>
              <svg version="1.0" class="  mb-4" style="color: #FFAE27;" xmlns="http://www.w3.org/2000/svg"
                   viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="currentcolor"
                   stroke="none">
                  <path d="M3827 5100 c-64 -50 -340 -561 -402 -741 l-28 -85 -87 33 c-534 200
          -1116 203 -1618 7 -548 -213 -993 -641 -1228 -1181 -59 -134 -124 -337 -124
          -384 0 -46 48 -89 98 -89 64 0 85 25 117 136 134 475 439 884 863 1159 99 63
          317 167 430 204 233 76 452 107 697 98 183 -6 356 -33 525 -82 141 -41 312
          -108 321 -126 4 -8 23 -48 43 -90 39 -84 93 -150 156 -194 35 -24 41 -33 36
          -54 -3 -15 -14 -69 -26 -123 -46 -221 -83 -547 -100 -883 -6 -121 -13 -262
          -16 -312 l-6 -93 -71 -47 c-208 -140 -382 -368 -462 -607 -51 -151 -58 -212
          -60 -486 -1 -261 -5 -297 -46 -406 -36 -96 -88 -174 -173 -260 -131 -131 -273
          -200 -463 -225 -181 -23 -355 16 -598 135 -608 298 -1020 873 -1110 1549 -8
          63 -38 97 -91 104 -36 5 -46 1 -75 -25 -31 -28 -34 -35 -32 -84 3 -87 50 -303
          99 -448 185 -555 590 -1017 1119 -1275 243 -119 387 -157 590 -158 290 -1 520
          95 716 300 92 96 130 150 180 257 71 153 82 215 84 511 2 295 11 358 74 511
          51 124 118 222 226 329 l90 90 7 -230 c24 -798 91 -1359 198 -1637 99 -262
          301 -262 400 0 112 294 182 902 197 1705 l6 357 62 0 c320 0 519 236 502 595
          -10 208 -82 388 -238 595 -69 92 -215 243 -306 318 l-62 50 30 39 c110 137
          136 308 75 488 -54 159 -346 709 -400 754 -29 25 -88 25 -119 1z m117 -379
          c81 -144 189 -368 214 -445 40 -120 23 -218 -50 -301 -114 -129 -310 -139
          -430 -22 -101 98 -117 206 -54 367 53 135 243 500 261 500 2 0 29 -44 59 -99z
          m15 -1153 c41 -194 101 -671 86 -687 -4 -3 -78 -6 -165 -6 -87 0 -161 3 -165
          6 -15 16 45 497 86 687 l22 102 57 0 57 0 22 -102z m338 -68 c163 -161 257
          -302 314 -470 29 -84 33 -108 33 -205 1 -179 -40 -273 -145 -330 -45 -24 -68
          -30 -139 -33 l-86 -4 -12 228 c-15 281 -44 563 -77 760 -14 82 -28 158 -31
          168 -6 18 -5 18 23 -2 16 -11 70 -61 120 -112z m-233 -845 c3 -11 9 -177 12
          -370 12 -641 -34 -1365 -111 -1752 -28 -138 -71 -283 -85 -283 -14 0 -57 145
          -85 283 -78 392 -123 1099 -111 1747 3 195 9 364 12 375 5 19 13 20 184 20
          171 0 179 -1 184 -20z"></path>
                  <path d="M2486 3950 c-63 -16 -153 -70 -197 -117 -22 -24 -55 -74 -72 -111
          -29 -61 -32 -76 -32 -163 0 -90 2 -99 37 -171 45 -91 103 -147 196 -191 61
          -29 76 -32 162 -32 86 0 101 3 162 32 93 44 151 100 196 191 35 72 37 81 37
          172 0 91 -2 100 -37 172 -68 136 -188 217 -336 224 -42 2 -94 -1 -116 -6z
          m204 -224 c59 -39 85 -89 85 -166 0 -78 -26 -127 -88 -168 -56 -37 -153 -39
          -210 -3 -76 47 -111 140 -88 229 14 51 75 117 123 131 53 16 135 6 178 -23z"></path>
                  <path d="M1386 3450 c-63 -16 -153 -70 -197 -117 -22 -24 -55 -74 -72 -111
          -29 -61 -32 -76 -32 -163 0 -90 2 -99 37 -171 45 -91 103 -147 196 -191 61
          -29 76 -32 162 -32 86 0 101 3 162 32 93 44 151 100 196 191 35 72 37 81 37
          172 0 91 -2 100 -37 172 -68 136 -188 217 -336 224 -42 2 -94 -1 -116 -6z
          m204 -224 c59 -39 85 -89 85 -166 0 -78 -26 -127 -88 -168 -56 -37 -153 -39
          -210 -3 -76 47 -111 140 -88 229 14 51 75 117 123 131 53 16 135 6 178 -23z"></path>
                  <path d="M331 2446 c-87 -48 -50 -186 49 -186 51 0 100 49 100 99 0 75 -83
          124 -149 87z"></path>
                  <path d="M1086 2250 c-63 -16 -153 -70 -197 -117 -22 -24 -55 -74 -72 -111
          -29 -61 -32 -76 -32 -163 0 -90 2 -99 37 -171 45 -91 103 -147 196 -191 61
          -29 76 -32 162 -32 86 0 101 3 162 32 93 44 151 100 196 191 35 72 37 81 37
          172 0 91 -2 100 -37 172 -68 136 -188 217 -336 224 -42 2 -94 -1 -116 -6z
          m204 -224 c59 -39 85 -89 85 -166 0 -78 -26 -127 -88 -168 -56 -37 -153 -39
          -210 -3 -76 47 -111 140 -88 229 14 51 75 117 123 131 53 16 135 6 178 -23z"></path>
                  <path d="M1986 1450 c-63 -16 -153 -70 -197 -117 -22 -24 -55 -74 -72 -111
          -29 -61 -32 -76 -32 -163 0 -90 2 -99 37 -171 45 -91 103 -147 196 -191 61
          -29 76 -32 162 -32 86 0 101 3 162 32 93 44 151 100 196 191 35 72 37 81 37
          172 0 91 -2 100 -37 172 -68 136 -188 217 -336 224 -42 2 -94 -1 -116 -6z
          m204 -224 c59 -39 85 -89 85 -166 0 -78 -26 -127 -88 -168 -56 -37 -153 -39
          -210 -3 -76 47 -111 140 -88 229 14 51 75 117 123 131 53 16 135 6 178 -23z"></path>
                </g>
              </svg>
            </span>
                        </div><!-- svg -->

                        <h5 class="mb-4">Every Frame a Story!</h5>
                        <p class="mb-5">Learn about the greatest artistic creations and the rules they’re based on. Art
                            thou
                            interested?
                        </p>
                        <a href="#"> <span>view Details</span>
                            <i class="fa-solid fa-arrow-right-long"></i> </a>
                    </div><!-- 3 -->


                    <div class=" commuincation p-4">
                        <div class="green">
            <span>
              <svg version="1.0" class="  mb-4" style="color: #4AABB0;" xmlns="http://www.w3.org/2000/svg"
                   viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="currentcolor"
                   stroke="none">
                  <path d="M2206 4905 c-74 -30 -138 -92 -168 -161 -21 -50 -25 -54 -58 -54 -50
          -1 -112 -32 -146 -73 l-29 -36 -385 -3 c-433 -3 -419 -1 -484 -81 l-31 -39 -3
          -2061 c-2 -2057 -2 -2060 18 -2103 12 -24 38 -54 62 -70 l41 -29 1537 0 1537
          0 41 29 c23 16 50 46 62 70 20 42 20 51 20 2090 0 1865 -1 2050 -16 2079 -21
          42 -52 75 -89 95 -26 15 -79 17 -415 20 l-385 3 -29 36 c-35 42 -96 72 -147
          73 -34 0 -37 3 -54 47 -24 63 -94 135 -158 164 -51 23 -61 24 -357 27 -304 2
          -305 2 -364 -23z m657 -129 c60 -25 107 -93 107 -154 0 -14 10 -36 22 -49 19
          -20 31 -23 94 -23 102 0 104 -2 104 -156 l0 -124 -630 0 -630 0 0 124 c0 153
          2 156 103 156 59 0 75 4 94 22 13 12 23 33 23 49 0 61 46 128 105 155 44 19
          562 20 608 0z m-1073 -468 c0 -121 2 -134 22 -155 15 -16 33 -23 60 -23 31 0
          38 -3 38 -20 0 -20 -7 -20 -365 -20 -352 0 -366 -1 -385 -20 -20 -20 -20 -33
          -20 -1810 0 -1777 0 -1790 20 -1810 20 -20 33 -20 1400 -20 1367 0 1380 0
          1400 20 20 20 20 33 20 1810 0 1777 0 1790 -20 1810 -19 19 -33 20 -385 20
          -358 0 -365 0 -365 20 0 16 7 20 37 20 24 0 45 8 60 22 22 20 23 28 23 155 l0
          133 353 0 c303 0 356 -2 375 -16 l22 -15 0 -2029 c0 -1996 0 -2029 -19 -2040
          -27 -14 -2975 -14 -3002 0 -19 11 -19 44 -19 2040 l0 2029 22 15 c19 14 72 16
          375 16 l353 0 0 -132z m1280 -288 l0 -110 -510 0 -510 0 0 110 0 110 510 0
          510 0 0 -110z m-1160 -137 c0 -55 4 -71 22 -90 l21 -23 606 0 605 0 23 22 c20
          18 23 31 23 90 l0 68 315 0 315 0 0 -1690 0 -1690 -1280 0 -1280 0 0 1690 0
          1690 315 0 315 0 0 -67z"></path>
                  <path d="M2485 4711 c-154 -71 -150 -280 7 -346 47 -19 89 -19 136 0 160 67
          160 283 0 350 -49 20 -94 19 -143 -4z m109 -137 c21 -20 20 -43 -1 -66 -20
          -22 -46 -23 -67 -2 -31 30 -9 84 34 84 10 0 26 -7 34 -16z"></path>
                  <path d="M3507 4320 c-19 -16 -27 -30 -27 -54 0 -60 18 -66 188 -66 145 0 152
          1 166 22 22 31 20 71 -5 94 -18 16 -40 19 -158 22 -127 3 -138 2 -164 -18z"></path>
                  <path d="M1439 3541 l-24 -19 0 -392 0 -392 24 -19 c22 -18 44 -19 406 -19
          362 0 384 1 406 19 l24 19 0 392 0 392 -24 19 c-22 18 -44 19 -406 19 -362 0
          -384 -1 -406 -19z m691 -411 l0 -290 -285 0 -285 0 0 290 0 290 285 0 285 0 0
          -290z"></path>
                  <path d="M2005 3320 c-11 -4 -38 -27 -60 -50 -22 -23 -66 -64 -97 -92 l-58
          -50 -43 36 c-70 57 -137 42 -137 -31 0 -24 14 -44 74 -101 103 -100 108 -99
          239 24 155 146 177 171 177 198 0 47 -53 84 -95 66z"></path>
                  <path d="M2852 3417 c-28 -30 -28 -68 1 -95 23 -22 26 -22 435 -22 399 0 413
          1 432 20 11 11 20 33 20 50 0 17 -9 39 -20 50 -19 19 -33 20 -433 20 l-414 0
          -21 -23z"></path>
                  <path d="M2402 3184 c-16 -11 -22 -25 -22 -54 0 -74 -34 -70 682 -70 625 0
          638 0 658 20 11 11 20 33 20 50 0 17 -9 39 -20 50 -20 20 -33 20 -658 20 -561
          0 -640 -2 -660 -16z"></path>
                  <path d="M2402 2944 c-16 -11 -22 -25 -22 -54 0 -74 -34 -70 682 -70 625 0
          638 0 658 20 11 11 20 33 20 50 0 17 -9 39 -20 50 -20 20 -33 20 -658 20 -561
          0 -640 -2 -660 -16z"></path>
                  <path d="M1439 2581 l-24 -19 0 -392 0 -392 24 -19 c22 -18 44 -19 406 -19
          362 0 384 1 406 19 l24 19 0 392 0 392 -24 19 c-22 18 -44 19 -406 19 -362 0
          -384 -1 -406 -19z m691 -411 l0 -290 -285 0 -285 0 0 290 0 290 285 0 285 0 0
          -290z"></path>
                  <path d="M2005 2360 c-11 -4 -38 -27 -60 -50 -22 -23 -66 -64 -97 -92 l-58
          -50 -43 36 c-70 57 -137 42 -137 -31 0 -24 14 -44 74 -101 103 -100 108 -99
          239 24 155 146 177 171 177 198 0 47 -53 84 -95 66z"></path>
                  <path d="M2852 2457 c-28 -30 -28 -68 1 -95 23 -22 26 -22 435 -22 399 0 413
          1 432 20 11 11 20 33 20 50 0 17 -9 39 -20 50 -19 19 -33 20 -433 20 l-414 0
          -21 -23z"></path>
                  <path d="M2402 2224 c-16 -11 -22 -25 -22 -54 0 -74 -34 -70 682 -70 625 0
          638 0 658 20 11 11 20 33 20 50 0 17 -9 39 -20 50 -20 20 -33 20 -658 20 -561
          0 -640 -2 -660 -16z"></path>
                  <path d="M2402 1984 c-16 -11 -22 -25 -22 -54 0 -74 -34 -70 682 -70 625 0
          638 0 658 20 11 11 20 33 20 50 0 17 -9 39 -20 50 -20 20 -33 20 -658 20 -561
          0 -640 -2 -660 -16z"></path>
                  <path d="M1439 1621 l-24 -19 0 -392 0 -392 24 -19 c22 -18 44 -19 406 -19
          362 0 384 1 406 19 l24 19 0 392 0 392 -24 19 c-22 18 -44 19 -406 19 -362 0
          -384 -1 -406 -19z m691 -411 l0 -290 -285 0 -285 0 0 290 0 290 285 0 285 0 0
          -290z"></path>
                  <path d="M2005 1400 c-11 -4 -38 -27 -60 -50 -22 -23 -66 -64 -97 -92 l-58
          -50 -43 36 c-70 57 -137 42 -137 -31 0 -24 14 -44 74 -101 103 -100 108 -99
          239 24 155 146 177 171 177 198 0 47 -53 84 -95 66z"></path>
                  <path d="M2852 1497 c-28 -30 -28 -68 1 -95 23 -22 26 -22 435 -22 399 0 413
          1 432 20 11 11 20 33 20 50 0 17 -9 39 -20 50 -19 19 -33 20 -433 20 l-414 0
          -21 -23z"></path>
                  <path d="M2402 1264 c-16 -11 -22 -25 -22 -54 0 -74 -34 -70 682 -70 625 0
          638 0 658 20 11 11 20 33 20 50 0 17 -9 39 -20 50 -20 20 -33 20 -658 20 -561
          0 -640 -2 -660 -16z"></path>
                  <path d="M2402 1024 c-16 -11 -22 -25 -22 -54 0 -74 -34 -70 682 -70 625 0
          638 0 658 20 11 11 20 33 20 50 0 17 -9 39 -20 50 -20 20 -33 20 -658 20 -561
          0 -640 -2 -660 -16z"></path>
                </g>
              </svg>
            </span>
                        </div>


                        <h5 class="mb-4">Paths To Success!</h5>
                        <p class="mb-4">Discover all the skills needed in everyday life and jump into economics,
                            politics, computing
                            and more!</p>
                        <a href="#"> <span>view Details</span>
                            <i class="fa-solid fa-arrow-right-long"></i> </a>
                    </div><!-- 4 -->


                </div><!-- row 2-->

            </div><!-- container -->
        </section><!-- second -->
        <section class="learn-simple py-5">
            <div class="container ">
                <div class="row px-3">
                    <div class="col-md-6">
                        <img src="{{ asset('asset/images/element_1.png') }}" alt="">
                    </div>
                    <div class="col-md-6 pe-3 text-muted">
                        <h1 class="">Learning Made <strong class="text-new">Simple</strong>, For Your Delight</h1>
                        <p>Curabitur et pretium velit. Phasellus sed iaculis sem. Aliquam et <br> iaculis elit, varius
                            auctor ante.
                            Sed interdum dictum nulla vitae <br> aliquam. Donec commodo ullamcorper convallis. Aenean a
                            ante <br> metus.
                        </p>

                        <p class="py-4"> Donec maximus ipsum quis est vehicula dictum. Suspendisse eget <br> ligula vel
                            ante lobortis
                            malesuada. Nullam quis augue id libero <br> viverra dapibus a at felis.</p>
                        <a href="about.html">
                            <button type="button" class=" login mx-3">About Us</button>
                        </a>
                    </div>
                </div>
            </div>
        </section><!-- third -->
        <section class="close-hand py-5 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <img src="{{ asset('asset/images/left.png') }}" alt="" height="170px">
                    </div>
                    <div class="col-md-2">
                        <img src="{{ asset('asset/images/logo2.png') }}" class="logo-2" height="130px">
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('asset/images/right.png') }}" alt="" height="180px">
                    </div>
                </div>
                <h1>Create. Share. Learn. It <br> All <strong class="text-new">Starts</strong> Here </h1>

            </div>
        </section><!-- fourth -->
        <section class=" py-5 learn-simple">
            <div class="container">

                <div class="d-flex mx-3">
                    <h2 class="pe-5 me-5">Time To <span class="text-new"> Get Started</span>,<br>
                        All Our New Courses</h2>
                    <p class="pt-3">All you need to know about being able to communicate to large audiences. <br> Find
                        out more
                        about how to calm
                        yourself and succed. Don’t be shy! Being <br> able to communicate to large audiences.</p>
                </div>


                <div class="row">

                    <div class="active  col-md-6 col-sm-12 ">
                        <a href="#">
                            <img src="{{ asset('asset/images/2 (1).png') }}" class="w-100">
                            <div class="man  ">
                                <a href="#">
                                    <button type="button">Professional Diploma</button>
                                </a>
                                <h3 class="pb-4">English Language Course</h3>
                                <div class="classes">
                                    <div class="d-flex">
                                        <span class="class-number">Course #1 - Intro</span><span
                                            class="class-description">The universal laws
                    of the world</span>
                                    </div>
                                    <div class="d-flex">
                                        <span class="class-number">Course #2 - Grammar</span><span
                                            class="class-description">Physics, math -
                    the real deal!</span>
                                    </div>
                                    <div class="d-flex">
                                        <span class="class-number">Course #3 - Words</span><span
                                            class="class-description">Ah, beloved
                    literaturel!</span>
                                    </div>
                                </div>

                                <div class="course-details ">
                                    <span>23 courses</span>
                                    <span>8 tests</span>
                                    <span>5 asgmts.</span>
                                    <span>32 hours</span>
                                </div>
                            </div>


                        </a>

                    </div><!-- 1 -->


                    <div class="active  col-md-6 col-sm-12 ">
                        <a href="#">
                            <img src="{{ asset('asset/images/1 (1).png') }}" class="w-100">
                            <div class="man  ">
                                <a href="#">
                                    <button type="button">Professional Diploma</button>
                                </a>
                                <h3 class="pb-4">English Language Course</h3>
                                <div class="classes">
                                    <div class="d-flex">
                                        <span class="class-number">Course #1 - Intro</span><span
                                            class="class-description">The universal laws
                    of the world</span>
                                    </div>
                                    <div class="d-flex">
                                        <span class="class-number">Course #2 - Grammar</span><span
                                            class="class-description">Physics, math -
                    the real deal!</span>
                                    </div>
                                    <div class="d-flex">
                                        <span class="class-number">Course #3 - Words</span><span
                                            class="class-description">Ah, beloved
                    literaturel!</span>
                                    </div>
                                </div>

                                <div class="course-details ">
                                    <span>23 courses</span>
                                    <span>8 tests</span>
                                    <span>5 asgmts.</span>
                                    <span>32 hours</span>
                                </div>
                            </div>


                        </a>

                    </div><!-- 2 -->


                </div><!-- row -->


            </div><!-- container -->


        </section><!-- fifth -->

        <section class="fill-form mt-5 py-5">
            <div class="close-hand">
                <h1>Keep Up With Our News
                    <br>It’s A <span class="text-new"> Journey</span>
                </h1>
            </div>
            <div class="container py-5">
                <div class="row " id="impotant">
                    <div class="col-md-4 ">
                        <img src="{{ asset('asset/images/blog_1 (1).jpg') }}" width="100%" class="pt-2 friends" alt="">
                        <div class="  trending">

                            <h3 class="text-center pt-4 space">The importance of learning</h3>
                            <p class="text-center text-muted pt-3"> Nulla feugiat sem quis tempus imperdiet. Morbi
                                aliquam vitae turpis a condimentum. Sed dolor est, lobortis sit amet hendrerit
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


                    <div class="col-md-4 ">
                        <img src="{{ asset('asset/images/blog_2.jpg') }}" width="100%" class="pt-1" alt="">
                        <div class="  trending">
                            <h3 class="text-center pt-3 space">Create the best space</h3>
                            <p class="text-center text-muted ">Pellentesque mollis, lorem vel auctor blandit, eros
                                risus sollicitudin nibh, vitae convallis libero risus non tortor. Pellentesque
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

                    <div class="col-md-4 ">
                        <img src="{{ asset('asset/images/blog_3.jpg') }}" width="100%" class="pt-1" alt="">
                        <div class="  trending">
                            <h3 class="text-center pt-3 space">Create the best space</h3>
                            <p class="text-center text-muted ">Pellentesque mollis, lorem vel auctor blandit, eros
                                risus sollicitudin nibh, vitae convallis libero risus non tortor. Pellentesque
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
                    </div><!-- 3 -->


                </div>
                <!--row2-->
            </div>
            <!--container2-->
        </section>

        <form action="{{ route('video') }}" method="post" enctype="multipart/form-data">
            @CSRF
            <div class="sppb-form-group  sppb-col-sm-12">
                <input type="text" name="name" class="sppb-form-control" placeholder="Name"
                       required="required">
            </div>

            <div class="sppb-form-group  sppb-col-sm-12">
                  <textarea id="" name="description" rows="4" cols="50">

                  </textarea>
            </div>
            <div class="sppb-form-group  sppb-col-sm-12">
                <input type="file" name="video" class="form-control" id="inputGroupFile01">
            </div>

            <button type="submit">Upload</button>

        </form>

        <footer class="py-3  ">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 mx-2">
                        <img src="{{ asset('asset/images/logo_3.png') }}" alt="">
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
