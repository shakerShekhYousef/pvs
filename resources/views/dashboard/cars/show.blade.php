@extends('layouts.dashboard.base')
@section('pageTitle',$car->maker.' '.$car->model.' '.$car->year)
@section('custom-style')
    <style>
        .remove {
            /* display: block; */
            border: 1px solid;
            background-color: rgb(37 144 235);
            opacity: 0.7;
            background-size: cover;
            color: white;
            padding: 13px 20px 12px 20px;
            left: 33%;
            top: 37px;
            border-radius: 74px;
            text-align: center;
            cursor: pointer;
            position: absolute;
        }

        .remove:hover {
            opacity: 1;
            color: white;
        }

        .file-upload .file-upload-select {
            color: #dbdbdb;
            cursor: pointer;
            text-align: left;
            background: transparent;
            overflow: hidden;
            position: relative;
            border-radius: 6px;
        }

        .file-upload .file-upload-select .file-select-button {
            background: #007bff;
            padding: 0.275rem 1.75rem !important;
            display: inline-block;
            border-radius: 5px;
            color: aliceblue;
        }

        .file-upload .file-upload-select .file-select-name {
            display: none;
            padding: 10px;
        }

        .file-upload .file-upload-select:hover .file-select-button {
            background: #007bff;
            color: #ffffff;
            transition: all 0.2s ease-in-out;
            -moz-transition: all 0.2s ease-in-out;
            -webkit-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
        }

        .file-upload .file-upload-select input[type="file"] {
            display: none;
        }

        .wrapper .file-upload-multi {
            height: 130px;
            width: 130px;
            border-radius: 10px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 4px solid #FFFFFF;
            overflow: hidden;
            background-image: linear-gradient(to bottom, #2590EB 50%, #FFFFFF 50%);
            background-size: 100% 200%;
            transition: all 1s;
            color: #FFFFFF;
            font-size: 100px;
        }

        .wrapper .file-upload-multi input[type=file] {
            height: 200px;
            width: 200px;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            cursor: pointer;
        }

        .wrapper .file-upload-multi:hover {
            background-position: 0 -100%;
            color: #2590EB;
        }

        .grid-img {
            margin-right: 1rem;
            margin-bottom: 1rem;
        }

        .div-grid {
            overflow-x: scroll;
        }

        .div-grid-property {
            overflow-x: scroll;
        }

        .row-img {
            height: 9rem;
            overflow-y: scroll;
            overflow-x: hidden;
            padding-left: 0.5rem;
        }

        .btn {
            border-radius: 0.4rem !important;
        }

        .row-img::-webkit-scrollbar {
            width: 5px;
        }

        /* Track */
        .row-img::-webkit-scrollbar-track {
            background: #c5c5c5;
            border-radius: 8px;
        }

        /* Handle */
        .row-img::-webkit-scrollbar-thumb {
            background: #0275d8 !important;
            border-radius: 8px;
        }

        /* Handle on hover */
        .row-img::-webkit-scrollbar-thumb:hover {
            background: #0275d8 !important;
            border-radius: 8px;
        }

        #top-div {
            margin-left: 30px;
        }

        #img {
            width: 500px;
        }

        @media (max-width: 1024px) {
            #img {
                width: 100%;
            }

            .div-grid {
                overflow-x: scroll;
            }

            .div-grid-property {
                overflow-x: scroll;
            }
        }

        @media (max-width: 500px) {
            .center-text {
                text-align: center !important;
                justify-content: center !important;
            }

            .card-footer {
                text-align: center !important;
            }

            #img {
                width: 100%;
            }

            .div-grid {
                overflow-x: scroll;
            }

            .div-grid-property {
                overflow-x: scroll;
            }

            #top-div {
                margin-left: 0px;
                text-align: center
            }
        }

        .image-grid {
            box-shadow: 0 0 2px #0275d8, 0 2px 4px #0275d8 !important;
            border: 1px solid #0275d8;
            border-radius: 10px;
            width: 100%;
            height: 130px;
        }

        .div-grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
            grid-gap: 10px;
        }

        .div-grid-property {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
            grid-gap: 10px;
        }

        .image2 {
            background: #007bff;
            color: #fff;
            box-shadow: 0 0 2px #0275d8, 0 2px 4px #0275d8 !important;
            border: 1px solid #0275d8;
            border-radius: 10px;
            width: 130px;
            height: 130px;

        }

        .photo-title {
            color: #3d4040;
            font-weight: 400;
            font-family: 'SF-Pro-Text-Regular' !important;
        }

        #pac-input {
            z-index: 999;
            position: inherit;
            width: 100%;
            border: aliceblue;
            border-radius: 7px;
            padding: 12px;
        }
    </style>
    <!-- Plugin Css -->
    <link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title">
                                <h4 class="mb-0 font-size-18">Cars</h4>
                            </div>
                        </div>
                        <!-- end page title -->
                        <!-- Start Page-content-Wrapper -->
                        <div class="page-content-wrapper">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">{{$car->maker}} {{$car->model}} {{$car->year}}</h4>
                                            @include('layouts.dashboard.alerts')
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="mb-3 form-group">
                                                        <label class="form-label" for="maker">
                                                            Maker
                                                        </label>
                                                        <input type="text"
                                                               class="form-control @error('maker') is-invalid @enderror"
                                                               id="maker"
                                                               placeholder="Maker"
                                                               name="maker"
                                                               value="{{ $car->maker }}"
                                                               required>
                                                        @error('maker')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="mb-3 form-group">
                                                        <label class="form-label" for="model">
                                                            Model
                                                        </label>
                                                        <input type="text"
                                                               class="form-control @error('model') is-invalid @enderror"
                                                               id="model"
                                                               placeholder="Model"
                                                               name="model"
                                                               value="{{ $car->model }}"
                                                               required
                                                        >
                                                        @error('model')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="mb-3 form-group">
                                                        <label class="form-label" for="year">
                                                            Year
                                                        </label>
                                                        <input type="text"
                                                               class="form-control @error('year') is-invalid @enderror"
                                                               id="year"
                                                               placeholder="Year"
                                                               name="year"
                                                               value="{{ $car->year }}"
                                                               required
                                                        >
                                                        @error('year')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="mb-3 form-group">
                                                        <label class="form-label" for="km">
                                                            Km
                                                        </label>
                                                        <input type="text"
                                                               class="form-control @error('km') is-invalid @enderror"
                                                               id="km"
                                                               placeholder="Km"
                                                               name="km"
                                                               value="{{ $car->km }}"
                                                               required
                                                        >
                                                        @error('km')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Row -->
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3 form-group">
                                                        <label class="form-label" for="regional_specs">
                                                            Regional Specs
                                                        </label>
                                                        <input type="text"
                                                               class="form-control @error('regional_specs') is-invalid @enderror"
                                                               id="regional_specs"
                                                               placeholder="Regional Specs"
                                                               name="regional_specs"
                                                               value="{{ $car->regional_specs }}"
                                                               required>
                                                        @error('maker')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3 form-group">
                                                        <label class="form-label" for="color">
                                                            Color
                                                        </label>
                                                        <input type="text"
                                                               class="form-control @error('color') is-invalid @enderror"
                                                               id="color"
                                                               placeholder="Color"
                                                               name="color"
                                                               value="{{ $car->color }}"
                                                               required
                                                        >
                                                        @error('color')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3 form-group">
                                                        <label class="form-label" for="interior_color">
                                                            Interior Color
                                                        </label>
                                                        <input type="text"
                                                               class="form-control @error('interior_color') is-invalid @enderror"
                                                               id="interior_color"
                                                               placeholder="Interior Color"
                                                               name="interior_color"
                                                               value="{{ $car->interior_color }}"
                                                               required
                                                        >
                                                        @error('interior_color')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Row -->
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3 form-group">
                                                        <label class="form-label" for="no_cylinders">
                                                            No. of Cylinders
                                                        </label>
                                                        <input type="number"
                                                               min="1"
                                                               class="form-control @error('no_cylinders') is-invalid @enderror"
                                                               id="no_cylinders"
                                                               placeholder="No. of Cylinders"
                                                               name="no_cylinders"
                                                               value="{{ $car->no_cylinders }}"
                                                               required>
                                                        @error('no_cylinders')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3 form-group">
                                                        <label class="form-label" for="transmission_type">
                                                            Transmission Type
                                                        </label>
                                                        <div class="mb-3 row">
                                                            <div class="col-md-10">
                                                                <select name="transmission_type" class="form-select"
                                                                        aria-label="Default select example" required>
                                                                    <option selected disabled>Transmission Type</option>
                                                                    <option value="Manual"
                                                                        {{$car->transmission_type == "Manual" ? "selected" : ""}}
                                                                    >Manual
                                                                    </option>
                                                                    <option value="Automatic"
                                                                        {{$car->transmission_type == "Automatic" ? "selected" : ""}}>
                                                                        Automatic
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        @error('transmission_type')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3 form-group">
                                                        <label class="form-label" for="fuel_type">
                                                            Fuel Type
                                                        </label>
                                                        <input type="text"
                                                               class="form-control @error('fuel_type') is-invalid @enderror"
                                                               id="fuel_type"
                                                               placeholder="Fuel Type"
                                                               name="fuel_type"
                                                               value="{{ $car->fuel_type }}"
                                                               required
                                                        >
                                                        @error('fuel_type')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Row -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3 form-group">
                                                        <label class="form-label" for="price_aed">
                                                            Price AED
                                                        </label>
                                                        <input type="number"
                                                               class="form-control @error('price_aed') is-invalid @enderror"
                                                               id="price_aed"
                                                               placeholder="Price AED"
                                                               name="price_aed"
                                                               value="{{ $car->price_aed }}"
                                                               required>
                                                        @error('price_aed')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3 form-group">
                                                        <label class="form-label" for="whatsapp_uae">
                                                            Whatsapp UAE
                                                        </label>
                                                        <input type="text"
                                                               class="form-control @error('price_africa') is-invalid @enderror"
                                                               id="whatsapp_uae"
                                                               placeholder="Whatsapp UAE"
                                                               name="whatsapp_uae"
                                                               value="{{ $car->whatsapp_uae }}"
                                                               required
                                                        >
                                                        @error('whatsapp_uae')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Row -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3 form-group">
                                                        <label class="form-label" for="price_africa">
                                                            Price Africa
                                                        </label>
                                                        <input type="number"
                                                               class="form-control @error('price_africa') is-invalid @enderror"
                                                               id="price_africa"
                                                               placeholder=" Price Africa"
                                                               name="price_africa"
                                                               value="{{ $car->price_africa }}"
                                                               required>
                                                        @error('price_aed')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3 form-group">
                                                        <label class="form-label" for="whatsapp_africa">
                                                            Whatsapp Africa
                                                        </label>
                                                        <input type="text"
                                                               class="form-control @error('price_africa') is-invalid @enderror"
                                                               id="whatsapp_uae"
                                                               placeholder="Whatsapp Africa"
                                                               name="whatsapp_africa"
                                                               value="{{ $car->whatsapp_africa }}"
                                                               required
                                                        >
                                                        @error('whatsapp_africa')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Row -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3 form-group">
                                                        <label class="form-label" for="price_dealer_aed">
                                                            Price For Dealer (AED)
                                                        </label>
                                                        <input type="number"
                                                               class="form-control @error('price_dealer_aed') is-invalid @enderror"
                                                               id="price_dealer_aed"
                                                               placeholder="Price For Dealer (AED)"
                                                               name="price_dealer_aed"
                                                               value="{{ $car->price_dealer_aed }}"
                                                        >
                                                        @error('price_dealer_aed')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3 form-group">
                                                        <label class="form-label" for="price_dealer_africa">
                                                            Price For Dealer (Africa)
                                                        </label>
                                                        <input type="number"
                                                               class="form-control @error('price_dealer_africa') is-invalid @enderror"
                                                               id="price_dealer_africa"
                                                               placeholder="Price For Dealer (Africa)"
                                                               name="price_dealer_africa"
                                                               value="{{ $car->price_dealer_africa }}"
                                                        >
                                                        @error('price_dealer_africa')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Row -->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3 form-group">
                                                        <label class="form-label" for="extras">
                                                            Extras
                                                        </label>
                                                        <textarea name="extras"
                                                                  class="form-control @error('extras') is-invalid @enderror"
                                                                  rows="5"
                                                                  id="extras">{{$car->extras}}</textarea>
                                                        @error('extras')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Row -->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3 form-group">
                                                        <label class="form-label" for="title">
                                                            Title
                                                        </label>
                                                        <textarea name="title"
                                                                  class="form-control @error('title') is-invalid @enderror"
                                                                  rows="5"
                                                                  id="title">{{$car->title}}</textarea>
                                                        @error('title')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Row -->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3 form-group">
                                                        <label class="form-label" for="description">
                                                            Description
                                                        </label>
                                                        <textarea name="description"
                                                                  class="form-control @error('description') is-invalid @enderror"
                                                                  rows="5"
                                                                  id="description">{{$car->description}}</textarea>
                                                        @error('description')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Row -->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3 form-group">
                                                        <div class="form-check form-switch mb-3">
                                                            <input type="checkbox"
                                                                   class="form-check-input theme-choice"
                                                                   id="light-mode-switch"
                                                                   name="warranty"
                                                                {{$car->warranty === "0" ? "" : "checked"}}
                                                            />
                                                            <label class="form-check-label" for="light-mode-switch">Warranty</label>
                                                        </div>
                                                        @error('warranty')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Row -->
                                            <div class="row" id="image_container">
                                                <div class="col-lg-6">
                                                    <div class="mb-3 form-group">
                                                        <label class="form-label" for="image_photo">
                                                            Image
                                                        </label>
                                                        <input type="file"
                                                               accept="image/png, image/jpeg, image/png, image/gif"
                                                               class="form-control" id="image_select" name="image">
                                                        <button style="margin-top: 5px" type="button"
                                                                id="remove_image_button"
                                                                class="btn btn-sm btn-link p-0 display-none">
                                                            Remove image
                                                        </button>
                                                    </div>
                                                </div>
                                                @if ($car->main_image)
                                                    <img src="{{ asset('storage/'.$car->main_image) }}"
                                                         id="image_preview" class="img-fluid col-md-6"
                                                         style="width: 132px">
                                                @endif
                                            </div>
                                            <!-- End Row -->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3 form-group">
                                                        <label class="form-label" for="car_images">
                                                            Car Images
                                                        </label>
                                                        <div class="row row-img">
                                                            <div class="div-grid">
                                                                <div class="grid-img">
                                                                    <div class="wrapper">
                                                                        <div class="file-upload-multi">
                                                                            <input name="car_images[]" id="files"
                                                                                   type="file" multiple/>
                                                                            <i class="fa fa-plus"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @if($car->images)
                                                                    @foreach($car->images as $image)
                                                                        <div
                                                                            class="img-thumb-wrapper grid-img card shadow"
                                                                            style="width: 100%">
                                                                            <img class="img-thumb image-grid"
                                                                                 src="{{asset('storage/'.$image->image_url)}}"
                                                                                 title=""/>
                                                                            <span id="remove_car_images"
                                                                                  data-id="{{$image->id}}"
                                                                                  data-url="{{route('delete_car_image')}}"
                                                                                  class="remove">
                                                                            <i class="fa fa-trash"></i>
                                                                        </span>
                                                                        </div>
                                                                    @endforeach
                                                                @endif
                                                            </div>
                                                        </div>
                                                        @error('car_images')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Card -->
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- end row -->

                        </div>
                        <!-- End Page-content -->

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                © {{date('Y')}}
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->
            @section('custom-script')
                <!-- validation init -->
                <script src="{{asset('assets/js/pages/form-validation.init.js')}}"></script>
                <!-- Image js -->
                <script src="{{asset('assets/dashboard/js/pages/cars/upload_image.js')}}"></script>
                <!-- parsley plugin -->
                <script src="{{asset('assets/libs/parsleyjs/parsley.min.js')}}"></script>
                <script>
                    $(function () {
                        $('#validation-form').validate({
                            errorElement: 'span',
                            errorPlacement: function (error, element) {
                                error.addClass('invalid-feedback');
                                element.closest('.form-group').append(error);
                            },
                            highlight: function (element, errorClass, validClass) {
                                $(element).addClass('is-invalid');
                            },
                            unhighlight: function (element, errorClass, validClass) {
                                $(element).removeClass('is-invalid');
                            }
                        });
                    });
                </script>
                <script>
                    $(document).ready(function () {
                        if (window.File && window.FileList && window.FileReader) {
                            $("#files").on("change", function (e) {
                                var files = e.target.files,
                                    filesLength = files.length;
                                for (var i = 0; i < filesLength; i++) {
                                    var f = files[i]
                                    var fileReader = new FileReader();
                                    fileReader.onload = (function (e) {
                                        var file = e.target;
                                        $("<div class=\"img-thumb-wrapper grid-img card shadow\" style=\"width: 100%\">" +
                                            "<img class=\"img-thumb image-grid\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                                            "<span class=\"remove\"><i class=\"fa fa-trash\"></i></span>" +
                                            "</div>").appendTo(".div-grid");
                                        $(".remove").click(function () {
                                            $(this).parent(".img-thumb-wrapper").remove();
                                        });

                                    });
                                    fileReader.readAsDataURL(f);
                                }
                            });
                        } else {
                            alert("Your browser doesn't support to File API")
                        }
                        $(".remove").click(function () {
                            $(this).parent(".img-thumb-wrapper").remove();
                        });
                    });
                </script>
                <!-- delete car image -->
                <script src="{{asset('assets/dashboard/js/pages/cars/remove_images.js')}}"></script>

@endsection
@endsection
