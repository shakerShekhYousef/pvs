@extends('layouts.website.base')
@section('pageTitle', $car->title)
@section('custom-style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.css"
          integrity="sha512-aMup4I6BUl0dG4IBb0/f32270a5XP7H1xplAJ80uVKP6ejYCgZWcBudljdsointfHxn5o302Jbnq1FXsBaMuoQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
@endsection
@section('content')
    <div class="details-page">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-8">
                    <h4 class="fw-bold text-capitalize mb-2">{{$car->title}}</h4>
                    <p class="date mb-0">Posted {{$car->created_at->diffForHumans()}}</p>
                </div>
                <div class="col-md-4 text-end">
                    <h4 class="price fw-bold">{{set_price($car)}}</h4>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-8 mb-5">
                    <div class="carousel carousel-main" data-flickity='{"pageDots": false }'>
                        <div class="carousel-cell"><img src="{{asset('storage/'.$car->main_image)}}"/></div>
                        @foreach($images  as $image)
                            <div class="carousel-cell"><img src="{{asset('storage/'.$image->image_url)}}"/></div>
                        @endforeach
                    </div>
                    <div class="carousel carousel-nav"
                         data-flickity='{ "asNavFor": ".carousel-main", "contain": true, "pageDots": false }'>
                        <div class="carousel-cell"><img src="{{asset('storage/'.$car->main_image)}}"/></div>
                        @foreach($images  as $image)
                            <div class="carousel-cell"><img src="{{asset('storage/'.$image->image_url)}}"/></div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4">
                    <a href="{{'https://wa.me/'.set_contact($car)}}" target="_blank" class="num mb-4">
                        <i class="fab fa-whatsapp pulse"></i>
                        Enquire Now
                    </a>
                    <div class="box-num">
                        <h5 class="text-center">Vehicle overview </h5>
                        <div class="row justify-content-evenly border-bottom m-3 pb-3">
                            <div class="col-6">
                                <p class="mb-0">TRIM </p>
                            </div>
                            <div class="col-6">
                                <span>{{$car->model}}</span>
                            </div>

                        </div>
                        <div class="row justify-content-evenly  border-bottom m-3 pb-3">
                            <div class="col-6">
                                <p class="mb-0">YEAR </p>
                            </div>
                            <div class="col-6">
                                <span>{{$car->year}}</span>
                            </div>
                        </div>
                        <div class="row justify-content-evenly  border-bottom m-3 pb-3">
                            <div class="col-6">
                                <p class="mb-0">KILOMETERS </p>
                            </div>
                            <div class="col-6">
                                <span>{{number_format((double)$car->km)}}</span>
                            </div>
                        </div>
                        <div class="row justify-content-evenly  border-bottom m-3 pb-3">
                            <div class="col-6">
                                <p class="mb-0">REGIONAL SPECS </p>
                            </div>
                            <div class="col-6">
                                <span>{{$car->regional_specs}} </span>
                            </div>
                        </div>
                        <div class="row justify-content-evenly  m-3 pb-4">
                            <div class="col-6">
                                <p class="mb-0">WARRANTY </p>
                            </div>
                            <div class="col-6">
                                <span>{{$car->WARRANTY == 1 ? "YES" : "NO"}} </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-8">
                    <div class="info">
                        <h5 class="fw-bold">Additional Details </h5>
                        <div class="list border-bottom">
                            <div class="row pb-4 pt-4">
                                <div class="col-4">
                                    <p class="mb-0 fw-bold">Exterior Color</p>
                                </div>
                                <div class="col-7">
                                    <span class="fw-light">{{$car->color}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="list border-bottom">
                            <div class="row   pb-4 pt-4">
                                <div class="col-4">
                                    <p class="mb-0 fw-bold">Interior Color </p>
                                </div>
                                <div class="col-7">
                                    <span class="fw-light">{{$car->interior_color}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="list border-bottom">
                            <div class="row   pb-4 pt-4">
                                <div class="col-4">
                                    <p class="mb-0 fw-bold">No. of Cylinders </p>
                                </div>
                                <div class="col-7">
                                    <span class="fw-light">{{$car->no_cylinders}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="list border-bottom">
                            <div class="row   pb-4 pt-4">
                                <div class="col-4">
                                    <p class="mb-0 fw-bold">Transmission Type </p>
                                </div>
                                <div class="col-7">
                                    <span class="fw-light">{{$car->transmission_type}} Transmission </span>
                                </div>
                            </div>
                        </div>
                        <div class="list border-bottom">
                            <div class="row   pb-4 pt-4">
                                <div class="col-4">
                                    <p class="mb-0 fw-bold">Fuel Type </p>
                                </div>
                                <div class="col-7">
                                    <span class="fw-light">{{$car->fuel_type}} </span>
                                </div>
                            </div>
                        </div>
                        <div class="list border-bottom">
                            <div class="row   pb-4 pt-4">
                                <div class="col-4">
                                    <p class="mb-0 fw-bold">Extras </p>
                                </div>
                                <div class="col-7">
                                    <span class="fw-light">
                                        {{$car->extras}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="info" id="readmore">
                        <h5 class="fw-bold">Description </h5>
                        <div class="readmore__content">
                            <p>
                                {!! $car->description !!}
                            </p>
                        </div>
                        @if(strlen($car->description) > 300)
                            <button class="readmore__toggle" role="switch" aria-checked="true"
                                    style="border: none;background: transparent;color: #3253a1;">
                                Show more
                            </button>
                        @endif
                    </div>
                </div>
            </div>


        </div>
    </div>
    @section('custom-script')
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <script>
            class readMore {
                constructor() {
                    this.content = '.readmore__content';
                    this.buttonToggle = '.readmore__toggle';
                }

                bootstrap() {
                    this.setNodes();
                    this.init();
                    this.addEventListeners();
                }

                setNodes() {
                    this.nodes = {
                        contentToggle: document.querySelector(this.content)
                    };

                    this.buttonToggle = this.nodes.contentToggle.parentElement.querySelector(this.buttonToggle);
                }

                init() {
                    const {contentToggle} = this.nodes;

                    this.stateContent = contentToggle.innerHTML;
                    console.log(contentToggle.value);
                    if (this.stateContent.length > 300) {
                        contentToggle.innerHTML = `${this.stateContent.substring(0, 300)}...`;
                    }

                }

                addEventListeners() {
                    this.buttonToggle.addEventListener('click', this.onClick.bind(this))
                }

                onClick(event) {
                    const targetEvent = event.currentTarget;
                    const {contentToggle} = this.nodes

                    if (targetEvent.getAttribute('aria-checked') === 'true') {
                        targetEvent.setAttribute('aria-checked', 'false')
                        contentToggle.innerHTML = this.stateContent;
                        this.buttonToggle.innerHTML = 'Show less'

                    } else {
                        targetEvent.setAttribute('aria-checked', 'true')
                        contentToggle.innerHTML = `${this.stateContent.substring(0, 300)}...`
                        this.buttonToggle.innerHTML = 'Show more'
                    }
                }
            }


            const initReadMore = new readMore();
            initReadMore.bootstrap()
        </script>
    @endsection
@endsection
