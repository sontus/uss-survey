<header class="app-header app-header-dark">
    <!-- .top-bar -->
    <div class="top-bar">
        <!-- .top-bar-brand -->
        <div class="top-bar-brand">
            <!-- toggle aside menu -->
            <button class="hamburger hamburger-squeeze mr-2" type="button" data-toggle="aside-menu"
                    aria-label="toggle aside menu"><span class="hamburger-box"><span
                        class="hamburger-inner"></span></span></button> <!-- /toggle aside menu -->
            <a href="{{ route('dashboard')}}">Survay</a>
        </div><!-- /.top-bar-brand -->
        <!-- .top-bar-list -->
        <div class="top-bar-list">
            <!-- .top-bar-item -->
            <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
                <!-- toggle menu -->
                <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="toggle menu">
                    <span class="hamburger-box"><span class="hamburger-inner"></span></span></button>
                <!-- /toggle menu -->
            </div><!-- /.top-bar-item -->

            <!-- .top-bar-item -->
            <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">

                <!-- .btn-account -->
                <div class="dropdown d-none d-md-flex">
                    <button class="btn-account" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><span class="user-avatar user-avatar-md"><img
                                src="{{ asset('assets/backend/assets/images/user-avatar.jpg')}}" alt=""></span> <span
                            class="account-summary pr-lg-4 d-none d-lg-block"><span class="account-name">@guest
                                @else
                                    {{ Auth::user()->name }}
                                @endguest</span> </span></button> <!-- .dropdown-menu -->
                    <div class="dropdown-menu">
                        <div class="dropdown-arrow d-lg-none" x-arrow=""></div>
                        <div class="dropdown-arrow ml-3 d-none d-lg-block"></div>
                        <h6 class="dropdown-header d-none d-md-block d-lg-none">
                            @guest
                            @else
                                {{ Auth::user()->name }}
                            @endguest </h6><a class="dropdown-item" href="{{ route('profile.edit')}}"><span
                                class="dropdown-icon oi oi-person"></span> Profile</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="dropdown-item" type="submit"><span
                                    class="dropdown-icon oi oi-account-logout"></span> Logout
                            </button>
                        </form>

                    </div><!-- /.dropdown-menu -->
                </div><!-- /.btn-account -->
            </div><!-- /.top-bar-item -->
        </div><!-- /.top-bar-list -->
    </div><!-- /.top-bar -->
</header><!-- /.app-header -->
