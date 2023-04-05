<!DOCTYPE html>
<html lang="{{__('language')['lang']}}" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Lavor</title>
    <meta name="keywords" content="{{__('language')['keywords']}}">
    <meta name="robots" content="follow">
    <meta name="title" content="Lavor">
    <meta name="copyright" content="Blinke">
    <meta name="author" content="Blinke">
    <meta name="twitter:description" content="{{__('language')['description']}}">
    <meta name="twitter:card" content="summary">
    <meta property="og:image" content="assets/img/logos/lavor.png">
    <meta name="description" content="{{__('language')['name']}}">
    <meta property="og:type" content="website">
    <meta name="twitter:image" content="assets/img/logos/lavor.png">
    <meta name="twitter:title" content="Lavor">


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="vendors/prism/prism.css" rel="stylesheet">
    <link href="vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/theme.css" rel="stylesheet" />
    <link href="assets/css/user.css" rel="stylesheet" />
    <link href="assets/css/notification.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"/>

    <script src="assets/js/news.js"></script>

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="/"><img src="assets/img/logos/lavor-light.png" alt="" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-solid fa-bars text-white fs-3"></i></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <div>
                    <div class="container flex justify-center mx-auto">
                        <div x-data="{ open: false }" @mouseleave="open = false" class="relative">
                            <!-- Dropdown toggle button -->
                            <button @mouseover="open = true" style="background: none;border: none; align-items: center; display: flex;" class="flex items-center block rounded-md ">
                                <span><span class='fi fi-{{__('language')['name']}}'></span></span>
                                <svg class="w-6 h-6 text-white text-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>

                            <!-- Dropdown menu -->
                            <div style="position: absolute; right: 0px; display: block;" x-show="open"
                            x-transition:enter.duration.500ms
                            x-transition:leave.duration.800ms
                            class="absolute right-0 rounded-md shadow-xl">
                                <a href="{{ __('language')['selector']['first']['url'] }}"
                                    class="hover:text-white">
                                    <span class='fi fi-{{ __('language')['selector']['first']['name'] }}'></span>
                                </a>
                                <a href="{{ __('language')['selector']['second']['url'] }}"
                                    class="hover:text-white">
                                    <span class='fi fi-{{ __('language')['selector']['second']['name'] }}'></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
              </li>
              <li class="nav-item"><a class="nav-link active" aria-current="page" href="#home">{{__('navbar')['home']}}</a></li>
              <li class="nav-item"><a class="nav-link" aria-current="page" href="#about">{{__('navbar')['about']}}</a></li>
              <li class="nav-item"><a class="nav-link" aria-current="page" href="#know">{{__('navbar')['know']}}</a></li>
              {{-- <li class="nav-item mt-2 mt-lg-0"><a class="nav-link btn btn-light text-black w-md-25 w-50 w-lg-100" aria-current="page" href="/login">{{__('navbar')['login']}}</a></li> --}}
            </ul>
          </div>
        </div>
      </nav>
      <div class="bg-dark"><img class="img-fluid position-absolute end-0" src="assets/img/hero/hero-bg.png" alt="" />


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section id="home">

          <div class="container">
            <div class="row align-items-center py-lg-8 py-6">
              <div class="col-lg-6 text-center text-lg-start">
                <h1 class="text-white fs-5 fs-xl-6">{{__('hero')['title']}}</h1>
                <p class="text-white py-lg-3 py-2">{{__('hero')['subtitle']}}</p>
                <div class="d-sm-flex align-items-center gap-3">
                  <button onclick="window.location.href='https://github.com/MaximoBrandi/lavor'" class="btn btn-success text-black mb-3 w-75">{{__('hero')['deploy']}}</button>
                  {{-- <button onclick="window.location.href='https://www.youtube.com/watch?v=dBooZX3J0Qc'" class="btn btn-outline-light mb-3 w-75">{{__('hero')['know']}}</button> --}}
                </div>
              </div>
              <div class="col-lg-6 text-center text-lg-end mt-3 mt-lg-0"><img class="img-fluid" src="assets/img/hero/hero-graphics.png" alt="" /></div>
            </div>
            <div class="swiper">
              <div class="swiper-container swiper-shadow swiper-theme" data-swiper='{"slidesPerView":2,"breakpoints":{"640":{"slidesPerView":2,"spaceBetween":20},"768":{"slidesPerView":4,"spaceBetween":40},"992":{"slidesPerView":5,"spaceBetween":40},"1024":{"slidesPerView":4,"spaceBetween":50},"1025":{"slidesPerView":6,"spaceBetween":50}},"spaceBetween":10,"grabCursor":true,"pagination":{"el":".swiper-pagination","clickable":true},"loop":true,"freeMode":true,"autoplay":{"delay":2500,"disableOnInteraction":false}}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide text-center"><img src="assets/img/logos/lavor-light.png" alt="" /></div>
                  <div class="swiper-slide text-center"><img src="assets/img/logos/tripl-light.png" alt="" /></div>
                  <div class="swiper-slide text-center"><img src="assets/img/logos/larn-light.png" alt="" /></div>
                  <div class="swiper-slide text-center"><img src="assets/img/logos/lavor-light.png" alt="" /></div>
                  <div class="swiper-slide text-center"><img src="assets/img/logos/tripl-light.png" alt="" /></div>
                  <div class="swiper-slide text-center"><img src="assets/img/logos/larn-light.png" alt="" /></div>
                </div>
              </div>
            </div>
          </div>
          <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


      </div>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section id="about">

        <div class="container">
          <p class="text-center fs-1">{{__('services')['pretitle']}}</p>
          <h2 class="mx-auto text-center fs-lg-6 fs-md-5 w-lg-75">{{__('services')['title']}}</h2>
          <div class="row gx-xl-7 mt-5">
            <div class="col-md-4 mb-6 mb-md-0 text-center text-md-start"><img style="border-radius: 25px" class="w-50 w-md-100" src="assets/img/services/1.png" alt="" />
              <h4 class="mt-3 my-1">{{__('services')['items']['first']['title']}}</h4>
              <p class="fs-1 mb-0">{{__('services')['items']['first']['subtitle']}}</p><a class="text-dark fs-1 pb-2 fw-bold border-black border-bottom text-decoration-none" href="/{{__('language')['lang']}}/larn">{{__('services')['explore']}}<i class="fa-solid fa-arrow-right ms-2"></i></a>
            </div>
            <div class="col-md-4 mb-6 mb-md-0 text-center text-md-start"><img style="border-radius: 25px" class="w-50 w-md-100" src="assets/img/services/2.png" alt="" />
              <h4 class="mt-3 my-1">{{__('services')['items']['second']['title']}}</h4>
              <p class="fs-1 mb-0">{{__('services')['items']['second']['subtitle']}}</p><a class="text-dark fs-1 pb-2 fw-bold border-black border-bottom text-decoration-none" href="/{{__('language')['lang']}}/tripl">{{__('services')['explore']}}<i class="fa-solid fa-arrow-right ms-2"></i></a>
            </div>
            <div class="col-md-4 mb-6 mb-md-0 text-center text-md-start"><img style="border-radius: 25px" class="w-50 w-md-100" src="assets/img/services/3.png" alt="" />
              <h4 class="mt-3 my-1">{{__('services')['items']['third']['title']}}</h4>
              <p class="fs-1 mb-0">{{__('services')['items']['third']['subtitle']}}</p><a class="text-dark fs-1 pb-2 fw-bold border-black border-bottom text-decoration-none" href="/{{__('language')['lang']}}/lavor">{{__('services')['explore']}}<i class="fa-solid fa-arrow-right ms-2"></i></a>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>

        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 text-center text-lg-start"><img style="border-radius: 25px" class="img-fluid" src="assets/img/offer/1.png" alt="" /></div>
            <div class="col-lg-6">
              <h1 class="fs-xl-5 fs-lg-4 fs-3">{{__('calltofirst')['title']}}</h1>
              <ul class="list-unstyled my-xl-5 my-3">
                <li class="fs-2 my-4 d-flex align-items-center gap-3 text-black"><i class="fa-solid fa-circle-check fs-4 text-dark"></i><span>{{__('calltofirst')['first']}}</span></li>
                <li class="fs-2 my-4 d-flex align-items-center gap-3 text-black"><i class="fa-solid fa-circle-check fs-4 text-dark"></i><span>{{__('calltofirst')['second']}}</span></li>
                <li class="fs-2 my-4 d-flex align-items-center gap-3 text-black"><i class="fa-solid fa-circle-check fs-4 text-dark"></i><span>{{__('calltofirst')['third']}}</span></li>
              </ul>
              <button onclick="window.location.href='https://praendi.ar/lavor-profesores'" class="btn btn-dark">{{__('calltofirst')['start']}}</button>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-8 pt-lg-0">

        <div class="container">
          <div class="d-flex flex-column-reverse flex-lg-row">
            <div class="col-lg-6">
              <h1 class="fs-lg-4 fs-md-3 fs-xl-5 mb-5">{{__('calltosecond')['title']}}</h1>
              <ul class="list-unstyled">
                <li class="fs-2 shadow-sm offer-list-item"><i class="fa-solid fa-leaf fs-lg-4 fs-3"></i><span>{{__('calltosecond')['first']}}</span></li>
                <li class="fs-2 shadow-sm offer-list-item"><i class="fa-solid fa-eye fs-lg-4 fs-3"></i><span>{{__('calltosecond')['second']}}</span></li>
                <li class="fs-2 shadow-sm offer-list-item"><i class="fa-solid fa-sun fs-lg-4 fs-3"></i><span>{{__('calltosecond')['third']}}</span></li>
              </ul>
            </div>
            <div class="col-lg-6 text-center text-lg-end"><img style="border-radius: 25px" class="img-fluid" src="assets/img/offer/2.png" alt="" /></div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>

        <div class="container" id="know"><img class="img-fluid" style="border-radius: 25px" src="assets/img/offer/3.png" alt="" />
          <div class="row mt-5 align-items-center">
            <div class="col-md-6">
              <h2 class="fs-md-4 fs-3 pt-3">{{__('faq')['title']}}</h2>
            </div>
            <div class="col-md-6">
              <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item"></div>
                <h2 class="accordion-header border-bottom" id="srgdgfdgdgg45">
                  <button class="accordion-button collapsed text-black" type="button" data-bs-toggle="collapse" data-bs-target="#srgdgfdgdgg45tyuu" aria-expanded="false" aria-controls="srgdgfdgdgg45"><span class="fs-1 pe-3">{{__('faq')['items']['first']['title']}}</span></button>
                </h2>
                <div class="accordion-collapse collapse" aria-labelledby="srgdgfdgdgg45" data-bs-parent="#accordionFlushExample" id="srgdgfdgdgg45tyuu">
                  <div class="accordion-body">
                    <p class="mb-0">{{__('faq')['items']['first']['content']}}</p>
                  </div>
                </div>
                <div class="accordion-item"></div>
                <h2 class="accordion-header border-bottom" id="sxvdgrfhfh276">
                  <button class="accordion-button collapsed text-black" type="button" data-bs-toggle="collapse" data-bs-target="#srgdgfdgdgg45tyuu5ghj" aria-expanded="false" aria-controls="sxvdgrfhfh276"><span class="fs-1 pe-3">{{__('faq')['items']['second']['title']}}</span></button>
                </h2>
                <div class="accordion-collapse collapse" aria-labelledby="sxvdgrfhfh276" data-bs-parent="#accordionFlushExample" id="srgdgfdgdgg45tyuu5ghj">
                  <div class="accordion-body">
                    <p class="mb-0">{{__('faq')['items']['second']['content']}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section>

      <div class="container bg-dark overflow-hidden rounded-1">
        <div class="bg-holder" style="background-image:url(assets/img/promo/promo-bg.png);">
        </div>
        <!--/.bg-holder-->

        <div class="px-5 py-7 position-relative">
          <h1 class="text-center w-lg-75 mx-auto fs-lg-6 fs-md-4 fs-3 text-white">{{__('newsletter')['title']}}</h1>
          <div class="row justify-content-center mt-5">
            <div class="col-auto w-100 w-lg-50">
              <input id="newsletter" class="form-control mb-2 border-light fs-1" type="email" placeholder="Email" />
            </div>
            <div class="col-auto mt-2 mt-lg-0">
              <button onclick="newsletterfunct('{{csrf_token()}}')" class="btn btn-success text-dark fs-1">{{__('newsletter')['submit']}}</button>
            </div>
          </div>
        </div>
      </div>
      <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-0">

      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-6 col-sm-12"><a href="/"><img class="img-fluid mt-5 mb-4" src="assets/img/logos/lavor.png" alt="" /></a>
            <p class="w-lg-75 text-gray">{{__('footer')['description']}}</p>
          </div>
          <div class="col-lg-2 col-sm-4">
            <h3 class="fw-bold fs-1 mt-5 mb-4">{{__('footer')['items']['first']['title']}}</h3>
            <ul class="list-unstyled">
              <li class="my-3 col-md-4"><a href="#">{{__('footer')['items']['first']['items']['first']}}</a></li>
              <li class="my-3"><a href="#">{{__('footer')['items']['first']['items']['second']}}</a></li>
              <li class="my-3"><a href="#">{{__('footer')['items']['first']['items']['third']}}</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-sm-4">
            <h3 class="fw-bold fs-1 mt-5 mb-4">{{__('footer')['items']['second']['title']}}</h3>
            <ul class="list-unstyled">
              <li class="my-3"><a href="#">{{__('footer')['items']['second']['items']['first']}}</a></li>
              <li class="my-3"><a href="#">{{__('footer')['items']['second']['items']['second']}}</a></li>
              <li class="my-3"><a href="#">{{__('footer')['items']['second']['items']['third']}}</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-sm-4">
            <h3 class="fw-bold fs-1 mt-5 mb-4">{{__('footer')['items']['third']['title']}}</h3>
            <ul class="list-unstyled">
              <li class="mb-3"><a href="#">{{__('footer')['items']['third']['items']['first']}}</a></li>
              <li class="mb-3"><a href="#">{{__('footer')['items']['third']['items']['second']}}</a></li>
              <li class="mb-3"><a href="#">{{__('footer')['items']['third']['items']['third']}}</a></li>
            </ul>
          </div>
        </div>
        <p class="text-gray">2023 <a href="https://blinke.maximoprandi.tech">Blinke</a></p>
      </div>
      <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/anchorjs/anchor.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/prism/prism.js"></script>
    <script src="vendors/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/notification.var.js"></script>

  </body>

</html>
