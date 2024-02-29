@extends('layouts.app')
@section("title","Production One")
@push('vendor-css')

@endpush
@push('page-css')
    <style>
        .heading {
            background-color: #f8ebbf;
        }

        #heading_row {
            background-color: #f8ebbf;
        }

        input {
            width: 55px
        }

        .penalty {
            background-color: rgb(13 110 253 / 13%);
            height: 100vh;
            width: 100%;
            z-index: 100;
            position: absolute;
            top: 0;
            left: 0;
            display: none;
        }

        .mainView {
            margin-left: 10%;
            margin-right: 10%;
            height: 100vh;
            overflow: scroll;
        }

        .mainView::-webkit-scrollbar {
            display: none;
        }

        .penalty h1 {
            color: red;
        }

        @media only screen and (max-width: 1030px) {
            .text_cm th, .text_cm td {
                font-size: 15.2px;
            }

            .align-items-center span {
                font-size: 14px;
            }
        }
    </style>
@endpush

@section('content')
    <div class="container">
        <div class="row mainView">
            <h2 class="text-center m-5">
                <span class="border border-dark px-4 py-2">Production One</span>
            </h2>
            <div class="col-sm-6 col-md-6 col-sm-12">
                <div class="mb-3 d-flex justify-content-between">
                <span class="me-3 fw-normal"># Correct Answer
                    <input class="ms-3 me-3" type="number">
                </span>
                    <span class="me-3 fw-normal">Time Remaining
                    <div class="countdown"></div>
                    <input class="ms-4" type="time">
                </span>
                </div>
                <table class="table table-borderless table-responsive">
                    <thead>
                    <tr class="heading">
                        <th scope="col"></th>
                        <th scope="col">Box 1</th>
                        <th scope="col">Box 2</th>
                        <th scope="col">Box 3</th>
                        <th scope="col">Box 4</th>
                        <th scope="col">Box 5</th>
                        <th scope="col">Box 6</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th id="heading_row" scope="row">Page 1</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="1_1" id="1_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="1_2" id="1_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="1_3" id="1_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="1_4" id="1_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="1_5" id="1_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="1_6" id="1_6"></td>
                    </tr>
                    <tr>
                        <th id="heading_row" scope="row">Page 2</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="2_1" id="2_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="2_2" id="2_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="2_3" id="2_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="2_4" id="2_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="2_5" id="2_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="2_6" id="2_6"></td>
                    </tr>
                    <tr>
                        <th id="heading_row" scope="row">Page 3</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="3_1" id="3_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="3_2" id="3_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="3_3" id="3_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="3_4" id="3_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="3_5" id="3_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="3_6" id="3_6"></td>
                    </tr>
                    <tr>
                        <th id="heading_row" scope="row">Page 4</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="4_1" id="4_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="4_2" id="4_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="4_3" id="4_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="4_4" id="4_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="4_5" id="4_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="4_6" id="4_6"></td>
                    </tr>
                    <tr>
                        <th id="heading_row" scope="row">Page 5</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="5_1" id="5_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="5_2" id="5_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="5_3" id="5_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="5_4" id="5_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="5_5" id="5_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="5_6" id="5_6"></td>
                    </tr>
                    <tr>
                        <th id="heading_row" scope="row">Page 6</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="6_1" id="6_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="6_2" id="6_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="6_3" id="6_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="6_4" id="6_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="6_5" id="6_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="6_6" id="6_6"></td>
                    </tr>
                    <tr>
                        <th id="heading_row" scope="row">Page 7</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="7_1" id="7_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="7_2" id="7_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="7_3" id="7_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="7_4" id="7_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="7_5" id="7_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="7_6" id="7_6"></td>
                    </tr>
                    <tr>
                        <th id="heading_row" scope="row">Page 8</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="8_1" id="8_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="8_2" id="8_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="8_3" id="8_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="8_4" id="8_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="8_5" id="8_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="8_6" id="8_6"></td>
                    </tr>
                    <tr>
                        <th id="heading_row" scope="row">Page 9</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="9_1" id="9_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="9_2" id="9_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="9_3" id="9_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="9_4" id="9_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="9_5" id="9_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="9_6" id="9_6"></td>
                    </tr>
                    <tr>
                        <th id="heading_row" scope="row">Page 10</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="10_1" id="10_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="10_2" id="10_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="10_3" id="10_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="10_4" id="10_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="10_5" id="10_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="10_6" id="10_6"></td>
                    </tr>
                    <tr>
                        <th id="heading_row" scope="row">Page 11</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="11_1" id="11_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="11_2" id="11_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="11_3" id="11_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="11_4" id="11_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="11_5" id="11_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="11_6" id="11_6"></td>
                    </tr>
                    <tr>
                        <th id="heading_row" scope="row">Page 12</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="12_1" id="12_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="12_2" id="12_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="12_3" id="12_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="12_4" id="12_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="12_5" id="12_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="12_6" id="12_6"></td>
                    </tr>
                    <tr>
                        <th id="heading_row" scope="row">Page 13</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="13_1" id="13_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="13_2" id="13_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="13_3" id="13_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="13_4" id="13_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="13_5" id="13_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="13_6" id="13_6"></td>
                    </tr>
                    <tr>
                        <th id="heading_row" scope="row">Page 14</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="14_1" id="14_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="14_2" id="14_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="14_3" id="14_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="14_4" id="14_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="14_5" id="14_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="14_6" id="14_6"></td>
                    </tr>
                    <tr>
                        <th id="heading_row" scope="row">Page 15</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="15_1" id="15_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="15_2" id="15_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="15_3" id="15_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="15_4" id="15_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="15_5" id="15_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="15_6" id="15_6"></td>
                    </tr>
                    <tr>
                        <th id="heading_row" scope="row">Page 16</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="16_1" id="16_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="16_2" id="16_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="16_3" id="16_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="16_4" id="16_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="16_5" id="16_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="16_6" id="16_6"></td>
                    </tr>
                    <tr>
                        <th id="heading_row" scope="row">Page 17</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="17_1" id="17_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="17_2" id="17_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="17_3" id="17_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="17_4" id="17_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="17_5" id="17_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="17_6" id="17_6"></td>
                    </tr>
                    <tr>
                        <th id="heading_row" scope="row">Page 18</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="18_1" id="18_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="18_2" id="18_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="18_3" id="18_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="18_4" id="18_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="18_5" id="18_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="18_6" id="18_6"></td>
                    </tr>
                    <tr>
                        <th id="heading_row" scope="row">Page 19</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="19_1" id="19_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="19_2" id="19_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="19_3" id="19_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="19_4" id="19_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="19_5" id="19_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="19_6" id="19_6"></td>
                    </tr>
                    <tr>
                        <th id="heading_row" scope="row">Page 20</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="20_1" id="20_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="20_2" id="20_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="20_3" id="20_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="20_4" id="20_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="20_5" id="20_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="20_6" id="20_6"></td>
                    </tr>
                    </tbody>
                </table>

            </div>
            <div class="col-sm-6 col-md-6 col-sm-12">
                {{-- <div class="container"> --}}
                <div class="buttons d-flex  justify-content-between">
                    <button type="button" class="btn btn-outline-success btn-sm"> < previous page</button>
                    <span>Page Number (1-20)</span>
                    <button type="button" class="btn btn-outline-success btn-sm">Next Page ></button>
                </div>

                <div class="mt-3">
                    {{-- @include('pages.preliminary.production_one.page_fourteen') --}}
                    @include('pages.preliminary.page_one')
                    {{-- @include('pages.preliminary.page_two') --}}
                    {{-- @include('pages.preliminary.page_three') --}}

                    {{-- @include('pages.production_two.page_eleven') --}}

                    {{-- pages --}}
                </div>
                {{-- </div> --}}
            </div>
        </div>
    </div>

    <div class="penalty ">
        <div class="d-flex justify-content-center align-items-center w-100 h-100">
            <h1>5 Seconds penalty for wrong answer !</h1>
        </div>
    </div>
@endsection

@push('vendor-js')

@endpush
@push('page-js')
    <script>
        $(document).ready(function () {
            //  check answer
            $(".ans_input").focusout(function () {
                // alert('work');
                var inputRow = $(this);
                var ansValue = $(this).val();
                var rowId = $(this).attr('id');
                var rowNumber = rowId.split("_");
                var pageNumber = rowNumber[0];
                var boxNumber = rowNumber[1];
                var penaltyDiv = $('.penalty');
                $.ajax({
                    'url': `/check-anwser/${pageNumber}/${boxNumber}/${ansValue}`,
                    'type': 'get',
                    'dataType': 'json',
                    'cache': false,
                    success: function (data) {

                        if (data == true) {

                            inputRow.css({"background-color": "green", "color": "#fff"});
                        } else {
                            inputRow.css({"background-color": "red", "color": "#fff"});
                            penaltyDiv.css("display", "block");
                            var timerS = setInterval(function () {
                                penaltyDiv.css("display", "none");
                                clearInterval(timerS);
                            }, 5000);
                        }
                    }
                });
            });
        });


    </script>
@endpush


