@extends('layouts.backend')

@section("title","Admin Dashboard")
@push('vendor-css')

@endpush
@push('page-css')

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
                <h1 class="page-title"> Dashboard </h1>
            </header><!-- /.page-title-bar -->
            <!-- .page-section -->
            <div class="page-section">
                <!-- .section-block -->
                <div class="section-block">
                <!-- page content goes here -->
                <p> Welcome to Survey Admin Dashboard</p>
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
