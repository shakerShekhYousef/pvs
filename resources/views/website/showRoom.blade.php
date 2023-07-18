@extends('layouts.website.base')
@section('pageTitle', 'SHOWROOM')
@section('custom-style')
    <style>
        .more2 {
            color: #fff;
            padding: 9px 20px;
            border: 2px solid #fff;
            text-transform: uppercase;
        }
        .more2:hover {
            background: #3253a1;
            color: #fff;
            border: 2px solid #3253a1;
        }
    </style>
@endsection
@section('content')
    <div class="show">
        <div class="banner text-center">
            <div class="title d-inline-block">showRoom</div>
        </div>
        <!-- search section & sort -->
        <div class="search-section">
            <div class="container">
                <form action="{{route('front.car_search')}}" method="get">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-6">
                                    <select name="maker" id="maker"
                                            class="js-example-placeholder-single js-states form-control">
                                        <option selected value="null">Maker</option>
                                        @foreach($makers as $maker)
                                            <option value={{$maker->maker}}>{{$maker->maker}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4 col-sm-6 col-6">
                                    <select class="js-example-placeholder-single js-states form-control"
                                            name="model" id="model">
                                        <option selected value="null">Model</option>
                                    </select>
                                </div>
                                <div class="col-md-4 col-sm-12 col-btn">
                                    <button type="submit" class="btn btn-search">Search vehicles</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="row align-items-center row2">
                                <div class="col-md-3 col-sm-4 col-4 text-center">
                                    <label class="text-white">Sort By:</label>
                                </div>
                                <div class="col-md-6 col-sm-8 col-8 ">
                                    <select name="price_order"
                                            class="js-example-placeholder-single js-states form-control">
                                        <option value="desc"> Price - high to low</option>
                                        <option value="asc"> Price - low to high</option>
                                    </select>
                                </div>
                                <div class="col-md-3 d-lg-block d-md-block d-sm-none d-none text-end view">
                                    <div class="btn-group">
                                        <button type="button" class="tab-link border-0 bg-transparent current"
                                                data-div="list"
                                                title="List"><i class="fas fa-list"></i></button>
                                        <button type="button" class="tab-link border-0 bg-transparent " data-div="grid"
                                                title="Grid">
                                            <i
                                                class="fas fa-th"></i></button>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- list cars -->
        <div class="bg list con">
            <div class="container ">
                @foreach($cars as $car)
                    <!-- car -->
                    <div class="row row-car ">
                        <div class="col-lg-5 col-md-12">
                            <a href="{{route('front.details',[$car->maker,$car->model,$car->year,$car->slug])}}"><img
                                    src="{{asset('storage/'.$car->main_image)}}" alt="pvs-car"/></a>
                        </div>
                        <div class="col-lg-7 col-md-12">
                            <div class="row justify-content-between mb-4 align-items-center row-title ">
                                <div class="col-sm-8">
                                    <a href="{{route('front.details',[$car->maker,$car->model,$car->year,$car->slug])}}">
                                        <h4 class="fw-bold text-capitalize text-white mb-0">{{$car->maker}}  {{$car->model}}</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 text-end col-price">
                                    <div class="price d-inline-block">{{set_price($car)}}</div>
                                </div>
                            </div>

                            <div class="d-flex align-items-center mb-3 row-desc">
                                <h6 class="text-capitalize mb-0 fw-bold pe-1">year:</h6>
                                <p class="mb-0">{{$car->year}}</p>
                            </div>
                            <div class="d-flex align-items-center mb-3 row-desc">
                                <h6 class="text-capitalize mb-0 fw-bold pe-1">Kilometers:</h6>
                                <p class="mb-0">{{number_format((double)$car->km)}} Km</p>
                            </div>
                            <div class="text-end mt-4 row-more">
                                <a href="{{route('front.details',[$car->maker,$car->model,$car->year,$car->slug])}}"
                                   class="more"><i class="fal fa-tachometer-alt-slow me-1"></i>
                                    view full details</a>
                            </div>
                        </div>

                    </div>
                @endforeach
                {{ $cars->withQueryString()->links() }}
            </div>
        </div>
        <!-- end list car -->
        <!-- grid car -->
        <div class="bg grid con">
            <div class="container ">
                <div class="row">
                    @foreach($cars as $car)
                        <div class="col-md-6 mb-5">
                            <div class="box position-relative">
                                <img src="{{asset('storage/'.$car->main_image)}}"/>

                                <div class="content text-center">
                                    <div class="price">{{set_price($car)}}</div>
                                    <a href="{{route('front.details',[$car->maker,$car->model,$car->year,$car->slug])}}">
                                        <h4 class="text-white">{{$car->maker}} {{$car->model}}</h4>
                                    </a>

                                    <div class="d-flex justify-content-evenly align-items-center mb-3">
                                        <div class="d-flex align-items-center mb-2">
                                            <h6 class="text-capitalize mb-0 fw-bold pe-1">year:</h6>
                                            <p class="mb-0">{{$car->year}}</p>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <h6 class="text-capitalize mb-0 fw-bold pe-1">Kilometers:</h6>
                                            <p class="mb-0">{{number_format((double)$car->km)}} Km</p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center ">
                                        <a href="{{route('front.details',[$car->maker,$car->model,$car->year,$car->slug])}}"
                                           class="more2"
                                        ><i class="fal fa-tachometer-alt-slow me-1"></i>
                                            view full details</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                    {{ $cars->withQueryString()->links() }}
                </div>
            </div>
        </div>
    </div>
    @section('custom-script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script>
            $(".js-example-placeholder-single").select2({
                placeholder: "Select a state",

            });

        </script>
        <script>
            $('.tab-link').click(function () {
                var contClass = $(this).data('div');
                $('.con').hide().filter('.' + contClass).show()
            })
        </script>
        <script>
            $(document).ready(function () {
                $('.btn-group button ').click(function () {
                    $(' button ').removeClass("current");
                    $(this).addClass("current");
                });
            });
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).ready(function () {
                $('#maker').on('change', function (e) {
                    var maker = e.target.value;
                    $.ajax({
                        url: "{{ route('front.get_models') }}",
                        type: "POST",
                        data: {
                            maker: maker
                        },
                        success: function (data) {
                            $('#model').empty();
                            $.each(data.models, function (index, model) {
                                $('#model').append('<option value="' + model.model + '">' + model.model + '</option>');
                            })
                        }
                    })
                });
            });
        </script>
    @endsection
@endsection
