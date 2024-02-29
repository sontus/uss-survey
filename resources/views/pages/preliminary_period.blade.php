@extends('layouts.app')
@section('title', 'Home Page')
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

        .penalty {
            background-color: rgba(21, 36, 58, 0.18);
            height: 100vh;
            width: 100%;
            z-index: 100;
            position: absolute;
            top: 0;
            left: 0;
            display: none;
        }

        .mainView {
            height: 100vh;
            margin-left: 10%;
            margin-right: 10%;
            overflow: scroll;

        }

        .mainView::-webkit-scrollbar {
            display: none;
        }

        .penalty h1 {
            color: red;
        }

        .pageChangeBtn {
            width: 30%;
            background-color: #509d50;
            text-align: center;
            outline: none;
            border: none;
            font-size: 13px !important;
            font-weight: bold;
        }

        .pageChangeBtn:hover {
            color: rgba(51, 51, 51, .80);
        }

        .pageNo {
            width: 40%;
            background-color: #bfbfbf;
            text-align: center;
            font-size: 14px !important;
        }

        .disabled {
            color: rgba(51, 51, 51, .80);
        }

        .mainView {
            margin-left: 10%;
            margin-right: 10%;
            height: 100vh;
            overflow: scroll;
        }

        input {
            border: none;
            outline: none;
            height: 100%;
            width: 100%;
            background: none;
            text-align: center;
        }

        .heading_row {
            font-size: 12px;
        }

        .timeAndAns {
            height: 26px;
            width: 52px;
            border: 2px solid #333;
            margin-left: 10px;
            border-radius: 1px;
            text-align: center;
            font-size: 15px;
            font-weight: bold;
        }

        .text_cm th,
        .text_cm td {
            font-size: 15.4px;
        }

        .answerInput {
            border-collapse: collapse;
            border: 1px solid #333;
            width: 100%;
            padding: 10px 0;
        }

        .answerInput th,
        .answerInput td {
            border: 1px solid #333;
            text-align: center;
            height: 20px;
        }

        @media only screen and (max-width: 1030px) {

            .text_cm th,
            .text_cm td {
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
            <h5 class="text-center mt-3 mb-2 ">
                <span class="border border-dark p-1">Preliminary Period</span>
            </h5>
            <div class="col-sm-6 col-md-6 ">

                <table class="answerInput text_cm">
                    <div class="mb-1 d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <span># Correct Answer</span>
                            <div class="timeAndAns correctAns ">0</div>
                        </div>
                        <div class="d-flex align-items-center">
                            <span>Time Remaining</span>
                            <div class="timeAndAns remainingTime"></div>
                        </div>
                    </div>
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
                    <tbody class="answersData" id="fields-container">
                    <tr pageTag="1">
                        <th id="heading_row" scope="row">Page 1</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="1_1"
                                   id="1_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="1_2"
                                   id="1_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="1_3"
                                   id="1_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="1_4"
                                   id="1_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="1_5"
                                   id="1_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="1_6"
                                   id="1_6"></td>
                    </tr>
                    <tr pageTag="2">
                        <th id="heading_row" scope="row">Page 2</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="2_1"
                                   id="2_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="2_2"
                                   id="2_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="2_3"
                                   id="2_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="2_4"
                                   id="2_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="2_5"
                                   id="2_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="2_6"
                                   id="2_6"></td>
                    </tr>
                    <tr pageTag="3">
                        <th id="heading_row" scope="row">Page 3</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="3_1"
                                   id="3_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="3_2"
                                   id="3_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="3_3"
                                   id="3_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="3_4"
                                   id="3_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="3_5"
                                   id="3_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="3_6"
                                   id="3_6"></td>
                    </tr>
                    <tr pageTag="4">
                        <th id="heading_row" scope="row">Page 4</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="4_1"
                                   id="4_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="4_2"
                                   id="4_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="4_3"
                                   id="4_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="4_4"
                                   id="4_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="4_5"
                                   id="4_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="4_6"
                                   id="4_6"></td>
                    </tr>
                    <tr pageTag="5">
                        <th id="heading_row" scope="row">Page 5</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="5_1"
                                   id="5_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="5_2"
                                   id="5_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="5_3"
                                   id="5_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="5_4"
                                   id="5_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="5_5"
                                   id="5_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="5_6"
                                   id="5_6"></td>
                    </tr>
                    <tr pageTag="6">
                        <th id="heading_row" scope="row">Page 6</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="6_1"
                                   id="6_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="6_2"
                                   id="6_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="6_3"
                                   id="6_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="6_4"
                                   id="6_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="6_5"
                                   id="6_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="6_6"
                                   id="6_6"></td>
                    </tr>
                    <tr pageTag="7">
                        <th id="heading_row" scope="row">Page 7</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="7_1"
                                   id="7_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="7_2"
                                   id="7_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="7_3"
                                   id="7_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="7_4"
                                   id="7_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="7_5"
                                   id="7_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="7_6"
                                   id="7_6"></td>
                    </tr>
                    <tr pageTag="8">
                        <th id="heading_row" scope="row">Page 8</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="8_1"
                                   id="8_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="8_2"
                                   id="8_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="8_3"
                                   id="8_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="8_4"
                                   id="8_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="8_5"
                                   id="8_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="8_6"
                                   id="8_6"></td>
                    </tr>
                    <tr pageTag="9">
                        <th id="heading_row" scope="row">Page 9</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="9_1"
                                   id="9_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="9_2"
                                   id="9_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="9_3"
                                   id="9_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="9_4"
                                   id="9_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="9_5"
                                   id="9_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="9_6"
                                   id="9_6"></td>
                    </tr>
                    <tr pageTag="10">
                        <th id="heading_row" scope="row">Page 10</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="10_1"
                                   id="10_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="10_2"
                                   id="10_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="10_3"
                                   id="10_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="10_4"
                                   id="10_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="10_5"
                                   id="10_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="10_6"
                                   id="10_6"></td>
                    </tr>
                    <tr pageTag="11">
                        <th id="heading_row" scope="row">Page 11</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="11_1"
                                   id="11_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="11_2"
                                   id="11_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="11_3"
                                   id="11_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="11_4"
                                   id="11_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="11_5"
                                   id="11_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="11_6"
                                   id="11_6"></td>
                    </tr>
                    <tr pageTag="12">
                        <th id="heading_row" scope="row">Page 12</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="12_1"
                                   id="12_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="12_2"
                                   id="12_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="12_3"
                                   id="12_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="12_4"
                                   id="12_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="12_5"
                                   id="12_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="12_6"
                                   id="12_6"></td>
                    </tr>
                    <tr pageTag="13">
                        <th id="heading_row" scope="row">Page 13</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="13_1"
                                   id="13_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="13_2"
                                   id="13_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="13_3"
                                   id="13_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="13_4"
                                   id="13_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="13_5"
                                   id="13_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="13_6"
                                   id="13_6"></td>
                    </tr>
                    <tr pageTag="14">
                        <th id="heading_row" scope="row">Page 14</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="14_1"
                                   id="14_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="14_2"
                                   id="14_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="14_3"
                                   id="14_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="14_4"
                                   id="14_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="14_5"
                                   id="14_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="14_6"
                                   id="14_6"></td>
                    </tr>
                    <tr pageTag="15">
                        <th id="heading_row" scope="row">Page 15</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="15_1"
                                   id="15_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="15_2"
                                   id="15_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="15_3"
                                   id="15_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="15_4"
                                   id="15_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="15_5"
                                   id="15_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="15_6"
                                   id="15_6"></td>
                    </tr>
                    <tr pageTag="16">
                        <th id="heading_row" scope="row">Page 16</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="16_1"
                                   id="16_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="16_2"
                                   id="16_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="16_3"
                                   id="16_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="16_4"
                                   id="16_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="16_5"
                                   id="16_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="16_6"
                                   id="16_6"></td>
                    </tr>
                    <tr pageTag="17">
                        <th id="heading_row" scope="row">Page 17</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="17_1"
                                   id="17_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="17_2"
                                   id="17_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="17_3"
                                   id="17_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="17_4"
                                   id="17_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="17_5"
                                   id="17_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="17_6"
                                   id="17_6"></td>
                    </tr>
                    <tr pageTag="18">
                        <th id="heading_row" scope="row">Page 18</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="18_1"
                                   id="18_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="18_2"
                                   id="18_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="18_3"
                                   id="18_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="18_4"
                                   id="18_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="18_5"
                                   id="18_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="18_6"
                                   id="18_6"></td>
                    </tr>
                    <tr pageTag="19">
                        <th id="heading_row" scope="row">Page 19</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="19_1"
                                   id="19_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="19_2"
                                   id="19_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="19_3"
                                   id="19_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="19_4"
                                   id="19_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="19_5"
                                   id="19_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="19_6"
                                   id="19_6"></td>
                    </tr>
                    <tr pageTag="20">
                        <th id="heading_row" scope="row">Page 20</th>
                        <td><input type="number" min="1" max="2" class="ans_input" name="20_1"
                                   id="20_1"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="20_2"
                                   id="20_2"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="20_3"
                                   id="20_3"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="20_4"
                                   id="20_4"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="20_5"
                                   id="20_5"></td>
                        <td><input type="number" min="1" max="2" class="ans_input" name="20_6"
                                   id="20_6"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6 col-md-6">
                {{-- <div class="container"> --}}
                <div class="buttons d-flex  justify-content-between">
                    <button type="button" class="pageChangeBtn prevButton" pageNo="1">
                        < Previous page
                    </button>
                    <span class="pageNo">Page Number (<spen class="pageNoTo">1</spen>/20)</span>
                    <button type="button" class="pageChangeBtn nextButton" pageNo="1">Next Page >
                    </button>
                </div>

                <div class=" questionArea">
                    {{-- pages --}}
                    @include('pages.preliminary.page_one')
                </div>
                {{-- </div> --}}
            </div>
        </div>
    </div>
    <div class="penalty ">
        <div class="d-flex justify-content-center align-items-center w-100 h-100">

            <h1>
                Wrong answer! Wait for
                <spen class="penaltyTime"></spen>
                seconds
            </h1>
        </div>
    </div>
@endsection

@push('vendor-js')
@endpush
@push('page-js')
    <script>
        var period = "Preliminary-Period";
        $(document).ready(function () {
            let nextBtn = $('.nextButton'),
                prevBtn = $('.prevButton');
            if (parseInt(prevBtn.attr('pageNo')) === 1) {
                prevBtn.addClass('disabled');
            }
            nextBtn.click(function () {
                let realPage = parseInt($(this).attr('pageNo'));
                let pageNo = parseInt($(this).attr('pageNo')) + 1;
                let inputAnswer = $('#page_' + realPage).find('input');
                // alert(realPage)
                let ansArr = [];
                for (let i = 0; i < inputAnswer.length; i++) {
                    let rowValue = inputAnswer.eq(i).val();
                    ansArr.push(rowValue);
                }
                saveAnswer(realPage, ansArr);
                pageChange(pageNo)
            });
            prevBtn.click(function () {
                if (parseInt($(this).attr('pageNo')) > 1) {
                    let pageNo = parseInt($(this).attr('pageNo')) - 1;
                    pageChange(pageNo)
                }
            });

            // page content change
            // return laravel include page
            function pageChange(pageNo) {
                let qArea = $('.questionArea');
                if (pageNo > 0 && pageNo < 21) {
                    $('.pageNoTo').text(pageNo);
                }

                if (pageNo === 1) {
                    prevBtn.addClass('disabled');
                } else {
                    prevBtn.removeClass('disabled');
                    prevBtn.attr('pageNo', pageNo);
                }

                if (pageNo === 20) {
                    nextBtn.addClass('disabled');
                } else {
                    nextBtn.removeClass('disabled');
                    nextBtn.attr('pageNo', pageNo);
                }

                switch (pageNo) {
                    case 1:
                        qArea.html(`@include('pages.preliminary.page_one')`);
                        break;
                    case 2:
                        qArea.html(`@include('pages.preliminary.page_two')`);
                        break;
                    case 3:
                        qArea.html(`@include('pages.preliminary.page_three')`);
                        break;
                    case 4:
                        qArea.html(`@include('pages.preliminary.page_four')`);
                        break;
                    case 5:
                        qArea.html(`@include('pages.preliminary.page_five')`);
                        break;
                    case 6:
                        qArea.html(`@include('pages.preliminary.page_six')`);
                        break;
                    case 7:
                        qArea.html(`@include('pages.preliminary.page_seven')`);
                        break;
                    case 8:
                        qArea.html(`@include('pages.preliminary.page_eight')`);
                        break;
                    case 9:
                        qArea.html(`@include('pages.preliminary.page_nine')`);
                        break;
                    case 10:
                        qArea.html(`@include('pages.preliminary.page_ten')`);
                        break;
                    case 11:
                        qArea.html(`@include('pages.preliminary.page_eleven')`);
                        break;
                    case 12:
                        qArea.html(`@include('pages.preliminary.page_twelve')`);
                        break;
                    case 13:
                        qArea.html(`@include('pages.preliminary.page_thirteen')`);
                        break;
                    case 14:
                        qArea.html(`@include('pages.preliminary.page_fourteen')`);
                        break;
                    case 15:
                        qArea.html(`@include('pages.preliminary.page_fifteen')`);
                        break;
                    case 16:
                        qArea.html(`@include('pages.preliminary.page_sixteen')`);
                        break;
                    case 17:
                        qArea.html(`@include('pages.preliminary.page_seventeen')`);
                        break;
                    case 18:
                        qArea.html(`@include('pages.preliminary.page_eighteen')`);
                        break;
                    case 19:
                        qArea.html(`@include('pages.preliminary.page_nineteen')`);
                        break;
                    case 20:
                        qArea.html(`@include('pages.preliminary.page_twenty')`);
                        break;
                }
            }

            // Check answer
            $(".ans_input").blur(function () {
                var inputRow = $(this);
                var ansValue = $(this).val();
                var rowId = $(this).attr('id');
                var rowNumber = rowId.split("_");
                var pageNumber = rowNumber[0];
                var boxNumber = rowNumber[1];
                var penaltyDiv = $('.penalty');
                let corAns = sessionStorage.getItem("correct");
                if (corAns == null) {
                    corAns = 0;
                }

                $.ajax({
                    'url': `/check-anwser/${period}/${pageNumber}/${boxNumber}/${ansValue}`,
                    'type': 'get',
                    'dataType': 'json',
                    'cache': false,
                    success: function (data) {
                        if (data === true) {
                            inputRow.parent('td').css({
                                "background-color": "green"
                            });
                            inputRow.css('color', '#fff');
                            corAns = parseInt(corAns) + 1;
                            $('.correctAns').text(corAns);
                            sessionStorage.setItem("correct", corAns);
                        } else {
                            penaltyDiv.css("display", "block");
                            inputRow.val('');
                            countdown(".penaltyTime", 0, 5);
                            var timerS = setInterval(function () {
                                penaltyDiv.css("display", "none");
                                clearInterval(timerS);
                            }, 5000);
                        }
                    }
                });
            });

            // save user answer
            function saveAnswer(pageNumber, ansData) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    'url': `/page-wish-answer-save`,
                    'type': 'post',
                    'dataType': 'json',
                    'data': {
                        pageNum: pageNumber,
                        pageData: ansData
                    },
                    'cache': false,
                    success: function (data) {


                    }
                });
            }

            // count down timer
            countdown(".remainingTime", 5, 0);

            function countdown(elementName, minutes, seconds) {
                var element, endTime, hours, mins, msLeft, time;

                function twoDigits(n) {
                    return (n <= 9 ? "0" + n : n);
                }

                function updateTimer() {
                    msLeft = endTime - (+new Date);
                    if (msLeft < 1000) {
                        if (minutes > 0) {
                            collectAllAns();
                            sessionStorage.setItem("preliminaryTimeUp", 'up');
                            @php
                                session()->put('preliminaryTimeUp', 'up');
                            @endphp
                        }
                    } else {
                        time = new Date(msLeft);
                        hours = time.getUTCHours();
                        mins = time.getUTCMinutes();
                        if (minutes > 0) {
                            element.html((hours ? hours + ':' + twoDigits(mins) : mins) + ':' + twoDigits(time
                                .getUTCSeconds()));
                        }
                        if (minutes === 0 && seconds > 0) {
                            element.html(time.getUTCSeconds());
                        }
                        setTimeout(updateTimer, time.getUTCMilliseconds() + 500);
                    }
                }

                element = $(elementName);
                endTime = (+new Date) + 1000 * (60 * minutes + seconds) + 500;
                updateTimer();
            }

            $('.nextPageButton').click(function () {
                collectAllAns()
            })

            function collectAllAns() {
                let inputAnswer = $('.answersData tr').find('input');
                let allAns = [];
                let pageAns = [];
                for (var i = 0; i < (inputAnswer.length + 1); i++) {
                    let pageTag = parseInt(inputAnswer.eq(i).parents('tr').attr('pageTag')),
                        ans = inputAnswer.eq(i).val();
                    if ((i / 6) % 1 === 0) {
                        allAns.push(pageAns);
                        pageAns = [];
                    }
                    pageAns.push(ans);
                }
                saveFinalAnswer(period, allAns);
            }

            // final answer save
            function saveFinalAnswer(getPeriod, allAnsData) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    'url': `/save-final-answer`,
                    'type': 'post',
                    'dataType': 'json',
                    'data': {
                        period: getPeriod,
                        pageData: allAnsData
                    },
                    'cache': false,
                    success: function (data) {
                        // console.log('Working');
                        window.location = 'preliminary-period-result';

                    }
                })
            }

            const inputContainer = document.getElementById('fields-container');
            inputContainer.addEventListener('keydown', function (event) {
                const target = event.target;
                if (target.matches('input[type="number"]')) {
                    if (event.key === 'ArrowUp' || event.key === 'ArrowDown') {
                        event.preventDefault();
                    }
                }
            });
        });
    </script>
@endpush
