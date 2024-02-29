@extends('layouts.app')
@section("title","The Task")
@push('vendor-css')

@endpush
@push('page-css')
    <style>
        .task-two {
            width: 60%;
            border: 2px solid #000;
        }

    </style>
@endpush

@section('content')
    <div class="container">
        <div class="card m-4">
            <div class="card-body mx-5 mb-3 text-justify">
                <h4 class="text-center m-5">Work environment - Understandability Questionnaire
                </h4>
                <p class="fw-bold">To test your understanding of the work environment in Festina’s coding team, please
                    answer the following two questions.
                </p>
                <div>
                    <form>
                        <ol>
                            <li class="mb-2">
                                You never meet your other colleagues who work in Festina’s coding team.

                            </li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    True
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    False
                                </label>
                            </div>
                            <li class="mt-3">
                                In total, how many employees work in Festina’s coding team?
                            </li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    True
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    False
                                </label>
                            </div>
                        </ol>
                    </form>
                </div>
                <div class="d-flex align-items-end justify-content-between" style="height: 15vh;">
                    <div class="mt-auto p-2">
                        <a href="{{ route('work-environment')}}" class="btn custom-btn">Previous</a>
                    </div>
                    <div class="mt-auto p-2">
                        <a href="{{ route('compensation-structure')}}" class="btn next-custom-btn">Next</a>
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


