@extends('layouts.backend')

@section("title","Admin Login")
@push('vendor-css')

@endpush
@push('page-css')

@endpush
@section('content')
    <main class="auth">
      <header id="auth-header" class="auth-header" style="background-image: url({{ asset('assets/backend/assets/images/illustration/img-1.png')}});">
        <h1 class="mt-5">
          <span class="sr-only">Sign In</span>
        </h1>

      </header><!-- form -->
      <form method="POST" action="{{ route('login') }}" class="auth-form">
        @csrf
        <!-- .form-group -->
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"   class="form-control" placeholder="Email">
            <label for="email">Email</label>
          </div>
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group">
          <div class="form-label-group">
            <input type="password" id="password" class="form-control" type="password" name="password" required autocomplete="current-password" placeholder="Password">

            <label for="password">Password</label>

          </div>
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group">
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group text-center">
          <div class="custom-control custom-control-inline custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="remember-me"> <label class="custom-control-label" for="remember-me">Keep me sign in</label>
          </div>
        </div><!-- /.form-group -->
        <!-- recovery links -->
        <div class="text-center pt-3">
        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="link">  {{ __('Forgot your password?') }}</a>
        @endif

        </div><!-- /recovery links -->
      </form><!-- /.auth-form -->
      <!-- copyright -->
      <footer class="auth-footer"> © {{ date('Y')}} All Rights Reserved. Made With Love <a href="#">USS</a>
      </footer>
    </main><!-- /.auth -->
@endsection

@push('vendor-js')

@endpush
@push('page-js')


@endpush
