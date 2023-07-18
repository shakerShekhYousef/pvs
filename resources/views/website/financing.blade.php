@extends('layouts.website.base')
@section('pageTitle','Financing')
@section('custom-style')
    <style>
        .button-reset,
        .button-result {
            color: #fff;
            background-color: transparent;
            border: 2px solid #ededed;
            padding: 10px 30px;
        }

        .button-result:hover,
        .button-reset:hover {
            background: #3253a1;
            border-color: #3253a1;
        }



        .inner-text {
            line-height: 5px;
        }

        /*********** Baseline, reset styles ***********/
        /* input[type="text"] {
            width: 73%;
        } */

        input[type="range"] {
            -webkit-appearance: none;
            appearance: none;
            background: transparent;
            cursor: pointer;
            width: 100%;
        }

        /* Removes default focus */
        input[type="range"]:focus {
            outline: none;
        }

        /******** Chrome, Safari, Opera and Edge Chromium styles ********/
        /* slider track */
        input[type="range"]::-webkit-slider-runnable-track {
            background-color: #3253a1;
            border-radius: 5.5rem;
            height: 0.5rem;
        }

        /* slider thumb */
        input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            /* Override default look */
            appearance: none;
            margin-top: -8px;
            /* Centers thumb on the track */
            background-color: #635f5f;
            border-radius: 18.5rem;
            height: 1.5rem;
            width: 1rem;
        }

        input[type="range"]:focus::-webkit-slider-thumb {
            outline: 3px solid #635f5f;
            outline-offset: 0.125rem;
        }

        /*********** Firefox styles ***********/
        /* slider track */
        input[type="range"]::-moz-range-track {
            background-color: #8ab3c1;
            border-radius: 5.5rem;
            height: 0.5rem;
        }

        /* slider thumb */
        input[type="range"]::-moz-range-thumb {
            background-color: #635f5f;
            border: none;
            /*Removes extra border that FF applies*/
            border-radius: 18.5rem;
            height: 1.5rem;
            width: 1rem;
        }

        input[type="range"]:focus::-moz-range-thumb {
            outline: 3px solid #635f5f;
            outline-offset: 0.125rem;
        }

        .wrapper__title {
            text-transform: capitalize;
            margin: 0 0 40px;
        }

        .calculator__row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 0 0 30px;
        }

        .calculator__row:last-child {
            margin-bottom: 0;
        }

        .calculator__row label {
            text-transform: capitalize;
            font-weight: 700;
        }

        /* .calculator__bill {
            width: 50%;
        } */

        .first_batch {
            width: 60%;
        }

        .monthly_installment {
            width: 60%;
        }

        .calculator__info {
            text-transform: capitalize;
            margin: 0;
        }
    </style>
@endsection
@section('content')
    <!-- start main content --->
    <div class="financ-page">
        <div class="banner-financ text-center">
            <div class="title d-inline-block">FINANCING</div>
        </div>
        <div class="container pt-5 text-center">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <h1 class="main text-capitalize fw-bold mb-0 d-inline-block mb-3">Speak To Us Today</h1>
                    <p>
                        <b>PVS</b> offer in partnership with major banking partners in the UAE finance options to suit your
                        needs. Your monthly payment is calculated on the selling price of the car minus your deposit
                        over a monthly term between 24 and 60 months dependant on the age and mileage of your new
                        vehicle.
                        With many years of experience in this field PVS understands the importance to offer products to
                        its clients that not only allow them to purchase their dream car, but also have the flexibility
                        to swop and change to fit in line with their career and lifestyle.
                        PVS will assist you all the way and manage the transaction from start to finish.
                        It’s what we do!
                    </p>
                </div>
            </div>
        </div>
        <div class="container pt-5">
            <div class="box-cal">
                <div class="row align-items-center">
                    <div class="col-md-7 col-sm-12 calculator_container">
                        <h5 class="mb-4">Calculate your monthly installment for Auto Finance</h5>
                        <form class="calculator">
                            <div class="calculator__row row">
                                <div class="col-lg-4 col-md-5 text-end"> <label for="bill">Enter car's price:</label>
                                </div>
                                <div class="col-lg-8 col-md-7"> <input type="number" id="bill"
                                                                       class="form-control calculator__bill" required width="100%" /></div>

                            </div>
                            <div class="calculator__row row">
                                <div class="col-lg-4 col-md-5 text-end">
                                    <label for="first_batch">Deposit: <span class="first-batch"></span></label>
                                </div>
                                <div class="col-lg-8 col-md-7">
                                    <input type="range" min="0" max="90" value="0" step="10" class="first_batch"
                                           id="first_batch" required />
                                </div>
                            </div>
                            <div class="calculator__row row">
                                <div class="col-lg-4 col-md-5 text-end">
                                    <label for="monthly_installment">Years: <span
                                            class="monthly-installment"></span></label>
                                </div>
                                <div class="col-lg-8 col-md-7">
                                    <input type="range" min="0" max="5" value="0" step="1" class="monthly_installment"
                                           id="monthly_installment" required />
                                </div>
                            </div>
                            <div class="calculator__row">
                                <button type="button" class="text-uppercase button-result">Submit</button>
                                <button type="button" class="button-reset text-uppercase">Reset</button>
                            </div>
                            <div class="calculator__row">
                                <h4 class="calculator__info">
                                    <span class="calculator__result"></span>
                                </h4>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 col-sm-12 list-fan text-center position-relative ">
                        <div class="inner">
                            <div class="row justify-content-center">
                                <div class=" col-6 ">
                                    <div class="mb-5">
                                        <div class="icon">
                                            <img src="{{asset('assets/front/img/calculator.png')}}" />
                                        </div>
                                        <div class="inner-text">
                                            <p class="text-capitalize" style="font-weight: bold">From 2.85 %</p>
                                            <p style="font-size: smaller;">Interest Rate</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-5">
                                        <div class="icon">
                                            <img src="{{asset('assets/front/img/time-left.png')}}" />
                                        </div>
                                        <div class="inner-text">
                                            <p class="text-capitalize" style="font-weight: bold">Instant</p>
                                            <p style="font-size: smaller;">Pre-Qualification</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-5">
                                        <div class="icon">
                                            <img src="{{asset('assets/front/img/calendar.png')}}" />
                                        </div>
                                        <div class="inner-text">
                                            <p class="text-capitalize" style="font-weight: bold">Upto 5 years</p>
                                            <p style="font-size: smaller;">Loan Tenure</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-5">
                                        <div class="icon">
                                            <img src="{{asset('assets/front/img/coin-stack.png')}}" />
                                        </div>
                                        <div class="inner-text">
                                            <p class="text-capitalize" style="font-weight: bold">From 15,000 AED</p>
                                            <p style="font-size: smaller;">Salary</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="container pt-5 ">
            <div class="row mt-5">
                <div class="col-lg-4  mb-4">
                    <div class="box">
                        <h2 class="text-capitalize ">employed</h2>
                        <ul class="m-0 list-unstyled">
                            <li>Salary Certificate</li>
                            <li>3 month bank statement (stamped)</li>
                            <li>Passport & Visa copies</li>
                            <li>Emirates ID copy</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="box ">
                        <h2 class="text-capitalize ">self employed</h2>
                        <ul class="m-0 list-unstyled">
                            <li>Trade License</li>
                            <li>MOA</li>
                            <li>Passport copies of all partners</li>
                            <li>Passport & Visa copies of applicant</li>
                            <li>Emirates ID</li>
                            <li>3 month personal bank statement</li>
                            <li>3 month company bank statement</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4  mb-4">
                    <div class="box ">
                        <h2 class="text-capitalize ">companies</h2>
                        <ul class="m-0 list-unstyled">
                            <li>Trade License</li>
                            <li>MOA</li>
                            <li>Passport copies of all partners</li>
                            <li>3 month company bank statement</li>
                        </ul>
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

    <!-- end main content --->

    @section('custom-script')
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script>
            $(document).ready(function () {
                // VARIABLES
                // ----------------------------------------------------------

                var amount, percent, result, first_batch, monthly_installment;
                var calculator = $(".calculator");
                var calculatorBill = calculator.find(".calculator__bill");
                var calculatorfirst_batch = calculator.find(".first_batch");
                var calculatormonthly_installment = calculator.find(
                    ".monthly_installment"
                );
                var first_batchAmount = calculator.find(".first-batch");
                var monthly_installmentAmount = calculator.find(".monthly-installment");
                var button_result = calculator.find("button-result");
                // RANGE FUNCTION
                // ----------------------------------------------------------
                calculatorBill.on("change", function () {
                    $(this).val();
                    first_batchAmount.text(calculatorfirst_batch.val() + "%");
                    amount = calculatorBill.val() * 1;
                    percent = calculatorfirst_batch.val() * 1;
                    first_batch = amount - amount * (percent / 100);
                    monthly_installmentValue = calculatormonthly_installment.val() * 1;
                });
                calculatorfirst_batch.on("change", function () {
                    if (
                        calculatorBill.val() === "" ||
                        isNaN(calculatorBill.val() || calculatorBill.val() == 0)
                    ) {
                        alert("Enter car's price, please!");
                    } else {
                        first_batchAmount.text(calculatorfirst_batch.val() + "%");
                        amount = calculatorBill.val() * 1;
                        percent = calculatorfirst_batch.val() * 1;
                        first_batch = amount - amount * (percent / 100);
                    }
                });
                calculatormonthly_installment.on("change", function () {
                    if (
                        calculatorBill.val() === "" ||
                        isNaN(calculatorBill.val() || calculatorBill.val() == 0)
                    ) {
                        alert("Enter car's price, please!");
                    } else {
                        monthly_installmentAmount.text(
                            calculatormonthly_installment.val() + " Year"
                        );
                        monthly_installmentValue = calculatormonthly_installment.val() * 1;
                        //result = first_batch / (12 * monthly_installmentValue);
                        $(".button-reset").click(function () {
                            $(".calculator__result").text("");
                            calculatormonthly_installment.val(0);
                            monthly_installmentAmount.text("");
                            calculatorBill.val(0);
                            calculatorfirst_batch.val(0);
                            first_batchAmount.text("");
                            monthly_installmentValue = 0;
                            first_batch = 0;
                            percent = 0;
                            result = 0;
                        });
                    }
                });
            });
            $(".button-result").click(getResult);

            //Get result
            function getResult() {
                //get monthly_installment
                first_batch_value = $(".first_batch").val();
                //get car price
                car_price_value = $(".calculator__bill").val();
                //get year
                year = $(".monthly_installment").val();
                //calculate
                if (
                    car_price_value === "" ||
                    isNaN(car_price_value) ||
                    car_price_value == 0
                ) {
                    alert("Enter car's price, please!");
                } else if (year == 0) {
                    alert("Enter year, please!");
                } else if (first_batch_value == 0) {
                    alert("Enter deposit, please!");
                } else if (first_batch_value == 0 && year == 0) {
                    alert("Enter deposit and year, please!");
                } else {
                    first_batch_final = car_price_value - car_price_value * (first_batch_value / 100);
                    result = first_batch_final / (12 * year);
                    $(".calculator__result").text(
                        "Monthly Installment: " + result.toFixed(2)
                    );
                }
            }
        </script>
    @endsection
@endsection
