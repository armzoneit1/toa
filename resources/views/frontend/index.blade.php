<!doctype html>
<html lang="en">

<head>
    @include('frontend.inc_head')
</head>

<style>

@media screen and (max-width: 991px) {
.sticky-wrapper {
    display: none;
}
/* #col6 {
    flex: 0 0 auto;
    width: 90%;
} */

}
@media screen and (max-width: 765px) {
    #col6 {
    flex: 0 0 auto;
    width: 90%;
}
#col3 {
    flex: 0 0 auto;
    width: 5%;
}
.section-padding, .site-footer {
    padding-top: 45%;
    padding-bottom: 40%;
}

}
</style>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->

            <a href="{{ url('/home') }}" class="navbar-brand mx-auto mx-lg-0">
                <!-- <i class="bi-bullseye brand-logo"></i>
                    <span class="brand-text">Leadership <br> Event</span> -->
                <img class="logo-size" src="{{ asset('frontend/images/logo_toa.png') }}">
            </a>
            <!-- <ul class="navbar-nav ms-auto" id="menu-desk">
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_1">Audio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_2">Status</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_3">Log</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_4">Setting</a>
                </li>

            </ul> -->

            <!-- <a class="nav-link custom-btn btn d-lg-none" href="#">Buy Tickets</a> -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <i class="bi bi-three-dots-vertical" id="but-dots"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_1"><i class="bi bi-gear-fill"></i></a>
                    </li>

                    <!-- <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Speakers</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Schedules</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5">Pricing</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_6">Venue</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_7">Contact</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link custom-btn btn d-none d-lg-block" href="#">Buy Tickets</a>
                        </li> -->
                </ul>
                <div>

                </div>
    </nav>

    <main>



        <section class="about section-padding" id="section_2">
            <div class="container">
                <div class="row">


                    <div class="col-lg-4 col-4" id="col3">
                    </div>
                    <div class="col-lg-4 col-4" id="col6">
                        <div class="box-login">
                            <center><a href="{{ url('/home') }}"><img class="logo-log" src="{{ asset('frontend/images/logo_login.png') }}"></a></center>
                            {{-- <form action="{{ url('/overview') }}"> --}}
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">User</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="name" required>
                                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" required>
                                </div>
                                <!-- <div class="mb-3 form-check">
                                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div> -->
                                <center><a href="{{ url('/overview') }}" class="btn btn-primary but-log">LOGIN</a></center>
                            {{-- </form> --}}

                        </div>
                    </div>
                    <div class="col-lg-4 col-4" id="col3">
                    </div>

                </div>
            </div>
        </section>







    </main>

    <!-- <footer class="site-footer">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-12 col-12 border-bottom pb-5 mb-5">
                        <div class="d-flex">
                            <a href="index.php" class="navbar-brand">
                                <i class="bi-bullseye brand-logo"></i>
                                <span class="brand-text">Leadership <br> Event</span>
                            </a>

                            <ul class="social-icon ms-auto">
                                <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                                <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                                <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                                <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-7 col-12">
                        <ul class="footer-menu d-flex flex-wrap">
                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Our Story</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Code of Conduct</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Privacy and Terms</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Contact</a></li>
                        </ul>
                    </div>


                    <div class="col-lg-5 col-12 ms-lg-auto">
                        <div class="copyright-text-wrap d-flex align-items-center">
                            <p class="copyright-text ms-lg-auto me-4 mb-0">Copyright © 2022 Leadership Event Co., Ltd.

                            <br>All Rights Reserved.

          					<br><br>Design: <a title="CSS Templates" rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a></p>

                            <a href="#section_1" class="bi-arrow-up arrow-icon custom-link"></a>
                        </div>
                    </div>

                </div>
            </div>
        </footer> -->

    <!-- JAVASCRIPT FILES -->
    {{-- <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script> --}}

</body>

</html>
