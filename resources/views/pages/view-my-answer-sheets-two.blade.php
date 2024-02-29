@extends('layouts.app')
@section("title","View My Answer Sheet Two")
@push('vendor-css')

@endpush
@push('page-css')
    <style>

        .main_card {
            /* border: 2px solid #6f6f6f65; */
            margin: 20px 10px;
            height: 90vh;
            width: 100%;

            /* background-color: #fff; */

        }

        .pre_btn {
            margin-left: 15px;
        }

        .cm-container {
            background-color: #eee;
            height: 100vh;
        }

        .question {
            position: relative;
            font-size: 14px;
            margin-left: 5% !important;
            margin-right: 5%;
        }

        ul {
            list-style-type: "❑";
            padding: 12px;
            margin: 0px;
        }

        .heading {
            background-color: #f8ebbf;
        }

        #heading_row {
            background-color: #f8ebbf;
        }

        .cm_btn {
            position: absolute;
            bottom: 15px;

            width: 95%;
            /* justify-content: space-between; */
        }


        .text_span span {
            margin-right: 15%;
        }

        table, th, td {
            border: 1px solid black;
            font-size: 12px;

        }


        @media only screen and (max-width: 1030px) {
            .main_card {
                /* border: 2px solid #6f6f6f65; */
                margin: 5px 5px;
                height: 90vh !important;
                width: 100%;

                /* background-color: #fff; */

            }

            .cm_row {
                display: grid;
                grid-template-columns: 12fr;
            }

            .question {
                margin-bottom: 50px !important;
                font-size: 12px;
            }

            .cm_btn {
                position: absolute;
                bottom: 15px;
                width: 100%;

                /* justify-content: space-between; */
            }

            .pre_btn {
                margin-left: 0px;
                padding: 5px 15px 5px 15px;
            }

            .next_btn {
                margin-right: 35px
            }
        }

        .table-ans td, .table-ans th {
            font-size: 12px !important;
            padding: 2px !important;
            font-weight: 600;
            border: 1px solid black;
        }

        .table-ans input {
            border: none;
        }

        .timeAndAns {
            height: 30px;
            width: 60px;
            border: 2px solid #333;
            margin-left: 10px;
            border-radius: 2px;
            text-align: center;
            font-size: 22px;
            font-weight: bold;
        }

        .cm-container {
            background-color: #eee;
            height: 100vh;
        }
    </style>
@endpush

@section('content')
    <div class="container-fluid cm-container ">
        <div class="container p-0">
            <div class="row w-100 p-0">
                <div class="col-12 main_card">
                    <div class="card w-100 h-100">
                        <div class="card-body">

                            <div class="question">
                                <div class="row">
                                    <div class="col col-md-3"></div>
                                    <div class="col col-md-5">
                                        <div class="text-end mb-3">
                                    <span class="d-flex align-items-center justify-content-end">
                                        Time Remaining
                                       <div class="timeAndAns showResultTime"></div>
                                    </span>
                                        </div>
                                        <table class="table table-ans table-sm table-responsive">
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
                                                <td>{{ $result->box_11}}</td>
                                                <td>{{ $result->box_12}}</td>
                                                <td>{{ $result->box_13}}</td>
                                                <td>{{ $result->box_14}}</td>
                                                <td>{{ $result->box_15}}</td>
                                                <td>{{ $result->box_16}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 2</th>
                                                <td>{{ $result->box_21}}</td>
                                                <td>{{ $result->box_22}}</td>
                                                <td>{{ $result->box_23}}</td>
                                                <td>{{ $result->box_24}}</td>
                                                <td>{{ $result->box_25}}</td>
                                                <td>{{ $result->box_26}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 3</th>
                                                <td>{{ $result->box_31}}</td>
                                                <td>{{ $result->box_32}}</td>
                                                <td>{{ $result->box_33}}</td>
                                                <td>{{ $result->box_34}}</td>
                                                <td>{{ $result->box_35}}</td>
                                                <td>{{ $result->box_36}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 4</th>
                                                <td>{{ $result->box_41}}</td>
                                                <td>{{ $result->box_42}}</td>
                                                <td>{{ $result->box_43}}</td>
                                                <td>{{ $result->box_44}}</td>
                                                <td>{{ $result->box_45}}</td>
                                                <td>{{ $result->box_46}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 5</th>
                                                <td>{{ $result->box_51}}</td>
                                                <td>{{ $result->box_52}}</td>
                                                <td>{{ $result->box_53}}</td>
                                                <td>{{ $result->box_54}}</td>
                                                <td>{{ $result->box_55}}</td>
                                                <td>{{ $result->box_56}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 6</th>
                                                <td>{{ $result->box_61}}</td>
                                                <td>{{ $result->box_62}}</td>
                                                <td>{{ $result->box_63}}</td>
                                                <td>{{ $result->box_64}}</td>
                                                <td>{{ $result->box_65}}</td>
                                                <td>{{ $result->box_66}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 7</th>
                                                <td>{{ $result->box_71}}</td>
                                                <td>{{ $result->box_72}}</td>
                                                <td>{{ $result->box_73}}</td>
                                                <td>{{ $result->box_74}}</td>
                                                <td>{{ $result->box_75}}</td>
                                                <td>{{ $result->box_76}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 8</th>
                                                <td>{{ $result->box_81}}</td>
                                                <td>{{ $result->box_82}}</td>
                                                <td>{{ $result->box_83}}</td>
                                                <td>{{ $result->box_84}}</td>
                                                <td>{{ $result->box_85}}</td>
                                                <td>{{ $result->box_86}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 9</th>
                                                <td>{{ $result->box_91}}</td>
                                                <td>{{ $result->box_92}}</td>
                                                <td>{{ $result->box_93}}</td>
                                                <td>{{ $result->box_94}}</td>
                                                <td>{{ $result->box_95}}</td>
                                                <td>{{ $result->box_96}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 10</th>
                                                <td>{{ $result->box_101}}</td>
                                                <td>{{ $result->box_102}}</td>
                                                <td>{{ $result->box_103}}</td>
                                                <td>{{ $result->box_104}}</td>
                                                <td>{{ $result->box_105}}</td>
                                                <td>{{ $result->box_106}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 11</th>
                                                <td>{{ $result->box_111}}</td>
                                                <td>{{ $result->box_112}}</td>
                                                <td>{{ $result->box_113}}</td>
                                                <td>{{ $result->box_114}}</td>
                                                <td>{{ $result->box_115}}</td>
                                                <td>{{ $result->box_116}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 12</th>
                                                <td>{{ $result->box_121}}</td>
                                                <td>{{ $result->box_122}}</td>
                                                <td>{{ $result->box_123}}</td>
                                                <td>{{ $result->box_124}}</td>
                                                <td>{{ $result->box_125}}</td>
                                                <td>{{ $result->box_126}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 13</th>
                                                <td>{{ $result->box_131}}</td>
                                                <td>{{ $result->box_132}}</td>
                                                <td>{{ $result->box_133}}</td>
                                                <td>{{ $result->box_134}}</td>
                                                <td>{{ $result->box_135}}</td>
                                                <td>{{ $result->box_136}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 14</th>
                                                <td>{{ $result->box_141}}</td>
                                                <td>{{ $result->box_142}}</td>
                                                <td>{{ $result->box_143}}</td>
                                                <td>{{ $result->box_144}}</td>
                                                <td>{{ $result->box_145}}</td>
                                                <td>{{ $result->box_146}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 15</th>
                                                <td>{{ $result->box_151}}</td>
                                                <td>{{ $result->box_152}}</td>
                                                <td>{{ $result->box_153}}</td>
                                                <td>{{ $result->box_154}}</td>
                                                <td>{{ $result->box_155}}</td>
                                                <td>{{ $result->box_156}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 16</th>
                                                <td>{{ $result->box_161}}</td>
                                                <td>{{ $result->box_162}}</td>
                                                <td>{{ $result->box_163}}</td>
                                                <td>{{ $result->box_164}}</td>
                                                <td>{{ $result->box_165}}</td>
                                                <td>{{ $result->box_166}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 17</th>
                                                <td>{{ $result->box_171}}</td>
                                                <td>{{ $result->box_172}}</td>
                                                <td>{{ $result->box_173}}</td>
                                                <td>{{ $result->box_174}}</td>
                                                <td>{{ $result->box_175}}</td>
                                                <td>{{ $result->box_176}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 18</th>
                                                <td>{{ $result->box_181}}</td>
                                                <td>{{ $result->box_182}}</td>
                                                <td>{{ $result->box_183}}</td>
                                                <td>{{ $result->box_184}}</td>
                                                <td>{{ $result->box_185}}</td>
                                                <td>{{ $result->box_186}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 19</th>
                                                <td>{{ $result->box_191}}</td>
                                                <td>{{ $result->box_192}}</td>
                                                <td>{{ $result->box_193}}</td>
                                                <td>{{ $result->box_194}}</td>
                                                <td>{{ $result->box_195}}</td>
                                                <td>{{ $result->box_196}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 20</th>
                                                <td>{{ $result->box_201}}</td>
                                                <td>{{ $result->box_202}}</td>
                                                <td>{{ $result->box_203}}</td>
                                                <td>{{ $result->box_204}}</td>
                                                <td>{{ $result->box_205}}</td>
                                                <td>{{ $result->box_206}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="col col-md-4"></div>

                                </div>
                            </div>
                            <div class="cm_btn d-grid gap-2 d-md-flex justify-content-md-end ">
                                <form action="{{url('time_Up')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="redirectTo"
                                           value="shortcuts-discovered-in-this-period-two">
                                    <input type="hidden" name="timeTag" value="viewResultProductionTwoTimeLeft">
                                    <input type="hidden" class="timeLeft" name="timeLeft">
                                    <button type="submit"
                                            style="padding: 5px 20px 5px 20px;"
                                            class="btn btn-danger stopViewButton next_btn btn-sm">Stop Viewing My Answer
                                        Sheet
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('vendor-js')

@endpush
@push('page-js')
    <script>
        if (sessionStorage.getItem("showResultTimeRemainingResultTwo") !== null) {
            let leftTime = sessionStorage.getItem("showResultTimeRemainingResultTwo");
            countdown(".showResultTime", 0, leftTime);
        } else {
            countdown(".showResultTime", 1, 0);
        }

        // count down timer

        function countdown(elementName, minutes, seconds, speEndTime) {
            var element, endTime, hours, mins, msLeft, time;

            function twoDigits(n) {
                return (n <= 9 ? "0" + n : n);
            }

            function updateTimer() {
                msLeft = endTime - (+new Date);
                if (msLeft < 1000) {
                    {{--                    @php--}}
                    {{--                        session()->put('viewResultTwoTime','up');--}}
                    {{--                    @endphp--}}
                    $('.timeLeft').val('up');
                    $('.stopViewButton').click()
                    sessionStorage.setItem("showResultTimeUpResultTwo", 'up');
                    // window.location = 'shortcuts-discovered-in-this-period';
                } else {
                    time = new Date(msLeft);
                    hours = time.getUTCHours();
                    mins = time.getUTCMinutes();
                    $('.timeLeft').val(msLeft);
                    sessionStorage.setItem("showResultTimeRemainingResultTwo", time.getUTCSeconds());
                    element.html((hours ? hours + ':' + twoDigits(mins) : mins) + ':' + twoDigits(time.getUTCSeconds()));
                    setTimeout(updateTimer, time.getUTCMilliseconds() + 500);
                }
            }

            element = $(elementName);
            endTime = (+new Date) + 1000 * (60 * minutes + seconds) + 500;
            updateTimer();
        }
    </script>
@endpush



