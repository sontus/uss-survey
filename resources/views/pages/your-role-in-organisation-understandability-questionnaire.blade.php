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
        <h2 class="text-center m-5">The Task </h2>
        <p>Several boxes of random letters are placed together on each page of your computer screen. There are 20 pages
            in total. The page numbers are located at the top of each page. You can navigate through the pages by
            clicking on the arrow buttons placed next to the page numbers. </p> <br>
        <p>An example of a page is provided below. In this example, 6 boxes of random letters are placed on page number
            1. To navigate other pages, you will need to click on the “< Previous Page” and “Next Page >” buttons at the
            top. </p>
        <br>
        <img class="task-two mx-auto d-block" src="{{ asset('assets/images/task-two.png')}}" alt="task-two">


        <div class="d-flex align-items-end justify-content-between" style="height: 20vh;">
            <div class="mt-auto p-2">
                <a href="{{ route('task-one')}}" class="btn custom-btn">Previous</a>
            </div>
            <div class="mt-auto p-2">
                <a href="{{ route('task-three')}}" class="btn next-custom-btn">Next</a>
            </div>
        </div>
    </div>

@endsection

@push('vendor-js')

@endpush
@push('page-js')

@endpush


