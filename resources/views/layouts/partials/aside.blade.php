<aside class="app-aside app-aside-expand-md app-aside-light">
    <!-- .aside-content -->
    <div class="aside-content">
        <!-- .aside-header -->
        <header class="aside-header d-block d-md-none">
            <!-- .btn-account -->
            <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside"><span
                    class="user-avatar user-avatar-lg"><img src="assets/images/avatars/profile.jpg" alt=""></span> <span
                    class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span
                    class="account-summary"><span class="account-name">Beni Arisandi</span> <span
                        class="account-description">Marketing Manager</span></span></button> <!-- /.btn-account -->
            <!-- .dropdown-aside -->
            <div id="dropdown-aside" class="dropdown-aside collapse">
                <!-- dropdown-items -->
                <div class="pb-3">
                    <a class="dropdown-item" href="{{ route('profile.edit')}}"><span
                            class="dropdown-icon oi oi-person"></span> Profile</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="dropdown-item" type="submit"><span
                                class="dropdown-icon oi oi-account-logout"></span> Logout
                        </button>
                    </form>
                </div><!-- /dropdown-items -->
            </div><!-- /.dropdown-aside -->
        </header><!-- /.aside-header -->
        <!-- .aside-menu -->
        <div class="aside-menu overflow-hidden">
            <!-- .stacked-menu -->
            <nav id="stacked-menu" class="stacked-menu">
                <!-- .menu -->
                <ul class="menu">
                    <!-- .menu-item -->
                    <li class="menu-item {{ Request::is('dashboard') ? 'has-active' : ''}} ">
                        <a href="{{ route('dashboard')}}" class="menu-link "><span class="menu-icon fas fa-home"></span>
                            <span class="menu-text">Dashboard</span></a>
                    </li><!-- /.menu-item -->
                    <li class="menu-item  {{ Request::is('set-version') ? 'has-active' : ''}}">
                        <a href="{{ route('set-version')}}" class="menu-link"><span
                                class="menu-icon fas fa-cogs"></span> <span class="menu-text">Setting</span></a>
                    </li><!-- /.menu-item -->
                    <li class="menu-item  {{ Request::is('view-report') ? 'has-active' : ''}}">
                        <a href="{{ route('report-view')}}" class="menu-link"><span
                                class="menu-icon fas fa-file"></span> <span class="menu-text">Report</span></a>
                    </li><!-- /.menu-item -->
                    <li class="menu-item  {{ Request::is('payment-report') ? 'has-active' : ''}}">
                        <a href="{{ route('payment-report')}}" class="menu-link"><span
                                class="menu-icon fas fa-file"></span> <span class="menu-text">Payment Report</span></a>
                    </li><!-- /.menu-item -->
                </ul><!-- /.menu -->
            </nav><!-- /.stacked-menu -->
        </div><!-- /.aside-menu -->
        <!-- Skin changer -->
        <footer class="aside-footer border-top p-2">
            <button class="btn btn-light btn-block text-primary" data-toggle="skin"><span class="d-compact-menu-none">Night mode</span>
                <i class="fas fa-moon ml-1"></i></button>
        </footer><!-- /Skin changer -->
    </div><!-- /.aside-content -->
</aside><!-- /.app-aside -->

