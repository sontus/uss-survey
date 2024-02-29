@extends('layouts.app')
@section("title","Experiment end")
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
                                <div style="margin-top:25%">
                                    Thank you for your interest in this study. However, it is critical that you complete
                                    this task on a <strong>laptop or desktop computer</strong>, and our data indicates
                                    that you are using a <strong>tablet or mobile phone</strong>. As a result, I'm
                                    afraid you won't be able to continue with the experiment. Please return your
                                    submission on Prolific by clicking the 'stop without completing' button.

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


