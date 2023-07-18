@extends('layouts.website.base')
@section('pageTitle', 'CONTACT US')
@section('content')
    <div class="contact-page">
        <div class="container">
            <div class="box mb-5">
                @include('layouts.website.alerts')
                <div class="row">
                    <div class="col-lg-7 co-form">
                        <h3 class="text-center fw-bold text-white mb-4 mt-4">Contact Us Today</h3>
                        <form action="{{route('front.contact_us')}}" method="post">
                            @csrf
                            @method("POST")
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <input type="text"
                                           class="form-control @error('password_confirmation') is-invalid @enderror"
                                           placeholder="First Name" name="first_name"
                                           required/>
                                </div>
                                <div class="col-md-6">
                                    <input type="text"
                                           class="form-control @error('password_confirmation') is-invalid @enderror"
                                           placeholder="Last Name" name="last_name"
                                           required/>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <input type="text"
                                           class="form-control @error('password_confirmation') is-invalid @enderror"
                                           placeholder="Telephone" name="phone"
                                           required/>
                                </div>
                                <div class="col-md-6">
                                    <input type="text"
                                           class="form-control @error('password_confirmation') is-invalid @enderror"
                                           placeholder="Email" name="email" required/>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <textarea type="text"
                                              class="form-control @error('password_confirmation') is-invalid @enderror"
                                              placeholder="Message"
                                              name="message"></textarea>
                                </div>
                            </div>
                            <button type="submit">submit</button>
                        </form>
                    </div>
                    <div class="col-lg-5 co-info">
                        <div class="text-center">
                            <img src="{{asset('assets/front/img/logo.svg')}}"/>
                        </div>
                        <ul class="list-unstyled text-center mt-4">
                            <li>
                                <p>Tel :</p>
                                <a href="tel: (+971) 058 562 8810">
                                    (+971) 058 562 8810</a>
                            </li>
                            <li>
                                <p> WhatsApp : </p>
                                <a href="https://wa.me/message/RZFCMAH6LXATJ1" target="_blank">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </li>
                            <li>
                                <p> Email :</p>
                                <a href="mailto:info@pvsme.com">
                                    info@pvsme.com
                                </a>
                            </li>
                            <li>
                                <p> Social Media</p>
                                <a href="https://www.facebook.com/pvs.hub" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://www.instagram.com/pvs.hub" target="_blank"><i
                                        class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 ">
                    <h4 class="text-white mb-4">Opening Times</h4>
                    <div class="row">
                        <div class="col-4">
                            <p>Monday</p>
                        </div>
                        <div class="col-8">
                            <p>9:00am - 7:00pm</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p>Tuesday</p>
                        </div>
                        <div class="col-8">
                            <p>9:00am - 7:00pm</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p>Wednesday</p>
                        </div>
                        <div class="col-8">
                            <p>9:00am - 7:00pm</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p>Thursday</p>
                        </div>
                        <div class="col-8">
                            <p>9:00am - 7:00pm</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p>Friday</p>
                        </div>
                        <div class="col-8">
                            <p>9:00am - 7:00pm</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p>Saturday</p>
                        </div>
                        <div class="col-8">
                            <p>APPOINTMENT ONLY</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p>Sunday</p>
                        </div>
                        <div class="col-8">
                            <p>APPOINTMENT ONLY</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.4619728598745!2d55.268366614285085!3d25.187638638270744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f682d28339af7%3A0x383e4374df1e942!2sBlue%20Bay%20Tower%20-%20Business%20Bay%20-%20Dubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sde!4v1679528960187!5m2!1sen!2sde"
                        width="600" height="450" style="border:0;width: 90%;height: 95%;" allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
