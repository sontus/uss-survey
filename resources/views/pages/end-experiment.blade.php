@extends('layouts.app')
@section("title","General Information")
@push('vendor-css')

@endpush
@push('page-css')
    <style>
        .main_card {
            /* border: 2px solid #6f6f6f65; */
            margin: 20px 10px;
            height: 90vh;
            width: 100%;
        }

        .message_box {
            display: flex;
            align-items: center;
            justify-content: center;
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
                            <div class="title text-center w-100 mt-5 mb-4">
                                <h5>End of Experiment Message</h5>
                                <div style="margin-top:20%">
                                   <p style="color:red;"> Thank you for completing this experiment. <br/>Please click on the link below to register your completion of this experiment on Prolific </p>
                                    <br/>
                                    <u><a href="https://app.prolific.com/submissions/complete?cc=CKEPIZVZ/"> https://app.prolific.com/submissions/complete?cc=CKEPIZVZ</a> </u>
                                </div>
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

@endpush


