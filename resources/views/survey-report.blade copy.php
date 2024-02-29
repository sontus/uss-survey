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
                    <div class="report">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>User ID</td>
                                    <td>Box 1</td>
                                    <td>Box 2</td>
                                    <td>Box 3</td>
                                    <td>Box 4</td>
                                    <td>Box 5</td>
                                    <td>Box 6</td>
                                    <td>Box 7</td>
                                    <td>Box 8</td>
                                    <td>Box 9</td>
                                    <td>Box 10</td>
                                    <td>Box 11</td>
                                    <td>Box 12</td>
                                    <td>Box 13</td>
                                    <td>Box 14</td>
                                    <td>Box 15</td>
                                    <td>Box 16</td>
                                    <td>Box 17</td>
                                    <td>Box 18</td>
                                    <td>Box 19</td>
                                    <td>Box 20</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reports as $key=>$report)
                                    <tr>
                                        <td>{{$key +1}}</td>
                                        <td>{{$report->user_id}}</td>
                                        <td>{{$report->box_11}}</td>
                                        <td>{{$report->box_12}}</td>
                                        <td>{{$report->box_13}}</td>
                                        <td>{{$report->box_14}}</td>
                                        <td>{{$report->box_15}}</td>

                                        <td>{{$report->box_11}}</td>
                                        <td>{{$report->box_12}}</td>
                                        <td>{{$report->box_13}}</td>
                                        <td>{{$report->box_14}}</td>
                                        <td>{{$report->box_15}}</td>

                                        <td>{{$report->box_11}}</td>
                                        <td>{{$report->box_12}}</td>
                                        <td>{{$report->box_13}}</td>
                                        <td>{{$report->box_14}}</td>
                                        <td>{{$report->box_15}}</td>

                                        <td>{{$report->box_11}}</td>
                                        <td>{{$report->box_12}}</td>
                                        <td>{{$report->box_13}}</td>
                                        <td>{{$report->box_14}}</td>
                                        <td>{{$report->box_15}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <a class="btn btn-warning float-end" href="{{ route('report-export') }}">Export Survery Report</a>
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
