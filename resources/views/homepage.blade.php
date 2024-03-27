<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="{{ url('https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css') }}" rel='stylesheet'>
    {{-- javacript --}}
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="{{ asset('js/scroll.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Home Furnify</title>
    <style>
        #form-search {
            display: none;
        }

        .anime {
            background: rgb(3, 20, 238);
            background: linear-gradient(45deg, rgba(3, 20, 238, 1) 1%, rgba(9, 9, 121, 1) 46%, rgba(3, 20, 238, 1) 80%);
        }

        #anime {
            background: rgb(3, 20, 238);
            background: linear-gradient(45deg, rgba(3, 20, 238, 1) 1%, rgba(9, 9, 121, 1) 46%, rgba(3, 20, 238, 1) 80%);
        }

        #search {
            background: rgb(3, 20, 238);
            background: linear-gradient(45deg, rgba(3, 20, 238, 1) 1%, rgba(9, 9, 121, 1) 46%, rgba(3, 20, 238, 1) 80%);
        }
    </style>
</head>

<body>
    <nav class="col-12 d-flex justify-content-between  align-items-center " style="height: 60px">
        <div class="col-1  d-flex justify-content-center align-items-center ">
            <img src="images/trans-logo.png" alt="" class="w-75 h-50 ">
        </div>
        <div class="col-8  ">
            <div class="navbar-brand d-flex align-items-center ">
                <ul class="nav d-flex navbar-text  position-relative ">
                    <li class="nav-item text-white " id="0">
                        <a class="nav-link" href="{{ url('/') }}" id="home">Home</a>
                    </li>
                    <li class="nav-item " id="1">
                        <a class="nav-link" href="#" id="product">Product</a>
                    </li>
                    <li class="nav-item " id="2">
                        <a class="nav-link" aria-current="look" href="#" id="Look">Look</a>
                    </li>
                    <li class="nav-item " id="3">
                        <a class="nav-link" aria-current="room" href="#" id="Roome">Roome</a>
                    </li>
                    <li class="nav-item " id="4">
                        <a class="nav-link" aria-current="Decoration" href="#" id="Decoration">Decoration</a>
                    </li>
                    <li class="nav-item " id="5">
                        <a class="nav-link" aria-current="kichens" href="#" id="Kitchen">Kitchen</a>
                    </li>
                    <li class="nav-item " id="6">
                        <a class="nav-link" aria-current="Rug" href="#" id="Rugs">Rugs</a>
                    </li>
                    <li class="nav-item " id="7">
                        <a class="nav-link" aria-current="Ourdoor" href="#" id="Outdoor">Outdoor</a>
                    </li>
                    <li class="nav-item " id="8">
                        <a class="nav-link" aria-current="Ligting" href="#" id="Ligting">Ligting</a>
                    </li>
                    <li class="nav-item " id="9">
                        <a class="nav-link" aria-current="Gifts" href="#" id="Gifts">Gifts</a>
                    </li>
                    <li class="nav-item " id="10">
                        <a class="nav-link" aria-current="offers" href="#" id="Offers">Offers</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-1 justify-content-evenly d-flex ">
            <i class='bx bx-search-alt-2 h5 ' id="flip" style="cursor: pointer"></i>

            @if ($user)
                <p class="h1 text-dark ">{{ $user->name }}</p>
            @else
                <a href="/login"><i class='bx bx-user h5'></i></a>
            @endif

            <i class='bx bxs-heart h5'></i>
            <i class='bx bxs-shopping-bag-alt h5'></i>
        </div>

    </nav>
    <form class="col-12 justify-content-center align-items-center m-2" id="form-search" action=""
        style="height: 40px">
        <div class="w-50  h-100 bg-light d-flex  ">
            <input type="text" name="" class="w-75 form-control  h-100 "
                style="border-top-right-radius:0;border-bottom-right-radius:0; " placeholder="Search Product"
                id="">
            <input type="text" name="" id="search" class="btn btn-primary  "
                style="border-top-left-radius:0;border-bottom-left-radius:0; " value="Search">
        </div>
    </form>
    {{-- contactPage --}}
    <header id="header">
        @yield('contact')
    </header>

    <footer class="  text-center" id="search">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-linkedin-in"></i></a>

                <!-- Github -->
                <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->

            <!-- Section: Form -->
            <section class="">
                <form action="">
                    <!--Grid row-->
                    <div class="row d-flex justify-content-center">
                        <!--Grid column-->
                        <div class="col-auto">
                            <p class="pt-2">
                                <strong class="text-white ">Be the first to know about our best deals</strong>
                            </p>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-5 col-12">
                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="email" id="form5Example24" class="form-control"
                                    placeholder="Comment" />
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-auto">
                            <!-- Submit button -->
                            <button data-mdb-ripple-init type="submit" class="btn btn-primary  mb-4">
                                Subscribe
                            </button>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </form>
            </section>
            <!-- Section: Form -->

            <!-- Section: Text -->
            <!-- Section: Text -->

            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row col-12 justify-content-evenly ">
                    <!--Grid column-->
                    <div class="col-lg-2 col-md-8 mb-4 mb-md-0 text-start ">
                        <b class="text-uppercase text-primary text-start ">Shop</b>

                        <ul class="list-unstyled mb-0 text-start ">
                            <li>
                                <a class="text-decoration-none  text-light " href="#!">Sofas beds</a>
                            </li>
                            <li>
                                <a class="text-decoration-none  text-light " href="#!">Chairs</a>
                            </li>
                            <li>
                                <a class="text-decoration-none  text-light " href="#!">Office</a>
                            </li>
                            <li>
                                <a class="text-decoration-none  text-light " href="#!">rooms</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-2 col-md-6 mb-4 mb-md-0 text-start ">
                        <b class="text-uppercase text-primary ">Service</b>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a class="text-decoration-none  text-light " href="#!">Email Marketing</a>
                            </li>
                            <li>
                                <a class="text-decoration-none  text-light " href="#!">Campaings</a>
                            </li>
                            <li>
                                <a class="text-decoration-none  text-light " href="#!">Branding</a>
                            </li>
                            <li>
                                <a class="text-decoration-none  text-light " href="#!">Offine</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                        <b class="text-uppercase text-primary ">About</b>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a class="text-decoration-none  text-light " href="#!">Our Story</a>
                            </li>
                            <li>
                                <a class="text-decoration-none  text-light " href="#!">Benefits</a>
                            </li>
                            <li>
                                <a class="text-decoration-none  text-light " href="#!">Team</a>
                            </li>
                            <li>
                                <a class="text-decoration-none  text-light " href="#!">Careers</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                        <b class="text-uppercase text-primary ">Helps</b>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a class="text-decoration-none  text-light " href="#!">FAQs</a>
                            </li>
                            <li>
                                <a class="text-decoration-none  text-light " href="#!">Contect Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                        <b class="text-uppercase text-primary ">Contect Us</b>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a class="text-decoration-none text-light justify-content-between " href="#!">
                                    <i class='bx bxl-xing h2'></i>
                                    <i class='bx bxl-instagram h2'></i>
                                    <i class='bx bxl-facebook h2'></i>
                                </a>
                            </li>
                            <li>
                                <a class="text-decoration-none  text-light " href="#!"><Button
                                        class="btn btn-outline-light  ">Call US</Button></a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2020 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <script></script>
</body>

</html>
