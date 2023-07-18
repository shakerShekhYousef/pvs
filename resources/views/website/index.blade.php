@extends('layouts.website.base')
@section('pageTitle', 'HOME')
@section('custom-style')
    <style>
        .eapps-instagram-feed-title-container {
            display: none !important;
        }

        .eapps-widget-toolbar {
            display: none !important;
        }

        .eapps-link {
            display: unset;
        }
    </style>
@endsection
@section('content')
    <!-- intro section -->
    <div class="intro position-relative">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="content ">
                        <h6 class="text-uppercase mb-3">Welcome to Prestige Vehicle Sourcing</h6>
                        <h1 class="text-capitalize fw-bold mb-0 d-inline-block">Premium Vehicle Marketing Service </h1>
                        <p class="mt-4 mb-5"><b>PVS</b> is an online showroom portal based in Dubai, United Arab Emirates. Let
                            <b>PVS</b> take control of
                            the sale of your vehicle and showcase it in front of buyers throughout the Middle East,
                            Africa and
                            the rest of the world. Get in contact with <b>PVS</b> and speak to one of our team so we can
                            explain our
                            process and how we can make the sale of your vehicle easier than ever.
                        </p>
                        <div style="text-align: center">
                            <a href="{{route('front.show_room')}}" class="text-uppercase all">View Online ShowRoom</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- about section -->
    <div class="about-section" id="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 p-0 co-bg"></div>
                <div class="col-md-6 co-content">
                    <div class="title mb-4 d-inline-block">about <b>PVS</b></div>
                    <p>In an ever-changing market, having an experienced team to help you on your journey will enable
                        peace of mind and ease with your next vehicle transaction. <b>PVS</b> are a British owned company built
                        on years on experience and an understanding of world class customer service and trust. Our
                        international team at <b>PVS</b> has been out together based on their wealth of customer experience and
                        passion for the automotive industry.
                    </p>
                    <div class="pt-5" style="text-align: center">
                        <a href="{{asset('PVS Brochure 2023.pdf')}}" download class="text-uppercase all">download PVS Brochure</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service section -->
    <div class="service-section text-center" id="services">
        <div class="img-top"></div>
        <div class="container">
            <div class="title mb-5 d-inline-block">services</div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="box">
                        <div class="icon">
                            <img src="{{asset('assets/front/img/camera.png')}}"/>
                        </div>
                        <h2>PHOTOGRAPH</h2>
                        <p><b>PVS</b> will come and appraise your vehicle and take professional photographs that will be used on all our online portals and social medial. The quality of the images is of utmost importance to market your vehicle correctly and give a true reflection to the condition.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box">
                        <div class="icon">
                            <img src="{{asset('assets/front/img/value.png')}}"/>
                        </div>
                        <h2>VALUE</h2>
                        <p>We agree on the price you want to return for your vehicle and complete all the documentation allowing <b>PVS</b> to manage the sale of your vehicle. <b>PVS</b> do not charge for this service neither do we charge any upfront costs.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box">
                        <div class="icon">
                            <img src="{{asset('assets/front/img/money-management.png')}}"/>
                        </div>
                        <h2>SELL</h2>
                        <p><b>PVS</b> will manage all qualified appointments to view your vehicle all the way to the sale. We will put the seller and the buyer together to complete the whole transaction from start to finish.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- recent section -->
    <div class="recent text-center">

        <div class="title mb-5 d-inline-block">recent cars</div>
        <div class="container">
            <div class="row">
                <!--                <div class="col-lg-2 "> <img src="{{asset('assets/front/img/h4_img1.jpg')}}" class="img-left" /></div>-->
                <div class="col-lg-12">
                    <div class="owl-carousel " id="carousel">
                        @foreach($cars as $car)
                            <div class="item">

                                <div class="box  position-relative">


                                    <a href="{{route('front.details',[$car->maker,$car->model,$car->year,$car->slug])}}">
                                        <img src="{{asset('storage/'.$car->main_image)}}"/></a>

                                    <div class="content">
                                        <div
                                            class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
                                            <a href="">
                                                <h2 class="text-white">{{$car->maker}} </h2>
                                            </a>
                                            <div class="price">{{set_price($car)}}</div>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="list">
                                                <h6 class="text-capitalize">year</h6>
                                                <p>{{$car->year}}</p>
                                            </div>
                                            <div class="list">
                                                <h6 class="text-capitalize">Kilometers</h6>
                                                <p>{{number_format((double)$car->km)}} Km</p>
                                            </div>
                                            <div class="list">
                                                <h6 class="text-capitalize">model</h6>
                                                <p>{{$car->model}}</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="{{route('front.show_room')}}" class="all text-uppercase">View Online ShowRoom</a>
            </div>
        </div>
    </div>
    <!-- contact section -->
    <div class="contact-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title text-center d-inline-block mb-4 title2">Book your car now with <b>PVS</b></div>
                    <br>
                    <div class="d-flex justify-content-center call-link">
                        <a href="tel: (+971) 058 562 8810"><i class="fas fa-phone-alt"></i>(+971) 058 562 8810</a>
                        <a href="mailto:info@pvsme.com"><i class="fas fa-envelope"></i> info@pvsme.com</a>
                    </div>
                    <br>
                    <div class="owl-carousel " id="carousel1">
                        <div class="item">
                            <a href="{{route('front.logo_search','mercedes')}}"><img
                                    src="{{asset('assets/front/img/logos/mercedes.png')}}"></a>
                        </div>
                        @foreach($logos as $logo)
                            <div class="item">
                                <a href="{{route('front.logo_search',$logo->maker)}}"><img src="{{asset($logo->url)}}"></a>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>

        </div>
    </div>
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <div class="elfsight-app-ddfa52a4-e6ae-4635-86ae-510c6ae555eb"></div>
    @section('custom-script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
                integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $('#carousel1').owlCarousel({
                interval: 0,
                items: 9,
                loop: true,
                autoplay: true,
                autoplayTimeout: 2000,
                responsive: {
                    0: {
                        items: 2
                    },
                    575: {
                        items: 2
                    },
                    600: {
                        items: 2
                    },
                    700: {
                        items: 4
                    },
                    1000: {
                        items: 6
                    }

                }
            })
            $('#carousel').owlCarousel({
                interval: 0,
                items: 3,
                loop: true,
                margin: 10,
                nav: true,
                navText: ['<a ><i class="fas fa-angle-left"></i></i></a>', '<a ><i class="fas fa-angle-right"></i></a>'],
                autoplay: false,
                autoplayTimeout: 2000,
                responsive: {
                    0: {
                        items: 1
                    },
                    575: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    700: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }

                }
            })
        </script>
        <script>
            var elems = document.getElementsByClassName('eapps-link');
            for (var i = 0; i < elems.length; i += 1) {
                elems[i].style.display = 'none';
            }
        </script>
    @endsection
@endsection
