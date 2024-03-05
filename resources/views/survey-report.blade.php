@extends('layouts.backend')

@section("title","Survey Report")
@push('vendor-css')

@endpush
@push('page-css')
    <style>
        .table-bordered, .table-bordered td, .table-bordered th {
            border: 1px solid #070707;
        }
    </style>
@endpush
@section('content')
    <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
        <!-- .page -->
        <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
            <!-- .page-title-bar -->
            <header class="page-title-bar">
                <!-- page title stuff goes here -->
                <h1 class="page-title"> Survey Report</h1>
            </header><!-- /.page-title-bar -->
            <hr>
            <!-- .page-section -->
            <div class="page-section">
                <!-- .section-block -->
                <div class="section-block">
                    <h4>Stage One Report</h4>
                    <div class="report">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Period</td>
                                    <td>Action</td>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Preliminary-Period</td>
                                    <td> <a href="{{ route('report-details',"Preliminary-Period")}}">View</a> </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Production-Period-1</td>
                                    <td> <a href="{{ route('report-details',"Production-Period-1")}}">View</a> </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Production-Period-2</td>
                                    <td> <a href="{{ route('report-details',"Production-Period-2")}}">View</a> </td>
                                </tr>
                                {{-- @foreach ($reports as $key=>$report)
                                    <tr>
                                        <td>{{$key +1}}</td>
                                        <td>{{$report->user_id}}</td>
                                        <td>{{$report->period}}</td>
                                        <td> <a href="{{ route('report-details',$report->id)}}">View</a> </td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                    <h4>PEQ Report</h4>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>PEQ Report</td>
                                <td> <a href="{{ route('peq-report')}}">View</a> </td>
                            </tr>
                            <tr>
                                <td>Describe the shortcuts</td>
                                <td> <a href="{{ route('shortcut.report') }}">View</a> </td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- <a class="btn btn-warning float-end" href="{{ route('report-export') }}">Export Survery Report</a> --}}
                </div><!-- /.section-block -->
            </div><!-- /.page-section -->
            </div><!-- /.page-inner -->
        </div><!-- /.page -->
        </div><!-- /.wrapper -->
    </main><!-- /.app-main -->
@endsection

@push('vendor-js')

@endpush
@push('page-js')


@endpush
