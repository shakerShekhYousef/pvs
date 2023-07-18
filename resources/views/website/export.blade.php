@extends('layouts.website.base')
@section('pageTitle', 'EXPORT')
@section('custom-style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.css"
          integrity="sha512-aMup4I6BUl0dG4IBb0/f32270a5XP7H1xplAJ80uVKP6ejYCgZWcBudljdsointfHxn5o302Jbnq1FXsBaMuoQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
@endsection
@section('content')
    <div class="export-page">
        <div class="banner-export text-center">
            <div class="title d-inline-block"> Export</div>
        </div>
        <div class="intro-section intro-section1">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="content">
                            <h1 class="text-capitalize fw-bold mb-0 d-inline-block mb-3" id="global_head">Global Export & Sourcing for
                                Premium
                                Vehicles
                            </h1>
                            <h3 class="mb-4 text-capitalize">Luxury cars ready for export
                            </h3>
                            <p>At <b>PVS</b>, our mission is to provide our clients with the highest quality luxury vehicles
                                and exceptional export services, sourced from our strategic locations in Dubai, UAE and
                                Johannesburg, South Africa. Our team of dedicated professionals has extensive experience
                                in the automotive industry, ensuring a seamless and personalized experience for our
                                clients.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 co-bg p-0">
                    </div>
                </div>
            </div>
        </div>
        <div class="list-serv text-center position-relative">
            <div class="container">
                <h1 class="text-capitalize fw-bold mb-0 d-inline-block mb-5 "  id="services_head"> Our Comprehensive Services </h1>
                <div class="owl-carousel " id="carousel_export">
                    <div class="item">
                        <div class="box">
                            <div class="icon">
                                <img src="{{asset('assets/front/img/searching.png')}}"/>
                            </div>
                            <p class="text-capitalize">Vehicle Sourcing</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="icon">
                                <img src="{{asset('assets/front/img/Inspection.png')}}"/>
                            </div>
                            <p class="text-capitalize">Vehicle Inspection </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="icon">
                                <img src="{{asset('assets/front/img/maintenance.png')}}"/>
                            </div>
                            <p class="text-capitalize">Customization and Modification </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="icon">
                                <img src="{{asset('assets/front/img/shipping.png')}}"/>
                            </div>
                            <p class="text-capitalize">Logistics and Shipping </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="icon">
                                <img src="{{asset('assets/front/img/car-insurance.png')}}"/>
                            </div>
                            <p class="text-capitalize">Documentation and Compliance </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-section intro-section2">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-6">
                        <h1 class="text-capitalize fw-bold mb-0 d-inline-block mb-3"  id="special_head"><b>PVS</b> Special Projects –
                            Customized Solutions for Unique Requirements
                        </h1>
                        <h3 class="mb-4 text-capitalize">Customized luxury vehicles
                        </h3>
                        <p>At <b>PVS</b>, we recognize that our clients have diverse needs and preferences when it comes to
                            luxury vehicles. That's why we offer a dedicated Special Projects division, where we
                            collaborate with our sourcing and supplying partners to provide tailored solutions for
                            unique requirements.
                        </p>


                    </div>

                </div>
            </div>
        </div>
        <div class="list-serv list-serv2 text-center position-relative p-0">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-5 p-0 co-bg"></div>
                    <div class="col-md-7">
                        <h1 class="text-capitalize fw-bold mb-0 d-inline-block mb-5 "  id="special_projects_head"> Our Special Projects
                            Services </h1>
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="box mb-4">
                                    <div class="icon">
                                        <img src="{{asset('assets/front/img/jeep.png')}}"/>
                                    </div>
                                    <p class="text-capitalize">Off-Road Vehicles </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="box mb-4">
                                    <div class="icon">
                                        <img src="{{asset('assets/front/img/safari.png')}}"/>
                                    </div>
                                    <p class="text-capitalize">Safari Vehicles </p>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="box mb-4">
                                    <div class="icon">
                                        <img src="{{asset('assets/front/img/modification.png')}}"/>
                                    </div>
                                    <p class="text-capitalize">Vehicle Adaptation </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="box mb-4">
                                    <div class="icon">
                                        <img src="{{asset('assets/front/img/armored-vehicle.png')}}"/>
                                    </div>
                                    <p class="text-capitalize">Armored Vehicles </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="export-buttom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" style="text-align: center">
                    <a href="{{route('front.contact')}}" class="text-uppercase button-export">CONTACT US</a>
                </div>
            </div>
        </div>
    </div>

    @section('custom-script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
                integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $('#carousel_export').owlCarousel({
                interval: 0,
                items: 3,
                loop: true,
                margin: 20,
                nav: true,
                dots: false,
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
                        items: 2
                    },
                    700: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    },
                    1400: {
                        items: 4
                    }

                }
            })
        </script>
    @endsection
@endsection
