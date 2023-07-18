@extends('layouts.website.base')
@section('pageTitle', 'URBAN')
@section('content')
    <!-- Urban Logo -->
    <div class="urban-top-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" style="text-align: center">
                    <img src="{{asset('assets/front/img/URBAN.png')}}" alt="urban-logo">
                </div>
            </div>
        </div>
    </div>
    <!-- Urban first section -->
    <div class="urban-first-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 co-content">
                    <p>Urban Automotive UAE understand that every customer is different, therefore we feel it is
                        essential to give customers the opportunity to purchase a car or make modifications to their
                        existing vehicle with enough flexibility to gain the result of individuality.</p><br>
                    <p>Whether it be custom wheels, carbon fibre trim, luxurious leather to suit your taste or a crazy
                        exterior colour change. Urban Automotive UAE has it covered.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Urban first title -->
    <div class="urban-first-title">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" style="text-align: center">
                    <marquee width="100%" direction="right" height="100px">
                        ROAD PRESENCE REDEFINED
                    </marquee>
                </div>
            </div>
        </div>
    </div>
    <!-- Urban second section -->
    <div class="urban-second-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 co-content">
                    <img src="{{asset('assets/front/img/urban-logo.svg')}}" alt="urban-logo">
                    <div class="col-md-12" style="text-align: center;padding-top: 3pc;">
                        <a href="https://urban-automotive.ae/" class="text-uppercase all">VISIT URBAN AUTOMOTIVE UAE WEBSITE</a>
                    </div>
                </div>
                <div class="col-md-6 p-0 co-bg"></div>
            </div>
        </div>
    </div>
    <!-- Urban second title -->
    <div class="urban-second-title">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" style="text-align: center">
                    <p>CREATORS OF THE WORLD'S MOST DISTINCTIVE MODIFIED VEHICLES</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Urban contact section -->
    <div class="urban-contact-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 p-0 co-bg"></div>
                <div class="col-md-6 co-content">
                    <div class="contact-us-urban mb-4">Contact Us</div>
                    <div class="contact-info">
                        <ul class="urban-contact-info">
                            <li>
                                <i class='bx bxs-time-five'></i>
                                <a href="tel:00971585848810">Tel: +971 58 584 8810</a>
                            </li>
                            <li>
                                <i class='bx bxs-location-plus'></i>
                                <a href="mailto:sales@urban-automotive.ae">Email: sales@urban-automotive.ae</a>

                            </li>
                            <li>
                                <i class='bx bxs-phone'></i>
                                <a href="https://urban-automotive.ae/">www.urban-automotive.ae</a>
                            </li>
                        </ul>
                    </div>
                    <div class="social-info">
                        <ul class="urban-social-media">
                            <li>
                                <a href="https://www.facebook.com/urbanautomotive.uae" target="_blank"><i
                                        style="font-size: 15px;right: 10px;position: relative;padding: 4px 7px 4px 6px;border: solid 1px;border-radius: 13px;"
                                        class="fab fa-facebook-f"></i>@urbanautomotive.uae</a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/urbanautomotive.ae/" target="_blank"><i
                                        style="font-size: 14px;right: 15px;position: relative;padding: 6px 6px 6px 6px;border: solid 1px;border-radius: 13px;"
                                        class="fab fa-instagram"></i>@urbanautomotive.ae</a>

                            </li>
                            <li>
                                <a href="https://www.youtube.com/@UrbanAutomotive" target="_blank"><i
                                        style="font-size: 14px;right: 25px;position: relative;padding: 6px 6px 6px 6px;border: solid 1px;border-radius: 13px;"
                                        class="fab fa-youtube"></i>@urbanautomotive</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

